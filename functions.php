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

 