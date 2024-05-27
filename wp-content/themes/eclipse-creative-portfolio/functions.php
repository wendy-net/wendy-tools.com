<?php 

function eclipse_creative_portfolio_theme_gsap_script(){
    // The core GSAP library
    wp_enqueue_script( 'gsap-js', get_template_directory_uri() . '/assets/js/gsap.min.js', array(), false, true );
    // ScrollTrigger - with gsap.js passed as a dependency
    wp_enqueue_script( 'gsap-st', get_template_directory_uri() . '/assets/js/ScrollTrigger.min.js', array('gsap-js'), false, true );

    // Your animation code file - with gsap.js passed as a dependency
    wp_enqueue_script( 'gsap-js2', get_template_directory_uri() . '/assets/js/app.js', array('gsap-js'), false, true );
}

add_action( 'wp_enqueue_scripts', 'eclipse_creative_portfolio_theme_gsap_script' );

// Add block patterns
require get_template_directory() . '/inc/block-patterns.php';
require get_template_directory() . '/free-patterns.php';



function eclipse_creative_portfolio_notice() {
    $user_id = get_current_user_id();
    if ( !get_user_meta( $user_id, 'eclipse_creative_portfolio_notice_dismissed' ) ) {
 
        ?>
        <div class="updated notice notice-success is-dismissible notice-get-started-class" data-notice="get-start" style="display: flex-inline;padding: 10px;">
        <h2 style="color: #FFC300"><?php echo esc_html('☆☆☆☆☆', 'eclipse-creative-portfolio'); ?><br></h2>
            <p><?php echo esc_html('This is just a sample of what the Eclipse Creative Portifolio Template can do, the Premium Version is waiting for you!', 'eclipse-creative-portfolio'); ?></p>
            <a style="margin-top: 18px;" class="button button-primary" target="_blank"
               href="<?php echo esc_url('https://realtimethemes.com/theme/Corporate-Eclipse'); ?>"><?php esc_html_e('See Premium Version', 'eclipse-creative-portfolio') ?></a>
               <a href="?eclipse-creative-portfolio-dismissed" style="margin-top: 18px;" class="button button-secondary"><?php echo esc_html('Dismiss', 'eclipse-creative-portfolio'); ?></a>
        </div>
        <?php
        }
}
add_action( 'admin_notices', 'eclipse_creative_portfolio_notice' );
    
function eclipse_creative_portfolio_notice_dismissed() {
    $user_id = get_current_user_id();
    if ( isset( $_GET['eclipse-creative-portfolio-dismissed'] ) ) 
        add_user_meta( $user_id, 'eclipse_creative_portfolio_notice_dismissed', 'true', true );
}
add_action( 'admin_init', 'eclipse_creative_portfolio_notice_dismissed' );
?>