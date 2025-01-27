<?php
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}
wp_enqueue_style( 'respport-banner', WEBLIZAR_LBS_PLUGIN_URL . 'css/lbs-banner.css' );
$lbs_imgpath = WEBLIZAR_LBS_PLUGIN_URL . "images/lbs_pro.png";
?>
<div class="wb_plugin_feature notice  is-dismissible">
    <div class="wb_plugin_feature_banner default_pattern pattern_ ">
        <div class="wb-col-md-6 wb-col-sm-12 box">
            <div class="ribbon"><span> <?php esc_html_e("Go Pro", WEBLIZAR_LBS_TEXT_DOMAIN); ?></span></div>
            <img class="wp-img-responsive" src="<?php echo esc_url($lbs_imgpath); ?>" alt="img">
        </div>
        <div class="wb-col-md-6 wb-col-sm-12 wb_banner_featurs-list">
            <span class="gp_banner_head"><h2><?php esc_html_e( 'Lightbox Slider Pro Features', WEBLIZAR_LBS_TEXT_DOMAIN ); ?> </h2></span>
            <ul>
                <li><?php esc_html_e( 'Fully Responsive Design', WEBLIZAR_LBS_TEXT_DOMAIN ); ?></li>
                <li><?php esc_html_e( 'Isotope or Masonary Effects', WEBLIZAR_LBS_TEXT_DOMAIN ); ?></li>
                <li><?php esc_html_e( 'Simple & Very Easy Admin Gallery Dashboard', WEBLIZAR_LBS_TEXT_DOMAIN ); ?></li>
                <li><?php esc_html_e( '8 Hover Animation Effect', WEBLIZAR_LBS_TEXT_DOMAIN ); ?></li>
                <li><?php esc_html_e( '5 Gallery Layout ', WEBLIZAR_LBS_TEXT_DOMAIN ); ?></li>
                <li><?php esc_html_e( '10 Types Hover Color Opacity', WEBLIZAR_LBS_TEXT_DOMAIN ); ?></li>               
                <li><?php esc_html_e( '8 Types of Lightbox Integrated', WEBLIZAR_LBS_TEXT_DOMAIN ); ?></li>
                <li><?php esc_html_e( 'Multiple Shortcode & Widget feature', WEBLIZAR_LBS_TEXT_DOMAIN ); ?></li>
                <li><?php esc_html_e( 'Hide or Show Gallery Title and Label', WEBLIZAR_LBS_TEXT_DOMAIN ); ?></li>
                <li><?php esc_html_e( 'Add Unlimited Images into Gallery ', WEBLIZAR_LBS_TEXT_DOMAIN ); ?></li>
                <li><?php esc_html_e( '500+ Google fonts and Two Different Font Awesome Icon', WEBLIZAR_LBS_TEXT_DOMAIN ); ?></li>
                <li><?php esc_html_e( 'All Major Device Compatible – iPhone, iPad, Tablets, PC', WEBLIZAR_LBS_TEXT_DOMAIN ); ?></li>
				<li><?php esc_html_e( 'All Major & Latest Browser Compatible – Google Chrome, Mozilla Firefox, Internet Explorer', WEBLIZAR_LBS_TEXT_DOMAIN ); ?></li>
            </ul>
            <div class="wp_btn-grup">
                <a class="wb_button-primary" href="http://demo.weblizar.com/lightbox-slider-pro-demo/"
                   target="_blank"><?php esc_html_e( 'View Demo', WEBLIZAR_LBS_TEXT_DOMAIN ); ?></a>
                <a class="wb_button-primary" href="https://weblizar.com/plugins/lightbox-slider-pro/"
                   target="_blank"><?php esc_html_e( 'Buy Now', WEBLIZAR_LBS_TEXT_DOMAIN ); ?>  <?php esc_html_e("$12", WEBLIZAR_LBS_TEXT_DOMAIN); ?></a>
                <a href="https://wordpress.org/support/plugin/lightbox-slider/reviews/?filter=5" target="_blank" name="review" id="review" class="wb_button-primary"><?php esc_html_e("Review & Rate", WEBLIZAR_LBS_TEXT_DOMAIN); ?></a>
            </div>
        </div>
    </div>
</div>