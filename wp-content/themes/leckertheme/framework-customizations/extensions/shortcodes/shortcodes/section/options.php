<?php if (!defined('FW')) {
	die('Forbidden');
}

$options = array(
	'section_title' => array(
		'label' => esc_html__('Section Title', 'leckertheme'),
		'type'  => 'text'
	),
	'section_subtitle' => array(
		'label' => esc_html__('Section Subtitle', 'leckertheme'),
		'type'  => 'text'
	),
	'section_pretitle' => array(
		'type'   => 'wp-editor',
		'teeny'  => true,
		'reinit' => true,
		'label'  => esc_html__( 'Pre Title', 'leckertheme' ),
	),
	'section_id' => array(
		'label' => esc_html__('Section ID', 'leckertheme'),
		'type'  => 'text'
	),
	'is_fullwidth' => array(
		'label'        => esc_html__('Full Width', 'leckertheme'),
		'type'         => 'switch',
	),
	'no_labels' => array(
		'label'        => esc_html__('No Labels', 'leckertheme'),
		'type'         => 'switch',
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
	'bg_pdg' => array(
      'type'  => 'switch',
      'label' => esc_html__('Big Padding', 'leckertheme')
  ),
  'col_autoheight' => array(
      'type'  => 'switch',
      'label' => esc_html__('Column Autoheight', 'leckertheme')
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
		'type'    => 'background-image',
		'choices' => array(//	in future may will set predefined images
		)
	),
	'parallax' => array(
		'label'        => esc_html__('Parallax', 'leckertheme'),
		'type'         => 'switch',
	),
	'no_cover' => array(
		'label'        => esc_html__('No Cover', 'leckertheme'),
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
		'desc'  => esc_html__('0.0-1', 'leckertheme'),
		'type'  => 'text',
		'value' => '0'
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
  'lec_grunge_borders' => array(
      'type'  => 'switch',
      'label' => esc_html__('Grunge Borders', 'leckertheme')
  ),
  'lec_rust_lines' => array(
      'type'  => 'switch',
      'label' => esc_html__('Rust Lines', 'leckertheme')
  ),
);
