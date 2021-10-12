 <?php
/**
 * The Template for displaying all single posts
 *
 * @package WordPress
 * @subpackage Casino_Theme
 * @since Casino Theme 1.0
 */

get_header(); 
get_sidebar();
?>

<div class="cpa_all_content">



			<?php while ( have_posts() ) : the_post(); ?>

                <h1 class="cpa_br4"><?php the_title(); ?></h1>	
<div class="cpa_osn_content">                
				<?php the_content(); ?>
</div>

				<?php //comments_template( '', true ); ?>

			<?php endwhile; // end of the loop. ?>

</div>


<?php get_footer(); ?>