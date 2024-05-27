<?php

/**
 * Block Styles
 *
 * @link https://developer.wordpress.org/reference/functions/register_block_style/
 *
 * @package publishtify
 * @since 1.0.0
 */

if (function_exists('register_block_style')) {
    /**
     * Register block styles.
     *
     * @since 0.1
     *
     * @return void
     */
    function publishtify_register_block_styles()
    {
        register_block_style(
            'core/columns',
            array(
                'name'  => 'publishtify-boxshadow',
                'label' => __('Box Shadow', 'publishtify')
            )
        );

        register_block_style(
            'core/column',
            array(
                'name'  => 'publishtify-boxshadow',
                'label' => __('Box Shadow', 'publishtify')
            )
        );
        register_block_style(
            'core/column',
            array(
                'name'  => 'publishtify-boxshadow-medium',
                'label' => __('Box Shadow Medium', 'publishtify')
            )
        );
        register_block_style(
            'core/column',
            array(
                'name'  => 'publishtify-boxshadow-large',
                'label' => __('Box Shadow Large', 'publishtify')
            )
        );

        register_block_style(
            'core/group',
            array(
                'name'  => 'publishtify-boxshadow',
                'label' => __('Box Shadow', 'publishtify')
            )
        );
        register_block_style(
            'core/group',
            array(
                'name'  => 'publishtify-boxshadow-medium',
                'label' => __('Box Shadow Medium', 'publishtify')
            )
        );
        register_block_style(
            'core/group',
            array(
                'name'  => 'publishtify-boxshadow-large',
                'label' => __('Box Shadow Larger', 'publishtify')
            )
        );
        register_block_style(
            'core/image',
            array(
                'name'  => 'publishtify-boxshadow',
                'label' => __('Box Shadow', 'publishtify')
            )
        );
        register_block_style(
            'core/image',
            array(
                'name'  => 'publishtify-boxshadow-medium',
                'label' => __('Box Shadow Medium', 'publishtify')
            )
        );
        register_block_style(
            'core/image',
            array(
                'name'  => 'publishtify-boxshadow-larger',
                'label' => __('Box Shadow Large', 'publishtify')
            )
        );
        register_block_style(
            'core/image',
            array(
                'name'  => 'publishtify-image-pulse',
                'label' => __('Iamge Pulse Effect', 'publishtify')
            )
        );
        register_block_style(
            'core/image',
            array(
                'name'  => 'publishtify-boxshadow-hover',
                'label' => __('Box Shadow on Hover', 'publishtify')
            )
        );
        register_block_style(
            'core/image',
            array(
                'name'  => 'publishtify-image-hover-pulse',
                'label' => __('Hover Pulse Effect', 'publishtify')
            )
        );
        register_block_style(
            'core/image',
            array(
                'name'  => 'publishtify-image-hover-rotate',
                'label' => __('Hover Rotate Effect', 'publishtify')
            )
        );
        register_block_style(
            'core/columns',
            array(
                'name'  => 'publishtify-boxshadow-hover',
                'label' => __('Box Shadow on Hover', 'publishtify')
            )
        );

        register_block_style(
            'core/column',
            array(
                'name'  => 'publishtify-boxshadow-hover',
                'label' => __('Box Shadow on Hover', 'publishtify')
            )
        );

        register_block_style(
            'core/group',
            array(
                'name'  => 'publishtify-boxshadow-hover',
                'label' => __('Box Shadow on Hover', 'publishtify')
            )
        );

        register_block_style(
            'core/post-terms',
            array(
                'name'  => 'categories-background-with-round',
                'label' => __('Background with round corner style', 'publishtify')
            )
        );
        register_block_style(
            'core/post-title',
            array(
                'name'  => 'title-hover-primary-color',
                'label' => __('Hover: Primary color', 'publishtify')
            )
        );
        register_block_style(
            'core/post-title',
            array(
                'name'  => 'title-hover-secondary-color',
                'label' => __('Hover: Secondary color', 'publishtify')
            )
        );
        register_block_style(
            'core/button',
            array(
                'name'  => 'button-hover-primary-color',
                'label' => __('Hover: Primary Color', 'publishtify')
            )
        );
        register_block_style(
            'core/button',
            array(
                'name'  => 'button-hover-secondary-color',
                'label' => __('Hover: Secondary Color', 'publishtify')
            )
        );
        register_block_style(
            'core/button',
            array(
                'name'  => 'button-hover-primary-bgcolor',
                'label' => __('Hover: Primary color fill', 'publishtify')
            )
        );
        register_block_style(
            'core/button',
            array(
                'name'  => 'button-hover-secondary-bgcolor',
                'label' => __('Hover: Secondary color fill', 'publishtify')
            )
        );

        register_block_style(
            'core/read-more',
            array(
                'name'  => 'readmore-hover-primary-color',
                'label' => __('Hover: Primary Color', 'publishtify')
            )
        );
        register_block_style(
            'core/read-more',
            array(
                'name'  => 'readmore-hover-secondary-color',
                'label' => __('Hover: Secondary Color', 'publishtify')
            )
        );
        register_block_style(
            'core/read-more',
            array(
                'name'  => 'readmore-hover-primary-fill',
                'label' => __('Hover: Primary Fill', 'publishtify')
            )
        );
        register_block_style(
            'core/read-more',
            array(
                'name'  => 'readmore-hover-secondary-fill',
                'label' => __('Hover: secondary Fill', 'publishtify')
            )
        );

        register_block_style(
            'core/list',
            array(
                'name'  => 'list-style-no-bullet',
                'label' => __('List Style: Hide bullet', 'publishtify')
            )
        );
        register_block_style(
            'core/list',
            array(
                'name'  => 'hide-bullet-list-link-hover-style-primary',
                'label' => __('Hover style with primary color and hide bullet', 'publishtify')
            )
        );
        register_block_style(
            'core/list',
            array(
                'name'  => 'hide-bullet-list-link-hover-style-secondary',
                'label' => __('Hover style with secondary color and hide bullet', 'publishtify')
            )
        );

        register_block_style(
            'core/gallery',
            array(
                'name'  => 'enable-grayscale-mode-on-image',
                'label' => __('Enable Grayscale Mode on Image', 'publishtify')
            )
        );
        register_block_style(
            'core/social-links',
            array(
                'name'  => 'social-icon-border',
                'label' => __('Border Style', 'publishtify')
            )
        );
        register_block_style(
            'core/page-list',
            array(
                'name'  => 'publishtify-page-list-bullet-hide-style',
                'label' => __('Hide Bullet Style', 'publishtify')
            )
        );
        register_block_style(
            'core/categories',
            array(
                'name'  => 'publishtify-categories-bullet-hide-style',
                'label' => __('Hide Bullet Style', 'publishtify')
            )
        );
        register_block_style(
            'core/cover',
            array(
                'name'  => 'publishtify-cover-round-style',
                'label' => __('Round Corner Style', 'publishtify')
            )
        );
    }
    add_action('init', 'publishtify_register_block_styles');
}
