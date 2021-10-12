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
            <?php dynamic_sidebar( 'index-widget-stati-top' ); ?>
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
				?>
                
        <div class="cpa_one_block_cont_stati">
            
            
            <div class="cpa_one_block_img_stati">
                <a href="<?php echo get_post_permalink(); ?>" title="<?php the_title(); ?>"><img src="<?php the_post_thumbnail_url( "sk-small-7" ); ?>" alt="<?php the_title(); ?>"/></a>
            </div>
            <div class="cpa_one_block_title_stati">
                <a href="<?php echo get_post_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a>
            </div>
            <div class="cpa_one_block_text_stati">
<?php            
            echo trim_content_chars(350, '...');
?>
            </div>
            <div class="cpa_one_block_bott_stati">
                <a href="<?php echo get_post_permalink(); ?>" title="<?php the_title(); ?>">Подробнее</a>
            </div>
        </div>
                
                <?php

			endwhile;
?> </div> <?php
			if (function_exists('wp_corenavi')) wp_corenavi(); 
            
            ?>
            
            <div class="cpa_ftext">
                <?php dynamic_sidebar( 'index-widget-stati-bottom' ); ?>
    		</div>
        
        <?php

echo '</div>';

		else :

			get_template_part( 'content', 'none' );

		endif; ?>



<?php

get_footer();
