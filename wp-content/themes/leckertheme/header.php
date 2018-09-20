<?php
/**
 * The header for our theme.
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Leckertheme
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">

<?php wp_head(); ?>
</head>


<?php if ( is_category() || is_archive() ) {
    $category = get_category( get_query_var( 'cat' ) );
    $cat_id = $category->cat_ID;
}?>

<body <?php body_class(); ?>>

<?php if( function_exists('fw_get_db_settings_option') ) : ?>
    


<?php /*Own Titles*/ if( fw_get_db_post_option(get_the_ID(),'lec_types/lec_title_select') == 'lec_own_titles' ) { ?>
<!-- Page -->
<div class="lec_page <?php echo fw_get_db_post_option(get_the_ID(),'lec_types/lec_own_titles/lec_titles'); ?><?php if( function_exists('fw_get_db_settings_option') ) { if( fw_get_db_settings_option('lecker_number_in_title') == '1' ) {echo ' lec_header_nonumb';}} ?>" id="lec_page">
<?php /*Default Titles*/}else{ ?>
<!-- Page -->
<div class="lec_page <?php echo fw_get_db_settings_option('lec_titles'); ?><?php if( function_exists('fw_get_db_settings_option') ) { if( fw_get_db_settings_option('lecker_number_in_title') == '1' ) {echo ' lec_header_nonumb';}} ?>" id="lec_page">
<?php } ?> 



<?php else: ?>
<!-- Page -->
<div class="lec_page" id="lec_page">    
<?php endif ?>
    
    <!-- To Top -->
    <a href="#lec_page" class="lec_top lec_go"><b class="ti ti-angle-up"></b></a>
    
    <!-- Header -->
    <header class="lec_header <?php if( function_exists('fw_get_db_settings_option') ) { if( fw_get_db_settings_option('lec_default_menu') == '1' ) {echo 'lec_header_default';}} ?>  <?php if( !function_exists('fw_get_db_settings_option') ) { echo 'lec_header_nounyson';} ?>">  
        <div class="container">   
            
        <?php if( function_exists('fw_get_db_settings_option') ) : ?>



            <?php /*Own Logo*/ if( fw_get_db_post_option(get_the_ID(),'lec_logo/lec_logo_select') == 'lec_own_logo' ) { ?>

                <?php if ( fw_get_db_post_option(get_the_ID(),'lec_logo/lec_own_logo/logo_type') == 'text' ): ?>
                    <!-- Logo -->
                    <a href="/" class="lec_logo"><?php echo fw_get_db_post_option(get_the_ID(),'lec_logo/lec_own_logo/logo_text'); ?> <i><span><?php echo fw_get_db_post_option(get_the_ID(),'lec_logo/lec_own_logo/logo_subtitle'); ?></span><span><?php echo fw_get_db_post_option(get_the_ID(),'lec_logo/lec_own_logo/logo_subtitle2'); ?></span></i></a>
                <?php else: ?>
                    
                    <!-- Logo -->
                    <a href="/" class="lec_logo"><img src="<?php echo fw_resize(fw_get_db_post_option(get_the_ID(),'lec_logo/lec_own_logo/logo_image/url'),'','160',true); ?>" alt="<?php echo fw_get_db_post_option(get_the_ID(),'lec_logo/lec_own_logo/logo_text'); ?>"></a>

                <?php endif ?>


            <?php /*Default Logo*/ }else { ?>
                
                <?php if ( fw_get_db_settings_option('logo_type') == 'text' ): ?>
                    <!-- Logo -->
                    <a href="<?php echo home_url( '/' ); ?>" class="lec_logo"><?php echo fw_get_db_settings_option('logo_text'); ?> <i><span><?php echo fw_get_db_settings_option('logo_subtitle'); ?></span><span><?php echo fw_get_db_settings_option('logo_subtitle2'); ?></span></i></a>
                <?php else: ?>
                    
                    <!-- Logo -->
                    <a href="<?php echo home_url( '/' ); ?>" class="lec_logo"><img src="<?php echo fw_resize(fw_get_db_settings_option('logo_image/url'),'','160',true); ?>" alt="<?php echo fw_get_db_settings_option('logo_text'); ?>"></a>

                <?php endif ?>

            <?php } ?>
            




        <?php else: ?>
                <!-- Logo -->
                <a href="/" class="lec_logo"><?php echo esc_attr('Lecker','leckertheme') ?><i><span><?php echo esc_attr('Cafe','leckertheme') ?></span><span><?php echo esc_attr('Restaurant','leckertheme') ?></span></i></a>  
        <?php endif ?>

            
            <?php if( function_exists('fw_get_db_settings_option') ) : ?>
                
                <?php if (fw_get_db_settings_option('lec_default_menu') == '1' ): ?>
                    
                    <!-- Top Menu -->
                    <div class="lec_default_menu">
                        <?php wp_nav_menu( array( 'theme_location' => 'primary', 'menu_id' => 'primary-menu' ) ); ?>
                    </div>
                    <!-- Top Menu End -->

                    <!-- Menu -->
                    <div class="lec_main_menu lec_main_menu_mobile">
                        
                        <div class="lec_main_menu_icon">
                            <i></i><i></i><i></i><i></i>
                            <b><?php echo fw_get_db_settings_option('menu_text'); ?></b>
                            <b class="lec_main_menu_icon_b"><?php echo fw_get_db_settings_option('menu_close'); ?></b>
                        </div>
                    </div>

                <?php else: ?>
                    <!-- Menu -->
                    <div class="lec_main_menu">
                        
                        <div class="lec_main_menu_icon">
                            <i></i><i></i><i></i><i></i>
                            <b><?php echo fw_get_db_settings_option('menu_text'); ?></b>
                            <b class="lec_main_menu_icon_b"><?php echo fw_get_db_settings_option('menu_close'); ?></b>
                        </div>
                    </div>

                    
                <?php endif ?>

            <?php else: ?>

            <!-- Menu -->
            <div class="lec_main_menu">
                
                <div class="lec_main_menu_icon">
                    <i></i><i></i><i></i><i></i>
                    <b><?php echo esc_attr('Menu','leckertheme') ?></b>
                    <b class="lec_main_menu_icon_b"><?php echo esc_attr('Close','leckertheme') ?></b>
                </div>
            </div>
      
   
            <?php endif ?>
            
            
            <?php if( function_exists('fw_get_db_settings_option') ) : ?>

 

                <?php /*Own Menu*/ if( fw_get_db_post_option(get_the_ID(),'lec_menu/lec_menu_select') == 'lec_own_menu' ) { ?>
                    <!-- Menu Content -->
                    <div class="lec_main_menu_content lec_image_bck" data-color="rgba(0,0,0,0.9)" data-image="<?php echo fw_resize(fw_get_db_post_option(get_the_ID(),'lec_menu/lec_own_menu/menu_image/url'),'1200','',true); ?>">
                        
                        <?php if ( fw_get_db_post_option(get_the_ID(),'lec_menu/lec_own_menu/menu_over_display') == 1 ): ?>
                            <!-- Over -->
                            <div class="lec_over" data-color="<?php echo fw_get_db_post_option(get_the_ID(),'lec_menu/lec_own_menu/menu_over_color'); ?>" data-opacity="<?php echo fw_get_db_post_option(get_the_ID(),'lec_menu/lec_own_menu/menu_over_opacity'); ?>"></div>
                        <?php endif ?>
                                 

                    </div>

                    <div class="lec_main_menu_content_menu lec_wht_txt <?php echo fw_get_db_post_option(get_the_ID(),'lec_menu/lec_own_menu/menu_align'); ?>">
                
                <?php /*Default Menu*/ }else{ ?>
                    <!-- Menu Content -->
                    <div class="lec_main_menu_content lec_image_bck" data-color="rgba(0,0,0,0.9)" data-image="<?php echo fw_resize(fw_get_db_settings_option('menu_image/url'),'1200','',true); ?>">
                        
                        <?php if ( fw_get_db_settings_option('menu_over_display') == 1 ): ?>
                            <!-- Over -->
                            <div class="lec_over" data-color="<?php echo fw_get_db_settings_option('menu_over_color'); ?>" data-opacity="<?php echo fw_get_db_settings_option('menu_over_opacity'); ?>"></div>
                        <?php endif ?>
                                 

                    </div>

                    <div class="lec_main_menu_content_menu lec_wht_txt <?php echo fw_get_db_settings_option('menu_align'); ?>">
                <?php } ?> 


                

            <?php else: ?>
            
                <!-- Menu Content -->
                <div class="lec_main_menu_content lec_image_bck" data-color="rgba(0,0,0,0.9)"></div>
                <div class="lec_main_menu_content_menu lec_wht_txt text-right">

            <?php endif ?>

            

                <?php if( function_exists('fw_get_db_settings_option') ) : ?>

                <div class="container">
                    <?php wp_nav_menu( array( 'theme_location' => 'primary', 'menu_id' => 'primary-menu' ) ); ?>
                    <div class="lec_main_menu_content_menu_copy">
                        <p><?php echo fw_get_db_settings_option('menu_copy'); ?></p>
                        
                        <?php if ( fw_get_db_settings_option('lec_social')) : ?>  
                        
                        <!-- Social Buttons -->
                        <div class="lec_footer_social">

                            <?php foreach (fw_get_db_settings_option('lec_social') as $icon): ?>  
                              <a title="<?php echo esc_attr($icon['title']); ?>" href="<?php echo esc_url($icon['link']); ?>"><i class="ti lec_icon_box <?php echo esc_attr($icon['icon']); ?> lec_icon_box"></i></a>
                            <?php endforeach; ?>

                        </div>

                        <?php endif ?>

                    </div>
                </div>
                <!-- container end -->


                <?php else: ?>

                <div class="container">
                    <?php wp_nav_menu( array( 'theme_location' => 'primary', 'menu_id' => 'primary-menu' ) ); ?>
                </div>
                <!-- container end -->
   
                <?php endif ?>
            </div>
            <!-- menu content end -->
        
        </div>
        <!-- container end -->
    </header>
    <!-- Header End -->
    
    

    <?php if( function_exists('fw_get_db_settings_option') ) : ?>


        <?php if (fw_get_db_post_option(get_the_ID(),'lec_intro/lec_intro_select') == 'lec_own_intro' ): ?>
            
        
        <!-- Slider -->
        <div class="lec_slider lec_image_bck lec_fixed <?php if ( fw_get_db_post_option(get_the_ID(),'lec_intro/lec_own_intro/intro_wht') == 1 ): ?>lec_wht_txt<?php endif ?> <?php if ( fw_get_db_post_option(get_the_ID(),'lec_intro/lec_own_intro/intro_height') == 1 ): ?>lec_slider_inside<?php endif ?>" data-stellar-background-ratio="0.3" data-image="<?php echo fw_resize(fw_get_db_post_option(get_the_ID(),'lec_intro/lec_own_intro/intro_image/url'),'1200','',true); ?>">
            
            
            <?php if ( fw_get_db_post_option(get_the_ID(),'lec_intro/lec_own_intro/intro_firefly') == 1 ): ?>

                <!-- Firefly -->
                <div class="lec_slider_firefly" data-total="<?php echo fw_get_db_post_option(get_the_ID(),'lec_intro/lec_own_intro/intro_firefly_total'); ?>" data-min="<?php echo fw_get_db_post_option(get_the_ID(),'lec_intro/lec_own_intro/intro_firefly_min'); ?>" data-max="<?php echo fw_get_db_post_option(get_the_ID(),'lec_intro/lec_own_intro/intro_firefly_max'); ?>"></div>

            <?php endif ?>

            <?php if ( fw_get_db_post_option(get_the_ID(),'lec_intro/lec_own_intro/leckertheme_section_effects') == 'coffee' ): ?>

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

            <?php if ( fw_get_db_post_option(get_the_ID(),'lec_intro/lec_own_intro/leckertheme_section_effects') == 'icecream' ): ?>
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

            
            <?php if ( fw_get_db_post_option(get_the_ID(),'lec_intro/lec_own_intro/intro_over_display') == 1 ): ?>
                <!-- Over -->
                <div class="lec_over" data-color="<?php echo fw_get_db_post_option(get_the_ID(),'lec_intro/lec_own_intro/intro_over_color'); ?>" data-opacity="<?php echo fw_get_db_post_option(get_the_ID(),'lec_intro/lec_own_intro/intro_over_opacity'); ?>"></div>
            <?php endif ?>

            

            <div class="container">


                <!-- Slider Texts -->
                <div class="lec_slide_txt lec_slide_center_middle text-center">
                    <?php echo fw_get_db_post_option(get_the_ID(),'lec_intro/lec_own_intro/intro_before'); ?>
                    
                    <?php if (fw_get_db_post_option(get_the_ID(),'lec_intro/lec_own_intro/intro_gold_title') ): ?>
                        
                        <?php if ( fw_get_db_post_option(get_the_ID(),'lec_types/lec_own_titles/lec_titles') == 'lec_page_rust' || fw_get_db_settings_option('lec_titles') == 'lec_page_rust' ): ?>
                            <div class="lec_rust"><?php echo fw_get_db_post_option(get_the_ID(),'lec_intro/lec_own_intro/intro_gold_title'); ?></div>
                        <?php else: ?>
                            <div class="lec_gold"><?php echo fw_get_db_post_option(get_the_ID(),'lec_intro/lec_own_intro/intro_gold_title'); ?></div>
                        <?php endif ?>

                    <?php endif ?>

                    <?php if (fw_get_db_post_option(get_the_ID(),'lec_intro/lec_own_intro/intro_great_title') && fw_get_db_post_option(get_the_ID(),'lec_intro/lec_own_intro/intro_height') == 0): ?>

                        <?php if ( fw_get_db_post_option(get_the_ID(),'lec_types/lec_own_titles/lec_titles') == 'lec_page_rust' || fw_get_db_settings_option('lec_titles') == 'lec_page_rust' ): ?>
                            <div class="lec_slide_title lec_rust"><?php echo fw_get_db_post_option(get_the_ID(),'lec_intro/lec_own_intro/intro_great_title'); ?></div>
                        <?php else: ?>
                            <div class="lec_slide_title"><?php echo fw_get_db_post_option(get_the_ID(),'lec_intro/lec_own_intro/intro_great_title'); ?></div>
                        <?php endif ?>
                        
                    <?php endif ?>

                    <?php if (fw_get_db_post_option(get_the_ID(),'lec_intro/lec_own_intro/intro_great_subtitle') ): ?>
                        <div class="lec_slide_subtitle"><?php echo fw_get_db_post_option(get_the_ID(),'lec_intro/lec_own_intro/intro_great_subtitle'); ?></div>
                    <?php endif ?>
                    
                    <?php echo fw_get_db_post_option(get_the_ID(),'lec_intro/lec_own_intro/intro_after'); ?>
                </div>
                <!-- Slider Texts End -->
            
            </div>
            <!-- container end -->
                
            <?php if ( fw_get_db_post_option(get_the_ID(),'lec_intro/lec_own_intro/intro_height') == 0 ): ?>
            <!-- Slide Down -->
            <a class="lec_scroll_down lec_go" href="#lec_content">
                <b></b>
                <i class="ti ti-angle-double-down"></i>
            </a>
            <?php endif ?>


        </div>
        <!-- Slider End -->

        
        <?php elseif( is_category() || is_archive() ): ?>
            
            <?php if (fw_get_db_term_option($cat_id, 'category','lec_intro/lec_intro_select') == 'lec_own_intro' ): ?>
            
        
            <!-- Slider -->
            <div class="lec_slider lec_image_bck lec_fixed <?php if ( fw_get_db_term_option($cat_id, 'category','lec_intro/lec_own_intro/intro_wht') == 1 ): ?>lec_wht_txt<?php endif ?> <?php if ( fw_get_db_term_option($cat_id, 'category','lec_intro/lec_own_intro/intro_height') == 1 ): ?>lec_slider_inside<?php endif ?>" data-stellar-background-ratio="0.3" data-image="<?php echo fw_resize(fw_get_db_term_option($cat_id, 'category','lec_intro/lec_own_intro/intro_image/url'),'1200','',true); ?>">
                
                
                <?php if ( fw_get_db_term_option($cat_id, 'category','lec_intro/lec_own_intro/intro_firefly') == 1 ): ?>

                    <!-- Firefly -->
                    <div class="lec_slider_firefly" data-total="<?php echo fw_get_db_term_option($cat_id, 'category','lec_intro/lec_own_intro/intro_firefly_total'); ?>" data-min="<?php echo fw_get_db_term_option($cat_id, 'category','lec_intro/lec_own_intro/intro_firefly_min'); ?>" data-max="<?php echo fw_get_db_term_option($cat_id, 'category','lec_intro/lec_own_intro/intro_firefly_max'); ?>"></div>

                <?php endif ?>

                <?php if ( fw_get_db_term_option($cat_id, 'category','lec_intro/lec_own_intro/leckertheme_section_effects') == 'coffee' ): ?>

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

                <?php if ( fw_get_db_term_option($cat_id, 'category','lec_intro/lec_own_intro/leckertheme_section_effects') == 'icecream' ): ?>
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

                
                <?php if ( fw_get_db_term_option($cat_id, 'category','lec_intro/lec_own_intro/intro_over_display') == 1 ): ?>
                    <!-- Over -->
                    <div class="lec_over" data-color="<?php echo fw_get_db_term_option($cat_id, 'category','lec_intro/lec_own_intro/intro_over_color'); ?>" data-opacity="<?php echo fw_get_db_term_option($cat_id, 'category','lec_intro/lec_own_intro/intro_over_opacity'); ?>"></div>
                <?php endif ?>

                

                <div class="container">


                    <!-- Slider Texts -->
                    <div class="lec_slide_txt lec_slide_center_middle text-center">
                        <?php echo fw_get_db_term_option($cat_id, 'category','lec_intro/lec_own_intro/intro_before'); ?>
                        
                        <?php if (fw_get_db_term_option($cat_id, 'category','lec_intro/lec_own_intro/intro_gold_title') ): ?>
                            
                            <?php if ( fw_get_db_term_option($cat_id, 'category','lec_types/lec_own_titles/lec_titles') == 'lec_page_rust' || fw_get_db_settings_option('lec_titles') == 'lec_page_rust' ): ?>
                                <div class="lec_rust"><?php echo fw_get_db_term_option($cat_id, 'category','lec_intro/lec_own_intro/intro_gold_title'); ?></div>
                            <?php else: ?>
                                <div class="lec_gold"><?php echo fw_get_db_term_option($cat_id, 'category','lec_intro/lec_own_intro/intro_gold_title'); ?></div>
                            <?php endif ?>

                        <?php endif ?>

                        <?php if (fw_get_db_term_option($cat_id, 'category','lec_intro/lec_own_intro/intro_great_title') && fw_get_db_term_option($cat_id, 'category','lec_intro/lec_own_intro/intro_height') == 0): ?>

                            <?php if ( fw_get_db_term_option($cat_id, 'category','lec_types/lec_own_titles/lec_titles') == 'lec_page_rust' || fw_get_db_settings_option('lec_titles') == 'lec_page_rust' ): ?>
                                <div class="lec_slide_title lec_rust"><?php echo fw_get_db_term_option($cat_id, 'category','lec_intro/lec_own_intro/intro_great_title'); ?></div>
                            <?php else: ?>
                                <div class="lec_slide_title"><?php echo fw_get_db_term_option($cat_id, 'category','lec_intro/lec_own_intro/intro_great_title'); ?></div>
                            <?php endif ?>
                            
                        <?php endif ?>

                        <?php if (fw_get_db_term_option($cat_id, 'category','lec_intro/lec_own_intro/intro_great_subtitle') ): ?>
                            <div class="lec_slide_subtitle"><?php echo fw_get_db_term_option($cat_id, 'category','lec_intro/lec_own_intro/intro_great_subtitle'); ?></div>
                        <?php endif ?>
                        
                        <?php echo fw_get_db_term_option($cat_id, 'category','lec_intro/lec_own_intro/intro_after'); ?>
                    </div>
                    <!-- Slider Texts End -->
                
                </div>
                <!-- container end -->
                    
                <?php if ( fw_get_db_term_option($cat_id, 'category','lec_intro/lec_own_intro/intro_height') == 0 ): ?>
                <!-- Slide Down -->
                <a class="lec_scroll_down lec_go" href="#lec_content">
                    <b></b>
                    <i class="ti ti-angle-double-down"></i>
                </a>
                <?php endif ?>


            </div>
            <!-- Slider End -->
            <?php else: ?>

            <!-- Slider -->
            <div class="lec_slider lec_image_bck lec_fixed lec_wht_txt lec_slider_default" data-image="<?php echo get_template_directory_uri(); ?>/images/main_back_bl.jpg">
                
                <div class="container">

                        <?php if ( fw_get_db_post_option(get_the_ID(),'lec_types/lec_own_titles/lec_titles') == 'lec_page_rust' || fw_get_db_settings_option('lec_titles') == 'lec_page_rust' ): ?>
                            <div class="lec_rust"><?php
                                if( is_search() ) {
                                    printf( esc_html__( 'Search: %s', 'leckertheme' ), '<span>' . get_search_query() . '</span>' );
                                }elseif( is_category() ){
                                    single_term_title();
                                }elseif( is_archive() ){
                                    the_archive_title();
                                }elseif( is_404() ){
                                    esc_html_e( 'Oops! That page can&rsquo;t be found.', 'leckertheme' );
                                }else { 
                                    the_title(); 
                                }
                            ?></div>
                        <?php else: ?>

                            <div class="lec_gold"><?php
                                if( is_search() ) {
                                    printf( esc_html__( 'Search: %s', 'leckertheme' ), '<span>' . get_search_query() . '</span>' );
                                }elseif( is_category() ){
                                    single_term_title();
                                }elseif( is_archive() ){
                                    the_archive_title();
                                }elseif( is_404() ){
                                    esc_html_e( 'Oops! That page can&rsquo;t be found.', 'leckertheme' );
                                }else { 
                                    the_title(); 
                                }
                            ?></div>
                          
                        <?php endif ?>

              
                </div>
                <!-- container end -->                 

            </div>
            <!-- Slider End -->
        <?php endif ?>

        <?php else: ?>

            <!-- Slider -->
            <div class="lec_slider lec_image_bck lec_fixed lec_wht_txt lec_slider_default" data-image="<?php echo fw_resize(fw_get_db_settings_option('background_image/url'),'1400','',true ); ?>">
                
                <?php if ( fw_get_db_settings_option('over_display') == 1 ): ?>
                    <!-- Over -->
                    <div class="lec_over" data-color="<?php echo fw_get_db_settings_option('over_color'); ?>" data-opacity="<?php echo fw_get_db_settings_option('over_opacity'); ?>"></div>
                <?php endif ?>

                <div class="container">

                        <?php if ( fw_get_db_post_option(get_the_ID(),'lec_types/lec_own_titles/lec_titles') == 'lec_page_rust' || fw_get_db_settings_option('lec_titles') == 'lec_page_rust' ): ?>
                            <div class="lec_rust"><?php
                                if( is_search() ) {
                                    printf( esc_html__( 'Search: %s', 'leckertheme' ), '<span>' . get_search_query() . '</span>' );
                                }elseif( is_category() ){
                                    single_term_title();
                                }elseif( is_archive() ){
                                    the_archive_title();
                                }elseif( is_404() ){
                                    esc_html_e( 'Oops! That page can&rsquo;t be found.', 'leckertheme' );
                                }else { 
                                    the_title(); 
                                }
                            ?></div>
                        <?php else: ?>

                            <div class="lec_gold"><?php
                                if( is_search() ) {
                                    printf( esc_html__( 'Search: %s', 'leckertheme' ), '<span>' . get_search_query() . '</span>' );
                                }elseif( is_category() ){
                                    single_term_title();
                                }elseif( is_archive() ){
                                    the_archive_title();
                                }elseif( is_404() ){
                                    esc_html_e( 'Oops! That page can&rsquo;t be found.', 'leckertheme' );
                                }else { 
                                    the_title(); 
                                }
                            ?></div>
                          
                        <?php endif ?>

              
                </div>
                <!-- container end -->                 

            </div>
            <!-- Slider End -->
        <?php endif ?>

    <?php else: ?>
        <!-- Slider -->
        <div class="lec_slider lec_image_bck lec_fixed lec_wht_txt lec_slider_default" data-image="<?php echo get_template_directory_uri(); ?>/images/main_back_bl.jpg">
            
            <div class="container">
                   
                <div class="lec_gold"><?php
                    if( is_search() ) {
                        printf( esc_html__( 'Search: %s', 'leckertheme' ), '<span>' . get_search_query() . '</span>' );
                    }elseif( is_category() ){
                        single_term_title();
                    }elseif( is_archive() ){
                        the_archive_title();
                    }elseif( is_home() ){
                        esc_html_e( 'Lecker', 'leckertheme' );
                    }elseif( is_404() ){
                        esc_html_e( 'Oops! That page can&rsquo;t be found.', 'leckertheme' );
                    }else { 
                        the_title(); 
                    }
                ?></div>
          
            </div>
            <!-- container end -->
                

        </div>
        <!-- Slider End -->
   
    <?php endif ?>
    

    <!-- Content -->
    <section id="lec_content" class="lec_content">
