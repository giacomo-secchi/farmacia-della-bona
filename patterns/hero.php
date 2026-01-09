<?php
/**
 * Title: Hero Banner
 * Slug: farmacia-della-bona/hero
 * Categories: hero, banner, farmacia-della-bona-patterns
 */
?>

<!-- wp:cover {"url":"hero_image","dimRatio":50,"overlayColor":"hero_overlay_color_palette","isUserOverlayColor":true,"isDark":false,"namespace":"hero","align":"full","className":"is-style-background-2","style":{"spacing":{"margin":{"top":"0","bottom":"0"},"padding":{"top":"var:preset|spacing|80","bottom":"var:preset|spacing|80"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-cover alignfull is-light is-style-background-2" style="margin-top:0;margin-bottom:0;padding-top:var(--wp--preset--spacing--80);padding-bottom:var(--wp--preset--spacing--80)"><img class="wp-block-cover__image-background" alt="" src="hero_image" data-object-fit="cover"/><span aria-hidden="true" class="wp-block-cover__background has-hero_overlay_color_palette-background-color has-background-dim"></span><div class="wp-block-cover__inner-container"><!-- wp:columns {"verticalAlignment":"center","align":"wide","powderMotion":true,"powderMotionEffect":"fadeInUp","powderDuration":1,"powderMotionDistance":"60"} -->
<div class="wp-block-columns alignwide are-vertically-aligned-center" data-motion="fadeInUp" data-duration="1" data-distance="60"><!-- wp:column {"verticalAlignment":"center","layout":{"type":"constrained","justifyContent":"right"}} -->
<div class="wp-block-column is-vertically-aligned-center"><!-- wp:heading {"style":{"typography":{"fontSize":"48px"}}} -->
<h2 class="wp-block-heading" style="font-size:48px">hero_title</h2>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p>hero_content</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph -->
<p>hero_subtitle</p>
<!-- /wp:paragraph -->

<!-- wp:list -->
<ul class="wp-block-list"><!-- wp:list-item -->
<li>hero_list_item</li>
<!-- /wp:list-item --></ul>
<!-- /wp:list -->

<!-- wp:buttons {"layout":{"type":"flex","justifyContent":"left"}} -->
<div class="wp-block-buttons"><!-- wp:button -->
<div class="wp-block-button"><a class="wp-block-button__link wp-element-button" href="hero_button_link">hero_button_text</a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:column -->

<!-- wp:column {"verticalAlignment":"center","layout":{"type":"constrained","contentSize":"300px"}} -->
<div class="wp-block-column is-vertically-aligned-center"><!-- wp:group {"className":"is-style-card","layout":{"type":"default"}} -->
<div class="wp-block-group is-style-card"><!-- wp:woocommerce/single-product {"productId":111} -->
<div class="wp-block-woocommerce-single-product woocommerce"><!-- wp:columns -->
<div class="wp-block-columns"><!-- wp:column {"width":""} -->
<div class="wp-block-column"><!-- wp:woocommerce/product-image {"showSaleBadge":false,"isDescendentOfSingleProductBlock":true} -->
<!-- wp:woocommerce/product-sale-badge {"align":"right"} /-->
<!-- /wp:woocommerce/product-image -->

<!-- wp:post-title {"textAlign":"center","level":3,"isLink":true,"align":"center","__woocommerceNamespace":"woocommerce/product-query/product-title"} /-->

<!-- wp:woocommerce/product-summary {"isDescendentOfSingleProductBlock":true} /--></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:woocommerce/single-product --></div>
<!-- /wp:group --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div></div>
<!-- /wp:cover -->