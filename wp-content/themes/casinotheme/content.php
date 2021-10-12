<?php
/**
 * The default template for displaying content
 *
 * Used for both single and index/archive/search.
 *
 * @package WordPress
 * @subpackage Casino_Theme
 * @since Casino Theme 1.0
 */
?>

	<article id="cpa_post-<?php the_ID(); ?>" <?php post_class(); ?>>
		<?php if ( is_sticky() && is_home() && ! is_paged() ) : ?>
		<div class="cpa_featured-post">
			<?php _e( 'Featured post', 'casinotheme' ); ?>
		</div>
		<?php endif; ?>
		<header class="cpa_entry-header">
			<?php if ( ! post_password_required() && ! is_attachment() ) :
				the_post_thumbnail();
			endif; ?>

			<?php if ( is_single() ) : ?>
			<h1 class="cpa_entry-title"><?php the_title(); ?></h1>
			<?php else : ?>
			<h1 class="cpa_entry-title">
				<a href="<?php the_permalink(); ?>" rel="bookmark"><?php the_title(); ?></a>
			</h1>
			<?php endif; // is_single() ?>
			<?php if ( comments_open() ) : ?>
				<div class="cpa_comments-link">
					<?php comments_popup_link( '<span class="cpa_leave-reply">' . __( 'Leave a reply', 'casinotheme' ) . '</span>', __( '1 Reply', 'casinotheme' ), __( '% Replies', 'casinotheme' ) ); ?>
				</div><!-- .comments-link -->
			<?php endif; // comments_open() ?>
		</header><!-- .entry-header -->

		<?php if ( is_search() ) : // Only display Excerpts for Search ?>
		<div class="cpa_entry-summary">
			<?php the_excerpt(); ?>
		</div><!-- .entry-summary -->
		<?php else : ?>
		<div class="cpa_entry-content">
			<?php the_content( __( 'Continue reading <span class="cpa_meta-nav">&rarr;</span>', 'casinotheme' ) ); ?>
			<?php wp_link_pages( array( 'before' => '<div class="cpa_page-links">' . __( 'Pages:', 'casinotheme' ), 'after' => '</div>' ) ); ?>
		</div><!-- .entry-content -->
		<?php endif; ?>

		<footer class="cpa_entry-meta">
			<?php casinotheme_entry_meta(); ?>
			<?php edit_post_link( __( 'Edit', 'casinotheme' ), '<span class="cpa_edit-link">', '</span>' ); ?>
			<?php if ( is_singular() && get_the_author_meta( 'description' ) && is_multi_author() ) : // If a user has filled out their description and this is a multi-author blog, show a bio on their entries. ?>
				<div class="cpa_author-info">
					<div class="cpa_author-avatar">
						<?php
						/** This filter is documented in author.php */
						$author_bio_avatar_size = apply_filters( 'casinotheme_author_bio_avatar_size', 68 );
						echo get_avatar( get_the_author_meta( 'user_email' ), $author_bio_avatar_size );
						?>
					</div><!-- .author-avatar -->
					<div class="cpa_author-description">
						<h2><?php printf( __( 'About %s', 'casinotheme' ), get_the_author() ); ?></h2>
						<p><?php the_author_meta( 'description' ); ?></p>
						<div class="cpa_author-link">
							<a href="<?php echo esc_url( get_author_posts_url( get_the_author_meta( 'ID' ) ) ); ?>" rel="author">
								<?php printf( __( 'View all posts by %s <span class="cpa_meta-nav">&rarr;</span>', 'casinotheme' ), get_the_author() ); ?>
							</a>
						</div><!-- .author-link	-->
					</div><!-- .author-description -->
				</div><!-- .author-info -->
			<?php endif; ?>
		</footer><!-- .entry-meta -->
	</article><!-- #post -->
