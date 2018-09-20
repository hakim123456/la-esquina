<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Leckertheme
 */

?>

 </section>
    <!-- Content End -->


<?php if ( is_category() || is_archive() ) {
    $category = get_category( get_query_var( 'cat' ) );
    $cat_id = $category->cat_ID;
}?>
        
<?php if( function_exists('fw_get_db_settings_option') ) : ?>




    <?php /*Own Footer*/ if( fw_get_db_post_option(get_the_ID(),'lec_footer/lec_footer_select') == 'lec_own_footer' ) { ?>

        <footer class="lec_footer">
        <?php 
        $lecker_footer_menu = fw_get_db_post_option(get_the_ID(),'lec_footer/lec_own_footer/footer_menu/0');
        $lecker_the_post = get_posts(array(
            'include' => $lecker_footer_menu,
            'post_type' => 'any',
            'numberposts' => 1,
            'suppress_filters' => false,
        ));

        echo apply_filters('the_content', $lecker_the_post[0]->post_content);
        ?>
        </footer>

    <?php /*Default Footer*/ }else{?>
        <footer class="lec_footer">
        <?php 
        $lecker_footer_menu = fw_get_db_settings_option('footer_menu/0');
        $lecker_the_post = get_posts(array(
            'include' => $lecker_footer_menu,
            'post_type' => 'any',
            'numberposts' => 1,
            'suppress_filters' => false,
        ));

        echo apply_filters('the_content', $lecker_the_post[0]->post_content);
        ?>
        </footer>
    <?php } ?>

    


<?php else: ?>
    <!-- Footer -->
    <footer class="lec_footer lec_section lec_image_bck lec_wht_txt" data-image="<?php echo get_template_directory_uri(); ?>/images/main_back_bl.jpg">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <!-- Copyrights -->
                    <h3 class="lec_gold"><?php echo esc_attr('Lecker Themes','leckertheme') ?></h3>

                </div>
            </div>
        </div>
    </footer>
    <!-- Footer End -->
<?php endif; ?>

    

</div>
<!-- Page End -->

<?php wp_footer(); ?>

</body>
</html>
