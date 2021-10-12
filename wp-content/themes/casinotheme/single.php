<?php
/**
 * The Template for displaying all single posts
 *
 * @package WordPress
 * @subpackage Casino_Theme
 * @since Casino Theme 1.0
 */

get_header(); ?>

	<div id="cpa_primary" class="cpa_site-content">
		<div id="cpa_content" role="main">

			<?php while ( have_posts() ) : the_post(); ?>

				<?php get_template_part( 'content', get_post_format() ); ?>

				<nav class="cpa_nav-single">
					<h3 class="cpa_assistive-text"><?php _e( 'Post navigation', 'casinotheme' ); ?></h3>
					<span class="cpa_nav-previous"><?php previous_post_link( '%link', '<span class="cpa_meta-nav">' . _x( '&larr;', 'Previous post link', 'casinotheme' ) . '</span> %title' ); ?></span>
					<span class="cpa_nav-next"><?php next_post_link( '%link', '%title <span class="cpa_meta-nav">' . _x( '&rarr;', 'Next post link', 'casinotheme' ) . '</span>' ); ?></span>
				</nav><!-- .nav-single -->

				<?php comments_template( '', true ); ?>

			<?php endwhile; // end of the loop. ?>

		</div><!-- #content -->
	</div><!-- #primary -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>