<?php
/**
 * Title: Archive for the right aligned blog
 * Slug: twentytwentyfive/right-aligned-archive
 * Template Types: archive
 * Viewport width: 1400
 * Inserter: no
 *
 * @package WordPress
 * @subpackage Twenty_Twenty_Five
 * @since Twenty Twenty-Five 1.0
 */

?>
<!-- wp:columns {"isStackedOnMobile":false,"style":{"spacing":{"padding":{"right":"0","left":"0","top":"0","bottom":"0"},"blockGap":{"left":"0"}}}} -->
<div class="wp-block-columns is-not-stacked-on-mobile" style="padding-top:0;padding-right:0;padding-bottom:0;padding-left:0">
	<!-- wp:column {"width":"8rem"} -->
	<div class="wp-block-column" style="flex-basis:8rem">
		<!-- wp:group {"align":"wide","style":{"position":{"type":"sticky","top":"0px"},"spacing":{"padding":{"top":"var:preset|spacing|40","bottom":"var:preset|spacing|40","left":"var:preset|spacing|30","right":"var:preset|spacing|30"}}},"layout":{"type":"default"}} -->
		<div class="wp-block-group alignwide" style="padding-top:var(--wp--preset--spacing--40);padding-right:var(--wp--preset--spacing--30);padding-bottom:var(--wp--preset--spacing--40);padding-left:var(--wp--preset--spacing--30)">
			<!-- wp:group {"align":"wide","style":{"dimensions":{"minHeight":"100vh"},"spacing":{"padding":{"right":"var:preset|spacing|30","left":"var:preset|spacing|30"}}},"layout":{"type":"constrained","justifyContent":"center"}} -->
			<div class="wp-block-group alignwide" style="min-height:100vh;padding-right:var(--wp--preset--spacing--30);padding-left:var(--wp--preset--spacing--30)">
				<!-- wp:group {"align":"full","layout":{"type":"flex","orientation":"vertical","justifyContent":"center","verticalAlignment":"center"}} -->
				<div class="wp-block-group alignfull">
					<!-- wp:navigation {"overlayMenu":"always","style":{"spacing":{"margin":{"top":"0"},"blockGap":"var:preset|spacing|20"},"layout":{"selfStretch":"fit","flexSize":null}},"layout":{"type":"flex","justifyContent":"right","orientation":"horizontal","flexWrap":"wrap"}} /-->
					<!-- wp:site-title {"style":{"typography":{"writingMode":"vertical-rl"}},"fontSize":"large"} /-->
				</div>
				<!-- /wp:group -->
			</div>
			<!-- /wp:group -->
		</div>
		<!-- /wp:group -->
	</div>
	<!-- /wp:column -->

	<!-- wp:column {"width":"90%","style":{"spacing":{"padding":{"top":"var:preset|spacing|50","bottom":"var:preset|spacing|50","left":"var:preset|spacing|50","right":"var:preset|spacing|50"}}},"layout":{"type":"default"}} -->
	<div class="wp-block-column" style="padding-top:var(--wp--preset--spacing--50);padding-right:var(--wp--preset--spacing--50);padding-bottom:var(--wp--preset--spacing--50);padding-left:var(--wp--preset--spacing--50);flex-basis:90%">
		<!-- wp:group {"tagName":"main","layout":{"type":"default"}} -->
		<main class="wp-block-group">
			<!-- wp:spacer {"height":"var:preset|spacing|50"} -->
			<div style="height:var(--wp--preset--spacing--50)" aria-hidden="true" class="wp-block-spacer"></div>
			<!-- /wp:spacer -->
			<!-- wp:query-title {"type":"archive","fontSize":"large"} /-->
			<!-- wp:term-description /-->
			<!-- wp:spacer {"height":"var:preset|spacing|50"} -->
			<div style="height:var(--wp--preset--spacing--50)" aria-hidden="true" class="wp-block-spacer"></div>
			<!-- /wp:spacer -->

			<!-- wp:pattern {"slug":"twentytwentyfive/right-aligned-posts"} /-->

			<!-- wp:spacer {"height":"var:preset|spacing|50"} -->
			<div style="height:var(--wp--preset--spacing--50)" aria-hidden="true" class="wp-block-spacer"></div>
			<!-- /wp:spacer -->
		</main>
		<!-- /wp:group -->
	</div>
	<!-- /wp:column -->
</div>
<!-- /wp:columns -->

<!-- wp:template-part {"slug":"footer","area":"footer"} /-->
