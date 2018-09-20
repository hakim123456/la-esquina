<?php if ( ! defined( 'FW' ) ) {
	die( 'Forbidden' );
}

$options = array(
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
);
