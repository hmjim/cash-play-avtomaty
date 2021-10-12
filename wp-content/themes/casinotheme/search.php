<?php
/**
 * The template for displaying Search Results pages
 *
 * @package WordPress
 * @subpackage Casino_Theme
 * @since Casino Theme 1.0
 */

get_header(); ?>

	<section id="cpa_primary" class="cpa_site-content">
		<div id="cpa_content" role="main">

		<?php if ( have_posts() ) : ?>

			<header class="cpa_page-header">
				<h1 class="cpa_page-title"><?php printf( __( 'Search Results for: %s', 'casinotheme' ), '<span>' . get_search_query() . '</span>' ); ?></h1>
			</header>

			<?php casinotheme_content_nav( 'nav-above' ); ?>

			<?php /* Start the Loop */ ?>
			<?php while ( have_posts() ) : the_post(); ?>
				<?php get_template_part( 'content', get_post_format() ); ?>
			<?php endwhile; ?>

			<?php casinotheme_content_nav( 'nav-below' ); ?>

		<?php else : ?>

			<article id="cpa_post-0" class="cpa_post no-results not-found">
				<header class="cpa_entry-header">
					<h1 class="cpa_entry-title"><?php _e( 'Nothing Found', 'casinotheme' ); ?></h1>
				</header>

				<div class="cpa_entry-content">
					<p><?php _e( 'Sorry, but nothing matched your search criteria. Please try again with some different keywords.', 'casinotheme' ); ?></p>
					<?php get_search_form(); ?>
				</div><!-- .entry-content -->
			</article><!-- #post-0 -->

		<?php endif; ?>

		</div><!-- #content -->
	</section><!-- #primary -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>