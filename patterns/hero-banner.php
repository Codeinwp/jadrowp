<?php
/**
 * Title: Hero Banner
 * Slug: jadro/hero-banner
 * Categories: jadro
 * Keywords: hero, banner
 *
 * @package Jadro
 */

?>
<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"8rem","bottom":"8rem","right":"20px","left":"20px"},"margin":{"top":"0px","bottom":"0px"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull" style="margin-top:0px;margin-bottom:0px;padding-top:8rem;padding-right:20px;padding-bottom:8rem;padding-left:20px"><!-- wp:group {"align":"wide","layout":{"type":"default"}} -->
<div class="wp-block-group alignwide"><!-- wp:columns {"verticalAlignment":"center"} -->
<div class="wp-block-columns are-vertically-aligned-center"><!-- wp:column {"verticalAlignment":"center","width":"60%"} -->
<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:60%"><!-- wp:group {"layout":{"type":"constrained"}} -->
<div class="wp-block-group"><!-- wp:paragraph {"align":"left","textColor":"primary","fontSize":"base"} -->
<p class="has-text-align-left has-primary-color has-text-color has-base-font-size"><?php esc_html_e( 'Full Site Editing', 'jadro' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:heading {"textAlign":"left","fontSize":"xx-large"} -->
<h2 class="wp-block-heading has-text-align-left has-xx-large-font-size"><?php esc_html_e( 'WordPress Block Theme', 'jadro' ); ?></h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"align":"left"} -->
<p class="has-text-align-left"><?php esc_html_e( 'Simple, Clean, and Lightning Fast Full Site Editing Theme. Google Core Web Vitals and Search Engines optimized WordPress block theme.', 'jadro' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:buttons {"layout":{"type":"flex","justifyContent":"left"},"style":{"spacing":{"margin":{"top":"2.5rem"}}}} -->
<div class="wp-block-buttons" style="margin-top:2.5rem"><!-- wp:button -->
<div class="wp-block-button"><a class="wp-block-button__link wp-element-button" href="#"><?php esc_html_e( 'Get Started', 'jadro' ); ?> →</a></div>
<!-- /wp:button -->

<!-- wp:button {"className":"is-style-outline"} -->
<div class="wp-block-button is-style-outline"><a class="wp-block-button__link wp-element-button" href="#"><?php esc_html_e( 'Learn More', 'jadro' ); ?> →</a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:group --></div>
<!-- /wp:column -->

<!-- wp:column {"verticalAlignment":"center","width":"2%"} -->
<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:2%"></div>
<!-- /wp:column -->

<!-- wp:column {"verticalAlignment":"center","width":"38%"} -->
<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:38%"><!-- wp:image {"id":178,"sizeSlug":"full","linkDestination":"none"} -->
<figure class="wp-block-image size-full"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/banner-image.png' ) ); ?>" alt="" class="wp-image-178"/></figure>
<!-- /wp:image --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->
