<?php

/**
 * file for holding dashboard welcome page for theme
 */
if (!function_exists('publishtify_is_plugin_installed')) {
    function publishtify_is_plugin_installed($plugin_slug)
    {
        $plugin_path = WP_PLUGIN_DIR . '/' . $plugin_slug;
        return file_exists($plugin_path);
    }
}
if (!function_exists('publishtify_is_plugin_activated')) {
    function publishtify_is_plugin_activated($plugin_slug)
    {
        return is_plugin_active($plugin_slug);
    }
}
if (!function_exists('publishtify_welcome_notice')) :
    function publishtify_welcome_notice()
    {
        if (get_option('publishtify_dismissed_custom_notice')) {
            return;
        }
        global $pagenow;
        $current_screen  = get_current_screen();

        if (is_admin()) {
            if ($current_screen->id !== 'dashboard' && $current_screen->id !== 'themes') {
                return;
            }
            if (is_network_admin()) {
                return;
            }
            if (!current_user_can('manage_options')) {
                return;
            }
            $theme = wp_get_theme();

            if (is_child_theme()) {
                $theme = wp_get_theme()->parent();
            }
            $publishtify_version = $theme->get('Version');


?>
            <div class="publishtify-admin-notice notice notice-info is-dismissible content-install-plugin theme-info-notice" id="publishtify-dismiss-notice">
                <div class="info-content">
                    <div class="notice-holder">
                        <h5><span class="theme-name"><span><?php echo __('Welcome to Publishtify', 'publishtify'); ?></span></h5>
                        <h1><?php echo __('Optimize your workflow effortlessly! Cozy Blocks pairs perfectly with our 30+ Advanced Blocks—install for full benefits', 'publishtify'); ?></h1>
                        </h3>
                        <div class="notice-text">
                            <p><?php echo __('Enhance your experience with our feature-rich 30+ Advanced Blocks! Unlock the full potential by integrating Cozy Addons today. Explore a multitude of powerful tools and functionalities designed to elevate your user experience.', 'publishtify') ?></p>
                            <p><?php echo __('Please install and activate all recommended to use blcoks and demo importer features- Cozy Addons, Cozy Essential Addons, Advanced Import.', 'publishtify') ?></p>
                        </div>
                        <a href="#" id="install-activate-button" class="button admin-button info-button"><?php echo __('Getting started with a single click', 'publishtify'); ?></a>
                        <a href="<?php echo admin_url(); ?>themes.php?page=about-publishtify" class="button admin-button info-button"><?php echo __('Explore Publishtify', 'publishtify'); ?></a>

                    </div>
                </div>
                <div class="theme-hero-screens">
                    <img src="<?php echo esc_url(get_template_directory_uri() . '/inc/admin/images/screen_plugin_ct.png'); ?>" />
                </div>

            </div>
    <?php
        }
    }
endif;
add_action('admin_notices', 'publishtify_welcome_notice');
function publishtify_dismissble_notice()
{
    update_option('publishtify_dismissed_custom_notice', 1);
}
add_action('wp_ajax_publishtify_dismissble_notice', 'publishtify_dismissble_notice');
// Hook into a custom action when the button is clicked
add_action('wp_ajax_publishtify_install_and_activate_plugins', 'publishtify_install_and_activate_plugins');
add_action('wp_ajax_nopriv_publishtify_install_and_activate_plugins', 'publishtify_install_and_activate_plugins');
add_action('wp_ajax_publishtify_rplugin_activation', 'publishtify_rplugin_activation');
add_action('wp_ajax_nopriv_publishtify_rplugin_activation', 'publishtify_rplugin_activation');

// Function to install and activate the plugins



function publishtify_check_plugin_installed_status($pugin_slug, $plugin_file)
{
    return file_exists(ABSPATH . 'wp-content/plugins/' . $pugin_slug . '/' . $plugin_file) ? true : false;
}

/* Check if plugin is activated */


function publishtify_check_plugin_active_status($pugin_slug, $plugin_file)
{
    return is_plugin_active($pugin_slug . '/' . $plugin_file) ? true : false;
}

require_once(ABSPATH . 'wp-admin/includes/plugin-install.php');
require_once(ABSPATH . 'wp-admin/includes/file.php');
require_once(ABSPATH . 'wp-admin/includes/misc.php');
require_once(ABSPATH . 'wp-admin/includes/class-wp-upgrader.php');
function publishtify_install_and_activate_plugins()
{
    // Define the plugins to be installed and activated
    $recommended_plugins = array(
        array(
            'slug' => 'cozy-addons',
            'file' => 'cozy-addons.php',
            'name' => __('Cozy Addons', 'publishtify')
        ),
        array(
            'slug' => 'advanced-import',
            'file' => 'advanced-import.php',
            'name' =>  __('Advanced Imporrt', 'publishtify')
        ),
        array(
            'slug' => 'cozy-essential-addons',
            'file' => 'cozy-essential-addons.php',
            'name' =>  __('Cozy Essential Addons', 'publishtify')
        ),
        // Add more plugins here as needed
    );

    // Include the necessary WordPress functions


    // Set up a transient to store the installation progress
    set_transient('install_and_activate_progress', array(), MINUTE_IN_SECONDS * 10);

    // Loop through each plugin
    foreach ($recommended_plugins as $plugin) {
        $plugin_slug = $plugin['slug'];
        $plugin_file = $plugin['file'];
        $plugin_name = $plugin['name'];

        // Check if the plugin is active
        if (is_plugin_active($plugin_slug . '/' . $plugin_file)) {
            publishtify_update_install_and_activate_progress($plugin_name, 'Already Active');
            continue; // Skip to the next plugin
        }

        // Check if the plugin is installed but not active
        if (publishtify_is_plugin_installed($plugin_slug . '/' . $plugin_file)) {
            $activate = activate_plugin($plugin_slug . '/' . $plugin_file);
            if (is_wp_error($activate)) {
                publishtify_update_install_and_activate_progress($plugin_name, 'Error');
                continue; // Skip to the next plugin
            }
            publishtify_update_install_and_activate_progress($plugin_name, 'Activated');
            continue; // Skip to the next plugin
        }

        // Plugin is not installed or activated, proceed with installation
        publishtify_update_install_and_activate_progress($plugin_name, 'Installing');

        // Fetch plugin information
        $api = plugins_api('plugin_information', array(
            'slug' => $plugin_slug,
            'fields' => array('sections' => false),
        ));

        // Check if plugin information is fetched successfully
        if (is_wp_error($api)) {
            publishtify_update_install_and_activate_progress($plugin_name, 'Error');
            continue; // Skip to the next plugin
        }

        // Set up the plugin upgrader
        $upgrader = new Plugin_Upgrader();
        $install = $upgrader->install($api->download_link);

        // Check if installation is successful
        if ($install) {
            // Activate the plugin
            $activate = activate_plugin($plugin_slug . '/' . $plugin_file);

            // Check if activation is successful
            if (is_wp_error($activate)) {
                publishtify_update_install_and_activate_progress($plugin_name, 'Error');
                continue; // Skip to the next plugin
            }
            publishtify_update_install_and_activate_progress($plugin_name, 'Activated');
        } else {
            publishtify_update_install_and_activate_progress($plugin_name, 'Error');
        }
    }

    // Delete the progress transient
    $redirect_url = admin_url('themes.php?page=advanced-import');

    // Delete the progress transient
    delete_transient('install_and_activate_progress');
    // Return JSON response
    wp_send_json_success(array('redirect_url' => $redirect_url));
}

// Function to check if a plugin is installed but not active
function publishtify_is_plugin_installed($plugin_slug)
{
    $plugins = get_plugins();
    return isset($plugins[$plugin_slug]);
}

// Function to update the installation and activation progress
function publishtify_update_install_and_activate_progress($plugin_name, $status)
{
    $progress = get_transient('install_and_activate_progress');
    $progress[] = array(
        'plugin' => $plugin_name,
        'status' => $status,
    );
    set_transient('install_and_activate_progress', $progress, MINUTE_IN_SECONDS * 10);
}


function publishtify_dashboard_menu()
{
    add_theme_page(esc_html__('About Publishtify', 'publishtify'), esc_html__('About Publishtify', 'publishtify'), 'edit_theme_options', 'about-publishtify', 'publishtify_theme_info_display');
}
add_action('admin_menu', 'publishtify_dashboard_menu');
function publishtify_theme_info_display()
{ ?>
    <div class="dashboard-about-publishtify">
        <div class="publishtify-dashboard">
            <ul id="publishtify-dashboard-tabs-nav">
                <li><a href="#publishtify-welcome"><?php echo __('Get Started', 'publishtify') ?></a></li>
                <li><a href="#publishtify-setup"><?php echo __('Setup Instruction', 'publishtify') ?></a></li>
                <li><a href="#publishtify-comparision"><?php echo __('FREE VS PRO', 'publishtify') ?></a></li>
            </ul> <!-- END tabs-nav -->
            <div id="tabs-content">
                <div id="publishtify-welcome" class="tab-content">
                    <h1> <?php echo __('Welcome to the Publishtify - Perfect theme for Blogegrs', 'publishtify') ?></h1>
                    <p><?php echo __('Introducing Publishtify, the ultimate Full Site Editing (FSE) WordPress theme designed to empower you to create any type of website with unparalleled ease. With its innovative block-based approach and intuitive interface, publishtify allows you to effortlessly customize every aspect of your site, from headers to footers, to perfectly match your vision. Crafted with a focus on simplicity and versatility, publishtify\'s minimalistic design ensures that your content remains the center of attention, while its robust features provide the flexibility needed to bring your ideas to life. Whether you are a startup, motivational speakers, influencers, law firm, ideal blog, business, freelancer, or marketing agency or any type of Corporate website. publishtify offers the tools and flexibility you need to build a stunning, professional-grade website in no time. With a wide range of ready-to-use pre-built patterns, publishtify enables you to get your site up and running within minutes, eliminating the need for extensive customization. Say goodbye to limitations and hello to limitless possibilities with publishtify - the best FSE WordPress theme for unlocking your creativity effortlessly. Explore publishtify at https://cozythemes.com/publishtify-free-wordpress-theme/.
', 'publishtify') ?></p>
                    <h3><?php echo __('Required Plugins', 'publishtify'); ?></h3>
                    <p class="notice-text"><?php echo __('Please install and activate all recommended pluign to import the demo with "one click demo import" feature and unlock premium features!(for pro version)', 'publishtify') ?></p>
                    <ul class="publishtify-required-plugin">
                        <li>

                            <h4><?php echo __('1. Cozy Addons', 'publishtify'); ?>
                                <?php
                                if (publishtify_is_plugin_activated('cozy-addons/cozy-addons.php')) {
                                    echo __(': Plugin has been already activated!', 'publishtify');
                                } elseif (publishtify_is_plugin_installed('cozy-addons/cozy-addons.php')) {
                                    echo __(': Plugin does not activated, Activate the plugin to use one click demo import and unlock premium features.', 'publishtify');
                                } else {
                                    echo ': <a href="' . get_admin_url() . 'plugin-install.php?tab=plugin-information&plugin=cozy-addons&TB_iframe=true&width=600&height=550">' . esc_html__('Install and Activate', 'publishtify') . '</a>';
                                }
                                ?>
                            </h4>
                        </li>
                        <li>

                            <h4><?php echo __('2. Cozy Essential Addons', 'publishtify'); ?>
                                <?php
                                if (publishtify_is_plugin_activated('cozy-essential-addons/cozy-essential-addons.php')) {
                                    echo __(': Plugin has been already activated!', 'publishtify');
                                } elseif (publishtify_is_plugin_installed('cozy-essential-addons/cozy-essential-addons.php')) {
                                    echo __(': Plugin does not activated, Activate the plugin to use one click demo import and unlock premium features.', 'publishtify');
                                } else {
                                    echo ': <a href="' . get_admin_url() . 'plugin-install.php?tab=plugin-information&plugin=cozy-essential-addons&TB_iframe=true&width=600&height=550">' . esc_html__('Install and Activate', 'publishtify') . '</a>';
                                }
                                ?>
                            </h4>
                        </li>
                        <li>
                            <h4><?php echo __('3. Advanced Import - Need only to use "one click demo import" features', 'publishtify'); ?>
                                <?php
                                if (publishtify_is_plugin_activated('advanced-import/advanced-import.php')) {
                                    echo __(': Plugin has been already activated!', 'publishtify');
                                } elseif (publishtify_is_plugin_installed('advanced-import/advanced-import.php')) {
                                    echo __(': Plugin does not activated, Activate the plugin to use one click demo import feature.', 'publishtify');
                                } else {
                                    echo ': <a href="' . get_admin_url() . 'plugin-install.php?tab=plugin-information&plugin=advanced-import&TB_iframe=true&width=600&height=550">' . esc_html__('Install and Activate', 'publishtify') . '</a>';
                                }
                                ?>
                            </h4>
                        </li>
                    </ul>
                    <a href="#" id="install-activate-button" class="button admin-button info-button"><?php echo __('Getting started with a single click', 'publishtify'); ?></a>
                </div>
                <div id="publishtify-setup" class="tab-content">
                    <h3 class="publishtify-baisc-guideline-header"><?php echo __('Basic Theme Setup', 'publishtify') ?></h3>
                    <div class="publishtify-baisc-guideline">
                        <div class="featured-box">
                            <ul>
                                <li><strong><?php echo __('Setup Header Layout:', 'publishtify') ?></strong>
                                    <ul>
                                        <li> - <?php echo __('Go to Appearance -> Editor -> Patterns -> Template Parts -> Header:', 'publishtify') ?></li>
                                        <li> - <?php echo __('click on Header > Click on Edit (Icon) -> Add or Remove Requirend block/content as your requirement.:', 'publishtify') ?></li>
                                        <li> - <?php echo __('Click on save to update your layout', 'publishtify') ?></li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                        <div class="featured-box">
                            <ul>
                                <li><strong><?php echo __('Setup Footer Layout:', 'publishtify') ?></strong>
                                    <ul>
                                        <li> - <?php echo __('Go to Appearance -> Editor -> Patterns -> Template Parts -> Footer:', 'publishtify') ?></li>
                                        <li> - <?php echo __('click on Footer > Click on Edit (Icon) > Add or Remove Requirend block/content as your requirement.:', 'publishtify') ?></li>
                                        <li> - <?php echo __('Click on save to update your layout', 'publishtify') ?></li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                        <div class="featured-box">
                            <ul>
                                <li><strong><?php echo __('Setup Templates like Homepage/404/Search/Page/Single and more templates Layout:', 'publishtify') ?></strong>
                                    <ul>
                                        <li> - <?php echo __('Go to Appearance -> Editor -> Templates:', 'publishtify') ?></li>
                                        <li> - <?php echo __('click on Template(You need to edit/update) > Click on Edit (Icon) > Add or Remove Requirend block/content as your requirement.:', 'publishtify') ?></li>
                                        <li> - <?php echo __('Click on save to update your layout', 'publishtify') ?></li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                        <div class="featured-box">
                            <ul>
                                <li><strong><?php echo __('Restore/Reset Default Content layout of Template(Like: Frontpage/Blog/Archive etc.)', 'publishtify') ?></strong>
                                    <ul>
                                        <li> - <?php echo __('Go to Appearance -> Editor -> Templates:', 'publishtify') ?></li>
                                        <li> - <?php echo __('Click on Manage all Templates', 'publishtify') ?></li>
                                        <li> - <?php echo __('Click on 3 Dots icon at right side of respective Template', 'publishtify') ?></li>
                                        <li> - <?php echo __('Click on Clear Customization', 'publishtify') ?></li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                        <div class="featured-box">
                            <ul>
                                <li><strong><?php echo __('Restore/Reset Default Content layout of Template Parts(Header/Footer/Sidebar)', 'publishtify') ?></strong>
                                    <ul>
                                        <li> - <?php echo __('Go to Appearance -> Editor -> Patterns:', 'publishtify') ?></li>
                                        <li> - <?php echo __('Click on Manage All Template Parts', 'publishtify') ?></li>
                                        <li> - <?php echo __('Click on 3 Dots icon at right side of respective Template parts', 'publishtify') ?></li>
                                        <li> - <?php echo __('Click on Clear Customization', 'publishtify') ?></li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div id="publishtify-comparision" class="tab-content">
                    <div class="featured-list">
                        <div class="half-col free-features">
                            <h3><?php echo __('publishtify Features (Free)', 'publishtify') ?></h3>
                            <ul>
                                <li><strong> - <?php echo __('Publishtify offer wide range of  ready to use Home Sections Patterns', 'publishtify') ?></strong>
                                    <ul>
                                        <li><?php echo __('Hero Section', 'publishtify') ?></li>
                                        <li><?php echo __('Featured Banner Layout - 2', 'publishtify') ?></li>
                                        <li><?php echo __('Featured Post Grid Overlay', 'publishtify') ?></li>
                                        <li><?php echo __('Post List', 'publishtify') ?></li>
                                        <li><?php echo __('Post Grid', 'publishtify') ?></li>
                                        <li><?php echo __('Post Grid with Sidebar', 'publishtify') ?></li>
                                        <li><?php echo __('Post List with Sidebar', 'publishtify') ?></li>
                                        <li><?php echo __('Featured Section with Grid Layout', 'publishtify') ?></li>
                                        <li><?php echo __('Featured Section with List Layout', 'publishtify') ?></li>
                                    </ul>
                                </li>

                                <li> <strong>- <?php echo __('FSE Templates Ready', 'publishtify') ?></strong>
                                    <ul>
                                        <li> <?php echo __('404 Template', 'publishtify') ?></li>
                                        <li> <?php echo __('Archive Template', 'publishtify') ?></li>
                                        <li> <?php echo __('Blank Template', 'publishtify') ?></li>
                                        <li> <?php echo __('Front Page Template', 'publishtify') ?></li>
                                        <li> <?php echo __('Blog Home Template', 'publishtify') ?></li>
                                        <li> <?php echo __('Index Page Template', 'publishtify') ?></li>
                                        <li> <?php echo __('Search Template', 'publishtify') ?></li>
                                        <li> <?php echo __('Page Template', 'publishtify') ?></li>
                                        <li> <?php echo __('Full Width Page Template', 'publishtify') ?></li>
                                        <li> <?php echo __('Single Template', 'publishtify') ?></li>
                                    </ul>
                                <li>
                                <li><strong> - <?php echo __('Fully Customizable Header Layout', 'publishtify') ?></strong></li>
                                <li> <strong>- <?php echo __('Fully Customizable Footer Layout ', 'publishtify') ?></strong></li>
                                <li><strong> - <?php echo __('12+ Beautiful Fonts Option', 'publishtify') ?></strong></li>
                                <li> <strong>- <?php echo __('One Click Demo Import Features', 'publishtify') ?></strong></li>
                                <li> <strong>- <?php echo __('Access Cozy Blocks with upto 20+ Advanced Blocks for FSE and Gutenberg Editor', 'publishtify') ?></strong></li>
                            </ul>
                        </div>
                        <div class="half-col pro-features">
                            <h3><?php echo __('Premium Features', 'publishtify') ?></h3>
                            <p><?php echo __('Including all free features and comes with 30+ advanced blocks that enhance and power up the ecommerce website, here are some blocks that add the powerful features for your ecommerce/shopping website. By seamlessly integrating these blocks with our ready-to-use patterns, you have the flexibility to craft a wide selection of captivating online store ease', 'publishtify') ?></p>
                            <ul>
                                <li><?php echo __('Slider Block', 'publishtify') ?></li>
                                <li><?php echo __('Post slider Block', 'publishtify') ?></li>
                                <li><?php echo __('Post Grid/Carousel Block', 'publishtify') ?></li>
                                <li><?php echo __('Popular Post Block', 'publishtify') ?></li>
                                <li><?php echo __('Trending Post Block', 'publishtify') ?></li>
                                <li><?php echo __('Related Post Block', 'publishtify') ?></li>
                                <li><?php echo __('News Ticker Block', 'publishtify') ?></li>
                                <li><?php echo __('WooCommerce Blocks - 5', 'publishtify') ?></li>
                                <li><?php echo __('Social Shares Blocks', 'publishtify') ?></li>
                                <li><?php echo __('Social Icons Blocks', 'publishtify') ?></li>
                                <li><?php echo __('Breadcrumbs Block', 'publishtify') ?></li>
                                <li><?php echo __('Team Block', 'publishtify') ?></li>
                                <li><?php echo __('Testimonial Block', 'publishtify') ?></li>
                                <li><?php echo __('Portfolio Block with Custom Post Type', 'publishtify') ?></li>
                                <li><?php echo __('Popup buidler Block to display offer and flash sale', 'publishtify') ?>
                                    <?php echo __('and access', 'publishtify') ?> <a href="https://cozythemes.com/cozy-addons/" target="_blank"><?php echo __('Cozy Blocks with more than 30+ advanced block.', 'publishtify') ?></a>
                                </li>

                            </ul>
                            <br />
                            <a href="https://cozythemes.com/pricing-and-plans/" class="upgrade-btn button" target="_blank"><?php echo __('Upgrade to Pro', 'publishtify') ?></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php
}
