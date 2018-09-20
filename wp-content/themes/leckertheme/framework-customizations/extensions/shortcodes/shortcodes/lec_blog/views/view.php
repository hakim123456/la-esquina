<?php if ( ! defined( 'FW' ) ) {
	die( 'Forbidden' );
}
?>

<?php if ($atts['titles'] == '1' ) { ?>
<!-- boxes -->
<ul>

    
<?php
    global $post;
    $lecker_posts_per_page = $atts['post_count'];
    $lecker_posts_category = $atts['posts']['0'];
    $posts = get_posts(
        array(
            'numberposts'     => $lecker_posts_per_page,
            'category' => $lecker_posts_category 
        )
    );


    foreach($posts as $post):
        setup_postdata( $post ); 
        $thumbnail_attributes = wp_get_attachment_image_src( get_post_thumbnail_id(), 'lecker_big-thumb' );
?>

<!-- item -->
<li><a href="<?php echo esc_url( get_permalink() ); ?>"><?php the_title(); ?></a></li> 

    
<?php 
    endforeach; 
    wp_reset_postdata(); 
?>

</ul>
<!-- boxes end -->
<?php }else{ ?>


<!-- boxes -->
<div class="lec_icon_boxes lec_team_slider">
    

    <?php
        global $post;
        $lecker_posts_per_page = $atts['post_count'];
        $lecker_posts_category = $atts['posts']['0'];
        $posts = get_posts(
            array(
                'numberposts'     => $lecker_posts_per_page,
                'category' => $lecker_posts_category 
            )
        );

        foreach($posts as $post):
            setup_postdata( $post ); 
            $thumbnail_attributes = wp_get_attachment_image_src( get_post_thumbnail_id(), 'lecker_big-thumb' );
    ?>


    <!-- item -->
    <div class="lec_news_block text-center">
        <a href="<?php echo esc_url( get_permalink() ); ?>" class="lec_news_img_parent"><span class="lec_news_img lec_image_bck" data-image="<?php echo esc_url($thumbnail_attributes[0]); ?>"></span></a>
        <span class="lec_gold lec_title_animation lec_wht_txt"><?php echo get_the_date('M d'); ?></span>
        <span class="lec_news_title lec_gold_subtitle"><?php the_title(); ?></span>
        <?php the_excerpt(); ?>
    </div>

        
    <?php 
        endforeach; 
        wp_reset_postdata(); 
    ?>

    

</div>
<!-- boxes end -->
<?php } ?>

