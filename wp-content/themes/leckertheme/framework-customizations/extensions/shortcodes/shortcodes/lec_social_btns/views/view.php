<?php if ( ! defined( 'FW' ) ) {
	die( 'Forbidden' );
}
/**
 * @var array $atts
 */
?>

<!-- Social Buttons -->
<div class="lec_footer_social">
  <div data-animation="animation_blocks" data-bottom="@class:noactive" data--100-bottom="@class:active">

    <?php foreach ($atts['enhance_social'] as $icon): ?>  
      <a title="<?php echo esc_attr($icon['title']); ?>" href="<?php echo esc_url($icon['link']); ?>"><i class="ti <?php echo esc_attr($icon['icon']); ?> lec_icon_box"></i></a>
    <?php endforeach; ?>

    </div>
</div>