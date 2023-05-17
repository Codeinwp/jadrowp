<?php
/**
 * Title: Header WooCommerce
 * Slug: jadro/header-woocommerce
 * Categories: jadro
 * Keywords: header, header woocommerce
 *
 * @package Jadro
 */

?>
<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|small","bottom":"var:preset|spacing|small"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull" style="padding-top:var(--wp--preset--spacing--small);padding-bottom:var(--wp--preset--spacing--small)"><!-- wp:group {"align":"wide","layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"space-between"}} -->
<div class="wp-block-group alignwide"><!-- wp:group {"style":{"spacing":{"blockGap":"15px"}},"layout":{"type":"flex","flexWrap":"nowrap"}} -->
<div class="wp-block-group"><!-- wp:site-title /--></div>
<!-- /wp:group -->

<!-- wp:navigation {"icon":"menu","layout":{"type":"flex","justifyContent":"right"},"style":{"spacing":{"blockGap":"var:preset|spacing|large"}}} -->
<!-- wp:navigation-link {"label":"Home","url":"#","kind":"custom","isTopLevelLink":true} /-->

<!-- wp:navigation-link {"label":"About","url":"#","kind":"custom","isTopLevelLink":true} /-->

<!-- wp:navigation-link {"label":"Services","url":"#","kind":"custom","isTopLevelLink":true} /-->

<!-- wp:navigation-link {"label":"Blog","url":"#","kind":"custom","isTopLevelLink":true} /-->

<!-- wp:navigation-link {"label":"Contact","url":"#","kind":"custom","isTopLevelLink":true} /-->
<!-- /wp:navigation -->

<!-- wp:group {"style":{"spacing":{"blockGap":"0"}},"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"right"}} -->
<div class="wp-block-group"><!-- wp:woocommerce/customer-account {"displayStyle":"icon_only","iconClass":"wc-block-customer-account__account-icon"} /-->

<!-- wp:woocommerce/mini-cart {"hasHiddenPrice":true,"cartAndCheckoutRenderStyle":"removed"} /--></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->
