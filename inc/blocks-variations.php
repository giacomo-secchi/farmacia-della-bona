<?php

add_filter( 'get_block_type_variations', function ( $variations, $block_type ) {
    
    /**
     * Use a custom filter hook to gather block variation configurations.
     * This allows adding new variations from different files or plugins.
     */
    $config = apply_filters( 'farmaciadellabona_block_variations_config', [] );
 
    /**
     * Dynamic check: If the current block type (e.g., 'core/query') 
     * is not defined in our configuration array, return original variations.
     */
    if ( ! isset( $config[ $block_type->name ] ) ) {
        return $variations;
    }

    /**
     * Loop through each variation defined for this specific block type.
     */
    foreach ( $config[ $block_type->name ] as $v ) {
        
        /**
         * Ensure the 'namespace' attribute is set.
         * This is crucial for identifying the variation during the rendering phase
         * (e.g., inside the 'pre_render_block' or 'query_loop_block_query_vars' filters).
         * If not explicitly set, we fall back to the variation 'name'.
         */
        if ( ! isset( $v['attributes']['namespace'] ) ) {
            $v['attributes']['namespace'] = $v['name'];
        }

        /**
         * Inject the variation into the block's variations list.
         */
        $variations[] = $v;
    }

    return $variations;
}, 10, 2 );


          
/**
 * This function intercepts the block rendering process to apply custom logic based on the block's 'namespace' attribute.
 * It handles 'core/query' blocks by registering a one-time filter to modify WP_Query arguments for dynamic 
 * filtering, while for all other blocks, it executes a callback immediately to allow on-the-fly 
 * modifications of the block's HTML output or behavior.
 * It uses a centralized configuration filtered via 'farmaciadellabona_block_variations_config'.
 *
 * @param string|null $pre_render   The block HTML output. Default null.
 * @param array       $parsed_block The block being rendered, including attributes and content.
 * @return string|null              The modified block HTML or null to continue standard rendering.
 */
add_filter( 'pre_render_block', function ( $pre_render, $parsed_block ) {
    // Get the block name. If it's empty or null, return the original pre-render value.
    $block_name = $parsed_block['blockName'] ?? null;
    if ( ! $block_name ) {
        return $pre_render;
    }

    // Retrieve the centralized configuration for block variations.
    $config = apply_filters( 'farmaciadellabona_block_variations_config', [] );
    
    // Early exit if the current block type is not defined in our configuration.
    if ( ! isset( $config[ $block_name ] ) ) {
        return $pre_render;
    }
 
    // Iterate through the variations defined for this specific block type.
    foreach ( $config[ $block_name ] as $variation ) {

        // Check if the block instance's namespace matches the variation namespace defined in config.
        $current_namespace = $parsed_block['attrs']['namespace'] ?? '';
        $target_namespace  = $variation['attributes']['namespace'] ?? '';

        if ( $current_namespace !== '' && $current_namespace === $target_namespace ) {

            // Verify if the callback function is provided and is a valid callable.
            $callback = $variation['attributes']['callback'] ?? null;
            if ( ! is_callable( $callback ) ) {
                continue;
            };

            /**
             * Special handling for 'core/query' blocks.
             * These blocks fetch data later, so we hook into 'query_loop_block_query_vars'.
             */
            if ( 'core/query' === $block_name ) {

                $query_callback = function( $query, $block ) use ( &$query_callback, $callback ) {
                    /**
                     * IMPORTANT: Remove the filter immediately after execution.
                     * This prevents the logic from affecting subsequent Query Loop blocks on the same page.
                     */
                    remove_filter( 'query_loop_block_query_vars', $query_callback, 10 );
                   
                    // Execute the custom logic defined in the variation config.
                    return call_user_func( $callback, $query, $block );
                };

                add_filter( 'query_loop_block_query_vars', $query_callback, 10, 2 );
            } else {
                /**
                 * For non-query blocks, execute the callback immediately.
                 * This can be used to modify the block's HTML output ($pre_render).
                 */
                return call_user_func( $callback, $pre_render, $parsed_block );
            }

            // Stop the loop once a matching namespace is found and processed.
            break;
        }
    }

    return $pre_render;
}, 10, 2 );