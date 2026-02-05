<?php
/**
 * PHP file to use when rendering the block type on the server to show on the front end.
 *
 * The following variables are exposed to the file:
 *     $attributes (array): The block attributes.
 *     $content (string): The block default content.
 *     $block (WP_Block): The block instance.
 *
 * @see https://github.com/WordPress/gutenberg/blob/trunk/docs/reference-guides/block-api/block-metadata.md#render
 */
?>


<?php
 
$queried_object = get_queried_object();

// Controlliamo se l'oggetto esiste ed è effettivamente una tassonomia
if ( $queried_object instanceof WP_Term ) {
    $selector = 'term_' . $queried_object->term_id;
} else {
    // Fallback per Home Page e altre pagine non-tassonomia
    $selector = 'option';
}
 
$fields = get_fields( $selector );

// 3. Ora puoi estrarre le variabili o usarle direttamente dall'array
// Usiamo l'operatore Null Coalesce (??) per evitare errori se il campo è vuoto
$hero_title			= $fields['hero_title'] ?? '';
$hero_subtitle		= $fields['hero_subtitle'] ?? '';
$hero_button_text	= $fields['hero_button_text'] ?? '';
$hero_button_link	= $fields['hero_button_link'] ?? '';
$hero_content		= $fields['hero_content'] ?? '';
$hero_image			= $fields['hero_image'] ?? '';
$hero_list 			= $fields['hero_list'] ?? [];
$hero_product_id	= $fields['hero_product_id'] ?? '';
$hero_overlay_color_palette = $fields['hero_overlay_color_palette'] ?? '';
 
$list_items_html = '';

 

 
if ( ! empty( $hero_list ) ) {
    foreach ( $hero_list as $item ) {
        // Puliamo il testo per sicurezza
        $text = esc_html( $item['hero_list_item'] );

        // Costruiamo il blocco list-item completo
        $list_items_html .= <<<HTML
		<!-- wp:list-item -->
		<li>{$text}</li>
		<!-- /wp:list-item -->
HTML;
    }
}

$content = <<<HTML

 

	<!-- wp:cover {"url":"{$hero_image['url']}","dimRatio":70,"overlayColor":"{$hero_overlay_color_palette}","minHeight":65,"minHeightUnit":"vh","isUserOverlayColor":true,"isDark":true,"namespace":"hero","align":"full","className":"is-style-background-2","style":{"spacing":{"margin":{"top":"0","bottom":"0"},"padding":{"top":"var:preset|spacing|80","bottom":"var:preset|spacing|80"}}},"layout":{"type":"constrained"}} -->
	<div class="wp-block-cover alignfull is-dark is-style-background-2" style="min-height:65vh;margin-top:0;margin-bottom:0;padding-top:var(--wp--preset--spacing--80);padding-bottom:var(--wp--preset--spacing--80)"><img class="wp-block-cover__image-background" alt="" src="{$hero_image['url']}" data-object-fit="cover"/><span aria-hidden="true" class="wp-block-cover__background has-{$hero_overlay_color_palette}-background-color has-background-dim-70 has-background-dim"></span><div class="wp-block-cover__inner-container"><!-- wp:columns {"verticalAlignment":"center","align":"wide","powderMotion":true,"powderMotionEffect":"fadeInUp","powderDuration":1,"powderMotionDistance":"60"} -->
	<div class="wp-block-columns alignwide are-vertically-aligned-center" data-motion="fadeInUp" data-duration="1" data-distance="60"><!-- wp:column {"verticalAlignment":"center","layout":{"type":"constrained","justifyContent":"right"}} -->
	<div class="wp-block-column is-vertically-aligned-center"><!-- wp:heading {"style":{"typography":{"fontSize":"48px"}}} -->
	<h2 class="wp-block-heading" style="font-size:48px">{$hero_title}</h2>
	<!-- /wp:heading -->

	<!-- wp:paragraph -->
	<p>{$hero_subtitle}</p>
	<!-- /wp:paragraph -->


	<!-- wp:paragraph -->
	<p>{$hero_content}</p>
	<!-- /wp:paragraph -->


	<!-- wp:list {"className":"is-style-no-style","fontSize":"large"} -->
	<ul class="wp-block-list is-style-no-style has-large-font-size">
	 {$list_items_html}</ul>
	<!-- /wp:list -->

	<!-- wp:buttons {"layout":{"type":"flex","justifyContent":"left"}} -->
	<div class="wp-block-buttons"><!-- wp:button -->
	<div class="wp-block-button"><a class="wp-block-button__link wp-element-button" href="{$hero_button_link}">{$hero_button_text}</a></div>
	<!-- /wp:button --></div>
	<!-- /wp:buttons --></div>
	<!-- /wp:column -->

	<!-- wp:column {"verticalAlignment":"center","layout":{"type":"constrained","contentSize":"300px"}} -->
	<div class="wp-block-column is-vertically-aligned-center">
		<!-- wp:woocommerce/single-product {"productId":{$hero_product_id},"className":"is-style-card"} -->
		<div class="wp-block-woocommerce-single-product woocommerce is-style-card">
			<!-- wp:woocommerce/product-image {"showSaleBadge":false,"imageSizing":"thumbnail","isDescendentOfSingleProductBlock":true,"width":"100%","height":""} -->
				<!-- wp:woocommerce/product-sale-badge {"align":"right"} /-->
				<!-- /wp:woocommerce/product-image -->
			<!-- wp:post-title {"textAlign":"center","level":3,"isLink":true,"align":"center","__woocommerceNamespace":"woocommerce/product-query/product-title"} /-->
			<!-- wp:woocommerce/product-summary {"isDescendentOfSingleProductBlock":true} /-->
		</div>
		<!-- /wp:woocommerce/single-product -->
	</div>
	<!-- /wp:column --></div>
	<!-- /wp:columns --></div></div>
	<!-- /wp:cover -->
HTML;
?>
<div <?php echo get_block_wrapper_attributes(); ?>>
	<?php echo do_blocks( $content ); ?>
</div>


