<?php



/**
 * Register theme pattern categories.
 */
add_action( 'init', function () {
    register_block_pattern_category(
        'farmacia-della-bona-patterns',
        array( 'label' => __( 'Farmacia Della Bona Theme Patterns', 'farmacia-della-bona' ) )
    );
} );


