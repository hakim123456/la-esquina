<?php if ( ! defined( 'FW' ) ) {
	die( 'Forbidden' );
}

$options = array(
	'title' => array(
		'type'  => 'text',
		'label' => esc_html__( 'Block Title', 'leckertheme' ),
	),
	'image_block' => array(
		'label'         => esc_html__( 'Image Block', 'leckertheme' ),
		'type'          => 'popup',
		'popup-options' => array(
			'image' => array(
				'label' => esc_html__( 'Image', 'leckertheme' ),
				'type'  => 'upload'
			),
			'title' => array(
				'type'  => 'text',
				'label' => esc_html__( 'Image Alt', 'leckertheme' ),
			),
			'iframe' => array(
				'type'   => 'textarea',
				'label'  => esc_html__( 'Map', 'leckertheme' ),
			),
			'anim_start' => array(
				'type'  => 'text',
				'label' => esc_html__( 'Animation Start', 'leckertheme' ),
				'value' => '40'
			),
			'anim_end' => array(
				'type'  => 'text',
				'label' => esc_html__( 'Animation End', 'leckertheme' ),
				'value' => '-40'
			),
			'col_width' => array(
          'type'  => 'select',
          'value' => 'choice-1',
          'label' => esc_html__('Column Width', 'leckertheme'),
          'choices' => array(
              'col-md-1' => esc_html__('col-md-1', 'leckertheme'),
              'col-md-2' => esc_html__('col-md-2', 'leckertheme'),
              'col-md-3' => esc_html__('col-md-3', 'leckertheme'),
              'col-md-4' => esc_html__('col-md-4', 'leckertheme'),
              'col-md-5' => esc_html__('col-md-5', 'leckertheme'),
              'col-md-6' => esc_html__('col-md-6', 'leckertheme'),
              'col-md-7' => esc_html__('col-md-7', 'leckertheme'),
              'col-md-8' => esc_html__('col-md-8', 'leckertheme'),
              'col-md-9' => esc_html__('col-md-9', 'leckertheme'),
              'col-md-10' => esc_html__('col-md-10', 'leckertheme'),
              'col-md-11' => esc_html__('col-md-11', 'leckertheme'),
              'col-md-12' => esc_html__('col-md-12', 'leckertheme'),
          ),
          'no-validate' => false,
      ),
		)
	),
	'text_block' => array(
		'label'         => esc_html__( 'Text Block', 'leckertheme' ),
		'type'          => 'popup',
		'popup-options' => array(
			'title' => array(
				'type'  => 'text',
				'label' => esc_html__( 'Title', 'leckertheme' ),
			),
			'subtitle' => array(
				'type'  => 'text',
				'label' => esc_html__( 'Subtitle', 'leckertheme' ),
			),
			'text' => array(
				'type'   => 'wp-editor',
				'teeny'  => true,
				'reinit' => true,
				'label'  => esc_html__( 'Content', 'leckertheme' ),
			),
			'lecker_btns' => array(
				'label'         => esc_html__( 'Buttons', 'leckertheme' ),
				'popup-title'   => esc_html__( 'Add/Edit', 'leckertheme' ),
				'type'          => 'addable-popup',
				'template'      => '{{=title}}',
				'popup-options' => array(
					'title'   => array(
						'type'  => 'text',
						'label' => esc_html__( 'Title', 'leckertheme' ),
					),
					'link'   => array(
						'type'  => 'text',
						'label' => esc_html__( 'Link', 'leckertheme' ),
					),
					'icon'   => array(
						'type'  => 'icon',
            'set' => 'themify-icons',
						'label' => esc_html__( 'Icons', 'leckertheme' ),
					)
				)
			),
			'lecker_menu' => array(
				'label'         => esc_html__( 'Menu', 'leckertheme' ),
				'type'          => 'addable-popup',
				'template'      => '{{=title}}',
				'popup-options' => array(
					'title'   => array(
						'type'  => 'text',
						'label' => esc_html__( 'Title', 'leckertheme' ),
					),
					'price'   => array(
						'type'  => 'text',
						'label' => esc_html__( 'Price', 'leckertheme' ),
					),
					'text'   => array(
						'type'  => 'textarea',
						'label' => esc_html__( 'Extra Text', 'leckertheme' ),
					),
					'feat'   => array(
						'type'  => 'switch',
						'label' => esc_html__( 'Featured', 'leckertheme' ),
					),
				)
			),
			'lecker_testimonials' => array(
				'label'         => esc_html__( 'Testimonials', 'leckertheme' ),
				'type'          => 'addable-popup',
				'template'      => '{{=title}}',
				'popup-options' => array(
					'title'   => array(
						'type'  => 'text',
						'label' => esc_html__( 'Name', 'leckertheme' ),
					),
					'text'   => array(
						'type'  => 'textarea',
						'label' => esc_html__( 'Text', 'leckertheme' ),
					),
					'image'   => array(
						'type'  => 'upload',
						'label' => esc_html__( 'Image', 'leckertheme' ),
					),
				)
			),
			'leckertheme_section_text_align' => array(
		      'type'  => 'image-picker',
		      'value' => 'intro_text_lc',
		      'label' => esc_html__('Text Alignment', 'leckertheme'),
		      'choices' => array(
		          'text-left' => get_template_directory_uri() .'/framework-customizations/theme/options/static/img/tl.gif',
		          'text-center' => get_template_directory_uri() .'/framework-customizations/theme/options/static/img/tc.gif',
		          'text-right' => get_template_directory_uri() .'/framework-customizations/theme/options/static/img/tr.gif',                
		      ),
		      'blank' => true, // (optional) if true, images can be deselected
		  ),
			'anim_start' => array(
				'type'  => 'text',
				'label' => esc_html__( 'Animation Start', 'leckertheme' ),
				'value' => '40'
			),
			'anim_end' => array(
				'type'  => 'text',
				'label' => esc_html__( 'Animation End', 'leckertheme' ),
				'value' => '-40'
			),
			'col_width' => array(
          'type'  => 'select',
          'value' => 'choice-1',
          'label' => esc_html__('Column Width', 'leckertheme'),
          'choices' => array(
              'col-md-1' => esc_html__('col-md-1', 'leckertheme'),
              'col-md-2' => esc_html__('col-md-2', 'leckertheme'),
              'col-md-3' => esc_html__('col-md-3', 'leckertheme'),
              'col-md-4' => esc_html__('col-md-4', 'leckertheme'),
              'col-md-5' => esc_html__('col-md-5', 'leckertheme'),
              'col-md-6' => esc_html__('col-md-6', 'leckertheme'),
              'col-md-7' => esc_html__('col-md-7', 'leckertheme'),
              'col-md-8' => esc_html__('col-md-8', 'leckertheme'),
              'col-md-9' => esc_html__('col-md-9', 'leckertheme'),
              'col-md-10' => esc_html__('col-md-10', 'leckertheme'),
              'col-md-11' => esc_html__('col-md-11', 'leckertheme'),
              'col-md-12' => esc_html__('col-md-12', 'leckertheme'),
          ),
          'no-validate' => false,
      ),
      'wht_txt'   => array(
				'type'  => 'switch',
				'label' => esc_html__( 'White Text', 'leckertheme' ),
			),
      'background_color' => array(
				'label' => esc_html__('Background Color', 'leckertheme'),
				'desc'  => esc_html__('Please select the background color', 'leckertheme'),
				'type'  => 'color-picker'
			),
			'background_image' => array(
				'label'   => esc_html__('Background Image', 'leckertheme'),
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
				'type'  => 'text',
				'value' => '0.3'
			),

		)
	),
	'leckertheme_column_anim_abs_pos'    => array(
      'type'  => 'switch',
      'value' => 'lec_posr',
      'label' => esc_html__('Position of Text Block', 'leckertheme'),
      'left-choice' => array(
          'value' => 'lec_posl',
          'label' => esc_html__('Left', 'leckertheme')
      ),
      'right-choice' => array(
          'value' => 'lec_posr',
          'label' => esc_html__('Right', 'leckertheme')
      )
  ),
);
