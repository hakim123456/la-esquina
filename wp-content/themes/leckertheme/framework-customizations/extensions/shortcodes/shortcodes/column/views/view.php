<?php if (!defined('FW')) die('Forbidden');

$class = fw_ext_builder_get_item_width('page-builder', $atts['width'] . '/frontend_class');

$bg_color = '';
if ( ! empty( $atts['background_color'] ) ) {
	$bg_color = 'background-color:' . $atts['background_color'] . ';';
}

$bg_image = '';
if ( ! empty( $atts['background_image'] ) && ! empty( $atts['background_image']['data']['icon'] ) ) {
	$bg_image = 'background-image:url(' . $atts['background_image']['data']['icon'] . ');';
}

$minheight = '';
if ( ! empty( $atts['min_height'] ) ) {
	$minheight = 'min-height:' . $atts['min_height'] . 'px;';
}


$section_style   = ( $bg_color || $bg_image || $minheight ) ? 'style="' . $bg_color . $bg_image . $minheight . '"' : '';
$push_pull = $atts['push_pull'];

?>






<div class="<?php echo esc_attr($class); ?> <?php echo esc_attr($push_pull); ?> <?php if( $atts['parallax'] == 1 ){ echo 'lec_fixed';} ?> lec_image_bck <?php echo esc_attr($atts['leckertheme_section_text_align']); ?> <?php if ( $atts['leckertheme_white_txt'] == 1 ) { echo "lec_wht_txt"; } ?> lec_col" <?php echo do_shortcode($section_style); ?> <?php if( $atts['parallax'] == 1 ){ echo 'data-stellar-background-ratio="0.2"';} ?>>
	
	<?php if ( $atts['over_display'] == 1  ) { ?>
	<!-- Overlay -->
  <div class="lec_over" data-opacity="<?php echo esc_attr($atts['over_opacity']); ?>" data-color="<?php echo esc_attr($atts['over_color']); ?>"></div>
  <?php };?>
	
	<?php if ( $atts['leckertheme_column_padding'] == 1  ) { ?>
	<div class="lec_simple_block">
  <?php };?>
   
		<?php echo do_shortcode($content); ?>

  <?php if ( $atts['leckertheme_column_padding'] == 1  ) { ?>
	</div>
  <?php };?>
	
</div>
