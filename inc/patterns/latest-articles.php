<?php

/**
 * Title: Latest Articles
 * Slug: latest-articles
 * Keywords: Latest Articles
 */

return array(
  'title'      => __( 'Latest Articles', 'jadro' ),
  'categories' => array( 'jadro' ),
  'content'    => '<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"bottom":"8rem","top":"7rem","right":"20px","left":"20px"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull" style="padding-top:7rem;padding-right:20px;padding-bottom:8rem;padding-left:20px"><!-- wp:group {"align":"wide","layout":{"type":"default"}} -->
<div class="wp-block-group alignwide"><!-- wp:heading {"textAlign":"center","style":{"spacing":{"margin":{"top":"0px","right":"0px","bottom":"0px","left":"0px"}}},"fontSize":"max-60"} -->
<h2 class="wp-block-heading has-text-align-center has-max-60-font-size" style="margin-top:0px;margin-right:0px;margin-bottom:0px;margin-left:0px">Latest Articles</h2>
<!-- /wp:heading -->

<!-- wp:separator {"style":{"color":{"background":"#e06035"}}} -->
<hr class="wp-block-separator has-text-color has-alpha-channel-opacity has-background" style="background-color:#e06035;color:#e06035"/>
<!-- /wp:separator -->

<!-- wp:query {"queryId":11,"query":{"perPage":"3","pages":0,"offset":0,"postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"exclude","inherit":false},"displayLayout":{"type":"flex","columns":3}} -->
<div class="wp-block-query"><!-- wp:post-template -->
<!-- wp:group {"style":{"spacing":{"padding":{"top":"3rem"}}},"layout":{"inherit":false}} -->
<div class="wp-block-group" style="padding-top:3rem"><!-- wp:post-featured-image {"isLink":true,"height":"400px","style":{"border":{"radius":"10px"}}} /-->

<!-- wp:post-date /-->

<!-- wp:post-title {"isLink":true} /--></div>
<!-- /wp:group -->
<!-- /wp:post-template --></div>
<!-- /wp:query --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->'
);
