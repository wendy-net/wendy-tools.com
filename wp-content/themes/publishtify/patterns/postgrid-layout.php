<?php

/**
 * Title: Post Grid Layout 2
 * Slug: publishtify/postgrid-layout
 * Categories: publishtify
 */
?>
<!-- wp:group {"style":{"spacing":{"padding":{"top":"44px","bottom":"44px","left":"var:preset|spacing|40","right":"var:preset|spacing|40"}}},"layout":{"type":"constrained","contentSize":"1180px"}} -->
<div class="wp-block-group" style="padding-top:44px;padding-right:var(--wp--preset--spacing--40);padding-bottom:44px;padding-left:var(--wp--preset--spacing--40)"><!-- wp:query {"queryId":22,"query":{"perPage":"4","pages":0,"offset":0,"postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"","inherit":false},"className":"publishtify-slide-up"} -->
    <div class="wp-block-query publishtify-slide-up"><!-- wp:post-template {"style":{"spacing":{"blockGap":"30px"}},"layout":{"type":"grid","columnCount":4}} -->
        <!-- wp:group {"style":{"spacing":{"padding":{"top":"0px","bottom":"0px","left":"0px","right":"0px"}},"border":{"radius":"0px","width":"0px","style":"none"}},"backgroundColor":"light-color","className":"is-style-default","layout":{"type":"constrained"}} -->
        <div class="wp-block-group is-style-default has-light-color-background-color has-background" style="border-style:none;border-width:0px;border-radius:0px;padding-top:0px;padding-right:0px;padding-bottom:0px;padding-left:0px"><!-- wp:post-featured-image {"isLink":true,"height":"240px","style":{"border":{"radius":"0px"}}} /-->

            <!-- wp:group {"style":{"spacing":{"padding":{"top":"16px","bottom":"0px"},"margin":{"top":"0","bottom":"0"},"blockGap":"0"}},"layout":{"type":"flex","orientation":"vertical"}} -->
            <div class="wp-block-group" style="margin-top:0;margin-bottom:0;padding-top:16px;padding-bottom:0px"><!-- wp:group {"layout":{"type":"flex","flexWrap":"nowrap"}} -->
                <div class="wp-block-group"><!-- wp:post-terms {"term":"category","style":{"spacing":{"padding":{"top":"0","bottom":"0"},"margin":{"top":"0","bottom":"0"}},"typography":{"textTransform":"uppercase","fontStyle":"normal","fontWeight":"500","fontSize":"12px"}},"className":"is-style-default"} /-->

                    <!-- wp:paragraph -->
                    <p>-</p>
                    <!-- /wp:paragraph -->

                    <!-- wp:post-date {"style":{"spacing":{"margin":{"top":"0","bottom":"0"}}},"fontSize":"small"} /-->
                </div>
                <!-- /wp:group -->

                <!-- wp:post-title {"level":3,"isLink":true,"style":{"typography":{"fontStyle":"normal","fontWeight":"600","lineHeight":"1.4"},"elements":{"link":{"color":{"text":"var:preset|color|heading-color"},":hover":{"color":{"text":"var:preset|color|secondary"}}}},"spacing":{"margin":{"top":"5px"}}},"fontSize":"medium"} /-->
            </div>
            <!-- /wp:group -->
        </div>
        <!-- /wp:group -->
        <!-- /wp:post-template -->
    </div>
    <!-- /wp:query -->
</div>
<!-- /wp:group -->