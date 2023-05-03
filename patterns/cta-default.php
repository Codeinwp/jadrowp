<?php
/**
 * Title: Call to Action
 * Slug: jadro/cta-default
 * Categories: jadro
 * Keywords: cta, call-to-action
 *
 * @package Jadro
 */

?>
<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"8rem","bottom":"8rem"},"margin":{"top":"0px","bottom":"0px"}}},"backgroundColor":"light-gray","layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull has-light-gray-background-color has-background"
    style="margin-top:0px;margin-bottom:0px;padding-top:8rem;padding-bottom:8rem">
    <!-- wp:group {"align":"wide","layout":{"type":"default"}} -->
    <div class="wp-block-group alignwide">
        <!-- wp:heading {"textAlign":"center","fontSize":"max-60"} -->
        <h2 class="wp-block-heading has-text-align-center has-max-60-font-size">
            <?php _e('Add Call to Action Heading Here', 'jadro'); ?>
        </h2>
        <!-- /wp:heading -->
        <!-- wp:columns -->
        <div class="wp-block-columns">
            <!-- wp:column -->
            <div class="wp-block-column"></div>
            <!-- /wp:column -->

            <!-- wp:column {"width":"720px"} -->
            <div class="wp-block-column" style="flex-basis:720px">
                <!-- wp:paragraph {"align":"center"} -->
                <p class="has-text-align-center">
                    <?php _e('Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do
                    eiusmod tempor incididunt ut labore et dolore magna aliqua.', 'jadro'); ?>
                </p>
                <!-- /wp:paragraph -->

                <!-- wp:buttons {"layout":{"type":"flex","justifyContent":"center"}} -->
                <div class="wp-block-buttons">
                    <!-- wp:button -->
                    <div class="wp-block-button"><a class="wp-block-button__link wp-element-button" href="#">
                            <?php _e('Get Started
                            →', 'jadro'); ?>
                        </a></div>
                    <!-- /wp:button -->

                    <!-- wp:button {"className":"is-style-outline"} -->
                    <div class="wp-block-button is-style-outline"><a class="wp-block-button__link wp-element-button"
                            href="#"><?php _e('Learn More →', 'jadro'); ?></a></div>
                    <!-- /wp:button -->
                </div>
                <!-- /wp:buttons -->
            </div>
            <!-- /wp:column -->

            <!-- wp:column -->
            <div class="wp-block-column"></div>
            <!-- /wp:column -->
        </div>
        <!-- /wp:columns -->
    </div>
    <!-- /wp:group -->
</div>
<!-- /wp:group -->