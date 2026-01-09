<?php

add_action( 'init', function() {
    register_block_style( 'core/cover', [
        'name'  => 'background-1',
        'label' => 'Background 1',
        'inline_style' => '.is-style-background-1 .wp-block-cover__background { 
            background-image: url( "' . get_theme_file_uri( 'assets/images/background-1.svg' ) . '" );
            background-position: center;
        }'
    ] );

    register_block_style( 'core/cover', [
        'name'  => 'background-2',
        'label' => 'Background 2',
        'inline_style' => '.is-style-background-2 .wp-block-cover__background { 
            background-image: url( "' . get_theme_file_uri( 'assets/images/background-2.svg' ) . '" );
            background-position: center;
        }'
    ] );
} );
 