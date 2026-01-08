<?php
/**
 * Title: Header - custom site logo
 * Slug: farmacia-della-bona/header-site-logo
 * Categories: header, farmacia-della-bona-patterns
 * Block Types: core/template-part/header
 */
?>
<!-- wp:group {"metadata":{"name":"Header"},"align":"full","style":{"spacing":{"margin":{"top":"0px"},"padding":{"top":"var:preset|spacing|30","bottom":"var:preset|spacing|30"}}},"gradient":"gradient-1","layout":{"inherit":true,"type":"constrained"}} -->
<div class="wp-block-group alignfull has-gradient-1-gradient-background has-background" style="margin-top:0px;padding-top:var(--wp--preset--spacing--30);padding-bottom:var(--wp--preset--spacing--30)"><!-- wp:group {"align":"wide","layout":{"type":"flex","justifyContent":"left"}} -->
<div class="wp-block-group alignwide"><!-- wp:group {"style":{"spacing":{"blockGap":"10px"},"layout":{"selfStretch":"fixed","flexSize":"200px"}},"layout":{"type":"flex","flexWrap":"nowrap"}} -->
<div class="wp-block-group">
		<!-- wp:image {"align":"center","width":140,"height":71,"sizeSlug":"full","linkDestination":"custom"} -->
		<figure class="wp-block-image aligncenter size-full is-resized"><a href="/"><img src="<?php echo esc_url( get_stylesheet_directory_uri() ) . '/assets/images/site-logo.svg'; ?>" alt="Farmacia Della Bona logo" width="140" height="71"/></a></figure>
		<!-- /wp:image -->
    </div>
<!-- /wp:group -->

<!-- wp:terms-query {"termQuery":{"perPage":10,"taxonomy":"department","order":"asc","orderBy":"name","include":[],"hideEmpty":false,"showNested":false,"inherit":false}} -->
<div class="wp-block-terms-query"><!-- wp:term-template {"style":{"typography":{"textTransform":"uppercase","fontStyle":"normal","fontWeight":"600"}},"fontSize":"x-small","layout":{"type":"grid","columnCount":3,"minimumColumnWidth":null}} -->
<!-- wp:term-name {"textAlign":"center","isLink":true} /-->
<!-- /wp:term-template --></div>
<!-- /wp:terms-query -->

<!-- wp:navigation {"textColor":"primary","metadata":{"ignoredHookedBlocks":["woocommerce/customer-account","woocommerce/mini-cart"]},"style":{"typography":{"textTransform":"uppercase","fontStyle":"normal","fontWeight":"700"},"spacing":{"blockGap":"var:preset|spacing|50"},"layout":{"selfStretch":"fit","flexSize":null}},"fontSize":"x-small","layout":{"type":"flex","setCascadingProperties":true},"ariaLabel":"<?php esc_attr_e( 'Main menu', 'farmacia-della-bona' ); ?>"} -->
	<!-- wp:navigation-link {"label":"<?php esc_html_e( 'Servizi', 'farmacia-della-bona' ); ?>","url":"<?php echo esc_url( home_url( '/servizi/' ) ); ?>"} /-->
	<!-- wp:navigation-link {"label":"<?php esc_html_e( 'Eventi', 'farmacia-della-bona' ); ?>","url":"<?php echo esc_url( home_url( '/eventi/' ) ); ?>"} /-->
	<!-- wp:navigation-link {"label":"<?php esc_html_e( 'Chi Siamo', 'farmacia-della-bona' ); ?>","type":"page","id":71,"url":"<?php echo esc_url( home_url( '/chi-siamo/' ) ); ?>","kind":"post-type"} /-->
	<!-- wp:navigation-link {"label":"<?php esc_html_e( 'Contattaci', 'farmacia-della-bona' ); ?>","type":"page","id":75,"url":"<?php echo esc_url( home_url( '/contattaci/' ) ); ?>","kind":"post-type"} /-->
	<!-- /wp:navigation --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->



