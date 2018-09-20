<?php if ( ! defined( 'FW' ) ) {
	die( 'Forbidden' );
}

$options = array(
	'enhance_social' => array(
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
	
);