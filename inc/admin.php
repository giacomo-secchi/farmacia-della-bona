<?php


// Aggiunge la colonna alla lista dei servizi.
add_filter( 'manage_service_posts_columns', function( $columns ) {
    $columns['menu_order'] = __( 'Order', 'farmacia-della-bona' );
    return $columns;
});

// Popola la colonna con il valore del menu_order.
add_action( 'manage_service_posts_custom_column', function( $column, $post_id ) {
    if ( $column === 'menu_order' ) {
        $order = get_post( $post_id )->menu_order;
        echo esc_html( $order );
    }
}, 10, 2 );

// Rende la colonna ordinabile al clic sull'intestazione.
add_filter( 'manage_edit-service_sortable_columns', function( $columns ) {
    $columns['menu_order'] = 'menu_order';
    return $columns;
} );
