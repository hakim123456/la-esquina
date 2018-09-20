<?php if ( ! defined( 'FW' ) ) {
    die( 'Forbidden' );
}

$options = array(

    /*Main Settings*/
    'general'    => array(
        'title'  => esc_html__('Main Settings','leckertheme'),
        'type'  => 'tab',
        'options' => array(
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
            'lecker_number_in_title' => array(
                'label'        => esc_html__('Turn off Numbers in Titles', 'leckertheme'),
                'type'         => 'switch',
            ),
            
        )
    ),
    
    /*Logo*/
    'logo'    => array(
        'title'  => esc_html__('Logo','leckertheme'),
        'type'  => 'tab',
        'options' => array(
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
    ),

    /*Menu*/
    'menu'    => array(
        'title'  => esc_html__('Menu','leckertheme'),
        'type'  => 'tab',
        'options' => array(
            'lec_default_menu' => array(
                'label'        => esc_html__('Default Menu', 'leckertheme'),
                'type'         => 'switch',
            ), 
            'menu_text' => array(
                'type'  => 'text',
                'value' => esc_html__('Menu', 'leckertheme'),
                'label' => esc_html__('Menu Open Text', 'leckertheme'),
            ),
            'menu_close' => array(
                'type'  => 'text',
                'value' => esc_html__('Back', 'leckertheme'),
                'label' => esc_html__('Menu Close Text', 'leckertheme')
            ),
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
            'menu_copy' => array(
                'type'  => 'text',
                'value' => esc_html__('Lecker 2016', 'leckertheme'),
                'label' => esc_html__('Copyrights', 'leckertheme')
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
            'lec_social' => array(
                'label'         => esc_html__( 'Social Buttons', 'leckertheme' ),
                'popup-title'   => esc_html__( 'Add/Edit', 'leckertheme' ),
                'type'          => 'addable-popup',
                'template'      => '{{=title}}',
                'popup-options' => array(
                    'title'   => array(
                        'type'  => 'text',
                        'label' => esc_html__( 'Title', 'leckertheme' ),
                    ),
                    'icon'    => array(
                        'type'  => 'icon',
                        'set' => 'themify-icons',
                        'label' => esc_html__('Choose an Icon', 'leckertheme'),
                    ),
                    'link'   => array(
                        'type'  => 'text',
                        'label' => esc_html__( 'Link', 'leckertheme' ),
                    )
                )
            )

        )
    ),

    /*Intro*/
    'intro'    => array(
        'title'  => esc_html__('Intro','leckertheme'),
        'type'  => 'tab',
        'options' => array(
            'enh_simple_intro_sml' => array(
                'label'        => esc_html__('Small Intro', 'leckertheme'),
                'type'         => 'switch',
            ), 
            'leckertheme_white_txt' => array(
                'label'        => esc_html__('White Text', 'leckertheme'),
                'type'         => 'switch',
            ),    
            'background_color' => array(
                'label' => esc_html__('Background Color', 'leckertheme'),
                'desc'  => esc_html__('Please select the background color', 'leckertheme'),
                'type'  => 'color-picker'
            ),
            'background_image' => array(
                'label'   => esc_html__('Background Image', 'leckertheme'),
                'desc'    => esc_html__('Please select the background image', 'leckertheme'),
                'type'    => 'upload',
            ),
            'over_display' => array(
              'type'  => 'switch',
              'label' => esc_html__('Display Over', 'leckertheme')
            ),
            'over_color' => array(
                'type'  => 'color-picker',
                'value' => '#000',
                'label' => esc_html__('Over Color', 'leckertheme')
            ),
            'over_opacity'   => array(
                'label' => esc_html__( 'Opacity', 'leckertheme' ),
                'desc'  => esc_html__('0.0-1', 'leckertheme'),
                'type'  => 'text',
                'value' => '0'
            )            
        )
    ),

    

    /*Blog*/
    'blog'    => array(
        'title'  => esc_html__('Blog','leckertheme'),
        'type'  => 'tab',
        'options' => array(
            'blog_type' => array(
                'type'  => 'select',
                'value' => 'choice-1',
                'label' => esc_html__('Blog Type', 'leckertheme'),
                'choices' => array(
                    'choice-1' => esc_html__('Default', 'leckertheme'),
                    'choice-2' => esc_html__('2 Column', 'leckertheme'),
                ),
                'no-validate' => false,
            ),
            'blog_full_width' => array(
                'label' => esc_html__('Full Width', 'leckertheme'),
                'type' => 'switch',
            ),
            'blog_sidebar_align' => array(
                'label' => esc_html__('Sidebar Align', 'leckertheme'),
                'type' => 'switch',
                'left-choice' => array(
                    'value' => 'left',
                    'label' => esc_html__('Left Sidebar', 'leckertheme')
                ),
                'right-choice' => array(
                    'value' => 'right',
                    'label' => esc_html__('Right Sidebar', 'leckertheme')
                )
            ),
        )
    ),

    /*Footer*/
    'footer'    => array(
        'title'  => esc_html__('Footer','leckertheme'),
        'type'  => 'tab',
        'options' => array(
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
    
    
);
