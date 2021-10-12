<?php

/**
 * Template part for displaying posts.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package casino
 */

?>




        <div class="cpa_one_block_cont bra3">
            <div class="cpa_block_lefton">
                <div class="cpa_blt">
                    <img src="<?php the_post_thumbnail_url( "sk-small-4" ); ?>" alt="Игровой автомат <?php the_title(); ?>"/>
                    <div class="cpa_bltb">
                        <a href="<?php echo get_post_permalink(); ?>" class="cpa_but_d" title="Бесплатная Демо-игра">Демо-игра</a>
                        <a href="<?php the_field('link_game_pay'); ?>" title="Играть на деньги онлайн" class="cpa_but_c">На деньги</a>
                    </div>
                </div>
                <div class="cpa_blb">
                    <div class="cpa_blt_title">
                        <?php trim_title_chars(18, '...', get_the_title()); ?>
                    </div>
                    <div class="cpa_blt_rate">
                        <?php if(function_exists('the_ratings')) { the_ratings(); } ?>
                    </div>
                </div>
            </div>
        </div>
        
        


