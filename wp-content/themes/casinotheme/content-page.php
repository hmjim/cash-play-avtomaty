<?php

/**
 * The template used for displaying page content in page.php
 *
 * @package WordPress
 * @subpackage Casino_Theme
 * @since Casino Theme 1.0
 */
?>
	<article id="cpa_post-<?php the_ID(); ?>" <?php post_class(); ?>>

			<?php if ( ! is_page_template( 'page-templates/front-page.php' ) ) : ?>
			<?php the_post_thumbnail(); ?>
			<?php endif; ?>
			<!-- <h1 class="cpa_entry-title"><?php the_title(); ?></h1> -->
            <h1 class="cpa_br4"><?php the_title(); ?></h1>


		<div class="cpa_entry-content">
			<?php the_content(); ?>
			<?php wp_link_pages( array( 'before' => '<div class="cpa_page-links">' . __( 'Pages:', 'casinotheme' ), 'after' => '</div>' ) ); ?>
		</div><!-- .entry-content -->
		<footer class="cpa_entry-meta">
			<?php edit_post_link( __( 'Edit', 'casinotheme' ), '<span class="cpa_edit-link">', '</span>' ); ?>
		</footer><!-- .entry-meta -->
	</article><!-- #post -->
