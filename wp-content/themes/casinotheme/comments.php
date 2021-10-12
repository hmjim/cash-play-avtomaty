<?php
/**
 * The template for displaying Comments
 *
 * The area of the page that contains both current comments
 * and the comment form. The actual display of comments is
 * handled by a callback to casinotheme_comment() which is
 * located in the functions.php file.
 *
 * @package WordPress
 * @subpackage Casino_Theme
 * @since Casino Theme 1.0
 */

/*
 * If the current post is protected by a password and
 * the visitor has not yet entered the password we will
 * return early without loading the comments.
 */
if ( post_password_required() )
	return;
?>

<div id="cpa_comments" class="cpa_comments-area">

	<?php // You can start editing here -- including this comment! ?>

	<?php if ( have_comments() ) : ?>
		<h2 class="cpa_comments-title">
			<?php
				printf( _n( 'One thought on &ldquo;%2$s&rdquo;', '%1$s thoughts on &ldquo;%2$s&rdquo;', get_comments_number(), 'casinotheme' ),
					number_format_i18n( get_comments_number() ), '<span>' . get_the_title() . '</span>' );
			?>
		</h2>

		<ol class="cpa_commentlist">
			<?php wp_list_comments( array( 'callback' => 'casinotheme_comment', 'style' => 'ol' ) ); ?>
		</ol><!-- .commentlist -->

		<?php if ( get_comment_pages_count() > 1 && get_option( 'page_comments' ) ) : // are there comments to navigate through ?>
		<nav id="cpa_comment-nav-below" class="cpa_navigation" role="navigation">
			<h1 class="cpa_assistive-text section-heading"><?php _e( 'Comment navigation', 'casinotheme' ); ?></h1>
			<div class="cpa_nav-previous"><?php previous_comments_link( __( '&larr; Older Comments', 'casinotheme' ) ); ?></div>
			<div class="cpa_nav-next"><?php next_comments_link( __( 'Newer Comments &rarr;', 'casinotheme' ) ); ?></div>
		</nav>
		<?php endif; // check for comment navigation ?>

		<?php
		/* If there are no comments and comments are closed, let's leave a note.
		 * But we only want the note on posts and pages that had comments in the first place.
		 */
		if ( ! comments_open() && get_comments_number() ) : ?>
		<p class="cpa_nocomments"><?php _e( 'Comments are closed.' , 'casinotheme' ); ?></p>
		<?php endif; ?>

	<?php endif; // have_comments() ?>

	<?php comment_form(); ?>

</div><!-- #comments .comments-area -->