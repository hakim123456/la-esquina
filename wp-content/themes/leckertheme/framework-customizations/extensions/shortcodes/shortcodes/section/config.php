<?php if (!defined('FW')) die('Forbidden');

$cfg = array(
	'page_builder' => array(
		'tab'         => __('Layout Elements', 'leckertheme'),
		'title'       => __('Section', 'leckertheme'),
		'title_template' => '{{- title }} {{- o.section_title }}',
		'description' => __('Add a Section', 'leckertheme'),
		'type'        => 'section', // WARNING: Do not edit this
	)
);