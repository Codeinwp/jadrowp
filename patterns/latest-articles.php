<?php
/**
 * Title: Latest Articles
 * Slug: jadro/latest-articles
 * Categories: jadro
 * Keywords: posts, articles
 *
 * @package Jadro
 */

?>
<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"bottom":"8rem","top":"7rem","right":"20px","left":"20px"},"margin":{"top":"0px","bottom":"0px"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull" style="margin-top:0px;margin-bottom:0px;padding-top:7rem;padding-right:20px;padding-bottom:8rem;padding-left:20px"><!-- wp:group {"align":"wide","layout":{"type":"default"}} -->
<div class="wp-block-group alignwide"><!-- wp:columns {"verticalAlignment":"bottom"} -->
<div class="wp-block-columns are-vertically-aligned-bottom"><!-- wp:column {"verticalAlignment":"bottom"} -->
<div class="wp-block-column is-vertically-aligned-bottom"><!-- wp:paragraph {"align":"left","textColor":"primary","fontSize":"medium"} -->
<p class="has-text-align-left has-primary-color has-text-color has-medium-font-size"><?php esc_html_e( 'Stay Updated', 'jadro' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:heading {"textAlign":"left","style":{"spacing":{"margin":{"top":"0.25rem"}}},"fontSize":"max-60"} -->
<h2 class="wp-block-heading has-text-align-left has-max-60-font-size" style="margin-top:0.25rem"><?php esc_html_e( 'Latest Articles', 'jadro' ); ?></h2>
<!-- /wp:heading --></div>
<!-- /wp:column -->

<!-- wp:column {"verticalAlignment":"bottom"} -->
<div class="wp-block-column is-vertically-aligned-bottom"><!-- wp:paragraph {"style":{"spacing":{"margin":{"bottom":"0.75rem"}}}} -->
<p style="margin-bottom:0.75rem"><?php esc_html_e( 'Quickly browse the latest offers, read in-depth articles, and case studies to get the full story.', 'jadro' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:group -->

<!-- wp:group {"align":"wide","style":{"spacing":{"padding":{"top":"2rem"}}},"layout":{"type":"default"}} -->
<div class="wp-block-group alignwide" style="padding-top:2rem"><!-- wp:query {"queryId":11,"query":{"perPage":"3","pages":0,"offset":0,"postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"exclude","inherit":false},"displayLayout":{"type":"flex","columns":3}} -->
<div class="wp-block-query"><!-- wp:post-template -->
<!-- wp:group {"layout":{"inherit":false}} -->
<div class="wp-block-group"><!-- wp:post-featured-image {"isLink":true,"height":"400px","style":{"border":{"radius":"10px"}}} /-->

<!-- wp:post-date /-->

<!-- wp:post-title {"isLink":true} /--></div>
<!-- /wp:group -->
<!-- /wp:post-template --></div>
<!-- /wp:query --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->
