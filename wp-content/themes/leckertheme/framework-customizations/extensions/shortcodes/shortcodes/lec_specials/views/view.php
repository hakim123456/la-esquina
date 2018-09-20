<?php if ( ! defined( 'FW' ) ) {
	die( 'Forbidden' );
}

/**
 * @var array $atts
 */
?>
<!-- boxes -->
<div class="lec_icon_boxes lec_team_slider">
    
    <?php foreach ($atts['lec_specials'] as $event): ?>
					
					<?php if (!empty( $event['link'] )): ?>
						<a class="lec_news_block text-center" href="<?php echo esc_url($event['link']); ?>">
			        <span class="lec_news_img_parent"><span class="lec_news_img lec_image_bck" data-image="<?php echo fw_resize($event['image']['url'],'800','',true); ?>"></span></span>
			        <span class="lec_gold lec_title_animation lec_wht_txt"><?php echo esc_attr($event['imtitle']); ?></span>
			        <span class="lec_news_title lec_gold_subtitle"><?php echo esc_attr($event['title']); ?></span>
			        <p><?php echo esc_attr($event['text']); ?></p>  
			    	</a>
					<?php else: ?>
						<div class="lec_news_block text-center">
			        <span class="lec_news_img_parent"><span class="lec_news_img lec_image_bck" data-image="<?php echo fw_resize($event['image']['url'],'800','',true); ?>"></span></span>
			        <span class="lec_gold lec_title_animation lec_wht_txt"><?php echo esc_attr($event['imtitle']); ?></span>
			        <span class="lec_news_title lec_gold_subtitle"><?php echo esc_attr($event['title']); ?></span>
			        <p><?php echo esc_attr($event['text']); ?></p>  
			    	</div>
						
					<?php endif ?>
          

    <?php endforeach; ?>

    


</div>
<!-- boxes end -->