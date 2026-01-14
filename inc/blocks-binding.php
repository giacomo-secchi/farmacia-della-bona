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

 
    register_block_bindings_source( 'farmacia-della-bona/event-date', [
        'label'              => __( 'Logica Data Eventi', 'text-domain'),
        'get_value_callback' => function( $source_args, $block_instance ) {
            $post_id = $block_instance->context['postId'];

            $event_date_raw = get_post_meta( $post_id, 'event_date', true );

            if ( ! $event_date_raw ) {
                return '';
            }

            $timestamp = strtotime( $event_date_raw );
            
            if ( ! $timestamp ) {
                return $event_date_raw;
            }

            $event_date = new DateTime();
            $event_date->setTimestamp( $timestamp );
            $event_date->setTime( 0, 0, 0 );

            $today = new DateTime( 'today' );

       
            if ($event_date && $event_date < $today ) {
                return __( 'Evento già passato', 'farmacia-della-bona' );
            }

            return sprintf(
                /* translators: %s: data dell'evento formattata */
                __( 'Data evento: %s', 'farmacia-della-bona' ),
                $event_date->format( 'd F Y' )
            );
         },
        'uses_context' => ['postId'],
    ] );

} );
