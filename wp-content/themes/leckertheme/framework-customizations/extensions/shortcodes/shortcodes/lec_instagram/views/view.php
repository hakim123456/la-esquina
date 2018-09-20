<?php if ( ! defined( 'FW' ) ) {
	die( 'Forbidden' );
}

/**
 * @var array $atts
 */
?>

<!-- instagram -->
<div id="instagram-carousel" class="insta_slider clearfix" data-userid="<?php echo esc_attr($atts['instagram_id']); ?>" data-accesstoken="<?php echo esc_attr($atts['instagram_access']); ?>"></div>

