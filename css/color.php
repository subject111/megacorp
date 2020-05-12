<?php


/** Set ABSPATH for execution */
define( 'ABSPATH', dirname(dirname(__FILE__)) . '/' );
define( 'WPINC', 'wp-includes' );


/**
 * @ignore
 */
function add_filter() {}

/**
 * @ignore
 */
function esc_attr($str) {return $str;}

/**
 * @ignore
 */
function apply_filters() {}

/**
 * @ignore
 */
function get_option() {}

/**
 * @ignore
 */
function is_lighttpd_before_150() {}

/**
 * @ignore
 */
function add_action() {}

/**
 * @ignore
 */
function did_action() {}

/**
 * @ignore
 */
function do_action_ref_array() {}

/**
 * @ignore
 */
function get_bloginfo() {}

/**
 * @ignore
 */
function is_admin() {return true;}

/**
 * @ignore
 */
function site_url() {}

/**
 * @ignore
 */
function admin_url() {}

/**
 * @ignore
 */
function home_url() {}

/**
 * @ignore
 */
function includes_url() {}

/**
 * @ignore
 */
function wp_guess_url() {}

if ( ! function_exists( 'json_encode' ) ) :
/**
 * @ignore
 */
function json_encode() {}
endif;



/* Convert hexdec color string to rgb(a) string */
 
function hex2rgba($color, $opacity = false) {
 
	$default = 'rgb(0,0,0)';
 
	//Return default if no color provided
	if(empty($color))
          return $default; 
 
	//Sanitize $color if "#" is provided 
        if ($color[0] == '#' ) {
        	$color = substr( $color, 1 );
        }
 
        //Check if color has 6 or 3 characters and get values
        if (strlen($color) == 6) {
                $hex = array( $color[0] . $color[1], $color[2] . $color[3], $color[4] . $color[5] );
        } elseif ( strlen( $color ) == 3 ) {
                $hex = array( $color[0] . $color[0], $color[1] . $color[1], $color[2] . $color[2] );
        } else {
                return $default;
        }
 
        //Convert hexadec to rgb
        $rgb =  array_map('hexdec', $hex);
 
        //Check if opacity is set(rgba or rgb)
        if($opacity){
        	if(abs($opacity) > 1)
        		$opacity = 1.0;
        	$output = 'rgba('.implode(",",$rgb).','.$opacity.')';
        } else {
        	$output = 'rgb('.implode(",",$rgb).')';
        }
 
        //Return rgb(a) color string
        return $output;
}
$yellow = $_GET['main_color'];

ob_start(); ?>

@charset "utf-8";
/* Theme Color */

.theme-btn-s4,
.theme-btn-s3:hover,
.page-title .breadcrumb li,
.page-title .breadcrumb li a:hover,
.team-grids .owl-controls .owl-nav .owl-prev:hover,
.team-grids .owl-controls .owl-nav .owl-next:hover,
.products-grids .product-info .rating i,
.topbar-style-1 .topbar-contact-info > div > i, .topbar-style-2 .topbar-contact-info > div > i,
.cart-contact .top-cart-content .top-cart-item-des a:hover,
.header-style-3 .topbar-contact-info p,
.header-style-3 .topbar-style-2 .details > span,
.header-style-3 #navbar > ul > li > a:hover,
.header-style-3 .cart-contact .mini-cart > button i:before,
  .header-style-3 .cart-contact .mini-cart > button,
.header-style-4 .topbar-style-2 .topbar-contact-info p, .header-style-5 .topbar-style-2 .topbar-contact-info p,
.header-style-4 .social > span, .header-style-5 .social > span,
.header-style-5 .lower-topbar .awards .icon .fi:before,
.hero .hero-slider .slide-caption > h2 span,
.site-footer .upper-footer a:hover,
.site-footer .about-widget ul li i,
.site-footer .service-links-widget ul li:before,
.site-footer .copyright-info a,
.header-style-3 .sticky-header #navbar > ul > li > a:hover,
.testimonials-slider .slide-item:before,
.testimonials-slider .client-info h4,
.offer-grids .details .offer-details,
.recent-projects-grids .inner-info .tags,
.projects-grid-view .inner-info .tags,
.about-us-section .social-links a:hover,
.contact-section-contact-box .details ul i,
.contact-form-s1 label,
.news-grids .entry-meta ul li i,
.news-grids .entry-body h3 a:hover,
.cta h2 span,
.service-s2-tab .details .more,
.fun-fact .grid h3 > span:last-child,
.cta-newsletter .cta-newsletter-inner h3 span,
.testimoials-s2-slider .client-info .rating i,
.testimoials-s2-grid-view .client-info .rating i,
.testimoials-s2-slider .owl-controls .owl-nav .owl-prev:hover,
.testimoials-s2-slider .owl-controls .owl-nav .owl-next:hover,
.testimoials-s2-grid-view .owl-controls .owl-nav .owl-prev:hover,
.testimoials-s2-grid-view .owl-controls .owl-nav .owl-next:hover,
.feature-grid .more,
.pricing .pricing-tab li a,
.pricing .pricing-grids .pricing-header h3,
.pricing .pricing-grids .pricing-body ul li i,
.pricing .pricing-grids .pricing-footer a:hover,
.project-single-section .project-info i,
.shop-details-main-content .product-details .rating i,
.hero.hero-slider-wrapper h2 span,
.offer-grids .details .offer-details:hover,
.blog-list-section .entry-meta li i,
.blog-list-section .entry-meta li a:hover,
.blog-sidebar .search-widget button,
.blog-sidebar .news-letter-widget button
{
	color: #<?php echo esc_attr($yellow); ?>;
}



/*Background Color*/
.services-grids .grid:hover .details,
.theme-btn-s4:hover,
.back-to-top:hover,
.section-title h2:before, .section-title-white h2:before, .section-title-s2 h2:before, .section-title-s5 h2:before, .section-title-s6 h2:before, .section-title-s7 h2:before,
.section-title-s3 h2:before, .section-title-s4 h2:before,
.theme-btn, .theme-btn-s2, .theme-btn-s3, .theme-btn-s5,
.theme-btn-s2:hover,
.theme-btn-s5:hover,
.dots-s1 .owl-dots .owl-dot.active span,
.dots-s1 .owl-dots .owl-dot:hover span,
.slider-arrow-s1 .owl-controls .owl-nav .owl-prev,
.slider-arrow-s1 .owl-controls .owl-nav .owl-next,
.theme-accordion-s1 .panel-heading a,
.service-single-sidebar .services-link-widget ul li a:hover,
.service-single-sidebar .services-link-widget ul li.current a,
.service-single-sidebar .download-brocher-widget a,
.pagination-wrapper .pg-pagination .active a,
.pagination-wrapper .pg-pagination li a:hover,
.style-switcher-box button,
.style-switcher-box .layout ul li,
.site-header #navbar > ul > li .sub-menu a:hover,
.header-style-1 #navbar > ul > li > a:before, .header-style-2 #navbar > ul > li > a:before, .header-style-3 #navbar > ul > li > a:before, .header-style-4 #navbar > ul > li > a:before, .header-style-5 #navbar > ul > li > a:before, .header-style-6 #navbar > ul > li > a:before,
.header-style-5 .navigation,
  .header-style-5 .navigation .container,
.hero .slick-prev,
.hero .slick-next,
.hero .slick-dots li button,
.site-footer .widget > h3:before,
.site-footer .widget .footer-logo:before,
.header-style-5 .sticky-header,
.recent-projects-grids .mCSB_scrollTools .mCSB_dragger .mCSB_dragger_bar,
.projects-grid-view .mCSB_scrollTools .mCSB_dragger .mCSB_dragger_bar,
.contact-form-s1 .wpcf7-submit,
.service-s2-box-grids .inner h3 span:before,
.cta-newsletter .subscrib-form button,
.testimoials-s2-slider .testimoials-s2-grid:after,
.testimoials-s2-grid-view .testimoials-s2-grid:after,
.feature-grid .icon,
.services-s3-grids .grid .details,
.pricing .pricing-tab li.active a,
.pricing .pricing-grids .pricing-header .sing-up,
.service-single-content .download a,
.service-single-content .details ul li i,
.contact-pg-section .contact-info .icon,
.blog-single-content .tag-share .tag a:hover,
.back-to-top,
.footer-widget h3:before,
.dropdown-menu>.active>a,
.contact-form-s1 .wpcf7-submit:hover,
.cta-newsletter .subscrib-form button:hover,
.services-s3-grids .grid:hover .details,
.slider-arrow-s1 .owl-controls .owl-nav .owl-prev:hover, .slider-arrow-s1 .owl-controls .owl-nav .owl-next:hover,
.contact-pg-section .contact-info .icon,
.header-style-5 .sticky-header,
.blog-sidebar .widget > h3:after, .blog-sidebar .widget h3:after
{
	background-color: #<?php echo esc_attr($yellow); ?>;
}

/*Border Color*/

.theme-btn, .theme-btn-s2, .theme-btn-s3, .theme-btn-s5,
.theme-btn-s4:hover,
.theme-btn-s5,
.cart-contact .top-cart-content .top-cart-item-image:hover,
.offer-pic:after,
.partners-slider .grid:hover,
.service-s2-box-grids .grid:hover .inner,
.our-team .team-slider:after,
.contact-pg-section .contact-form .submit-btn input[type="submit"]:hover 
{
	border-color: #<?php echo esc_attr($yellow); ?>;
}

.service-s2-tab .tablinks li.active {
border: 1px solid #<?php echo esc_attr($yellow); ?>;
}

.recent-projects-grids .project-info,
.projects-grid-view .project-info,
.contact-section-contact-box,
.testimoials-s2-slider .testimoials-s2-grid,
.testimoials-s2-grid-view .testimoials-s2-grid,
.features-title,
.pricing .pricing-tab li a,
.service-single-content .download a,
.project-single-section .project-single-details,
.theme-btn,
.contact-pg-section .contact-form .submit-btn input[type="submit"] {
border: 2px solid #<?php echo esc_attr($yellow); ?>;
}

.hero .custom.tparrows,
.square-hover-effect .hover-1,
.square-hover-effect .hover-2,
.square-hover-effect .hover-3,
.square-hover-effect .hover-4,
.contact-pg-section .contact-form .submit-btn input[type="submit"] {
background: #<?php echo esc_attr($yellow); ?>;
}

.cart-contact .top-cart-content {
border-top: 2px solid #<?php echo esc_attr($yellow); ?>;
}

.testimonials-slider .client-pic {
border-bottom: 2px solid #<?php echo esc_attr($yellow); ?>;
}

/*RGBA Color Light*/
.services-block-three .inner-box .image .overlay-box{
	background-color: <?php echo hex2rgba($yellow, 0.7);?>;
}

.services-grids .details h3 i,
.team-grids .owl-controls .owl-dots .active span,
.team-grids .owl-controls .owl-dots .owl-dot:hover span {
    background: #<?php echo esc_attr($yellow); ?>;
}



/*RGBA Color Dark*/
.gallery-item .inner-box .image-box .overlay-box{
	background-color: <?php echo hex2rgba($yellow, 0.9);?>;
}

@media only screen and (max-width: 767px){
	
	.main-menu .navbar-header .navbar-toggle
	{
		border-color: #<?php echo esc_attr($yellow);?>;
	}
	
	.main-menu .navbar-header .navbar-toggle,
	.main-menu .navbar-collapse > .navigation,
	.main-menu .navbar-collapse > .navigation > li > ul,
	.main-menu .navbar-collapse > .navigation > li > ul > li > ul,
	.main-menu .navbar-collapse > .navigation > li > a,
	.main-menu .navbar-collapse > .navigation > li > ul > li > a,
	.main-menu .navbar-collapse > .navigation > li > ul > li > ul > li > a,
	.main-menu .navbar-collapse > .navigation > li > a:hover,
	.main-menu .navbar-collapse > .navigation > li > a:active,
	.main-menu .navbar-collapse > .navigation > li > a:focus,
	.main-menu .navbar-collapse > .navigation > li:hover > a,
	.main-menu .navbar-collapse > .navigation > li > ul > li:hover > a,
	.main-menu .navbar-collapse > .navigation > li > ul > li > ul > li:hover > a,
	.main-menu .navbar-collapse > .navigation > li.current > a,
	.main-menu .navbar-collapse > .navigation > li.current-menu-item > a,
	.header-style-two.inner-header .main-menu .navigation > li > a
	{
		background-color: #<?php echo esc_attr($yellow);?>;
	}
	
}



@media only screen and (max-width: 1023px){
	
	.subscribe-section:before,
	.subscribe-form .form-group input[type="text"],
	.subscribe-form .form-group input[type="tel"],
	.subscribe-form .form-group input[type="email"],
	.subscribe-form .form-group textarea
	{
		border-color: #<?php echo esc_attr($yellow);?>;
	}
	
	
	.subscribe-form .form-group input[type="submit"],
	.subscribe-form button
	{
		background-color: #<?php echo esc_attr($yellow);?>;
	}
	
}
.woocommerce .woocommerce-info,
.woocommerce .woocommerce-error,
.woocommerce .woocommerce-info,
.woocommerce .woocommerce-message
{
	border-top-color: #<?php echo esc_attr($yellow);?> !important;
}


.pagination > li > a:focus,
.pagination > li > a:hover,
.pagination > li > span:focus,
.pagination > li > span:hover,
.pagination > li > .current,
.pagination > li:hover > .current
{
	background-color: #<?php echo esc_attr($yellow);?> !important;
}


.contact_info ul a,
.woocommerce .f-shop-detail .summary .star-rating
{
	color: #<?php echo esc_attr($yellow);?> !important;
}
<?php 

$out = ob_get_clean();
$expires_offset = 31536000; // 1 year
header('Content-Type: text/css; charset=UTF-8');
header('Expires: ' . gmdate( "D, d M Y H:i:s", time() + $expires_offset ) . ' GMT');
header("Cache-Control: public, max-age=$expires_offset");
header('Vary: Accept-Encoding'); // Handle proxies
header('Content-Encoding: gzip');

echo gzencode($out);
exit;