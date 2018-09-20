<?php if ( ! defined( 'FW' ) ) {
	die( 'Forbidden' );
}

$bg_color = '';
if ( ! empty( $atts['background_color'] ) ) {
	$bg_color = 'background-color:' . $atts['background_color'] . ';';
}

$bg_image = '';
if ( ! empty( $atts['background_image'] ) && ! empty( $atts['background_image']['data']['icon'] ) ) {
	$bg_image = 'background-image:url(' . fw_resize($atts['background_image']['data']['icon'],'1200','',true) . ');';
}
$section_style   = ( $bg_color || $bg_image ) ? 'style=' . $bg_color . $bg_image . '' : '';
?>


<!-- section -->
<section <?php if(!empty($atts['section_id'])) { echo 'id="'.esc_attr($atts['section_id']).'"';} ?> class="lec_section lec_image_bck <?php if ( $atts['leckertheme_white_txt'] == 1 ) { echo "lec_wht_txt"; } ?> <?php if ( $atts['col_autoheight'] == 1 ) { echo "lec_auto_height"; } ?> <?php if ( $atts['lec_rust_lines'] == 1 ) { echo "lec_section_borders_lines"; } ?> <?php if ( $atts['lec_rust_lines'] == 1 ) { echo "lec_section_borders_lines"; } ?> <?php if ( $atts['lec_grunge_borders'] == 1 ) { echo "lec_section_borders"; } ?> <?php if ( $atts['no_labels'] == 1 ) { echo "lec_no_labels"; } ?> <?php if ( $atts['no_cover'] == 1 ) { echo "lec_no_cover"; } ?> <?php if( $atts['parallax'] == 1 ){ echo 'lec_fixed';} ?> <?php if ( $atts['bg_pdg'] == 1 ) { echo "lec_section_lg_pd"; } ?>" <?php echo esc_attr($section_style); ?> <?php if( $atts['parallax'] == 1 ){ echo 'data-stellar-background-ratio="0.2"';} ?>>


    

		<?php if ( $atts['leckertheme_section_effects'] == 'coffee' ): ?>
			<!-- Flowers -->
      <div class="lec_flowers">
          <div class="lec_fl_1 lec_fl" data-bottom-top="transform:translateY(250px)" data-top-bottom="transform:translateY(320px)">
              <img src="<?php echo get_template_directory_uri(); ?>/images/coffee/fl11.png" alt="">
          </div>
          <div class="lec_fl_2 lec_fl" data-bottom-top="transform:translateY(200px)" data-top-bottom="transform:translateY(-270px)">
              <img src="<?php echo get_template_directory_uri(); ?>/images/coffee/fl12.png" alt="">
          </div>
          <div class="lec_fl_3 lec_fl" data-bottom-top="transform:translateY(200px)" data-top-bottom="transform:translateY(290px)">
              <img src="<?php echo get_template_directory_uri(); ?>/images/coffee/fl3.png" alt="">
          </div>
          <div class="lec_fl_4 lec_fl" data-bottom-top="transform:translateY(440px)" data-top-bottom="transform:translateY(560px)">
              <img src="<?php echo get_template_directory_uri(); ?>/images/coffee/fl4.png" alt="">
          </div>
          <div class="lec_fl_5 lec_fl" data-bottom-top="transform:translateY(40px)" data-top-bottom="transform:translateY(-400px)">
              <img src="<?php echo get_template_directory_uri(); ?>/images/coffee/fl5.png" alt="">
          </div>
          <div class="lec_fl_6 lec_fl" data-bottom-top="transform:translateY(350px)" data-top-bottom="transform:translateY(720px)">
              <img src="<?php echo get_template_directory_uri(); ?>/images/coffee/fl6.png" alt="">
          </div>
          <div class="lec_fl_7 lec_fl" data-bottom-top="transform:translateY(250px)" data-top-bottom="transform:translateY(0px)">
              <img src="<?php echo get_template_directory_uri(); ?>/images/coffee/fl7.png" alt="">
          </div>

          <div class="lec_fl_8 lec_fl" data-bottom-top="transform:translateY(150px)" data-top-bottom="transform:translateY(50px)">
              <img src="<?php echo get_template_directory_uri(); ?>/images/coffee/fl8.png" alt="">
          </div>
          <div class="lec_fl_9 lec_fl" data-bottom-top="transform:translateY(100px)" data-top-bottom="transform:translateY(-800px)">
              <img src="<?php echo get_template_directory_uri(); ?>/images/coffee/fl9.png" alt="">
          </div>
          <div class="lec_fl_10 lec_fl" data-bottom-top="transform:translateY(100px)" data-top-bottom="transform:translateY(700px)">
              <img src="<?php echo get_template_directory_uri(); ?>/images/coffee/fl10.png" alt="">
          </div>

          <div class="lec_fl_13 lec_fl" data-bottom-top="transform:translateY(0px)" data-top-bottom="transform:translateY(-100px)">
              <img src="<?php echo get_template_directory_uri(); ?>/images/coffee/fl13.png" alt="">
          </div>
          <div class="lec_fl_14 lec_fl" data-bottom-top="transform:translateY(120px)" data-top-bottom="transform:translateY(-200px)">
              <img src="<?php echo get_template_directory_uri(); ?>/images/coffee/fl14.png" alt="">
          </div>
          <div class="lec_fl_15 lec_fl" data-bottom-top="transform:translateY(120px)" data-top-bottom="transform:translateY(-50px)">
              <img src="<?php echo get_template_directory_uri(); ?>/images/coffee/fl15.png" alt="">
          </div>
          <div class="lec_fl_16 lec_fl" data-bottom-top="transform:translateY(240px)" data-top-bottom="transform:translateY(460px)">
              <img src="<?php echo get_template_directory_uri(); ?>/images/coffee/fl8.png" alt="">
          </div>
          <div class="lec_fl_17 lec_fl" data-bottom-top="transform:translateY(180px)" data-top-bottom="transform:translateY(-300px)">
              <img src="<?php echo get_template_directory_uri(); ?>/images/coffee/fl11.png" alt="">
          </div>
          <div class="lec_fl_18 lec_fl" data-bottom-top="transform:translateY(380px)" data-top-bottom="transform:translateY(200px)">
              <img src="<?php echo get_template_directory_uri(); ?>/images/coffee/fl5.png" alt="">
          </div>
          <div class="lec_fl_19 lec_fl" data-bottom-top="transform:translateY(370px)" data-top-bottom="transform:translateY(-100px)">
              <img src="<?php echo get_template_directory_uri(); ?>/images/coffee/fl9.png" alt="">
          </div>
          <div class="lec_fl_20 lec_fl" data-bottom-top="transform:translateY(30px)" data-top-bottom="transform:translateY(760px)">
              <img src="<?php echo get_template_directory_uri(); ?>/images/coffee/fl15.png" alt="">
          </div>
      </div>
      <!-- Flowers End -->
		<?php endif ?>


		<?php if ( $atts['leckertheme_section_effects'] == 'icecream' ): ?>
			<!-- Flowers -->
      <div class="lec_flowers">
          <div class="lec_fl_1 lec_fl" data-bottom-top="transform:translateY(250px)" data-top-bottom="transform:translateY(320px)">
              <img src="<?php echo get_template_directory_uri(); ?>/images/icecream/fl11.png" alt="">
          </div>
          <div class="lec_fl_2 lec_fl" data-bottom-top="transform:translateY(200px)" data-top-bottom="transform:translateY(-270px)">
              <img src="<?php echo get_template_directory_uri(); ?>/images/icecream/fl12.png" alt="">
          </div>
          <div class="lec_fl_3 lec_fl" data-bottom-top="transform:translateY(200px)" data-top-bottom="transform:translateY(290px)">
              <img src="<?php echo get_template_directory_uri(); ?>/images/icecream/fl3.png" alt="">
          </div>
          <div class="lec_fl_4 lec_fl" data-bottom-top="transform:translateY(440px)" data-top-bottom="transform:translateY(560px)">
              <img src="<?php echo get_template_directory_uri(); ?>/images/icecream/fl4.png" alt="">
          </div>
          <div class="lec_fl_5 lec_fl" data-bottom-top="transform:translateY(40px)" data-top-bottom="transform:translateY(-400px)">
              <img src="<?php echo get_template_directory_uri(); ?>/images/icecream/fl5.png" alt="">
          </div>
          <div class="lec_fl_6 lec_fl" data-bottom-top="transform:translateY(350px)" data-top-bottom="transform:translateY(720px)">
              <img src="<?php echo get_template_directory_uri(); ?>/images/icecream/fl6.png" alt="">
          </div>
          <div class="lec_fl_7 lec_fl" data-bottom-top="transform:translateY(250px)" data-top-bottom="transform:translateY(0px)">
              <img src="<?php echo get_template_directory_uri(); ?>/images/icecream/fl7.png" alt="">
          </div>

          <div class="lec_fl_8 lec_fl" data-bottom-top="transform:translateY(150px)" data-top-bottom="transform:translateY(50px)">
              <img src="<?php echo get_template_directory_uri(); ?>/images/icecream/fl8.png" alt="">
          </div>
          <div class="lec_fl_9 lec_fl" data-bottom-top="transform:translateY(100px)" data-top-bottom="transform:translateY(-800px)">
              <img src="<?php echo get_template_directory_uri(); ?>/images/icecream/fl9.png" alt="">
          </div>
          <div class="lec_fl_10 lec_fl" data-bottom-top="transform:translateY(100px)" data-top-bottom="transform:translateY(700px)">
              <img src="<?php echo get_template_directory_uri(); ?>/images/icecream/fl10.png" alt="">
          </div>

          <div class="lec_fl_13 lec_fl" data-bottom-top="transform:translateY(0px)" data-top-bottom="transform:translateY(-100px)">
              <img src="<?php echo get_template_directory_uri(); ?>/images/icecream/fl13.png" alt="">
          </div>
          <div class="lec_fl_14 lec_fl" data-bottom-top="transform:translateY(120px)" data-top-bottom="transform:translateY(-200px)">
              <img src="<?php echo get_template_directory_uri(); ?>/images/icecream/fl14.png" alt="">
          </div>
          <div class="lec_fl_15 lec_fl" data-bottom-top="transform:translateY(120px)" data-top-bottom="transform:translateY(-50px)">
              <img src="<?php echo get_template_directory_uri(); ?>/images/icecream/fl15.png" alt="">
          </div>
          <div class="lec_fl_16 lec_fl" data-bottom-top="transform:translateY(240px)" data-top-bottom="transform:translateY(460px)">
              <img src="<?php echo get_template_directory_uri(); ?>/images/icecream/fl8.png" alt="">
          </div>
          <div class="lec_fl_17 lec_fl" data-bottom-top="transform:translateY(180px)" data-top-bottom="transform:translateY(-300px)">
              <img src="<?php echo get_template_directory_uri(); ?>/images/icecream/fl11.png" alt="">
          </div>
          <div class="lec_fl_18 lec_fl" data-bottom-top="transform:translateY(380px)" data-top-bottom="transform:translateY(200px)">
              <img src="<?php echo get_template_directory_uri(); ?>/images/icecream/fl5.png" alt="">
          </div>
          <div class="lec_fl_19 lec_fl" data-bottom-top="transform:translateY(370px)" data-top-bottom="transform:translateY(-100px)">
              <img src="<?php echo get_template_directory_uri(); ?>/images/icecream/fl9.png" alt="">
          </div>
          <div class="lec_fl_20 lec_fl" data-bottom-top="transform:translateY(30px)" data-top-bottom="transform:translateY(760px)">
              <img src="<?php echo get_template_directory_uri(); ?>/images/icecream/fl15.png" alt="">
          </div>
      </div>
      <!-- Flowers End -->
		<?php endif ?>

		<?php if ( $atts['over_display'] == 1  ) { ?>
  	<!-- Overlay -->
    <div class="lec_over" data-opacity="<?php echo esc_attr($atts['over_opacity']); ?>" data-color="<?php echo esc_attr($atts['over_color']); ?>"></div>
    <?php };?>



		<?php if ( $atts['is_fullwidth'] == 1  ) { ?>
    <div class="container-fluid <?php echo esc_attr($atts['leckertheme_section_text_align']); ?>">
    <?php }else{;?>
    <div class="container <?php echo esc_attr($atts['leckertheme_section_text_align']); ?>">
    <?php };?>

    <?php if ( $atts['section_pretitle']): ?>
      <!-- Pretitle -->
      <?php echo do_shortcode($atts['section_pretitle']); ?>
    <?php endif ?>
    
		
    <?php /*Default Titles*/ if( fw_get_db_post_option(get_the_ID(),'lec_types/lec_title_select') == 'lec_default' ) { ?>
    <!-- Page -->
    <div class="lec_page <?php echo fw_get_db_settings_option('lec_titles'); ?>" id="lec_page">
    <?php } ?> 

    <?php /*Own Titles*/ if( fw_get_db_post_option(get_the_ID(),'lec_types/lec_title_select') == 'lec_own_titles' ) { ?>
    <!-- Page -->
    <div class="lec_page <?php echo fw_get_db_post_option(get_the_ID(),'lec_types/lec_own_titles/lec_titles'); ?>" id="lec_page">
    <?php } ?> 

    <?php if ( fw_get_db_post_option(get_the_ID(),'lec_types/lec_own_titles/lec_titles') == 'lec_page_neon' || fw_get_db_settings_option('lec_titles') == 'lec_page_neon' ): ?>
       
        <?php if ( ! empty( $atts['section_title'] ) ) { ?>
          <h2 class="lec_neon_title"><?php echo do_shortcode($atts['section_title']); ?><span class="lec_neon_subtitle"><?php echo esc_attr($atts['section_subtitle']); ?></span></h2>
        <?php };?>
    <?php elseif ( fw_get_db_post_option(get_the_ID(),'lec_types/lec_own_titles/lec_titles') == 'lec_page_rust' || fw_get_db_settings_option('lec_titles') == 'lec_page_rust' ): ?>
        
        <?php if ( ! empty( $atts['section_title'] ) ) { ?>
          <!-- Title -->
          <h2 class="lec_rust lec_title_counter"><?php echo do_shortcode($atts['section_title']); ?></h2>
        <?php };?>

        <?php if ( ! empty( $atts['section_subtitle'] ) ) { ?>
            <!-- Subtitle -->
            <h3 class="lec_gold_subtitle"><?php echo esc_attr($atts['section_subtitle']); ?></h3>
        <?php };?>
    <?php else: ?>

      <?php if ( ! empty( $atts['section_title'] ) ) { ?>
          <!-- Title -->
          <h2 class="lec_gold lec_title_counter"><?php echo do_shortcode($atts['section_title']); ?></h2>
      <?php };?>

      <?php if ( ! empty( $atts['section_subtitle'] ) ) { ?>
          <!-- Subtitle -->
          <h3 class="lec_gold_subtitle"><?php echo esc_attr($atts['section_subtitle']); ?></h3>
      <?php };?>
      
    <?php endif ?>


    


    <?php echo do_shortcode( $content ); ?>


    </div>
    <!-- container end -->
</section>
<!-- section end -->