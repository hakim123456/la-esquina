<?php
/**
 * The main template file.
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
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
                
                <?php
									if ( have_posts() ) :

										if ( is_home() && ! is_front_page() ) : ?>
											<header>
												<h1 class="page-title screen-reader-text"><?php single_post_title(); ?></h1>
											</header>

										<?php
										endif;

										/* Start the Loop */
										while ( have_posts() ) : the_post();

											/*
											 * Include the Post-Format-specific template for the content.
											 * If you want to override this in a child theme, then include a file
											 * called content-___.php (where ___ is the Post Format name) and that will be used instead.
											 */
											get_template_part( 'template-parts/content', get_post_format() );

										endwhile;

										the_posts_navigation();

									else :

										get_template_part( 'template-parts/content', 'none' );

									endif; ?>

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
