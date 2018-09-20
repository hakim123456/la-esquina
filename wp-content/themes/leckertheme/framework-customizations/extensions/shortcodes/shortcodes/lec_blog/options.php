<?php if ( ! defined( 'FW' ) ) {
	die( 'Forbidden' );
}

$options = array(
	'posts'=> array(
	    'type'  => 'multi-select',
	    'label' => esc_html__('Category', 'leckertheme'),
	    'desc'  => esc_html__('Choose Blog Category', 'leckertheme'),
	    'population' => 'taxonomy',
	    'source' => 'category',
	    'prepopulation' => 10,
        'limit' => 1,
  ),
	'post_count' => array(
		'type'  => 'select',
	    'value' => '3',
	    'label' => esc_html__('Number of Posts', 'leckertheme'),
	    'choices' => array(
	        '0' => esc_html__('Unlimited', 'leckertheme'),
	        '1' => esc_html__('1', 'leckertheme'),
	        '2' => esc_html__('2', 'leckertheme'),
	        '3' => esc_html__('3', 'leckertheme'),
	        '4' => esc_html__('4', 'leckertheme'),
	        '5' => esc_html__('5', 'leckertheme'),
	        '10' => esc_html__('10', 'leckertheme'),
	        '15' => esc_html__('15', 'leckertheme'),
	        '20' => esc_html__('20', 'leckertheme'),
	    )
	),
	'titles'=> array(
	    'type'  => 'switch',
	    'label' => esc_html__('Only Titles', 'leckertheme'),
  ),
);