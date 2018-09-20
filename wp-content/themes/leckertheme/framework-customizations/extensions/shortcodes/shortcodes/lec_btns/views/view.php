<?php if ( ! defined( 'FW' ) ) {
	die( 'Forbidden' );
}

/**
 * @var array $atts
 */
?>
<?php foreach ($atts['lecker_btns'] as $btns): ?>
                
    <a href="<?php echo esc_url($btns['link']); ?>" class="btn<?php if (empty( $btns['icon'] )): ?> btn-nopd<?php endif ?>"><?php echo esc_attr($btns['title']); ?>
    <?php if (!empty( $btns['icon'] )): ?>
        <i class="ti <?php echo esc_attr($btns['icon']); ?>"></i>
    <?php endif ?>
    </a>

<?php endforeach; ?>
