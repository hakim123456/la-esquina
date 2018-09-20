<?php
/**
 * The template for displaying 404 pages (not found).
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package Leckertheme
 */

get_header(); ?>


<!-- Content -->
<section id="lec_content" class="lec_content">

		<!-- section -->
    <section class="lec_section">
        <div class="container">

        <div class="row">
            <div class="col-md-8 col-xs-12">
                

								<div class="page-content">
									<p><?php esc_html_e( 'It looks like nothing was found at this location. Maybe try one of the links below or a search?', 'leckertheme' ); ?></p>

									<?php
										get_search_form();

										the_widget( 'WP_Widget_Recent_Posts' );

										// Only show the widget if site has multiple categories.
										if ( leckertheme_categorized_blog() ) :
									?>

									<div class="widget widget_categories">
										<h2 class="widget-title"><?php esc_html_e( 'Most Used Categories', 'leckertheme' ); ?></h2>
										<ul>
										<?php
											wp_list_categories( array(
												'orderby'    => 'count',
												'order'      => 'DESC',
												'show_count' => 1,
												'title_li'   => '',
												'number'     => 10,
											) );
										?>
										</ul>
									</div><!-- .widget -->

									<?php
										endif;

										/* translators: %1$s: smiley */
										$archive_content = '<p>' . sprintf( esc_html__( 'Try looking in the monthly archives. %1$s', 'leckertheme' ), convert_smilies( ':)' ) ) . '</p>';
										the_widget( 'WP_Widget_Archives', 'dropdown=1', "after_title=</h2>$archive_content" );

										the_widget( 'WP_Widget_Tag_Cloud' );
									?>
								</div>

            </div>
            <!-- col end -->
            <!--Sidebar-->
            <div class="col-md-3 col-md-offset-1 hidden-xs hidden-sm">
                <?php get_sidebar(); ?>
            </div>
            <!--Sidebar End-->

        </div>
                            
       
                
        </div>
        <!-- container end -->
    </section>
    <!-- section end -->


</section>

<?php
get_footer();
