<?php
if (!defined('PUBLISHTIFY_VERSION')) {
    // Replace the version number of the theme on each release.
    define('PUBLISHTIFY_VERSION', wp_get_theme()->get('Version'));
}
define('PUBLISHTIFY_DEBUG', defined('WP_DEBUG') && WP_DEBUG === true);
define('PUBLISHTIFY_DIR', trailingslashit(get_template_directory()));
define('PUBLISHTIFY_URL', trailingslashit(get_template_directory_uri()));

if (!function_exists('publishtify_support')) :

    /**
     * Sets up theme defaults and registers support for various WordPress features.
     *
     * @since walker_fse 1.0.0
     *
     * @return void
     */
    function publishtify_support()
    {
        // Add default posts and comments RSS feed links to head.
        add_theme_support('automatic-feed-links');
        // Add support for block styles.
        add_theme_support('wp-block-styles');
        add_theme_support('post-thumbnails');
        // Enqueue editor styles.
        add_editor_style('style.css');
    }

endif;
add_action('after_setup_theme', 'publishtify_support');

/*----------------------------------------------------------------------------------
Enqueue Styles
-----------------------------------------------------------------------------------*/
if (!function_exists('publishtify_styles')) :
    function publishtify_styles()
    {
        // registering style for theme
        wp_enqueue_style('publishtify-style', get_stylesheet_uri(), array(), PUBLISHTIFY_VERSION);
        wp_enqueue_style('publishtify-blocks-style', get_template_directory_uri() . '/assets/css/blocks.css');
        if (is_rtl()) {
            wp_enqueue_style('publishtify-rtl-css', get_template_directory_uri() . '/assets/css/rtl.css', 'rtl_css');
        }
        wp_enqueue_script('jquery');
        wp_enqueue_script('publishtify-scripts', get_template_directory_uri() . '/assets/js/publishtify-scripts.js', array(), PUBLISHTIFY_VERSION, true);
    }
endif;

add_action('wp_enqueue_scripts', 'publishtify_styles');

/**
 * Enqueue scripts for admin area
 */
function publishtify_admin_style()
{
    $hello_notice_current_screen = get_current_screen();
    if (!empty($_GET['page']) && 'about-publishtify' === $_GET['page'] || $hello_notice_current_screen->id === 'themes' || $hello_notice_current_screen->id === 'dashboard') {
        wp_enqueue_style('publishtify-admin-style', get_template_directory_uri() . '/assets/css/admin-style.css', array(), PUBLISHTIFY_VERSION, 'all');
        wp_enqueue_script('publishtify-admin-scripts', get_template_directory_uri() . '/assets/js/publishtify-admin-scripts.js', array(), PUBLISHTIFY_VERSION, true);
        wp_enqueue_script('publishtify-welcome-notice', get_template_directory_uri() . '/inc/admin/js/publishtify-welcome-notice.js', array('jquery'), PUBLISHTIFY_VERSION, true);
        wp_localize_script('publishtify-welcome-notice', 'publishtify_localize', array(
            'ajax_url' => admin_url('admin-ajax.php'),
            'redirect_url' => admin_url('themes.php?page=_cozy_companions')
        ));
    }
}
add_action('admin_enqueue_scripts', 'publishtify_admin_style');

/**
 * Enqueue assets scripts for both backend and frontend
 */
function publishtify_block_assets()
{
    wp_enqueue_style('publishtify-blocks-style', get_template_directory_uri() . '/assets/css/blocks.css');
}
add_action('enqueue_block_assets', 'publishtify_block_assets');

/**
 * Load core file.
 */
require_once get_template_directory() . '/inc/core/init.php';

/**
 * Load welcome page file.
 */
require_once get_template_directory() . '/inc/admin/welcome-notice.php';

if (!function_exists('publishtify_excerpt_more_postfix')) {
    function publishtify_excerpt_more_postfix($more)
    {
        if (is_admin()) {
            return $more;
        }
        return '...';
    }
    add_filter('excerpt_more', 'publishtify_excerpt_more_postfix');
}
function publishtify_add_woocommerce_support()
{
    add_theme_support('woocommerce');
}
add_action('after_setup_theme', 'publishtify_add_woocommerce_support');
