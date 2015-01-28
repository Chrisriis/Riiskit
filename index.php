<?php
/**
 * The main template file.
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * @package Wordpress
 * @subpackage Riiskit
 * @since Riiskit 1.0.0
 */

get_header(); ?>

	<section class="primary">
		<main class="content" role="main">

			<?php
			if ( have_posts() ) :

				while ( have_posts() ) : the_post();

					get_template_part( 'content', get_post_format() );

				endwhile;



				the_posts_pagination( array(
					'prev_text'          => __( 'Previous page', 'riiskit' ),
					'next_text'          => __( 'Next page', 'riiskit' ),
					'before_page_number' => '<span class="meta-nav screenreader">' . __( 'Page', 'riiskit' ) . ' </span>',
				) );

			else :
				get_template_part( 'content', 'none' );

			endif;
			?>

		</main> <!-- .content -->
	</section> <!-- .primary -->

<?php get_footer(); ?>
