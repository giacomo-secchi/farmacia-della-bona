<?php
/**
 * Title: Banner - Contact Form
 * Slug: farmacia-della-bona/contact-form
 * Categories: farmacia-della-bona-patterns
 */
?>

<!-- wp:cover {"overlayColor":"secondary","isUserOverlayColor":true,"isDark":false,"sizeSlug":"large","align":"full","className":"is-style-background-2","style":{"spacing":{"margin":{"top":"0","bottom":"0"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-cover alignfull is-light is-style-background-2" style="margin-top:0;margin-bottom:0"><span aria-hidden="true" class="wp-block-cover__background has-secondary-background-color has-background-dim-100 has-background-dim"></span><div class="wp-block-cover__inner-container"><!-- wp:columns {"verticalAlignment":"center","align":"wide"} -->
<div class="wp-block-columns alignwide are-vertically-aligned-center"><!-- wp:column {"verticalAlignment":"center"} -->
<div class="wp-block-column is-vertically-aligned-center"><!-- wp:heading {"style":{"typography":{"fontSize":"48px"}}} -->
<h2 class="wp-block-heading" style="font-size:48px">Come Possiamo Aiutarti?</h2>
<!-- /wp:heading -->

<!-- wp:jetpack/contact-info -->
<div class="wp-block-jetpack-contact-info"><!-- wp:jetpack/address {"address":"Via Vignolese 1257","addressLine2":"Località San Damaso","city":"Modena","postal":"41121","linkToGoogleMaps":true} -->
<div class="wp-block-jetpack-address"><a href="https://www.google.com/maps/search/Via+Vignolese 1257,Località San Damaso,+Modena,+41121" target="_blank" rel="noopener noreferrer" title="Apri l'indirizzo su Google Maps"><div class="jetpack-address__address jetpack-address__address1">Via Vignolese 1257</div><div class="jetpack-address__address jetpack-address__address2">Località San Damaso</div><div><span class="jetpack-address__city">Modena</span>, <span class="jetpack-address__region"></span> <span class="jetpack-address__postal">41121</span></div></a></div>
<!-- /wp:jetpack/address -->

<!-- wp:jetpack/email {"email":"info@farmaciadellabona.com"} -->
<div class="wp-block-jetpack-email"><a href="mailto:info@farmaciadellabona.com">info@farmaciadellabona.com</a></div>
<!-- /wp:jetpack/email -->

 
</div>
<!-- /wp:jetpack/contact-info -->




<!-- wp:group {"layout":{"type":"flex","flexWrap":"nowrap"}} --><div class="wp-block-group">
<!-- wp:image {"width":"16px","height":"16px","scale":"cover","sizeSlug":"large"} -->
<figure class="wp-block-image size-large is-resized"><img src="data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='16' height='16' fill='currentColor' class='bi bi-printer' viewBox='0 0 16 16'%3E%3Cpath d='M2.5 8a.5.5 0 1 0 0-1 .5.5 0 0 0 0 1'/%3E%3Cpath d='M5 1a2 2 0 0 0-2 2v2H2a2 2 0 0 0-2 2v3a2 2 0 0 0 2 2h1v1a2 2 0 0 0 2 2h6a2 2 0 0 0 2-2v-1h1a2 2 0 0 0 2-2V7a2 2 0 0 0-2-2h-1V3a2 2 0 0 0-2-2zM4 3a1 1 0 0 1 1-1h6a1 1 0 0 1 1 1v2H4zm1 5a2 2 0 0 0-2 2v1H2a1 1 0 0 1-1-1V7a1 1 0 0 1 1-1h12a1 1 0 0 1 1 1v3a1 1 0 0 1-1 1h-1v-1a2 2 0 0 0-2-2zm7 2v3a1 1 0 0 1-1 1H5a1 1 0 0 1-1-1v-3a1 1 0 0 1 1-1h6a1 1 0 0 1 1 1'/%3E%3C/svg%3E" alt="" style="object-fit:cover;width:16px;height:16px"/></figure>
<!-- /wp:image -->

<!-- wp:jetpack/contact-info -->
<div class="wp-block-jetpack-contact-info">
	<!-- wp:jetpack/phone {"phone":"34333"} -->
	<div class="wp-block-jetpack-phone"><a href="tel:34333">34333</a></div>
	<!-- /wp:jetpack/phone -->
</div>
<!-- /wp:jetpack/contact-info --></div>
<!-- /wp:group -->






<!-- wp:jetpack/map -->
<div class="wp-block-jetpack-map" data-map-style="default" data-map-details="true" data-points="[]" data-zoom="13" data-map-center="{&quot;longitude&quot;:-122.41941550000001,&quot;latitude&quot;:37.7749295}" data-marker-color="red" data-show-fullscreen-button="true"></div>
<!-- /wp:jetpack/map --></div>
<!-- /wp:column -->

<!-- wp:column {"verticalAlignment":"center","className":"is-style-card"} -->
<div class="wp-block-column is-vertically-aligned-center is-style-card"><!-- wp:heading -->
<h2 class="wp-block-heading">Come possiamo aiutarti?</h2>
<!-- /wp:heading -->

<!-- wp:jetpack/contact-form {"confirmationType":"text","jetpackCRM":false,"variationName":"default","salesforceData":{"organizationId":"","sendToSalesforce":false},"mailpoet":{"listId":null,"listName":null,"enabledForForm":false}} -->
<div class="wp-block-jetpack-contact-form"><!-- wp:jetpack/field-name {"required":true} -->
<div><!-- wp:jetpack/label {"label":"Nome"} /-->

<!-- wp:jetpack/input /--></div>
<!-- /wp:jetpack/field-name -->

<!-- wp:jetpack/field-email {"required":true} -->
<div><!-- wp:jetpack/label {"label":"Email"} /-->

<!-- wp:jetpack/input /--></div>
<!-- /wp:jetpack/field-email -->

<!-- wp:jetpack/field-telephone {"required":true,"showCountrySelector":true,"default":"US"} -->
<div><!-- wp:jetpack/label {"label":"Numero di telefono"} /-->

<!-- wp:jetpack/phone-input /--></div>
<!-- /wp:jetpack/field-telephone -->

<!-- wp:jetpack/field-textarea -->
<div><!-- wp:jetpack/label {"label":"Messaggio"} /-->

<!-- wp:jetpack/input {"type":"textarea"} /--></div>
<!-- /wp:jetpack/field-textarea -->

<!-- wp:jetpack/button {"element":"button","text":"Contattaci","lock":{"remove":true}} /--></div>
<!-- /wp:jetpack/contact-form --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div></div>
<!-- /wp:cover -->