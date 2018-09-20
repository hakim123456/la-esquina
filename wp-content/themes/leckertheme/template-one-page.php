<?php
/**
 * Template Name: One Page Template
 */ 
get_header(); ?>

<!-- Content -->
<section id="lec_content" class="lec_content">



		<?php
		if ( have_posts() ) :

			if ( is_home() && ! is_front_page() ) : ?>


			<?php
			endif;

			/* Start the Loop */
			while ( have_posts() ) : the_post();

				/*
				 * Include the Post-Format-specific template for the content.
				 * If you want to override this in a child theme, then include a file
				 * called content-___.php (where ___ is the Post Format name) and that will be used instead.
				 */
				get_template_part( 'template-parts/content', 'onepage' );

			endwhile;

			the_posts_navigation();

		else :

			get_template_part( 'template-parts/content', 'onepage' );

		endif; ?>

</section>

<?php
get_footer();

