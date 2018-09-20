<?php if ( ! defined( 'FW' ) ) {
	die( 'Forbidden' );
}

$options = array(
	'instagram_id' => array(
		'type'   => 'text',
		'label'  => esc_html__( 'Instagram userId', 'leckertheme' ),
	),
	'instagram_access' => array(
		'type'   => 'text',
		'label'  => esc_html__( 'Instagram accessToken', 'leckertheme' ),
	),
	
	
);
