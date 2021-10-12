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

<div class="cpa_slk_rate"><span>Рейтинг: </span>
    <?php if(function_exists('the_ratings')) { the_ratings(); } ?>
</div>

<div class="cpa_all_content">



			<?php while ( have_posts() ) : the_post(); ?>

                <h1 class="cpa_br4">Игровой автомат <?php the_title(); ?> онлайн</h1>	
<div class="cpa_osn_content">                
				<div class="cpa_lsingl">
                    <div class="cpa_content_flash">
                        <iframe src="<?php the_field('flash-game'); ?>" width="100%" height="477"></iframe>
                    </div>
                </div>
                <div class="cpa_rsingl">
                            <?php
                            // WP_Query arguments
                            $args = array (
                            	'post_type'              => array( 'igrovue-avtomatu' ),
                            	'post_status'            => array( 'publish' ),
                            	'posts_per_page'         => '10',
                            );
                            
                            // The Query
                            $query = new WP_Query( $args );
                            
                            // The Loop
                            if ( $query->have_posts() ) {
                  
                        ?>
                        
                        
                        
                        <div class="cpa_r_game">
                            <div class="custom-container vertical">
                                <a href="#" class="prev"> </a>
                                <div class="carousel">
                                    <ul>
                                    
                                    
                                    <?php
                                		while ( $query->have_posts() ) {
                                            		$query->the_post();
                                    ?>
                                    
                                        <li>
                                            <div>
                                                <a href="<?php echo get_post_permalink(); ?>" class="cpa_sl_one" title="<?php the_title(); ?>">
                                                <div class="cpa_im"><img src="<?php the_post_thumbnail_url( "sk-small-5" ); ?>" alt="<?php the_title(); ?>"></div>
                                                </a>
                                            </div>
                                        </li>
                                        
                                        <?php
                
                                            	}
                                 
                                        ?>
                                     
                                     
                                    </ul>
                                </div>
                                <a href="#" class="next"> </a>
                                <div class="cpa_clear"></div>
                            </div>
                        </div>    
                        
                       
                       
                        
                        <?php
                	          
                              
                            }
                            
                            // Restore original Post Data
                            wp_reset_postdata();
                        ?>
                
             
                </div>
                <div style="clear: both;"></div>
                 <?php if (get_field('link_game_pay')){?>
                    <a href="<?php the_field('link_game_pay'); ?>" class="cpa_go_p" title="Играть в автомат <?php the_title(); ?> на деньги"></a>
                 <?php } ?>
         
                <div style="clear: both;"></div>
                <div class="cpa_ftext">
                <?php if(get_the_content()){ ?>
                <div class="cpa_br3">Описание игры</div>
                <?php } ?>
                <div class="cpa_textwidget"><?php the_content(); ?></div>
                
                
                
                
                
                
                
                
                
                
                
                
                  <div class="cpa_rsinglc">
                            <?php
                            // WP_Query arguments
                                 $args2 = array(
                                    	'taxonomy' => 'proizvoditeli',
                                    	'hide_empty' => false,
                                    );
                            
                       
                   
                  
                        ?>
                        
                        
                        
                        <div class="cpa_r_game">
                            <div class="custom-containerh slower">
                                <a href="#" class="prev"> </a>
                                <div class="carousel">
                                    <ul>
                                    


                                    
                                    <?php
                                    
                                       $terms = get_terms( $args2 );

    	 foreach ($terms as $term) {  
    	 
    	       echo '<li>
                                            <div><a href="/proizvoditeli/'. $term->slug .'" title="'. $term->name .'" class="cpa_sitebar_bl_one_content_f">';
                    $image = get_field('imgd', 'proizvoditeli_'.$term->term_id);
                    
               echo '
                		<img src="'. $image['sizes']['sk-small-6'] .'" alt="'. $term->name .'"/>
                	</a> </div>
                                        </li>';
    
        }
        
                                    ?>
                                    
                        
                            
                                     
                                     
                                    </ul>
                                </div>
                                <a href="#" class="next"> </a>
                                <div class="cpa_clear"></div>
                            </div>
                        </div>    
                        
                       
                       
                        
                        <?php
                	          
                              
                      
                        ?>
 
                </div>
                
                
                
                
                
                
                
                
                
                <div class="cpa_textwidget"><?php the_field('text_ee'); ?></div>
		    		</div>
                
                
</div>

				<?php //comments_template( '', true ); ?>

			<?php endwhile; // end of the loop. ?>

</div>


<?php get_footer(); ?>