<?php

/**
 * Title: Post List With sidebar
 * Slug: publishtify/postlist-with-sidebar
 * Categories: publishtify
 */
?>
<!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|60","bottom":"var:preset|spacing|60","left":"var:preset|spacing|40","right":"var:preset|spacing|40"}}},"backgroundColor":"light-color","layout":{"type":"constrained","contentSize":"1180px"}} -->
<div class="wp-block-group has-light-color-background-color has-background" style="padding-top:var(--wp--preset--spacing--60);padding-right:var(--wp--preset--spacing--40);padding-bottom:var(--wp--preset--spacing--60);padding-left:var(--wp--preset--spacing--40)"><!-- wp:group {"style":{"border":{"top":{"color":"var:preset|color|border-color","width":"1px"}},"spacing":{"padding":{"top":"24px"}}},"layout":{"type":"flex","flexWrap":"nowrap"}} -->
    <div class="wp-block-group" style="border-top-color:var(--wp--preset--color--border-color);border-top-width:1px;padding-top:24px"><!-- wp:heading {"level":4} -->
        <h4 class="wp-block-heading"><?php esc_html_e('Recent Stories', 'publishtify') ?></h4>
        <!-- /wp:heading -->
    </div>
    <!-- /wp:group -->

    <!-- wp:columns {"style":{"spacing":{"blockGap":{"left":"30px"}}}} -->
    <div class="wp-block-columns"><!-- wp:column {"width":"66.66%"} -->
        <div class="wp-block-column" style="flex-basis:66.66%"><!-- wp:query {"queryId":22,"query":{"perPage":"12","pages":0,"offset":0,"postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"","inherit":false},"className":"publishtify-slide-up"} -->
            <div class="wp-block-query publishtify-slide-up"><!-- wp:post-template {"style":{"spacing":{"blockGap":"24px"}},"layout":{"type":"default","columnCount":3}} -->
                <!-- wp:group {"style":{"spacing":{"padding":{"top":"24px","bottom":"40px","left":"0px","right":"0px"}},"border":{"radius":"0px","top":{"radius":"0px","width":"0px","style":"none"},"right":{"radius":"0px","width":"0px","style":"none"},"bottom":{"color":"var:preset|color|light-shade","width":"1px"},"left":{"radius":"0px","width":"0px","style":"none"}}},"backgroundColor":"light-color","className":"is-style-default","layout":{"type":"constrained"}} -->
                <div class="wp-block-group is-style-default has-light-color-background-color has-background" style="border-radius:0px;border-top-style:none;border-top-width:0px;border-right-style:none;border-right-width:0px;border-bottom-color:var(--wp--preset--color--light-shade);border-bottom-width:1px;border-left-style:none;border-left-width:0px;padding-top:24px;padding-right:0px;padding-bottom:40px;padding-left:0px"><!-- wp:columns -->
                    <div class="wp-block-columns"><!-- wp:column {"width":"33.33%"} -->
                        <div class="wp-block-column" style="flex-basis:33.33%"><!-- wp:post-featured-image {"isLink":true,"height":"240px","style":{"border":{"radius":"0px"}}} /--></div>
                        <!-- /wp:column -->

                        <!-- wp:column {"width":"66.66%"} -->
                        <div class="wp-block-column" style="flex-basis:66.66%"><!-- wp:group {"style":{"spacing":{"padding":{"top":"0px","bottom":"0px"},"margin":{"top":"0","bottom":"0"},"blockGap":"0"}},"layout":{"type":"flex","orientation":"vertical"}} -->
                            <div class="wp-block-group" style="margin-top:0;margin-bottom:0;padding-top:0px;padding-bottom:0px"><!-- wp:post-terms {"term":"category","prefix":"Published on ","style":{"spacing":{"padding":{"top":"0","bottom":"0"},"margin":{"top":"0","bottom":"0"}},"typography":{"textTransform":"none","fontStyle":"normal","fontWeight":"500"}},"className":"is-style-default","fontSize":"normal"} /-->

                                <!-- wp:post-title {"level":3,"isLink":true,"style":{"typography":{"fontStyle":"normal","fontWeight":"600","lineHeight":"1.4","fontSize":"24px"},"elements":{"link":{"color":{"text":"var:preset|color|heading-color"},":hover":{"color":{"text":"var:preset|color|secondary"}}}},"spacing":{"margin":{"top":"5px"}}}} /-->

                                <!-- wp:post-excerpt {"excerptLength":21,"style":{"spacing":{"margin":{"top":"var:preset|spacing|40","bottom":"var:preset|spacing|40"}}}} /-->

                                <!-- wp:group {"style":{"spacing":{"blockGap":"14px","margin":{"top":"8px"}}},"layout":{"type":"flex","flexWrap":"nowrap"}} -->
                                <div class="wp-block-group" style="margin-top:8px"><!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|30"}},"layout":{"type":"flex","flexWrap":"nowrap"}} -->
                                    <div class="wp-block-group"><!-- wp:avatar {"size":50,"style":{"border":{"radius":"60px"}}} /-->

                                        <!-- wp:group {"style":{"spacing":{"blockGap":"0"}},"layout":{"type":"flex","orientation":"vertical"}} -->
                                        <div class="wp-block-group"><!-- wp:post-author-name {"style":{"elements":{"link":{"color":{"text":"var:preset|color|primary"}}},"typography":{"fontStyle":"normal","fontWeight":"500"}},"textColor":"primary","fontSize":"medium","fontFamily":"lora"} /-->

                                            <!-- wp:post-date {"fontSize":"small"} /-->
                                        </div>
                                        <!-- /wp:group -->
                                    </div>
                                    <!-- /wp:group -->
                                </div>
                                <!-- /wp:group -->
                            </div>
                            <!-- /wp:group -->
                        </div>
                        <!-- /wp:column -->
                    </div>
                    <!-- /wp:columns -->
                </div>
                <!-- /wp:group -->
                <!-- /wp:post-template -->

                <!-- wp:query-pagination {"className":"publishtiy-pagination","layout":{"type":"flex","justifyContent":"center"}} -->
                <!-- wp:query-pagination-previous /-->

                <!-- wp:query-pagination-numbers /-->

                <!-- wp:query-pagination-next /-->
                <!-- /wp:query-pagination -->
            </div>
            <!-- /wp:query -->
        </div>
        <!-- /wp:column -->

        <!-- wp:column {"width":"33.33%"} -->
        <div class="wp-block-column" style="flex-basis:33.33%"><!-- wp:template-part {"slug":"sidebar","theme":"publishtify","area":"uncategorized"} /--></div>
        <!-- /wp:column -->
    </div>
    <!-- /wp:columns -->
</div>
<!-- /wp:group -->