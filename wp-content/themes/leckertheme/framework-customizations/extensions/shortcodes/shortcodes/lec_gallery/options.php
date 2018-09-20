<?php if ( ! defined( 'FW' ) ) {
	die( 'Forbidden' );
}

$options = array(
	'lec_gallery' => array(
		'label'         => esc_html__( 'Gallery', 'leckertheme' ),
		'type'          => 'addable-popup',
		'template'      => '{{=title}}',
		'popup-options' => array(
			'title' => array(
				'type'   => 'text',
				'label'  => esc_html__( 'Title', 'leckertheme' ),
			),
			'image' => array(
				'type'   => 'upload',
				'label'  => esc_html__( 'Image', 'leckertheme' ),
			),
			'menu' => array(
				'label'         => esc_html__( 'Menu', 'leckertheme' ),
				'type'          => 'popup',
				'popup-options' => array(
					'title' => array(
						'type'  => 'text',
						'label' => esc_html__( 'Title', 'leckertheme' ),
					),
					'price' => array(
						'type'  => 'text',
						'label' => esc_html__( 'Price', 'leckertheme' ),
					),
					'text' => array(
						'type'  => 'textarea',
						'label' => esc_html__( 'Text', 'leckertheme' ),
					),
					'subtitle' => array(
						'type'  => 'text',
						'label' => esc_html__( 'Subtitle', 'leckertheme' ),
					),
					'subtext' => array(
						'type'  => 'textarea',
						'label' => esc_html__( 'Subtext', 'leckertheme' ),
					),
					'left' => array(
						'type'  => 'switch',
						'label' => esc_html__( 'Left Position', 'leckertheme' ),
					),
				)
			),
		)
	),
	'menu_settings' => array(
		'label'         => esc_html__( 'Menu Settings', 'leckertheme' ),
		'type'          => 'popup',
		'popup-options' => array(
			'image' => array(
				'label' => esc_html__( 'Background', 'leckertheme' ),
				'type'  => 'upload'
			),
			'background_color' => array(
				'label' => esc_html__('Background Color', 'leckertheme'),
				'desc'  => esc_html__('Please select the background color', 'leckertheme'),
				'type'  => 'color-picker'
			),
			'wht_txt' => array(
				'type'  => 'switch',
				'label' => esc_html__( 'White Text', 'leckertheme' ),
			),
			'simple_titles' => array(
				'type'  => 'switch',
				'label' => esc_html__( 'Simple Titles', 'leckertheme' ),
			),
		)
	),
);
