<?php
/**
 * Title: News Grid (DeepMind Inspired)
 * Slug: twentytwentyfive/news-grid-deepmind
 * Categories: query
 * Description: A grid of posts inspired by the DeepMind homepage news section.
 *
 * @package WordPress
 * @subpackage Twenty_Twenty_Five
 * @since Twenty Twenty-Five 1.0
 */

?>
<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|60","bottom":"var:preset|spacing|60"},"margin":{"top":"0","bottom":"0"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull" style="margin-top:0;margin-bottom:0;padding-top:var(--wp--preset--spacing--60);padding-bottom:var(--wp--preset--spacing--60)">
	<!-- wp:heading {"level":2,"align":"wide"} -->
	<h2 class="wp-block-heading alignwide"><?php esc_html_e( 'Latest News', 'twentytwentyfive' ); ?></h2>
	<!-- /wp:heading -->

	<!-- wp:spacer {"height":"var:preset|spacing|40"} -->
	<div style="height:var(--wp--preset--spacing--40)" aria-hidden="true" class="wp-block-spacer"></div>
	<!-- /wp:spacer -->

	<!-- wp:query {"queryId":1,"query":{"perPage":6,"pages":0,"offset":0,"postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"","inherit":true},"displayLayout":{"type":"grid","columns":3},"align":"wide"} -->
	<div class="wp-block-query alignwide">
		<!-- wp:post-template -->
			<!-- wp:post-featured-image {"isLink":true,"aspectRatio":"16/9"} /-->
			<!-- wp:post-title {"isLink":true,"fontSize":"large"} /-->
			<!-- wp:group {"style":{"spacing":{"blockGap":"5px"}},"layout":{"type":"flex"},"fontSize":"small"} -->
			<div class="wp-block-group has-small-font-size">
				<!-- wp:post-date /-->
				<!-- wp:paragraph -->
				<p>·</p>
				<!-- /wp:paragraph -->
				<!-- wp:post-terms {"term":"category"} /-->
			</div>
			<!-- /wp:group -->
		<!-- /wp:post-template -->
	</div>
	<!-- /wp:query -->
</div>
<!-- /wp:group -->
