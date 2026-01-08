<?php
/**
 * Block Variations Registration
 * * This file handles the formal registration of block variations and their 
 * required attributes to ensure they appear in the editor and persist data.
 */

/**
 * Register variations in the Block Editor.
 * This makes the variations selectable in the inserter.
 */
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
 * Register custom attributes for persistence.
 * This prevents WordPress from stripping our 'namespace' and 'acf_fields'
 * when the post is saved.
 */
add_filter( 'register_block_type_args', function( $args, $name ) {
    
    $config = apply_filters( 'farmaciadellabona_block_variations_config', [] );

    // Early return original arguments if the block type is not handled by our config.
    if ( ! isset( $config[ $name ] ) ) {
        return $args;
    }

    // Ensure the attributes array is initialized to avoid errors with core blocks.
    if ( ! isset( $args['attributes'] ) ) {
        $args['attributes'] = [];
    }

    // Register the 'namespace' attribute used to identify specific variations in the frontend.
    $args['attributes']['namespace'] = [
        'type'    => 'string',
        'default' => '',
    ];

    /**
     * Iterate through variations to register each ACF field slug as an attribute.
     * This ensures data persistence for placeholders used within block patterns or inner content.
     */
    foreach ( $config[ $name ] as $variation ) {
        $acf_fields = $variation['attributes']['acf_fields'] ?? [];

        foreach ( $acf_fields as $field ) {
            $args['attributes'][ $field ] = [ 
                'type'    => 'string', 
                'default' => '' 
            ];
        }
    }
 
    return $args;
}, 10, 2 );