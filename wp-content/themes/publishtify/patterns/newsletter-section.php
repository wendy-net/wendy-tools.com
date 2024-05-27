<?php

/**
 * Title: Newsletter Section
 * Slug: publishtify/newsletter-section
 * Categories: publishtify
 */
?>
<!-- wp:group {"style":{"spacing":{"padding":{"right":"var:preset|spacing|40","left":"var:preset|spacing|40","top":"var:preset|spacing|50","bottom":"var:preset|spacing|70"},"margin":{"top":"0","bottom":"0"}}},"layout":{"type":"constrained","contentSize":"1180px"}} -->
<div class="wp-block-group" style="margin-top:0;margin-bottom:0;padding-top:var(--wp--preset--spacing--50);padding-right:var(--wp--preset--spacing--40);padding-bottom:var(--wp--preset--spacing--70);padding-left:var(--wp--preset--spacing--40)"><!-- wp:group {"style":{"spacing":{"padding":{"top":"34px","bottom":"20px","left":"60px","right":"60px"}},"color":{"background":"#f5f8ff"}},"layout":{"type":"constrained","contentSize":"1180px"}} -->
    <div class="wp-block-group has-background" style="background-color:#f5f8ff;padding-top:34px;padding-right:60px;padding-bottom:20px;padding-left:60px"><!-- wp:columns {"verticalAlignment":"center","style":{"spacing":{"blockGap":{"left":"84px"}}}} -->
        <div class="wp-block-columns are-vertically-aligned-center"><!-- wp:column {"verticalAlignment":"center","style":{"spacing":{"blockGap":"var:preset|spacing|30","padding":{"bottom":"var:preset|spacing|40"}}}} -->
            <div class="wp-block-column is-vertically-aligned-center" style="padding-bottom:var(--wp--preset--spacing--40)"><!-- wp:heading {"level":3,"fontSize":"large"} -->
                <h3 class="wp-block-heading has-large-font-size"><?php esc_html_e('Subscribe Our Newsletter', 'publishtify') ?></h3>
                <!-- /wp:heading -->

                <!-- wp:paragraph -->
                <p><?php esc_html_e('Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore.', 'publishtify') ?></p>
                <!-- /wp:paragraph -->
            </div>
            <!-- /wp:column -->

            <!-- wp:column {"verticalAlignment":"center"} -->
            <div class="wp-block-column is-vertically-aligned-center"><!-- wp:contact-form-7/contact-form-selector {"id":1127,"hash":"de17a25","title":"Newsletter Form","className":"publishtify-newsletter-section"} -->
                <div class="wp-block-contact-form-7-contact-form-selector publishtify-newsletter-section">[contact-form-7 id="de17a25" title="Newsletter Form"]</div>
                <!-- /wp:contact-form-7/contact-form-selector -->
            </div>
            <!-- /wp:column -->
        </div>
        <!-- /wp:columns -->
    </div>
    <!-- /wp:group -->
</div>
<!-- /wp:group -->