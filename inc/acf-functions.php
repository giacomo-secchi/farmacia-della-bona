<?php
/**
 * Automatically populates ACF fields based on naming convention.
 * Example: 'hero_overlay_color_palette_default' 
 * Path generated: ['color', 'palette', 'default']
 */
add_filter( 'acf/load_field', function( $field ) {

    // Intercettiamo solo i campi con la nostra convenzione '_color_palette_'
    if ( $field['type'] !== 'select' || ! str_contains( $field['name'], '_color_palette' ) ) {
        return $field;
    }

    // Estraiamo il target (es: 'all', 'theme', 'default')
    $target = explode( '_color_palette', $field['name'] )[1];

    // Definiamo le sorgenti. Se 'all', includiamo anche 'custom' per i plugin.
    $sources = ( empty( $suffix ) ) ? ['theme', 'default', 'custom'] : [$target];

    $all_colors = [];
    foreach ( $sources as $source ) {
        $palette = wp_get_global_settings( ['color', 'palette', $source] );
        
        if ( empty( $palette ) || ! is_array( $palette ) ) {
            continue;
        }

        foreach ( $palette as $color ) {
            // Salta se manca lo slug (identificatore fondamentale)
            if ( ! isset( $color['slug'] ) ) {
                continue;
            }

            // Priorità: il primo trovato vince. 
            // In questo modo i colori del tuo theme.json (primo in $sources) 
            // non vengono sovrascritti dal core di WP.
            if ( ! isset( $all_colors[ $color['slug'] ] ) ) {
                $all_colors[ $color['slug'] ] = $color;
            }
        }
    }

    if ( empty( $all_colors ) ) {
        return $field;
    }

    // Inizializziamo le scelte (English base localization)
    $field['choices'] = [ '' => __( 'None (Transparent)', 'farmacia-della-bona' ) ];

    foreach ( $all_colors as $color ) {
        // Usiamo lo slug come valore e il nome (o lo slug come fallback) come etichetta
        $label = isset( $color['name'] ) ? $color['name'] : ucfirst( $color['slug'] );
        $field['choices'][ $color['slug'] ] = $label;
    }

    return $field;
} );