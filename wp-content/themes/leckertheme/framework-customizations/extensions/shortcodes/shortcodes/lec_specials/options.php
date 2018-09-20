<?php if ( ! defined( 'FW' ) ) {
	die( 'Forbidden' );
}

$options = array(
	'lec_specials' => array(
		'label'         => esc_html__( 'Specials', 'leckertheme' ),
		'type'          => 'addable-popup',
		'template'      => '{{=title}}',
		'popup-options' => array(
			'title' => array(
				'type'   => 'text',
				'label'  => esc_html__( 'Title', 'leckertheme' ),
			),
			'imtitle' => array(
				'type'   => 'text',
				'label'  => esc_html__( 'Image Title', 'leckertheme' ),
			),
			'text' => array(
				'type'   => 'textarea',
				'label'  => esc_html__( 'Text', 'leckertheme' ),
			),
			'image' => array(
				'type'   => 'upload',
				'label'  => esc_html__( 'Image', 'leckertheme' ),
			),
			'link' => array(
				'type'   => 'text',
				'label'  => esc_html__( 'Link', 'leckertheme' ),
			),
		)
	)
);
