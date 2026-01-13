<?php

add_action( 'init', function() {
    register_block_bindings_source( 'farmacia-delle-bona/service-meta', array(
        'label'              => __( 'Dettagli Servizio', 'personal-website' ),
        'get_value_callback' => function( $source_args, $block_instance, $post_id ) {
            $post_id = isset( $block_instance->context['postId'] ) ? $block_instance->context['postId'] : null;

            if ( ! $post_id ) {
                return ''; 
            }

            $is_paid = get_field( 'service_type', $block_instance->context['postId'] );

            if ( $is_paid ) {
                return __( 'Servizio a pagamento', 'farmacia-della-bona' );
            }

            return  __( 'Servizio gratuito', 'farmacia-della-bona' );
        }
    ) );
} );
