<?php
/**
 * Title: Header - custom site logo
 * Slug: farmacia-della-bona/header-site-logo
 * Categories: header
 * Block Types: core/template-part/header
 */
?>
<!-- wp:group {"metadata":{"name":"Header"},"align":"full","style":{"spacing":{"margin":{"top":"0px"},"padding":{"top":"var:preset|spacing|30","bottom":"var:preset|spacing|30"}}},"backgroundColor":"base","layout":{"inherit":true,"type":"constrained"}} -->
<div class="wp-block-group alignfull has-base-background-color has-background" style="margin-top:0px;padding-top:var(--wp--preset--spacing--30);padding-bottom:var(--wp--preset--spacing--30)"><!-- wp:group {"align":"wide","layout":{"type":"flex","justifyContent":"left"}} -->
<div class="wp-block-group alignwide"><!-- wp:group {"style":{"spacing":{"blockGap":"10px"},"layout":{"selfStretch":"fixed","flexSize":"200px"}},"layout":{"type":"flex","flexWrap":"nowrap"}} -->
<div class="wp-block-group">
		<!-- wp:image {"align":"center","width":140,"height":71,"sizeSlug":"full","linkDestination":"custom"} -->
		<figure class="wp-block-image aligncenter size-full is-resized"><a href="/"><img src="<?php echo esc_url( get_stylesheet_directory_uri() ) . '/assets/images/site-logo.svg'; ?>" alt="Farmacia Della Bona logo" width="140" height="71"/></a></figure>
		<!-- /wp:image -->
    </div>
<!-- /wp:group -->

<!-- wp:terms-query {"termQuery":{"perPage":10,"taxonomy":"reparto","order":"asc","orderBy":"name","include":[],"hideEmpty":false,"showNested":false,"inherit":false}} -->
<div class="wp-block-terms-query"><!-- wp:term-template {"style":{"typography":{"textDecoration":"none","textTransform":"uppercase","fontStyle":"normal","fontWeight":"600"}},"fontSize":"x-small","layout":{"type":"grid","columnCount":3,"minimumColumnWidth":null}} -->
<!-- wp:term-name {"textAlign":"center","isLink":true,"style":{"typography":{"textDecoration":"none"}}} /-->
<!-- /wp:term-template --></div>
<!-- /wp:terms-query -->

<!-- wp:navigation {"ref":7,"textColor":"primary","style":{"typography":{"textTransform":"uppercase","fontStyle":"normal","fontWeight":"700"}},"fontSize":"x-small","layout":{"type":"flex","setCascadingProperties":true}} /--></div>
<!-- /wp:group --></div>
<!-- /wp:group -->