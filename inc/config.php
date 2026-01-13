<?php



add_filter( 'farmacia_della_bona_blocks_locations', function( $locations ) {
    $locations[] = get_stylesheet_directory() . '/build';
    return $locations;
} );

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
                        'postType' => 'event',
                        'perPage'  => 2,
                        'inherit'  => false, 
                    ],
                    'callback'  => 'farmaciadellabona_filter_events_query'
                ],
                'scope'      => [ 'inserter' ], // Lo rende visibile nel menu dei blocchi.
            ],
            [
                'name'       => 'post-highlight-query',
                'title'      => __( 'Articoli in Evidenza', 'farmacia-della-bona' ),
                'description' => __( 'Mostra gli articoli selezionati per questa categoria', 'farmacia-della-bona' ),
                'isActive'   => [ 'namespace' ],
                'attributes' => [
                    'namespace' => 'post-highlight-query',
                    'query'     => [
                        'perPage'  => 2,
                        'inherit'  => false, 
                    ],
                    'callback'  => 'farmaciadellabona_filter_posts_query'
                ],
                'scope'      => [ 'inserter' ]
            ],
            [
                'name'       => 'service-category-query',
                'title'      => __( 'Servizi della Categoria Corrente', 'farmacia-della-bona' ),
                'description' => __( 'Filtra i servizi in base alla categoria visualizzata', 'farmacia-della-bona' ),
                'isActive'   => [ 'namespace' ],
                'attributes' => [
                    'namespace' => 'service-category-query',
                    'query'     => [
                        'postType' => 'service',
                        'perPage'  => 6,
                        'inherit'  => false, 
                    ],
                    'callback'  => 'farmaciadellabona_filter_services_by_current_cat'
                ],
                'scope'      => [ 'inserter' ],
            ],
        ],
        'core/cover' => [
            [
                'name'      => 'service-section',
                'title'     => __( 'Sezione Servizi del Reparto', 'farmacia-della-bona' ),
                'description' => __( 'Visualizza servizi disponibili per il Reparto', 'farmacia-della-bona' ),
                'isActive'   => [ 'namespace' ],
                'attributes' => [
                    'namespace'     => 'service-section',
                    'acf_fields'    => [
                        'section_department_service_image'
                    ],

                ],
            ],
            [
                'name'      => 'hero',
                'title'     => __( 'Hero Reparto', 'farmacia-della-bona' ),
                'description' => __( 'Visualizza i dati inseriti per Reparto', 'farmacia-della-bona' ),
                'isActive'   => [ 'namespace' ],
                'attributes' => [
                    'namespace'     => 'hero',
                    'align'         => 'full',
                    'dimRatio'      => 50,
                    'style'      => [
                        'spacing' => [
                            'margin' => [
                                'top'    => '0px',
                                'bottom' => '0px',
                            ],
                            'padding' => [
                                'top'    => 'var:preset|spacing|80',
                                'left'    => 'var:preset|spacing|80',
                                'bottom' => 'var:preset|spacing|80',
                                'right' => 'var:preset|spacing|80',
                            ],
                        ],
                    ],
                    'url'           => 'hero_image',
                    'acf_fields'    => [
                        'hero_image',
                        'hero_content',
                        'hero_title',
                        'hero_subtitle',
                        'hero_list',
                        'hero_list_item',
                        'hero_button_link',
                        'hero_button_text',
                        'hero_product_id',
                        'hero_overlay_color_palette'
                    ],
                ],
                'innerBlocks' => [
                    [
                        'name' => 'core/heading',
                        'attributes' => [
                            'level'   => 2,
                            'content' => 'hero_title',
                        ],
                    ],
                    [
                        'name' => 'core/paragraph',
                        'attributes' => [
                            'content' => 'hero_content'
                        ],
                    ],
                    [
                        'name' => 'core/paragraph',
                        'attributes' => [
                            'content' => 'hero_subtitle'
                        ],
                    ],
                    [
                        'name' => 'core/buttons',
                        'attributes' => [
                            'layout' => [
                                'type' => 'flex',
                                'justifyContent' => 'center',
                            ],
                        ],
                        'innerBlocks' => [
                            [
                                'name' => 'core/button',
                                'attributes' => [
                                    'text' => 'hero_button_text',
                                    'url'  => 'hero_button_link',
                                ],
                            ],
                        ],
                    ],
                ],
                'scope'      => [ 'inserter' ],
            ]
        ]
        
    ];

    return $config;
} );





// Logica per lo Staff
function farmaciadellabona_filter_staff_query( $query, $block ) {

    if ( is_tax( 'department' ) ) {
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
   
    $query['post_type'] = 'event';
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

// Logica per gli Eventi
function farmaciadellabona_filter_posts_query( $query, $block ) {

 
    $current_cat_id = get_queried_object_id();

    $query['tax_query'] = [[
        'taxonomy' => 'department',
        'field'    => 'term_id',
        'terms'    => $current_cat_id,
    ]];

    return $query;
    
}

function farmaciadellabona_filter_services_by_current_cat( $query, $block ) {
 
    $current_cat_id = get_queried_object_id();
    $query['post_type'] = 'service';
    // $query['orderby'] = 'menu_order';
    // $query['order']   = 'ASC';
    
    if ( empty( $current_cat_id ) ) {
        return $query;
    }

    $query['tax_query'] = [[
        'taxonomy' => 'department',
        'field'    => 'term_id',
        'terms'    => $current_cat_id,
    ]];

    return $query;   
}