<?php
/**
 * Title: Services Banner
 * Slug: farmacia-della-bona/services-section
 * Categories: farmacia-della-bona-patterns
 */
?>



<!-- wp:cover {"url":"section_department_service_image","dimRatio":50,"isDark":false,"namespace":"service-section","className":"is-style-section-2","align":"full"} -->
<div class="wp-block-cover alignfull is-light is-style-section-2"><img class="wp-block-cover__image-background" alt="" src="section_department_service_image" data-object-fit="cover"/><span aria-hidden="true" class="wp-block-cover__background has-background-dim"></span><div class="wp-block-cover__inner-container">
    <!-- wp:paragraph {"align":"center"} -->
<p class="has-text-align-center">Servizi Disponibili.</p>
<!-- /wp:paragraph -->

<!-- wp:heading {"textAlign":"center"} -->
<h2 class="wp-block-heading has-text-align-center">I Nostri Servizi</h2>
<!-- /wp:heading -->


<!-- wp:query {"queryId":9,"query":{"postType":"post","perPage":2,"sticky":"only","inherit":false},"namespace":"post-highlight-query"} -->
<div class="wp-block-query"><!-- wp:post-template {"layout":{"type":"grid","columnCount":2}} -->
<!-- wp:group {"className":"is-style-card-full-bleed","layout":{"type":"constrained"}} -->
<div class="wp-block-group is-style-card-full-bleed"><!-- wp:post-featured-image {"aspectRatio":"auto","width":"100%","height":"180px","scale":"cover"} /-->

<!-- wp:post-title /-->

<!-- wp:post-author-name {"isLink":true} /-->

<!-- wp:post-excerpt {"moreText":"Leggi l'articolo","excerptLength":33} /--></div>
<!-- /wp:group -->
<!-- /wp:post-template --></div>
<!-- /wp:query -->



 
<!-- wp:query {"query":{"postType":"service","perPage":10,"inherit":false},"namespace":"service-category-query","className":"alignwide"} -->
<div class="wp-block-query alignwide"><!-- wp:post-template {"layout":{"type":"grid","columnCount":3}} -->
    <!-- wp:group {"className":"is-style-card","layout":{"type":"constrained"}} -->
    <div class="wp-block-group is-style-card">
        
        <!-- wp:post-featured-image {"width":"80px","height":"80px","align":"center"} /-->

        <!-- wp:post-title {"textAlign":"center"} /-->
        
        <!-- wp:post-content /--></div>
    <!-- /wp:group -->
    <!-- /wp:post-template -->
</div>
<!-- /wp:query -->



<!-- wp:buttons {"align":"wide","layout":{"type":"flex","justifyContent":"right"}} -->
<div class="wp-block-buttons alignwide"><!-- wp:button -->
<div class="wp-block-button"><a class="wp-block-button__link wp-element-button" href="<?php echo esc_url( get_post_type_archive_link( 'service' ) ); ?>"><?php esc_html_e( 'Vedi Tutti i Servizi →', 'farmacia-della-bona' ); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons -->


</div></div>
<!-- /wp:cover -->















 