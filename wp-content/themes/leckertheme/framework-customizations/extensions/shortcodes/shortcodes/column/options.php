<?php if (!defined('FW')) {
	die('Forbidden');
}

$options = array(
	'leckertheme_white_txt' => array(
		'label'        => esc_html__('White Text', 'leckertheme'),
		'type'         => 'switch',
	),
	'leckertheme_column_padding' => array(
		'label'        => esc_html__('Padding in Block', 'leckertheme'),
		'type'         => 'switch',
	),
	'leckertheme_section_text_align' => array(
      'type'  => 'image-picker',
      'label' => esc_html__('Text Alignment', 'leckertheme'),
      'choices' => array(
          'text-left' => get_template_directory_uri() .'/framework-customizations/theme/options/static/img/tl.gif',
          'text-center' => get_template_directory_uri() .'/framework-customizations/theme/options/static/img/tc.gif',
          'text-right' => get_template_directory_uri() .'/framework-customizations/theme/options/static/img/tr.gif',                
      ),
      'blank' => true, // (optional) if true, images can be deselected
  ),
	'background_color' => array(
		'label' => esc_html__('Background Color', 'leckertheme'),
		'desc'  => esc_html__('Please select the background color', 'leckertheme'),
		'type'  => 'color-picker'
	),
	'background_image' => array(
		'label'   => esc_html__('Background Image', 'leckertheme'),
		'desc'    => esc_html__('Please select the background image', 'leckertheme'),
		'type'    => 'background-image',
		'choices' => array(//	in future may will set predefined images
		)
	),
	'parallax' => array(
		'label'        => esc_html__('Parallax', 'leckertheme'),
		'type'         => 'switch',
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

	'push_pull' => array(
		'type'  => 'select',
	    'label' => esc_html__('Push or Pull Offset', 'leckertheme'),
	    'choices' => array(
	    		'enh_push_none' => esc_html__('None', 'leckertheme'),
	        'fw-col-sm-push-1' => esc_html__('Push 1', 'leckertheme'),
	        'fw-col-sm-push-2' => esc_html__('Push 2', 'leckertheme'),
	        'fw-col-sm-push-3' => esc_html__('Push 3', 'leckertheme'),
	        'fw-col-sm-push-4' => esc_html__('Push 4', 'leckertheme'),
	        'fw-col-sm-push-5' => esc_html__('Push 5', 'leckertheme'),
	        'fw-col-sm-push-6' => esc_html__('Push 6', 'leckertheme'),
	        'fw-col-sm-push-7' => esc_html__('Push 7', 'leckertheme'),
	        'fw-col-sm-push-8' => esc_html__('Push 8', 'leckertheme'),
	        'fw-col-sm-push-9' => esc_html__('Push 9', 'leckertheme'),
	        'fw-col-sm-push-10' => esc_html__('Push 10', 'leckertheme'),
	        'fw-col-sm-push-11' => esc_html__('Push 11', 'leckertheme'),
	        'fw-col-sm-push-12' => esc_html__('Push 12', 'leckertheme'),
	        'fw-col-sm-pull-1' => esc_html__('Pull 1', 'leckertheme'),
	        'fw-col-sm-pull-2' => esc_html__('Pull 2', 'leckertheme'),
	        'fw-col-sm-pull-3' => esc_html__('Pull 3', 'leckertheme'),
	        'fw-col-sm-pull-4' => esc_html__('Pull 4', 'leckertheme'),
	        'fw-col-sm-pull-5' => esc_html__('Pull 5', 'leckertheme'),
	        'fw-col-sm-pull-6' => esc_html__('Pull 6', 'leckertheme'),
	        'fw-col-sm-pull-7' => esc_html__('Pull 7', 'leckertheme'),
	        'fw-col-sm-pull-8' => esc_html__('Pull 8', 'leckertheme'),
	        'fw-col-sm-pull-9' => esc_html__('Pull 9', 'leckertheme'),
	        'fw-col-sm-pull-10' => esc_html__('Pull 10', 'leckertheme'),
	        'fw-col-sm-pull-11' => esc_html__('Pull 11', 'leckertheme'),
	        'fw-col-sm-pull-12' => esc_html__('Pull 12', 'leckertheme'),
	    )
	)
);
