<?php 


/**
 * Registers block patterns and categories.
 *
 * @since 1.0
 *
 * @return void
 */

 function eclipse_creative_portfolio_wpdocs_block_pattern_category() {
	register_block_pattern_category( 'free-patterns', array(
		'label' => __( 'Free Paterns', 'eclipse-creative-portfolio' )
	) );
}

add_action( 'init', 'eclipse_creative_portfolio_wpdocs_block_pattern_category' );


 function eclipse_creative_portfolio_custom_register_block_patterns()
{
    register_block_pattern(
        'introduction-section', // Unique name for your pattern
        array(
            'title'       => __( 'Introduction Section', 'eclipse-creative-portfolio' ), // Title displayed in the block editor
            'description' => 'Introduction of our company/website', // Description of your pattern

            'content'     => '<!-- wp:group {"style":{"spacing":{"padding":{"right":"var:preset|spacing|80","left":"var:preset|spacing|80","top":"var:preset|spacing|80","bottom":"var:preset|spacing|80"}}},"backgroundColor":"second","className":"hero_bg","layout":{"type":"default"},"metadata":{"name":"Welcome Hero"}} -->
            <div class="wp-block-group hero_bg has-second-background-color has-background" style="padding-top:var(--wp--preset--spacing--80);padding-right:var(--wp--preset--spacing--80);padding-bottom:var(--wp--preset--spacing--80);padding-left:var(--wp--preset--spacing--80)"><!-- wp:heading {"level":1,"style":{"typography":{"lineHeight":"1"},"spacing":{"padding":{"right":"var:preset|spacing|80","left":"var:preset|spacing|80"}}},"className":"title testegsap","fontSize":"XX-Large","fontFamily":"sans-serif"} -->
            <h1 class="wp-block-heading title testegsap has-sans-serif-font-family has-xx-large-font-size" style="padding-right:var(--wp--preset--spacing--80);padding-left:var(--wp--preset--spacing--80);line-height:1">Welcome to </h1>
            <!-- /wp:heading -->
            
            <!-- wp:heading {"level":1,"style":{"typography":{"lineHeight":"1"},"spacing":{"padding":{"right":"var:preset|spacing|80","left":"var:preset|spacing|80"}}},"className":"title testegsap2","fontSize":"XX-Large","fontFamily":"sans-serif"} -->
            <h1 class="wp-block-heading title testegsap2 has-sans-serif-font-family has-xx-large-font-size" style="padding-right:var(--wp--preset--spacing--80);padding-left:var(--wp--preset--spacing--80);line-height:1">Eclipse</h1>
            <!-- /wp:heading --></div>
            <!-- /wp:group -->
            
            <!-- wp:group {"style":{"spacing":{"padding":{"right":"0","left":"0"}}},"backgroundColor":"third","className":"text_intro","layout":{"type":"constrained"},"metadata":{"name":"Introduction"}} -->
            <div class="wp-block-group text_intro has-third-background-color has-background" style="padding-right:0;padding-left:0"><!-- wp:paragraph {"style":{"elements":{"link":{"color":{"text":"var:preset|color|fortext"}}},"typography":{"lineHeight":"2"},"spacing":{"padding":{"top":"var:preset|spacing|80","bottom":"var:preset|spacing|80"},"margin":{"top":"0"}}},"textColor":"fortext","className":"justify h1_intro","fontSize":"Large"} -->
            <p class="justify h1_intro has-fortext-color has-text-color has-link-color has-large-font-size" style="margin-top:0;padding-top:var(--wp--preset--spacing--80);padding-bottom:var(--wp--preset--spacing--80);line-height:2">We are a passionate collective of visionary creators, dedicated to crafting unique and compelling experiences that captivate audiences and leave a lasting impact. Our team thrives on pushing boundaries, exploring new ideas, and transforming concepts into reality. Together, we are committed to delivering excellence in every project we undertake, inspiring others to see the world in a different light.</p>
            <!-- /wp:paragraph -->
            
            <!-- wp:spacer {"height":"141px"} -->
            <div style="height:141px" aria-hidden="true" class="wp-block-spacer"></div>
            <!-- /wp:spacer --></div>
            <!-- /wp:group -->', // HTML content of your pattern
            'categories'  => array('free-patterns'), // Category under which your pattern should appear
            'keywords'    => array('custom', 'pattern', 'my'), // Keywords to help users find your pattern
        )
    );

    register_block_pattern(
        'about-section', // Unique name for your pattern
        array(
            'title'       =>  __( 'About Section', 'eclipse-creative-portfolio' ), // Title displayed in the block editor
            'description' => 'Know our company/website', // Description of your pattern

            'content'     => '<!-- wp:group {"style":{"spacing":{"padding":{"right":"var:preset|spacing|80","left":"var:preset|spacing|80","top":"var:preset|spacing|80","bottom":"var:preset|spacing|80"}}},"gradient":"transition","className":"about_section","layout":{"type":"default"},"metadata":{"name":"About"}} -->
            <div class="wp-block-group about_section has-transition-gradient-background has-background" style="padding-top:var(--wp--preset--spacing--80);padding-right:var(--wp--preset--spacing--80);padding-bottom:var(--wp--preset--spacing--80);padding-left:var(--wp--preset--spacing--80)"><!-- wp:group {"style":{"spacing":{"padding":{"right":"var:preset|spacing|80","left":"var:preset|spacing|80"}}},"layout":{"type":"default"}} -->
            <div class="wp-block-group" style="padding-right:var(--wp--preset--spacing--80);padding-left:var(--wp--preset--spacing--80)"><!-- wp:columns -->
            <div class="wp-block-columns"><!-- wp:column -->
            <div class="wp-block-column"><!-- wp:image {"id":285,"sizeSlug":"full","linkDestination":"none","className":"img_about"} -->
            <figure class="wp-block-image size-full img_about"><img src="' . esc_url( get_theme_file_uri( '/assets/images/company.png' ) ) . '" alt="" class="wp-image-285"/></figure>
            <!-- /wp:image --></div>
            <!-- /wp:column -->
            
            <!-- wp:column -->
            <div class="wp-block-column"></div>
            <!-- /wp:column -->
            
            <!-- wp:column -->
            <div class="wp-block-column"></div>
            <!-- /wp:column --></div>
            <!-- /wp:columns -->
            
            <!-- wp:columns -->
            <div class="wp-block-columns"><!-- wp:column -->
            <div class="wp-block-column"></div>
            <!-- /wp:column -->
            
            <!-- wp:column -->
            <div class="wp-block-column"></div>
            <!-- /wp:column -->
            
            <!-- wp:column {"className":"text_about"} -->
            <div class="wp-block-column text_about"><!-- wp:heading {"fontSize":"Large"} -->
            <h2 class="wp-block-heading has-large-font-size"><strong><strong>THE PROCESS</strong></strong></h2>
            <!-- /wp:heading -->
            
            <!-- wp:paragraph {"style":{"elements":{"link":{"color":{"text":"var:preset|color|white"}}},"typography":{"fontStyle":"normal","fontWeight":"400"},"spacing":{"padding":{"top":"0","bottom":"0"}}},"textColor":"white","fontSize":"medium","fontFamily":"nunito-sans"} -->
            <p class="has-white-color has-text-color has-link-color has-nunito-sans-font-family has-medium-font-size" style="padding-top:0;padding-bottom:0;font-style:normal;font-weight:400">Our process is a harmonious blend of strategy and spontaneity.</p>
            <!-- /wp:paragraph -->
            
            <!-- wp:spacer -->
            <div style="height:100px" aria-hidden="true" class="wp-block-spacer"></div>
            <!-- /wp:spacer -->
            
            <!-- wp:heading {"fontSize":"Large"} -->
            <h2 class="wp-block-heading has-large-font-size"><strong>THE APPROACH</strong></h2>
            <!-- /wp:heading -->
            
            <!-- wp:paragraph {"align":"left","style":{"elements":{"link":{"color":{"text":"var:preset|color|white"}}},"typography":{"fontStyle":"normal","fontWeight":"400"},"spacing":{"padding":{"right":"0","left":"0","top":"0","bottom":"0"}}},"textColor":"white","fontSize":"medium","fontFamily":"nunito-sans"} -->
            <p class="has-text-align-left has-white-color has-text-color has-link-color has-nunito-sans-font-family has-medium-font-size" style="padding-top:0;padding-right:0;padding-bottom:0;padding-left:0;font-style:normal;font-weight:400">Our approach is a symphony of imagination, strategy, and innovation.</p>
            <!-- /wp:paragraph --></div>
            <!-- /wp:column --></div>
            <!-- /wp:columns --></div>
            <!-- /wp:group --></div>
            <!-- /wp:group -->', // HTML content of your pattern
              'categories'  => array('free-patterns'), // Category under which your pattern should appear
            'keywords'    => array('custom', 'pattern', 'my'), // Keywords to help users find your pattern
        )
    );

    register_block_pattern(
        'single-post', // Unique name for your pattern
        array(
            'title'       => __( 'Single Post', 'eclipse-creative-portfolio' ), // Title displayed in the block editor
            'description' => 'Article of Blog/News list', // Description of your pattern

            'content'     => '<!-- wp:group {"style":{"spacing":{"padding":{"right":"var:preset|spacing|80","left":"var:preset|spacing|80","top":"0","bottom":"var:preset|spacing|80"}}},"gradient":"transition-three","className":"content_mobile_header","layout":{"type":"default"},"metadata":{"name":"Heading Project"}} -->
<div class="wp-block-group content_mobile_header has-transition-three-gradient-background has-background" style="padding-top:0;padding-right:var(--wp--preset--spacing--80);padding-bottom:var(--wp--preset--spacing--80);padding-left:var(--wp--preset--spacing--80)"><!-- wp:post-title {"textAlign":"center","style":{"typography":{"textTransform":"uppercase"}},"className":"title","fontSize":"XX-Large","fontFamily":"sans-serif"} /-->

<!-- wp:paragraph {"align":"center","style":{"spacing":{"padding":{"top":"0","bottom":"var:preset|spacing|80","left":"0","right":"0"}},"elements":{"link":{"color":{"text":"var:preset|color|fifth"}}},"typography":{"fontStyle":"normal","fontWeight":"500"}},"textColor":"fifth","fontSize":"Large"} -->
<p class="has-text-align-center has-fifth-color has-text-color has-link-color has-large-font-size" style="padding-top:0;padding-right:0;padding-bottom:var(--wp--preset--spacing--80);padding-left:0;font-style:normal;font-weight:500">BRAND IDENTITY</p>
<!-- /wp:paragraph -->

<!-- wp:separator -->
<hr class="wp-block-separator has-alpha-channel-opacity"/>
<!-- /wp:separator -->

<!-- wp:columns -->
<div class="wp-block-columns"><!-- wp:column -->
<div class="wp-block-column"><!-- wp:paragraph {"align":"center","style":{"spacing":{"padding":{"top":"0","bottom":"0","left":"0","right":"0"}}},"fontSize":"medium"} -->
<p class="has-text-align-center has-medium-font-size" style="padding-top:0;padding-right:0;padding-bottom:0;padding-left:0">Autor</p>
<!-- /wp:paragraph -->

<!-- wp:post-author-name {"textAlign":"center","style":{"elements":{"link":{"color":{"text":"var:preset|color|fifth"}}},"typography":{"fontStyle":"normal","fontWeight":"500"}},"textColor":"fifth","fontSize":"Large"} /--></div>
<!-- /wp:column -->

<!-- wp:column -->
<div class="wp-block-column"><!-- wp:paragraph {"align":"center","style":{"spacing":{"padding":{"top":"0","bottom":"0"}}},"fontSize":"medium"} -->
<p class="has-text-align-center has-medium-font-size" style="padding-top:0;padding-bottom:0">Published</p>
<!-- /wp:paragraph -->

<!-- wp:post-date {"textAlign":"center","style":{"elements":{"link":{"color":{"text":"var:preset|color|fifth"}}},"typography":{"fontStyle":"normal","fontWeight":"500"}},"textColor":"fifth","fontSize":"Large"} /--></div>
<!-- /wp:column -->

<!-- wp:column -->
<div class="wp-block-column"><!-- wp:paragraph {"align":"center","style":{"spacing":{"padding":{"top":"0","bottom":"0"}}},"fontSize":"medium"} -->
<p class="has-text-align-center has-medium-font-size" style="padding-top:0;padding-bottom:0">Tags</p>
<!-- /wp:paragraph -->

<!-- wp:post-terms {"term":"post_tag","style":{"elements":{"link":{"color":{"text":"var:preset|color|fifth"}}},"typography":{"fontStyle":"normal","fontWeight":"500"}},"textColor":"fifth","fontSize":"medium"} /--></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"content_mobile","layout":{"type":"default"},"metadata":{"name":"Project Details"}} -->
<div class="wp-block-group content_mobile"><!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|80","bottom":"var:preset|spacing|80","left":"0","right":"0"}}},"backgroundColor":"dark","layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"center"},"metadata":{"name":"Project Image"}} -->
<div class="wp-block-group has-dark-background-color has-background" style="padding-top:var(--wp--preset--spacing--80);padding-right:0;padding-bottom:var(--wp--preset--spacing--80);padding-left:0"><!-- wp:post-featured-image /--></div>
<!-- /wp:group -->

<!-- wp:group {"backgroundColor":"dark","layout":{"type":"constrained"},"metadata":{"name":"About"}} -->
<div class="wp-block-group has-dark-background-color has-background"><!-- wp:post-content /--></div>
<!-- /wp:group --></div>
<!-- /wp:group -->', // HTML content of your pattern
              'categories'  => array('free-patterns'), // Category under which your pattern should appear
            'keywords'    => array('custom', 'pattern', 'my'), // Keywords to help users find your pattern
        )
    );

    register_block_pattern(
        'not-found', // Unique name for your pattern
        array(
            'title'       => __( 'Not Found - Error 404', 'eclipse-creative-portfolio' ), // Title displayed in the block editor
            'description' => 'Pages that doesnt exist', // Description of your pattern

            'content'     => '
            <!-- wp:group {"style":{"spacing":{"padding":{"right":"var:preset|spacing|80","left":"var:preset|spacing|80","top":"0","bottom":"0"}}},"gradient":"transition-three","className":"mobile_404","layout":{"type":"default"},"metadata":{"name":"Heading"}} -->
            <div class="wp-block-group mobile_404 has-transition-three-gradient-background has-background" style="padding-top:0;padding-right:var(--wp--preset--spacing--80);padding-bottom:0;padding-left:var(--wp--preset--spacing--80)"><!-- wp:group {"style":{"spacing":{"padding":{"right":"var:preset|spacing|80","left":"var:preset|spacing|80","top":"var:preset|spacing|80","bottom":"var:preset|spacing|80"},"margin":{"top":"0","bottom":"0"}}},"layout":{"type":"default"}} -->
            <div class="wp-block-group" style="margin-top:0;margin-bottom:0;padding-top:var(--wp--preset--spacing--80);padding-right:var(--wp--preset--spacing--80);padding-bottom:var(--wp--preset--spacing--80);padding-left:var(--wp--preset--spacing--80)"><!-- wp:heading {"textAlign":"center","className":"title","fontSize":"XX-Large","fontFamily":"sans-serif"} -->
            <h2 class="wp-block-heading has-text-align-center title has-sans-serif-font-family has-xx-large-font-size">not found</h2>
            <!-- /wp:heading -->
            
            <!-- wp:heading {"textAlign":"center","style":{"typography":{"fontStyle":"normal","fontWeight":"500"}},"className":"text_404","fontSize":"XX-Large","fontFamily":"sans-serif"} -->
            <h2 class="wp-block-heading has-text-align-center text_404 has-sans-serif-font-family has-xx-large-font-size" style="font-style:normal;font-weight:500">error 404</h2>
            <!-- /wp:heading -->
            
            <!-- wp:spacer -->
            <div style="height:100px" aria-hidden="true" class="wp-block-spacer"></div>
            <!-- /wp:spacer -->
            
            <!-- wp:paragraph {"align":"center","style":{"spacing":{"padding":{"top":"var:preset|spacing|60","bottom":"var:preset|spacing|60"}}},"fontSize":"Large"} -->
            <p class="has-text-align-center has-large-font-size" style="padding-top:var(--wp--preset--spacing--60);padding-bottom:var(--wp--preset--spacing--60)">Oops! The page you are looking for could not be found. It may have been moved or deleted.</p>
            <!-- /wp:paragraph --></div>
            <!-- /wp:group --></div>
            <!-- /wp:group -->', // HTML content of your pattern
              'categories'  => array('free-patterns'), // Category under which your pattern should appear
            'keywords'    => array('custom', 'pattern', 'my'), // Keywords to help users find your pattern
        )
    );
    register_block_pattern(
        'our-team', // Unique name for your pattern
        array(
            'title'       => __( 'Our Team', 'eclipse-creative-portfolio' ), // Title displayed in the block editor
            'description' => 'Show the company/website team', // Description of your pattern

            'content'     => '<!-- wp:group {"style":{"spacing":{"padding":{"right":"0","left":"0","top":"var:preset|spacing|80","bottom":"var:preset|spacing|80"}}},"backgroundColor":"second","className":"team_section","layout":{"type":"default"},"metadata":{"name":"Our Team"}} -->
            <div class="wp-block-group team_section has-second-background-color has-background" style="padding-top:var(--wp--preset--spacing--80);padding-right:0;padding-bottom:var(--wp--preset--spacing--80);padding-left:0"><!-- wp:heading {"textAlign":"center","level":1,"style":{"spacing":{"padding":{"bottom":"var:preset|spacing|80"}}},"className":"title","fontSize":"XX-Large","fontFamily":"sans-serif"} -->
            <h1 class="wp-block-heading has-text-align-center title has-sans-serif-font-family has-xx-large-font-size" style="padding-bottom:var(--wp--preset--spacing--80)">our team</h1>
            <!-- /wp:heading -->
            
            <!-- wp:group {"style":{"spacing":{"padding":{"right":"var:preset|spacing|80","left":"var:preset|spacing|80"}}},"layout":{"type":"flex","flexWrap":"wrap","justifyContent":"center"}} -->
            <div class="wp-block-group" style="padding-right:var(--wp--preset--spacing--80);padding-left:var(--wp--preset--spacing--80)"><!-- wp:media-text {"mediaId":73,"mediaLink":"/wp-content/themes/eclipse-creative-portfolio/assets/member-1","mediaType":"image","mediaSizeSlug":"full","verticalAlignment":"center","imageFill":false} -->
            <div class="wp-block-media-text is-stacked-on-mobile is-vertically-aligned-center"><figure class="wp-block-media-text__media"><img src="' . esc_url( get_theme_file_uri( '/assets/images/member-1.jpg' ) ) . '" alt="" class="wp-image-73 size-full"/></figure><div class="wp-block-media-text__content"><!-- wp:heading {"textAlign":"center"} -->
            <h2 class="wp-block-heading has-text-align-center"><strong>Matthew Sullivan</strong></h2>
            <!-- /wp:heading -->
            
            <!-- wp:paragraph {"align":"center","style":{"typography":{"fontStyle":"normal","fontWeight":"300"},"spacing":{"padding":{"top":"0","bottom":"0"}},"elements":{"link":{"color":{"text":"var:preset|color|fifth"}}}},"textColor":"fifth","fontSize":"medium","fontFamily":"nunito-sans"} -->
            <p class="has-text-align-center has-fifth-color has-text-color has-link-color has-nunito-sans-font-family has-medium-font-size" style="padding-top:0;padding-bottom:0;font-style:normal;font-weight:300"><strong>Founder</strong></p>
            <!-- /wp:paragraph --></div></div>
            <!-- /wp:media-text -->
            
            <!-- wp:media-text {"mediaId":73,"mediaLink":"/wp-content/themes/eclipse-creative-portfolio/assets/member-1","mediaType":"image","mediaSizeSlug":"full","imageFill":false} -->
            <div class="wp-block-media-text is-stacked-on-mobile"><figure class="wp-block-media-text__media"><img src="' . esc_url( get_theme_file_uri( '/assets/images/member-1.jpg' ) ) . '" alt="" class="wp-image-73 size-full"/></figure><div class="wp-block-media-text__content"><!-- wp:heading {"textAlign":"center"} -->
            <h2 class="wp-block-heading has-text-align-center"><strong><strong>Jackson Rivera</strong></strong></h2>
            <!-- /wp:heading -->
            
            <!-- wp:paragraph {"align":"center","style":{"typography":{"fontStyle":"normal","fontWeight":"300"},"spacing":{"padding":{"top":"0","bottom":"0"}},"elements":{"link":{"color":{"text":"var:preset|color|fifth"}}}},"textColor":"fifth","fontSize":"medium","fontFamily":"nunito-sans"} -->
            <p class="has-text-align-center has-fifth-color has-text-color has-link-color has-nunito-sans-font-family has-medium-font-size" style="padding-top:0;padding-bottom:0;font-style:normal;font-weight:300"><strong>Art Director</strong></p>
            <!-- /wp:paragraph --></div></div>
            <!-- /wp:media-text -->
            
            <!-- wp:media-text {"mediaId":73,"mediaLink":"/wp-content/themes/eclipse-creative-portfolio/assets/member-1","mediaType":"image","mediaSizeSlug":"full","imageFill":false} -->
            <div class="wp-block-media-text is-stacked-on-mobile"><figure class="wp-block-media-text__media"><img src="' . esc_url( get_theme_file_uri( '/assets/images/member-1.jpg' ) ) . '" alt="" class="wp-image-73 size-full"/></figure><div class="wp-block-media-text__content"><!-- wp:heading {"textAlign":"center"} -->
            <h2 class="wp-block-heading has-text-align-center"><strong><strong>Sophia Patel</strong></strong></h2>
            <!-- /wp:heading -->
            
            <!-- wp:paragraph {"align":"center","style":{"typography":{"fontStyle":"normal","fontWeight":"300"},"spacing":{"padding":{"top":"0","bottom":"0"}},"elements":{"link":{"color":{"text":"var:preset|color|fifth"}}}},"textColor":"fifth","fontSize":"medium","fontFamily":"nunito-sans"} -->
            <p class="has-text-align-center has-fifth-color has-text-color has-link-color has-nunito-sans-font-family has-medium-font-size" style="padding-top:0;padding-bottom:0;font-style:normal;font-weight:300"><strong>UX Designer</strong></p>
            <!-- /wp:paragraph --></div></div>
            <!-- /wp:media-text -->
            
            <!-- wp:media-text {"mediaId":73,"mediaLink":"/wp-content/themes/eclipse-creative-portfolio/assets/member-1","mediaType":"image","mediaSizeSlug":"full","imageFill":false} -->
            <div class="wp-block-media-text is-stacked-on-mobile"><figure class="wp-block-media-text__media"><img src="' . esc_url( get_theme_file_uri( '/assets/images/member-1.jpg' ) ) . '" alt="" class="wp-image-73 size-full"/></figure><div class="wp-block-media-text__content"><!-- wp:heading {"textAlign":"center"} -->
            <h2 class="wp-block-heading has-text-align-center"><strong><strong>Christopher Walker</strong></strong></h2>
            <!-- /wp:heading -->
            
            <!-- wp:paragraph {"align":"center","style":{"typography":{"fontStyle":"normal","fontWeight":"300"},"spacing":{"padding":{"top":"0","bottom":"0"}},"elements":{"link":{"color":{"text":"var:preset|color|fifth"}}}},"textColor":"fifth","fontSize":"medium","fontFamily":"nunito-sans"} -->
            <p class="has-text-align-center has-fifth-color has-text-color has-link-color has-nunito-sans-font-family has-medium-font-size" style="padding-top:0;padding-bottom:0;font-style:normal;font-weight:300"><strong>Web Developer</strong></p>
            <!-- /wp:paragraph --></div></div>
            <!-- /wp:media-text --></div>
            <!-- /wp:group --></div>
            <!-- /wp:group -->', // HTML content of your pattern
              'categories'  => array('free-patterns'), // Category under which your pattern should appear
            'keywords'    => array('custom', 'pattern', 'my'), // Keywords to help users find your pattern
        )
    );
    register_block_pattern(
        'marquee', // Unique name for your pattern
        array(
            'title'       => __( 'Marquee', 'eclipse-creative-portfolio' ), // Title displayed in the block editor
            'description' => 'Show the marquee feature', // Description of your pattern

            'content'     => '<!-- wp:group {"style":{"spacing":{"padding":{"right":"0","left":"0","top":"var:preset|spacing|80","bottom":"var:preset|spacing|80"}},"elements":{"link":{"color":{"text":"var:preset|color|fifth"}}}},"backgroundColor":"dark","textColor":"fifth","layout":{"type":"default"},"metadata":{"name":"Marquee"}} -->
            <div class="wp-block-group has-fifth-color has-dark-background-color has-text-color has-background has-link-color" style="padding-top:var(--wp--preset--spacing--80);padding-right:0;padding-bottom:var(--wp--preset--spacing--80);padding-left:0"><!-- wp:html -->
            <marquee class="marquee1" scrollamount="20">An award-winning agency trusted by thousands of clients .&nbsp; An award-winning agency trusted by thousands of clients .&nbsp;</marquee>
            <marquee class="marquee2" direction="right" scrollamount="20">An award-winning agency trusted by thousands of clients .&nbsp; An award-winning agency trusted by thousands of clients .&nbsp;</marquee>
            <!-- /wp:html --></div>
            <!-- /wp:group -->', // HTML content of your pattern
              'categories'  => array('free-patterns'), // Category under which your pattern should appear
            'keywords'    => array('custom', 'pattern', 'my'), // Keywords to help users find your pattern
        )
    );
    register_block_pattern(
        'our-works', // Unique name for your pattern
        array(
            'title'       => __( 'Our Works', 'eclipse-creative-portfolio' ), // Title displayed in the block editor
            'description' => 'Show a list of Works', // Description of your pattern

            'content'     => '<!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|80","bottom":"var:preset|spacing|80"}}},"backgroundColor":"dark","className":"our_works_home","layout":{"type":"default"},"metadata":{"name":"Our Works"}} -->
            <div class="wp-block-group our_works_home has-dark-background-color has-background" style="padding-top:var(--wp--preset--spacing--80);padding-bottom:var(--wp--preset--spacing--80)"><!-- wp:group {"style":{"spacing":{"padding":{"bottom":"var:preset|spacing|80"}}},"className":"text_our_works","layout":{"type":"default"}} -->
            <div class="wp-block-group text_our_works" style="padding-bottom:var(--wp--preset--spacing--80)"><!-- wp:heading {"textAlign":"center","level":1,"className":"title h1_our_works","fontSize":"XX-Large","fontFamily":"sans-serif"} -->
            <h1 class="wp-block-heading has-text-align-center title h1_our_works has-sans-serif-font-family has-xx-large-font-size">our works</h1>
            <!-- /wp:heading --></div>
            <!-- /wp:group -->
            
            <!-- wp:group {"style":{"spacing":{"padding":{"right":"var:preset|spacing|80","left":"var:preset|spacing|80"}}},"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"center"}} -->
            <div class="wp-block-group" style="padding-right:var(--wp--preset--spacing--80);padding-left:var(--wp--preset--spacing--80)"><!-- wp:latest-posts {"postsToShow":10,"columns":2,"displayFeaturedImage":true,"featuredImageSizeSlug":"large","featuredImageSizeWidth":768,"featuredImageSizeHeight":768,"align":"center","style":{"elements":{"link":{"color":{"text":"var:preset|color|white"}}},"typography":{"fontStyle":"normal","fontWeight":"500","textTransform":"uppercase"},"spacing":{"padding":{"top":"var:preset|spacing|80","bottom":"var:preset|spacing|80"},"margin":{"top":"0","bottom":"0"}},"layout":{"selfStretch":"fit","flexSize":null}},"textColor":"white","fontSize":"X-Large","fontFamily":"nunito-sans"} /--></div>
            <!-- /wp:group -->
            
            <!-- wp:buttons {"layout":{"type":"flex","justifyContent":"center"}} -->
            <div class="wp-block-buttons"><!-- wp:button {"style":{"color":{"background":"#ffffff00"},"border":{"width":"4px"},"typography":{"fontStyle":"normal","fontWeight":"500","textTransform":"uppercase"}},"fontSize":"Large","fontFamily":"nunito-sans"} -->
            <div class="wp-block-button has-custom-font-size has-nunito-sans-font-family has-large-font-size" style="font-style:normal;font-weight:500;text-transform:uppercase"><a class="wp-block-button__link has-background wp-element-button" style="border-width:4px;background-color:#ffffff00">View More</a></div>
            <!-- /wp:button --></div>
            <!-- /wp:buttons --></div>
            <!-- /wp:group -->', // HTML content of your pattern
              'categories'  => array('free-patterns'), // Category under which your pattern should appear
            'keywords'    => array('custom', 'pattern', 'my'), // Keywords to help users find your pattern
        )
    );

}

add_action('init', 'eclipse_creative_portfolio_custom_register_block_patterns');

?>