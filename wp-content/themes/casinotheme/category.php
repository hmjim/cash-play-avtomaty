<?php 






/**
 * The template for displaying Category pages
 *
 * Used to display archive-type pages for posts in a category.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package WordPress
 * @subpackage Casino_Theme
 * @since Casino Theme 1.0
 */
 
 
 
 
 
 
 
 
 
 <?php
/**
 * The template for displaying archive pages.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package casino
 */

get_header(); 
get_sidebar();
?>

<div class="cpa_all_content">

		<?php
   
        
		if ( have_posts() ) : ?>

		
		
                
                
        <div class="cpa_ftext">
            <h1 class="cpa_br4"><?php printf( __( 'Category Archives: %s', 'casinotheme' ), '<span>' . single_cat_title( '', false ) . '</span>' ); ?></h1>
            <?php if ( category_description() ) : // Show an optional category description ?>
				<div class="cpa_cat_desc"><?php echo category_description(); ?></div>
			<?php endif; ?>            
		</div>
        
		
<div class="cpa_osn_content">
			<?php
			/* Start the Loop */
			while ( have_posts() ) : the_post();

				/*
				 * Include the Post-Format-specific template for the content.
				 * If you want to override this in a child theme, then include a file
				 * called content-___.php (where ___ is the Post Format name) and that will be used instead.
				 */
				get_template_part( 'contentarch', get_post_format() );

			endwhile;

			if (function_exists('wp_corenavi')) wp_corenavi(); 
            
            ?>
            
            <div class="cpa_ftext">
                <?php dynamic_sidebar( 'index-widget-avtomat-bottom' ); ?>
    		</div>
        
        <?php

echo '</div>';

		else :

			get_template_part( 'content', 'none' );

		endif; ?>


</div>
<?php

get_footer();




