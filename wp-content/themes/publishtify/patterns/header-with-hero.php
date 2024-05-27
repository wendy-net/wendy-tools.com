<?php

/**
 * Title: Header with Hero
 * Slug: publishtify/header-with-hero
 * Categories: publishtify, header
 */
$publishtify_url = trailingslashit(get_template_directory_uri());
$publishtify_images = array(
    $publishtify_url . 'assets/images/banner_bg.jpg',
);
?>
<!-- wp:group {"style":{"spacing":{"padding":{"top":"0","bottom":"40px","left":"0","right":"0"}},"background":{"backgroundImage":{"url":"<?php echo esc_url($publishtify_images[0]) ?>","id":6680,"source":"file","title":"banner_bg-2-2"}}},"className":"publishtify-main-header is-style-publishtify-boxshadow-medium","layout":{"type":"constrained","contentSize":"100%"}} -->
<div class="wp-block-group publishtify-main-header is-style-publishtify-boxshadow-medium" style="padding-top:0;padding-right:0;padding-bottom:40px;padding-left:0"><!-- wp:group {"style":{"border":{"top":{"width":"0px","style":"none"},"bottom":{"width":"0px","style":"none"},"right":[],"left":[]},"spacing":{"padding":{"top":"0","bottom":"0","left":"var:preset|spacing|40","right":"var:preset|spacing|40"},"margin":{"top":"0","bottom":"0"}}},"className":"is-style-default","layout":{"type":"constrained","contentSize":"1180px"}} -->
    <div class="wp-block-group is-style-default" style="border-top-style:none;border-top-width:0px;border-bottom-style:none;border-bottom-width:0px;margin-top:0;margin-bottom:0;padding-top:0;padding-right:var(--wp--preset--spacing--40);padding-bottom:0;padding-left:var(--wp--preset--spacing--40)"><!-- wp:group {"style":{"border":{"top":{"width":"0px","style":"none"},"right":[],"bottom":[],"left":[]},"spacing":{"padding":{"top":"15px","bottom":"15px"}}},"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"space-between"}} -->
        <div class="wp-block-group" style="border-top-style:none;border-top-width:0px;padding-top:15px;padding-bottom:15px"><!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|30"}},"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"center"}} -->
            <div class="wp-block-group"><!-- wp:site-logo {"shouldSyncIcon":false} /-->

                <!-- wp:site-title {"style":{"typography":{"fontStyle":"normal","fontWeight":"600","textTransform":"none","letterSpacing":"0px","fontSize":"40px"},"elements":{"link":{"color":{"text":"var:preset|color|light-color"},":hover":{"color":{"text":"var:preset|color|secondary"}}}},"spacing":{"margin":{"top":"5px"}}}} /-->
            </div>
            <!-- /wp:group -->

            <!-- wp:navigation {"textColor":"light-color","overlayBackgroundColor":"light-shade","overlayTextColor":"heading-color","className":"publishtify-navigation","layout":{"type":"flex","justifyContent":"center"},"style":{"typography":{"textTransform":"none","fontStyle":"normal","fontWeight":"500","lineHeight":"2"},"spacing":{"blockGap":"32px"}},"fontSize":"normal"} -->
            <!-- wp:page-list /-->
            <!-- /wp:navigation -->
        </div>
        <!-- /wp:group -->
    </div>
    <!-- /wp:group -->

    <!-- wp:cover {"dimRatio":0,"minHeight":760,"isDark":false,"style":{"spacing":{"margin":{"top":"0","bottom":"0"},"padding":{"bottom":"20px"}}},"layout":{"type":"constrained","contentSize":"940px"}} -->
    <div class="wp-block-cover is-light" style="margin-top:0;margin-bottom:0;padding-bottom:20px;min-height:760px"><span aria-hidden="true" class="wp-block-cover__background has-background-dim-0 has-background-dim"></span>
        <div class="wp-block-cover__inner-container"><!-- wp:heading {"textAlign":"center","level":1,"style":{"elements":{"link":{"color":{"text":"var:preset|color|light-color"}}},"typography":{"fontSize":"64px","fontStyle":"normal","fontWeight":"600"}},"textColor":"light-color"} -->
            <h1 class="wp-block-heading has-text-align-center has-light-color-color has-text-color has-link-color" style="font-size:64px;font-style:normal;font-weight:600"><?php esc_html_e('Global Odyssey, Where Every Step Unveils a New Story', 'publishtify') ?></h1>
            <!-- /wp:heading -->

            <!-- wp:paragraph {"align":"center","style":{"elements":{"link":{"color":{"text":"var:preset|color|light-color"}}}},"textColor":"light-color"} -->
            <p class="has-text-align-center has-light-color-color has-text-color has-link-color"><?php esc_html_e('Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation', 'publishtify') ?></p>
            <!-- /wp:paragraph -->

            <!-- wp:buttons {"layout":{"type":"flex","justifyContent":"center"},"style":{"spacing":{"margin":{"top":"40px"}}}} -->
            <div class="wp-block-buttons" style="margin-top:40px"><!-- wp:button {"backgroundColor":"transparent","style":{"border":{"radius":"60px","width":"1px"},"spacing":{"padding":{"left":"48px","right":"48px","top":"18px","bottom":"18px"}}},"className":"is-style-button-hover-secondary-bgcolor","fontSize":"medium","fontFamily":"lora"} -->
                <div class="wp-block-button has-custom-font-size is-style-button-hover-secondary-bgcolor has-lora-font-family has-medium-font-size"><a class="wp-block-button__link has-transparent-background-color has-background wp-element-button" style="border-width:1px;border-radius:60px;padding-top:18px;padding-right:48px;padding-bottom:18px;padding-left:48px"><?php esc_html_e('Explore More', 'publishtify') ?></a></div>
                <!-- /wp:button -->
            </div>
            <!-- /wp:buttons -->
        </div>
    </div>
    <!-- /wp:cover -->

    <!-- wp:buttons {"layout":{"type":"flex","justifyContent":"center"}} -->
    <div class="wp-block-buttons"><!-- wp:button {"backgroundColor":"transparent","style":{"border":{"width":"1px","color":"#FFFFFF","radius":"60px"}},"className":"publishtify-scroll-down is-style-button-hover-secondary-bgcolor"} -->
        <div class="wp-block-button publishtify-scroll-down is-style-button-hover-secondary-bgcolor"><a class="wp-block-button__link has-transparent-background-color has-background has-border-color wp-element-button" href="#publishtify-main-content" style="border-color:#FFFFFF;border-width:1px;border-radius:60px"><?php esc_html_e('Scroll Down', 'publishtify') ?></a></div>
        <!-- /wp:button -->
    </div>
    <!-- /wp:buttons -->
</div>
<!-- /wp:group -->