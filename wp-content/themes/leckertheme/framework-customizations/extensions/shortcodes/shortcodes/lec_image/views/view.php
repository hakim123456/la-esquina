<?php if ( ! defined( 'FW' ) ) {
	die( 'Forbidden' );
}

/**
 * @var array $atts
 */
?>
<img src="<?php echo fw_resize( $atts['image']['url'], '1200', '', true ); ?>" alt="<?php echo esc_attr( $atts['title'] ); ?>">