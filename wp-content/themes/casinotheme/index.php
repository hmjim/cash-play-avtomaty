 <?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * For example, it puts together the home page when no home.php file exists.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package WordPress
 * @subpackage Casino_Theme
 * @since Casino Theme 1.0
 */

get_header(); ?>




<div class="cpa_ftext"><?php dynamic_sidebar( 'index-widget-top' ); ?></div>

<div class="cpa_content_osnovnoi">
<?php
        
	    $page = (get_query_var('paged')) ? get_query_var('paged') : 1;

        //http://casino.kotenko.biz/index.php?page=2
        $wp_query = NULL;
        
        print_r($wp_query);
    
        $wp_query = new WP_Query( 'post_type=igrovue-avtomatu&paged=' . $page ); 
        
    
        while ( $wp_query->have_posts() ) : $wp_query->the_post(); 
            get_template_part( 'content', 'igrovue-avtomatu' );
        endwhile; 

        if (function_exists('wp_corenavi')) wp_corenavi(); 

        wp_reset_postdata(); 
?>
</div>

<div class="cpa_ftext"><?php dynamic_sidebar( 'index-widget-bottom' ); ?></div>
                
    









<?php get_footer(); ?>
