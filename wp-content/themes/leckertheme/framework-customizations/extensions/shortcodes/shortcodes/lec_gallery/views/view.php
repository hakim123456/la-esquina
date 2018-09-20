<?php if ( ! defined( 'FW' ) ) {
	die( 'Forbidden' );
}

/**
 * @var array $atts
 */
?>
<!-- slider -->
<div class="lec_slider_single <?php if ($atts['menu_settings']['wht_txt'] == 1): ?>lec_wht_txt<?php endif ?> lec_lm_type_i" data-dots="true" data-autoplay="true">
    
    <?php foreach ($atts['lec_gallery'] as $gallery): ?>
    		

        <div class="lec_lm_type_i_item">
	        <img src="<?php echo fw_resize( $gallery['image']['url'], '1200', '', true ); ?>" alt="<?php echo esc_attr($gallery['title']); ?>">
	        
	        <?php if (!empty( $gallery['menu']['title'] )): ?>
	        <div class="lec_lm_type_i_item_desc <?php if ($gallery['menu']['left']==1): ?>lec_lm_type_i_item_desc_left<?php endif ?> lec_image_bck text-left" data-bottom-top="transform:translate3d(0px, 0px, 0px)" data-top-bottom="transform:translate3d(0px, -50px, 0px)" data-image="<?php echo esc_attr($atts['menu_settings']['image']['url']); ?>" data-color="<?php echo esc_attr($atts['menu_settings']['background_color']); ?>">

	            <div class="lec_lm_type_i_item_desc_cont">
	            			
	            			<?php if ( fw_get_db_post_option(get_the_ID(),'lec_types/lec_own_titles/lec_titles') == 'lec_page_neon' || fw_get_db_settings_option('lec_titles/lec_page_neon') == 'lec_page_neon' ): ?>
       									
       									<?php if ($atts['menu_settings']['simple_titles']==0): ?>
			            				<h2 class="lec_neon_title"><?php echo esc_attr($gallery['menu']['title']); ?></h2>
			            			<?php else: ?>
			            				<h2><?php echo esc_attr($gallery['menu']['title']); ?></h2>
			            			<?php endif ?>


				            <?php else: ?>

				                <?php if ($atts['menu_settings']['simple_titles']==0): ?>
			            				<h3 class="lec_gold"><?php echo esc_attr($gallery['menu']['title']); ?></h3>
			            			<?php else: ?>
			            				<h2><?php echo esc_attr($gallery['menu']['title']); ?></h2>
			            			<?php endif ?>
				              
				            <?php endif ?>

	            			
	            		

	            		<?php if (!empty( $gallery['menu']['price'] )): ?>
	            			<div class="lec_lm_type_i_item_price"><?php echo esc_attr($gallery['menu']['price']); ?></div>
	            		<?php endif ?>

	            		<?php if (!empty( $gallery['menu']['text'] )): ?>
	            			<p><?php echo esc_attr($gallery['menu']['text']); ?></p>
	            		<?php endif ?>

	            		<?php if (!empty( $gallery['menu']['subtitle'] )): ?>
	            			<h4><?php echo esc_attr($gallery['menu']['subtitle']); ?></h4>
	            		<?php endif ?>

	            		<?php if (!empty( $gallery['menu']['subtext'] )): ?>
	            			<p class="lec_lm_type_i_item_ingr"><?php echo esc_attr($gallery['menu']['subtext']); ?></p>
	            		<?php endif ?>   
	                
	            </div>
	        </div>
	        <?php endif ?>

	    </div>

    <?php endforeach; ?>

</div>
<!-- slider end -->