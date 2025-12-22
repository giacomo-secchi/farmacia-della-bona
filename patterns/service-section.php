<?php
/**
 * Title: Service Section
 * Slug: farmacia-della-bona/service-section
 * Categories: 
 */
?>
<!-- wp:group {"metadata":{"patternName":"core/block/162","name":"Services Section"},"align":"full","style":{"shadow":"var:preset|shadow|inner","background":{"backgroundImage":{"url":"<?php echo esc_url( get_stylesheet_directory_uri() ); ?>/assets/images/pexels-n-voitkevich-7526061.jpg","id":156,"source":"file","title":"pexels-n-voitkevich-7526061"},"backgroundSize":"cover"},"spacing":{"padding":{"top":"var:preset|spacing|80","bottom":"var:preset|spacing|80"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull" style="padding-top:var(--wp--preset--spacing--80);padding-bottom:var(--wp--preset--spacing--80);box-shadow:var(--wp--preset--shadow--inner)"><!-- wp:group {"style":{"spacing":{"blockGap":"10px","margin":{"bottom":"var:preset|spacing|60"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group" style="margin-bottom:var(--wp--preset--spacing--60)"><!-- wp:paragraph {"align":"center","className":"is-style-default","style":{"elements":{"link":{"color":{"text":"var:preset|color|base"}}},"typography":{"textTransform":"uppercase"}},"textColor":"base"} -->
<p class="has-text-align-center is-style-default has-base-color has-text-color has-link-color" style="text-transform:uppercase">Servizi Disponibili</p>
<!-- /wp:paragraph -->

<!-- wp:heading {"textAlign":"center","style":{"typography":{"fontSize":"48px"},"elements":{"link":{"color":{"text":"var:preset|color|base"}}}},"textColor":"base"} -->
<h2 class="wp-block-heading has-text-align-center has-base-color has-text-color has-link-color" style="font-size:48px">Omeopatia</h2>
<!-- /wp:heading --></div>
<!-- /wp:group -->

<!-- wp:query {"queryId":6,"query":{"perPage":10,"pages":0,"offset":0,"postType":"servizio","order":"asc","orderBy":"title","author":"","search":"","exclude":[],"sticky":"","inherit":false,"taxQuery":{"service_cat":[28]},"parents":[],"format":[]},"className":"alignwide"} -->
<div class="wp-block-query alignwide"><!-- wp:post-template {"style":{"spacing":{"blockGap":"var:preset|spacing|40"}},"layout":{"type":"grid","columnCount":3}} -->
<!-- wp:group {"tagName":"article","style":{"spacing":{"padding":{"right":"var:preset|spacing|30","left":"var:preset|spacing|30","top":"var:preset|spacing|30","bottom":"var:preset|spacing|30"}},"border":{"radius":{"topLeft":"var:preset|border-radius|large","topRight":"var:preset|border-radius|large","bottomLeft":"var:preset|border-radius|large","bottomRight":"var:preset|border-radius|large"}}},"backgroundColor":"base","layout":{"type":"default"}} -->
<article class="wp-block-group has-base-background-color has-background" style="border-top-left-radius:var(--wp--preset--border-radius--large);border-top-right-radius:var(--wp--preset--border-radius--large);border-bottom-left-radius:var(--wp--preset--border-radius--large);border-bottom-right-radius:var(--wp--preset--border-radius--large);padding-top:var(--wp--preset--spacing--30);padding-right:var(--wp--preset--spacing--30);padding-bottom:var(--wp--preset--spacing--30);padding-left:var(--wp--preset--spacing--30)"><!-- wp:post-featured-image {"isLink":true,"aspectRatio":"1","width":"100px","height":"100px","style":{"border":{"radius":{"topLeft":"796px","topRight":"796px","bottomLeft":"796px","bottomRight":"796px"}}}} /-->

<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|20","margin":{"top":"var:preset|spacing|30"}}}} -->
<div class="wp-block-group" style="margin-top:var(--wp--preset--spacing--30)"><!-- wp:group {"tagName":"header","className":"entry-header","style":{"spacing":{"blockGap":"10px"}},"layout":{"type":"default"}} -->
<header class="wp-block-group entry-header"><!-- wp:post-title {"isLink":true,"fontSize":"large"} /-->

<!-- wp:post-content {"fontSize":"small"}  /--></header>
<!-- /wp:group --></div>
<!-- /wp:group --></article>
<!-- /wp:group -->
<!-- /wp:post-template -->

<!-- wp:group {"style":{"spacing":{"margin":{"top":"0"}}},"layout":{"type":"default"}} -->
<div class="wp-block-group" style="margin-top:0"><!-- wp:query-pagination {"layout":{"type":"flex","justifyContent":"space-between"}} -->
<!-- wp:query-pagination-previous /-->

<!-- wp:query-pagination-next /-->
<!-- /wp:query-pagination --></div>
<!-- /wp:group --></div>
<!-- /wp:query --></div>
<!-- /wp:group -->