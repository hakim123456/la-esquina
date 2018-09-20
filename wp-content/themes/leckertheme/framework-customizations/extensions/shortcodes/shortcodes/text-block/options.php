<?php if ( ! defined( 'FW' ) ) {
	die( 'Forbidden' );
}

$options = array(
	'text' => array(
		'type'   => 'wp-editor',
		'teeny'  => true,
		'reinit' => true,
		'label'  => esc_html__( 'Content', 'leckertheme' ),
	),
);
