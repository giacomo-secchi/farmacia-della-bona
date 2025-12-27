<?php


add_filter( 'farmaciadellabona_block_variations_config', function ( $config ) {
    
    // Aggiungiamo le varianti per il blocco Query
    $config = [
        'core/query' => [
            [
                'name'      => 'staff-highlight-query',
                'title'     => __( 'Membro Staff in Evidenza', 'farmacia-della-bona' ),
                'description' => __( 'Mostra il membro selezionato per questa categoria', 'farmacia-della-bona' ),
                'isActive'   => [ 'namespace' ],
                'attributes' => [
                    'namespace' => 'staff-highlight-query',
                    'query'     => [
                        'postType' => 'team_member',
                        'perPage'  => 1,
                        'inherit'  => false, 
                    ],
                    'callback'  => 'farmaciadellabona_filter_staff_query'
                ],
                'scope'      => [ 'inserter' ],
            ],
            [
                'name'       => 'event-highlight-query',
                'title'      => __( 'Evento in Evidenza', 'farmacia-della-bona' ),
                'description' => __( 'Mostra l\'evento selezionato per questa categoria', 'farmacia-della-bona' ),
                'isActive'   => [ 'namespace' ],
                'attributes' => [
                    'namespace' => 'event-highlight-query',
                    'query'     => [
                        'postType' => 'evento',
                        'perPage'  => 2,
                        'inherit'  => false, 
                    ],
                    'callback'  => 'farmaciadellabona_filter_events_query'
                ],
                'scope'      => [ 'inserter' ], // Lo rende visibile nel menu dei blocchi.
            ]
        ],
        
    ];

    return $config;
} );


// Logica per lo Staff
function farmaciadellabona_filter_staff_query( $query, $block ) {

    if ( is_tax( 'reparto' ) ) {
        $term_id = get_queried_object_id();

        // Recupera l'ID dello staff selezionato nel campo ACF.
        $staff_id = get_field( 'department_manager', 'term_' . $term_id );
        
       
        if ( $staff_id ) {
            $query['post__in'] = [ (int) $staff_id ];
            $query['posts_per_page'] = 1;
            $query['post_type'] = 'team_member';
            // unset( $query['tax_query'] );
        }           
    }
    return $query;
}

// Logica per gli Eventi
function farmaciadellabona_filter_events_query( $query, $block ) {
   
    $query['post_type'] = 'evento';
    $query['meta_query'] = [[
        'key'     => 'event_date',
        'value'   => date('Ymd'),
        'compare' => '>=',
        'type'    => 'DATE',
    ]];

    /**
     * Order by the event date so the nearest event appears first.
     */
    $query['meta_key'] = 'event_date';
    $query['orderby']  = 'meta_value_num';
    $query['order']    = 'ASC';
    return $query;
}

