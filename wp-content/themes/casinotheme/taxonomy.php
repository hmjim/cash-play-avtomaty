 <?php
/**
 * The template for displaying archive pages.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package casino
 */

get_header(); ?>

		<?php
        print_r(get_post_format());
        $queried_object = get_queried_object(); 
        $taxonomy = $queried_object->taxonomy;
        $term_id = $queried_object->term_id;
        $taxonomy = $queried_object->taxonomy;
        $description = $queried_object->description;

		if ( have_posts() ) : 
        $titlesk = explode(':', get_the_archive_title());
        $titlesk = $queried_object->name;
        ?>


        <div class="cpa_ftext">
            <h1 class="cpa_br4"><?php echo $titlesk;?></h1>	
            <?php if($description){ ?>		
            <div class="cpa_textwidget"><?php echo $description;?></div>
            <?php } ?>
		</div>
        <div class="cpa_content_osnovnoi">
			<?php
			/* Start the Loop */
			while ( have_posts() ) : the_post();

				/*
				 * Include the Post-Format-specific template for the content.
				 * If you want to override this in a child theme, then include a file
				 * called content-___.php (where ___ is the Post Format name) and that will be used instead.
				 */
                
                if($taxonomy){
                    get_template_part( 'content', $taxonomy );
                }else{
                    get_template_part( 'content', get_post_format() );
                }
				

			endwhile;
            echo '</div>';
            if (function_exists('wp_corenavi')) wp_corenavi(); 
			//the_posts_navigation();
            //$terme = get_term_by('name', $titlesk, 'proizvoditeli');
            //print_r($queried_object);
            
            $two_desc = get_field('text_b', $taxonomy . '_' . $term_id);
            if(empty($two_desc)){
                $two_desc = get_field('text_bc', $taxonomy . '_' . $term_id);
            }
            if(empty($two_desc)){
                $two_desc = get_field('text_s', $taxonomy . '_' . $term_id);
            }
            
            //if($two_desc){
            ?>
            
            <div class="cpa_ftext mat20">			
                <div class="cpa_textwidget"><?php echo $two_desc; ?></div>
    		</div>
<?php
            //}
		else :
            
			get_template_part( 'content', 'none' );

		endif; ?>



<?php
get_sidebar();
get_footer();
