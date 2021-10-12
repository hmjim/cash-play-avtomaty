<?php 








/**
 * The template for displaying posts in the Aside post format
 *
 * @package WordPress
 * @subpackage Casino_Theme
 * @since Casino Theme 1.0
 */
?>

	<article id="cpa_post-<?php the_ID(); ?>" <?php post_class(); ?>>
		<div class="cpa_aside">
			<h1 class="cpa_entry-title"><a href="<?php the_permalink(); ?>" rel="bookmark"><?php the_title(); ?></a></h1>
			<div class="cpa_entry-content">
				<?php the_content( __( 'Continue reading <span class="cpa_meta-nav">&rarr;</span>', 'casinotheme' ) ); ?>
			</div><!-- .entry-content -->
		</div><!-- .aside -->

		<footer class="cpa_entry-meta">
			<a href="<?php the_permalink(); ?>" title="<?php echo esc_attr( sprintf( __( 'Permalink to %s', 'casinotheme' ), the_title_attribute( 'echo=0' ) ) ); ?>" rel="bookmark"><?php echo get_the_date(); ?></a>
			<?php if ( comments_open() ) : ?>
			<div class="cpa_comments-link">
				<?php comments_popup_link( '<span class="cpa_leave-reply">' . __( 'Leave a reply', 'casinotheme' ) . '</span>', __( '1 Reply', 'casinotheme' ), __( '% Replies', 'casinotheme' ) ); ?>
			</div><!-- .comments-link -->
			<?php endif; // comments_open() ?>
			<?php edit_post_link( __( 'Edit', 'casinotheme' ), '<span class="cpa_edit-link">', '</span>' ); ?>
		</footer><!-- .entry-meta -->
	</article><!-- #post -->
