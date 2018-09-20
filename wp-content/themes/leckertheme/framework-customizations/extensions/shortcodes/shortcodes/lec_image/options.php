<?php if ( ! defined( 'FW' ) ) {
	die( 'Forbidden' );
}

$options = array(
	'title' => array(
		'type'   => 'text',
		'label'  => esc_html__( 'Title', 'leckertheme' ),
	),
	'image' => array(
		'type'   => 'upload',
		'label'  => esc_html__( 'Image', 'leckertheme' ),
	),
);
