<?php
/**
 * Hero Banner Block template.
 *
 * @param array $block The block settings and attributes.
 */

// Load values and assign defaults.

$term = get_queried_object();
$title = get_field( 'hero_title', $term );
$subtitle = get_field( 'hero_subtitle', $term );

if ( empty( $term ) ) {
    $title = get_field( 'hero_title', 'option' );
    $sub_title = get_field( 'hero_subtitle', 'option' );

} 

// $quote             = !empty(get_field( 'quote' )) ? get_field( 'quote' ) : 'Your quote here...';
// $author            = get_field( 'author' );
// $author_role       = get_field( 'role' );
// $image             = get_field( 'image' );
// $background_color  = get_field( 'background_color' ); // ACF's color picker.
// $text_color        = get_field( 'text_color' ); // ACF's color picker.
// $quote_attribution = '';

// if ( $author ) {
//     $quote_attribution .= '<footer class="testimonial__attribution">';
//     $quote_attribution .= '<cite class="testimonial__author">' . $author . '</cite>';

//     if ( $author_role ) {
//         $quote_attribution .= '<span class="testimonial__role">' . $author_role . '</span>';
//     }

//     $quote_attribution .= '</footer><!-- .testimonial__attribution -->';
// }

// // Support custom "anchor" values.
// $anchor = '';
// if ( ! empty( $block['anchor'] ) ) {
//     $anchor = 'id="' . esc_attr( $block['anchor'] ) . '" ';
// }

// // Create class attribute allowing for custom "className" and "align" values.
// $class_name = 'testimonial';
// if ( ! empty( $block['className'] ) ) {
//     $class_name .= ' ' . $block['className'];
// }
// if ( ! empty( $block['align'] ) ) {
//     $class_name .= ' align' . $block['align'];
// }
// if ( $background_color || $text_color ) {
//     $class_name .= ' has-custom-acf-color';
// }

// // Build a valid style attribute for background and text colors.
// $styles = array( 'background-color: ' . $background_color, 'color: ' . $text_color );
// $style  = implode( '; ', $styles );
?>




<?php if ( $is_preview && empty( $title ) ) : ?>
	<p>Please enter a Twitter handle.</p>
<?php else : ?>
	<?php echo esc_html( $title ); ?>   
    <?php echo esc_html( $subtitle ); ?>
<?php endif; ?>

 
   