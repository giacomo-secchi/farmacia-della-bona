<?php
/**
 * Hero Banner Block template.
 *
 * @param array $block The block settings and attributes.
 */

// Load values and assign defaults.

$term = get_queried_object();
$hero_title = get_field( 'hero_title', $term );
$hero_subtitle = get_field( 'hero_subtitle', $term );
$hero_button_link = get_field( 'hero_button_link', $term );
$hero_link_text = get_field( 'hero_link_text', $term );
$hero_content = get_field( 'hero_content', $term );
$hero_image = get_field( 'hero_image', $term );
$hero_color = get_field( 'hero_color', $term );
$hero_list = get_field( 'hero_list', $term );



 
if ( empty( $term ) ) {
    $hero_title = get_field( 'hero_title', 'option' );
    $hero_subtitle = get_field( 'hero_subtitle', 'option' );
    $hero_button_link = get_field( 'hero_button_link', 'option' );
    $hero_link_text = get_field( 'hero_link_text', 'option' );
    $hero_content = get_field( 'hero_content', 'option' );
    $hero_image = get_field( 'hero_image', 'option' );
    $hero_color = get_field( 'hero_color', 'option' );
    $hero_list = get_field( 'hero_list', 'option' );

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
	<h2><?php echo esc_html( $hero_title ); ?></h2>
    <p><?php echo esc_html( $hero_subtitle ); ?></p>
    <p><?php echo esc_html( $hero_content ); ?></p>
    <a href="<?php echo esc_url( $hero_button_link ); ?>" class="btn btn-primary"><?php echo esc_html( $hero_link_text ); ?></a>
<?php endif; ?>

 
   