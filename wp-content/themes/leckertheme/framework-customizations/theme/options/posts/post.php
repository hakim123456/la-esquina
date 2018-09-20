<?php if ( ! defined( 'FW' ) ) {
    die( 'Forbidden' );
}

$options = array(

    /*Main Settings*/
    'general'    => array(
        'title'  => esc_html__('Settings','leckertheme'),
        'type'  => 'box',
        'options' => array(
            'lec_intro'   => array(
                'label' => false,
                'type'  => 'multi-picker',
                'picker' => array(
                    'lec_intro_select' => array(
                        'type' => 'select',
                        'label' => esc_html__( 'Intro Settings', 'leckertheme' ),
                        'choices' => array(
                            'lec_default' => __('Default','leckertheme'),
                            'lec_own_intro' => __('Intro Settings For This Page','leckertheme'),
                        )
                    )
                ),
                'choices' => array(
                    'lec_own_intro' => array( 
                        'intro_before' => array(
                            'type'   => 'wp-editor',
                            'teeny'  => true,
                            'reinit' => true,
                            'label'  => esc_html__( 'Before Titles', 'leckertheme' ),
                        ),
                        'intro_gold_title' => array(
                          'type'  => 'text',
                          'label' => esc_html__('Gold Title', 'leckertheme'),
                        ),
                        'intro_great_title' => array(
                          'type'  => 'text',
                          'label' => esc_html__('Great Title', 'leckertheme'),
                        ),
                        'intro_great_subtitle' => array(
                          'type'  => 'text',
                          'label' => esc_html__('Great Subtitle', 'leckertheme'),
                        ),
                        'intro_after' => array(
                            'type'   => 'wp-editor',
                            'teeny'  => true,
                            'reinit' => true,
                            'label'  => esc_html__( 'After Titles', 'leckertheme' ),
                        ),
                        'intro_wht' => array(
                          'type'  => 'switch',
                          'label' => esc_html__('White Text', 'leckertheme')
                        ),
                        'intro_image' => array(
                            'type'  => 'upload',
                            'label' => esc_html__('Image', 'leckertheme'),
                            'images_only' => true
                        ),
                        'intro_over_display' => array(
                          'type'  => 'switch',
                          'label' => esc_html__('Display Over', 'leckertheme')
                        ),
                        'intro_over_color' => array(
                            'type'  => 'color-picker',
                            'value' => '#000',
                            'label' => esc_html__('Over Color', 'leckertheme')
                        ),
                        'intro_over_opacity'   => array(
                            'label' => esc_html__( 'Opacity', 'leckertheme' ),
                            'desc'  => esc_html__('0.0-1', 'leckertheme'),
                            'type'  => 'text',
                            'value' => '0'
                        ),
                        'intro_firefly' => array(
                          'type'  => 'switch',
                          'label' => esc_html__('Firefly', 'leckertheme')
                        ),
                        'intro_firefly_total' => array(
                          'type'  => 'text',
                          'label' => esc_html__('Total', 'leckertheme'),
                          'value' => '30'
                        ),
                        'intro_firefly_min' => array(
                          'type'  => 'text',
                          'label' => esc_html__('Min Size', 'leckertheme'),
                          'value' => '1'
                        ),
                        'intro_firefly_max' => array(
                          'type'  => 'text',
                          'label' => esc_html__('Max Size', 'leckertheme'),
                          'value' => '3'
                        ),
                        'leckertheme_section_effects' => array(
                          'type'  => 'image-picker',
                          'value' => 'no_effect',
                          'label' => esc_html__('Section Effect', 'leckertheme'),
                          'choices' => array(
                              'no_effect' => get_template_directory_uri() .'/framework-customizations/extensions/shortcodes/shortcodes/section/static/img/eff0.png',
                              'coffee' => get_template_directory_uri() .'/framework-customizations/extensions/shortcodes/shortcodes/section/static/img/eff1.png',
                              'icecream' => get_template_directory_uri() .'/framework-customizations/extensions/shortcodes/shortcodes/section/static/img/eff2.png',                
                          ),
                          'blank' => true, // (optional) if true, images can be deselected
                        ),
                        'intro_height' => array(
                          'type'  => 'switch',
                          'label' => esc_html__('Intro Half Height', 'leckertheme'),
                        ),

                    )
                )
            ),
            // Titles
            'lec_types'   => array(
                'label' => false,
                'type'  => 'multi-picker',
                'picker' => array(
                    'lec_title_select' => array(
                        'type' => 'select',
                        'label' => esc_html__( 'Title Settings', 'leckertheme' ),
                        'choices' => array(
                            'lec_default' => __('Default','leckertheme'),
                            'lec_own_titles' => __('Title Settings For This Page','leckertheme'),
                        )
                    )
                ),
                'choices' => array(
                    'lec_own_titles' => array( 
                        'lec_titles' => array(
                            'type'  => 'image-picker',
                            'value' => 'lec_page_gold',
                            'label' => esc_html__('Type of Titles', 'leckertheme'),
                            'choices' => array(
                              'lec_page_gold' => get_template_directory_uri() .'/framework-customizations/theme/options/static/img/tt1.png',
                              'lec_page_fire' => get_template_directory_uri() .'/framework-customizations/theme/options/static/img/tt2.png',
                              'lec_page_ice' => get_template_directory_uri() .'/framework-customizations/theme/options/static/img/tt3.png',
                              'lec_page_red' => get_template_directory_uri() .'/framework-customizations/theme/options/static/img/tt4.png',
                              'lec_page_neon' => get_template_directory_uri() .'/framework-customizations/theme/options/static/img/tt5.png',
                              'lec_page_rust' => get_template_directory_uri() .'/framework-customizations/theme/options/static/img/tt6.png'        
                        ),
                        'blank' => true, // (optional) if true, images can be deselected
                        ),
                    )
                )
            ),
            // Logo
            'lec_logo'   => array(
                'label' => false,
                'type'  => 'multi-picker',
                'picker' => array(
                    'lec_logo_select' => array(
                        'type' => 'select',
                        'label' => esc_html__( 'Logo Settings', 'leckertheme' ),
                        'choices' => array(
                            'lec_default' => __('Default','leckertheme'),
                            'lec_own_logo' => __('Logo Settings For This Page','leckertheme'),
                        )
                    )
                ),
                'choices' => array(
                    'lec_own_logo' => array( 
                        'logo_type'    => array(
                            'type'  => 'switch',
                            'value' => 'text',
                            'label' => esc_html__('Type of Logo', 'leckertheme'),
                            'desc'  => esc_html__('Choose type of logo', 'leckertheme'),
                            'left-choice' => array(
                                'value' => 'text',
                                'label' => esc_html__('Text', 'leckertheme')
                            ),
                            'right-choice' => array(
                                'value' => 'image',
                                'label' => esc_html__('Image', 'leckertheme')
                            )
                        ),
                        'logo_text' => array(
                            'type'  => 'text',
                            'label' => esc_html__('Logo Text', 'leckertheme')
                        ),
                        'logo_subtitle' => array(
                            'type'  => 'text',
                            'label' => esc_html__('Logo Text Subtitle Line 1', 'leckertheme')
                        ),
                        'logo_subtitle2' => array(
                            'type'  => 'text',
                            'label' => esc_html__('Logo Text Subtitle Line 2', 'leckertheme')
                        ),
                        'logo_image' => array(
                            'type'  => 'upload',
                            'label' => esc_html__('Logo Image', 'leckertheme'),
                            'images_only' => true
                        )
                    )
                )
            ),
            // Menu
            'lec_menu'   => array(
                'label' => false,
                'type'  => 'multi-picker',
                'picker' => array(
                    'lec_menu_select' => array(
                        'type' => 'select',
                        'label' => esc_html__( 'Menu Settings', 'leckertheme' ),
                        'choices' => array(
                            'lec_default' => __('Default','leckertheme'),
                            'lec_own_menu' => __('Menu Settings For This Page','leckertheme'),
                        )
                    )
                ),
                'choices' => array(
                    'lec_own_menu' => array( 
                        'menu_image' => array(
                            'type'  => 'upload',
                            'label' => esc_html__('Menu Background', 'leckertheme'),
                            'images_only' => true
                        ),
                        'menu_over_display' => array(
                          'type'  => 'switch',
                          'label' => esc_html__('Display Over', 'leckertheme')
                        ),
                        'menu_over_color' => array(
                            'type'  => 'color-picker',
                            'value' => '#000',
                            'label' => esc_html__('Over Color', 'leckertheme')
                        ),
                        'menu_over_opacity'   => array(
                            'label' => esc_html__( 'Opacity', 'leckertheme' ),
                            'desc'  => esc_html__('0.0-1', 'leckertheme'),
                            'type'  => 'text',
                            'value' => '0'
                        ),
                        'menu_align' => array(
                          'type'  => 'image-picker',
                          'value' => 'text-right',
                          'label' => esc_html__('Menu Alignment', 'leckertheme'),
                          'choices' => array(
                              'text-left' => get_template_directory_uri() .'/framework-customizations/theme/options/static/img/tl.gif',
                              'text-center' => get_template_directory_uri() .'/framework-customizations/theme/options/static/img/tc.gif',
                              'text-right' => get_template_directory_uri() .'/framework-customizations/theme/options/static/img/tr.gif',                
                          ),
                          'blank' => true, // (optional) if true, images can be deselected
                        ),
                    )
                )
            ),
            // Footer
            'lec_footer'   => array(
                'label' => false,
                'type'  => 'multi-picker',
                'picker' => array(
                    'lec_footer_select' => array(
                        'type' => 'select',
                        'label' => esc_html__( 'Footer Settings', 'leckertheme' ),
                        'choices' => array(
                            'lec_default' => __('Default','leckertheme'),
                            'lec_own_footer' => __('Footer Settings For This Page','leckertheme'),
                            'lec_no_footer' => __('No Footer','leckertheme'),
                        )
                    )
                ),
                'choices' => array(
                    'lec_own_footer' => array( 
                        'footer_menu' => array (
                            'type'  => 'multi-select',
                            'label' => esc_html__('Post', 'leckertheme'),
                            'desc'  => esc_html__('Choose Footer Post', 'leckertheme'),
                            'population' => 'posts',
                            'source' => 'page',
                            'prepopulate' => 1000,
                            'limit' => 1,
                        )
                    )
                )
            ),
        )
    ),


    

);
