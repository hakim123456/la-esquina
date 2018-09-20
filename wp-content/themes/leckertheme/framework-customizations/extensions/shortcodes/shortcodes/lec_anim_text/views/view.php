<?php if ( ! defined( 'FW' ) ) {
	die( 'Forbidden' );
}

/**
 * @var array $atts
 */
?>

<!-- row -->
<div class="row <?php echo esc_attr( $atts['text_block']['leckertheme_section_text_align'] ); ?>">
    
    <div class="<?php if (!empty($atts['image_block']['iframe'])): ?>lec_map_hidden_top <?php endif ?><?php echo esc_attr( $atts['image_block']['col_width'] ); ?> <?php echo 'lec_rel_'.$atts['leckertheme_column_anim_abs_pos']; ?> lec_animation_block" data-bottom-top="transform:translate3d(0px, <?php echo esc_attr( $atts['image_block']['anim_start'] ); ?>px, 0px)" data-top-bottom="transform:translate3d(0px, <?php echo esc_attr( $atts['image_block']['anim_end'] ); ?>px, 0px)">

        <?php if (!empty($atts['image_block']['image']['url'])): ?>
            
            <img src="<?php echo fw_resize( $atts['image_block']['image']['url'], '1200', '', true ); ?>" alt="<?php echo esc_attr( $atts['image_block']['title'] ); ?>">

        <?php endif ?>

        <?php if (!empty($atts['image_block']['iframe'])): ?>

            <div class="lec_map_container">
                <?php echo do_shortcode( $atts['image_block']['iframe'] ); ?>
            </div>

        <?php endif ?>


        
    </div>
    <!-- col end -->

    <div class="<?php if ($atts['text_block']['wht_txt']==1): ?>lec_wht_txt <?php endif ?><?php echo esc_attr( $atts['text_block']['col_width'] ); ?> lec_animation_block lec_animation_abs_block <?php echo esc_attr($atts['leckertheme_column_anim_abs_pos']); ?> lec_image_bck" data-bottom-top="transform:translate3d(0px, <?php echo esc_attr( $atts['text_block']['anim_start'] ); ?>px, 0px)" data-top-bottom="transform:translate3d(0px, <?php echo esc_attr( $atts['text_block']['anim_end'] ); ?>px, 0px)" <?php if (!empty($atts['text_block']['background_image']['url'])): ?>data-image="<?php echo esc_attr( $atts['text_block']['background_image']['url'] ); ?>"<?php endif ?> <?php if (!empty($atts['text_block']['background_color'])): ?>data-color="<?php echo esc_attr( $atts['text_block']['background_color'] ); ?>"<?php endif ?>>
        
        <?php if ($atts['text_block']['over_display'] == 1): ?>
            <!-- Over -->
            <div class="lec_over" data-color="<?php echo esc_attr( $atts['text_block']['over_color'] ); ?>" data-opacity="<?php echo esc_attr( $atts['text_block']['over_opacity'] ); ?>"></div>  
        <?php endif ?>
        

        <div class="lec_parallax_menu lec_image_bck lec_fixed">

            <?php if ( fw_get_db_post_option(get_the_ID(),'lec_types/lec_own_titles/lec_titles') == 'lec_page_neon' || fw_get_db_settings_option('lec_titles/lec_page_neon') == 'lec_page_neon' ): ?>
       
               <?php if (!empty($atts['text_block']['title'])): ?>
                  <h2 class="lec_neon_title"><?php echo esc_attr( $atts['text_block']['title'] ); ?><span class="lec_neon_subtitle"><?php echo esc_attr( $atts['text_block']['subtitle'] ); ?></span></h2>
              <?php endif ?>

            <?php else: ?>

                <?php if (!empty($atts['text_block']['title'])): ?>
                    <h2 class="lec_gold lec_title_counter"><?php echo esc_attr( $atts['text_block']['title'] ); ?></h2>
                <?php endif ?>
                
                <?php if (!empty($atts['text_block']['subtitle'])): ?>
                    <h3 class="lec_gold_subtitle"><?php echo esc_attr( $atts['text_block']['subtitle'] ); ?></h3>
                <?php endif ?>
              
            <?php endif ?>


			
            
            <?php echo do_shortcode( $atts['text_block']['text'] ); ?>
            
            <?php if (!empty( $atts['text_block']['lecker_testimonials'] )): ?>
            <!-- reviews -->
            <div class="lec_reviews_single lec_lm_type_i" data-dots="true" data-autoplay="true">
            <?php foreach ($atts['text_block']['lecker_testimonials'] as $reviews): ?>

                <div class="lec_reviews_item"> 
                    <p><?php echo esc_attr($reviews['text']); ?></p>
                    <svg class="svg-graphic" width="100" height="100" viewBox="0 0 100 100">
                        <g>
                           <clipPath id="hexagonal-mask">
                              <polygon id="path-1" points="50 -0.787401575 85.9121161 14.0878839 100.787402 50 85.9121161 85.9121161 50 100.787402 14.0878839 85.9121161 -0.787401575 50 14.0878839 14.0878839 "></polygon>
                              <text></text>
                           </clipPath>
                        </g> 
                         <image clip-path="url(#hexagonal-mask)" height="100px" width="100px" xlink:href="<?php echo fw_resize($reviews['image']['url'],'200', '', true); ?>" />
                    </svg>
        
                    <strong><?php echo esc_attr($reviews['title']); ?></strong>
                </div>

            <?php endforeach; ?>
            </div>
            <!-- reviews end --> 
            <?php endif ?> 


            <?php foreach ($atts['text_block']['lecker_btns'] as $btns): ?>
                
                <a href="<?php echo esc_url($btns['link']); ?>" class="btn"><?php echo esc_attr($btns['title']); ?><?php if (!empty( $btns['icon'] )): ?>
                    <i class="ti <?php echo esc_attr($btns['icon']); ?>"></i>
                <?php endif ?></a>

          <?php endforeach; ?>

            <?php foreach ($atts['text_block']['lecker_menu'] as $menu): ?>
                
                <!-- item -->
                <div class="lec_parallax_menu_mini <?php if ($menu['feat'] == 1): ?>lec_parallax_menu_mini_feaut<?php endif ?>">
                    <div class="lec_parallax_menu_mini_title clearfix">
                        <h3><?php echo esc_attr($menu['title']); ?></h3>
                        <div class="lec_menu_spacer"></div>
                        <div class="lec_parallax_menu_mini_price"><?php echo esc_attr($menu['price']); ?></div>
                    </div>
    
                    <?php if (!empty( $menu['text'] )): ?>
                        <p><?php echo esc_attr($menu['text']); ?></p>
                    <?php endif ?>
    
                </div>

          <?php endforeach; ?>

        </div>
    </div>
    <!-- col end -->


</div>
<!-- row end -->
