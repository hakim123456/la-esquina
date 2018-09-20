<?php
/**
 * The template for displaying search results pages.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#search-result
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
								if ( have_posts() ) : ?>


									<?php
									/* Start the Loop */
									while ( have_posts() ) : the_post();

										/**
										 * Run the loop for the search to output the results.
										 * If you want to overload this in a child theme then include a file
										 * called content-search.php and that will be used instead.
										 */
										get_template_part( 'template-parts/content', 'search' );

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
