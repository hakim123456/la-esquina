<?php
/**
 * The template for displaying all single posts.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
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
								while ( have_posts() ) : the_post();

									get_template_part( 'template-parts/content', get_post_format() );

									the_post_navigation();

									// If comments are open or we have at least one comment, load up the comment template.
									if ( comments_open() || get_comments_number() ) :
										comments_template();
									endif;

								endwhile; // End of the loop.
								?>

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

