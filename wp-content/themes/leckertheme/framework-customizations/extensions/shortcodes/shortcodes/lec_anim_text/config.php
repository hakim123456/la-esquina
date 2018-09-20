<?php if ( ! defined( 'FW' ) ) {
	die( 'Forbidden' );
}

$cfg = array();

$cfg['page_builder'] = array(
	'title'       => 'Animation Block',
	'title_template' => '{{- title }} {{- o.title }}',
	'tab'         => esc_html__( 'Lecker Elements', 'leckertheme' ),
);
