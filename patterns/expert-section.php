<?php
/**
 * Title: Expert Section
 * Slug: farmacia-della-bona/expert-section
 * Categories: farmacia-della-bona-patterns
 */
?>

<!-- wp:group {"className":"is-style-section-1","align":"full","layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull is-style-section-1">

<!-- wp:term-description {"textAlign":"center"} /-->
<!-- wp:term-name {"textAlign":"center","level":2} /-->


<!-- wp:columns {"align":"wide"} -->
<div class="wp-block-columns alignwide"><!-- wp:column {"width":"25%"} -->
<div class="wp-block-column" style="flex-basis:25%"><!-- wp:query {"queryId":7,"query":{"postType":"team_member","perPage":1,"inherit":false},"namespace":"staff-highlight-query"} -->
<div class="wp-block-query"><!-- wp:post-template {"layout":{"type":"default","columnCount":3}} -->
<!-- wp:group {"className":"is-style-card","layout":{"type":"constrained"}} -->
<div class="wp-block-group is-style-card"><!-- wp:post-featured-image {"width":"100%","align":"center"} /-->

<!-- wp:group {"style":{"typography":{"fontStyle":"normal","fontWeight":"700"},"spacing":{"blockGap":"0px"}},"layout":{"type":"flex","flexWrap":"nowrap"}} -->
<div class="wp-block-group" style="font-weight:700"><!-- wp:paragraph -->
<p>Esperto di&nbsp;</p>
<!-- /wp:paragraph -->
<!-- wp:term-name {"textAlign":"center"} /--></div>
<!-- /wp:group -->

<!-- wp:post-title {"textAlign":"left","level":3,"fontSize":"x-small","className":"expert-name"} /-->

<!-- wp:post-content /--></div>
<!-- /wp:group -->
<!-- /wp:post-template --></div>
<!-- /wp:query --></div>
<!-- /wp:column -->

<!-- wp:column {"width":""} -->
<div class="wp-block-column"><!-- wp:group {"layout":{"type":"flex","flexWrap":"nowrap"}} -->
<div class="wp-block-group"><!-- wp:query {"queryId":8,"query":{"postType":"event","perPage":2,"inherit":false},"namespace":"event-highlight-query"} -->
<div class="wp-block-query"><!-- wp:post-template {"layout":{"type":"default","columnCount":3}} -->
<!-- wp:group {"className":"is-style-card","layout":{"type":"constrained"}} -->
<div class="wp-block-group is-style-card"><!-- wp:post-featured-image {"width":"80px","height":"80px","align":"center"} /-->

<!-- wp:post-title {"textAlign":"center"} /-->

<!-- wp:post-content /--></div>
<!-- /wp:group -->
<!-- /wp:post-template --></div>
<!-- /wp:query -->

<!-- wp:query {"queryId":9,"query":{"postType":"post","perPage":2,"inherit":false},"namespace":"post-highlight-query"} -->
<div class="wp-block-query"><!-- wp:post-template {"layout":{"type":"grid","columnCount":2}} -->
<!-- wp:group {"className":"is-style-card-full-bleed","layout":{"type":"constrained"}} -->
<div class="wp-block-group is-style-card-full-bleed"><!-- wp:post-featured-image {"aspectRatio":"auto","width":"100%","height":"180px","scale":"cover"} /-->

<!-- wp:post-title /-->

<!-- wp:post-author-name {"isLink":true} /-->

<!-- wp:post-excerpt {"moreText":"Leggi l'articolo","excerptLength":33} /--></div>
<!-- /wp:group -->
<!-- /wp:post-template --></div>
<!-- /wp:query --></div>
<!-- /wp:group --></div>
<!-- /wp:column --></div>
<!-- /wp:columns -->



 

</div>
<!-- /wp:group -->
