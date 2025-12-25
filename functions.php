<?php


// Here we call our function on init.
add_action( 'init', function () {
    /**
     * We register our block's with WordPress's handy
     * register_block_type();
     *
     * @link https://developer.wordpress.org/reference/functions/register_block_type/
     */
    register_block_type( __DIR__ . '/blocks/hero' );
    register_block_type( __DIR__ . '/blocks/hero-content' );
} );


/**
 * Register theme pattern categories.
 */
add_action( 'init', function () {
    register_block_pattern_category(
        'farmacia-della-bona-patterns',
        array( 'label' => __( 'Farmacia Della Bona Theme Patterns', 'farmacia-della-bona' ) )
    );
} );



 

add_filter( 'get_block_type_variations', function ( $variations, $block_type ) {

	if ( 'core/query' === $block_type->name ) {
		$variations[] =  [
            'name'       => 'staff-highlight-query',
            'title'      => __( 'Membro Staff in Evidenza', 'farmacia-della-bona' ),
            'description' => __( 'Mostra il membro selezionato per questa categoria', 'farmacia-della-bona' ),
            'isActive'   => [ 'namespace' ],
            'attributes' => [
                'namespace' => 'staff-highlight-query',
                'query'     => [
                    'postType' => 'team_member',
                    'perPage'  => 1,
                    'inherit'  => false,
                ],
            ],
            'scope'      => [ 'inserter' ], // Lo rende visibile nel menu dei blocchi
        ];
	}

	return $variations;
}, 10, 2 );



add_filter( 'query_loop_block_query_vars', function( $query_vars, $block ) {
    var_dump($block);
    if ( ! isset( $block->attributes['namespace'] ) || 'staff-highlight-query' !== $block->attributes['namespace'] ) {        return $query_vars;
        return $query_vars;
    }
   
    if ( ! is_tax('reparto') ) {
        return $query_vars;
    }

    $term_id = get_queried_object_id();


    // Recupera l'ID dello staff selezionato nel campo ACF
    $selected_staff_id = get_field( 'department_manager', 'term_' . $term_id );
    if ( $selected_staff_id ) {
        $query_vars['post__in'] = [(int)$selected_staff_id];
        $query_vars['post_type'] = 'team_member';
        $query_vars['posts_per_page'] = 1;

    }
 
    return $query_vars;
}, 10, 2 );
