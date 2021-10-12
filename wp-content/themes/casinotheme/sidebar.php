<?php
/**
 * The sidebar containing the main widget area
 *
 * If no active widgets are in the sidebar, hide it completely.
 *
 * @package WordPress
 * @subpackage Casino_Theme
 * @since Casino Theme 1.0
 */
?>


<div class="cpa_sitebar_bl_one">
    <div class="cpa_sitebar_bl_one_title">
        Разработчики
    </div>
    
    <?php
     
     $args = array(
    	'taxonomy' => 'proizvoditeli',
    	'hide_empty' => false,
    );
    $terms = get_terms( $args );
    //print_r($terms);
    $q=0;
    	 foreach ($terms as $term) {  
    	   if($q > 4){
    	       continue;
    	   }
    	       echo '<a href="/proizvoditeli/'. $term->slug .'" title="'. $term->name .'" class="cpa_sitebar_bl_one_content_on">';
                    $image = get_field('imgd', 'proizvoditeli_'.$term->term_id);
                    
               echo '
                		<img src="'. $image['sizes']['sk-small-2'] .'" alt="'. $term->name .'"/>
                	</a>';
    
             $q++;  
        }

    ?>

</div>

<div class="cpa_sitebar_bl_one">
    <div class="cpa_sitebar_bl_one_title">
        Последние выигрыши
    </div>
    
  <?php 
    global $post; 
    $postser = get_posts( array('numberposts' => 5, 'post_type' => 'igrovue-avtomatu','orderby' => 'rand') ); 

    foreach($postser as $post){ setup_postdata($post); ?>
            <a href="<?php echo get_permalink($pst->ID); ?>" class="cpa_com_on">
                <div class="cpa_com_on_im">
                <img src="<?php echo get_the_post_thumbnail_url( $pst->ID, 'sk-small-3' ); ?>" alt="<?php echo $pst->post_title; ?>">
                    
                </div>
                <div class="cpa_com_title"><?php trim_title_chars(12, '...', $pst->post_title); ?></div>
                <div class="cpa_com_pr"><?php echo rand(70,250).' '; the_field('sgame', $pst->ID); ?></div>
                <div class="cpa_com_title2"><?php  
                $sknik = array('DUBLYOR', 'NASTRADAMUS', 'Иннoчкa_-MAMBO ', 'DYAVOL_no_DOBRIY ', 'NASTYA', 'Интeллигeнт ', 'Dagestanec ', 'NATALIA_ORIERO ', '-CAKO-M', 'DangeR ', 'NATHASA', 'ЛACKABA-Я', '-I_B_O ', 'DarkSteel ', 'NArgILa ', 'ЛE3ГИHЧИK ', 'AYDAN', 'Dasdafsdf', 'NEFTCI_PFK ', 'ЛУHA ', 'MARTIN ', 'Daywalker ', 'NEITRINO', 'ЛЯПOTA', '-ZAUR', 'DeHWeT ', 'NELLY', 'Лacкoвaя_пaнтepa', '-CIQAN ', 'DeLi', 'NELLY_FURTADO ', 'Лacкoвый_Бaкинeц ', '-NeMo ', 'DeaD_GirL ', 'NEQATIF', 'Лacтoчкa ', '-UREK', 'Deart-Wolf ', 'NERGIZ_132 ', 'Лaпyля ', '-CIQAN', 'DeatH ', 'NERPATOLUQ', 'Лaпкa ', '-KAKETKA ', 'Death_angel ', 'NEW_GIRL', 'Лeди', '-RIO- ', 'Dedmopo3 ', 'NEW_WORLD', 'Лeди_Бывaлый ', '-AZERBAYCAN', 'DelPiero ', 'NFS_Carbon ', 'Лeйлa ', '-Anarchik ', 'Delete1', 'NICAT.59', 'Лeнka ', '-Baksyor ', 'Delfin ', 'NIGAR', 'Лoлитa ', '-KILLER ', 'Desant016 ', 'NIGHTWOLF', 'Лyнa ', '-NAYOMNIK ', 'DeserT_eagLe ', 'NIGHT_HUNTER ', 'ЛyчщeЧeмAнгeль', '-_ANAR_- ', 'DetkA', 'NIKO_375', 'ЛиXaчь', '-ШAMAXИHEЦ', 'Detka ', 'NIL-ENS', 'Ликa ', '-_ANAR_- ', 'Devdas', 'NINJA ', 'Львинoe-cepдцe ', '-AZERI- ', 'Devushka_Jagoza ', 'NOD32 ', 'Люcькa ', '-BИPУC_666', 'DiKaRoChKa ', 'NONDA ', 'ЛюбoвьCлaдкийCoн ', '-Cмepть_Oн ', 'DiRecTor ', 'NUHANTE ', 'Любимчик-Я ', '-DMX_B- ', 'Diabolus666 ', 'NURIYEV ', 'Любитeль_кeкcoв', '-Fu_ADELL- ', 'Diams ', 'NURLAN_DRAGON ', 'Люди-инвaлиды ', '-MUZIK- ', 'Diana_84 ', 'NYUTON_A', 'ПATPИOT', '-RAMAL', 'Die_Hard ', 'NaRKo_BiZnES', 'ПCИX ', '-AГДAMEЦ-', 'Dina ', 'NaRkAmAn_789', 'ПEPBИ3ЦИK', '-CANAVAR-', 'Djamila', 'Nacnoy_Snayper', 'ПEPEДO3ИPOBKA', '-PROMETE', 'Dj_Dance', 'Naile', 'ПOTЯ', '-SexyBoy-', 'Dj_EmO', 'Naina', 'ПOБEГУHЧИK', '-4ClubberS- ', 'Dj_POLINA ', 'Nanit', 'ПOЛЬKA ', '-ANONIM-', 'Dj_Perviz', 'NapaleoN ', 'ПOЦEЛУЙ_ДPAKOHA ', '-BRATELNIK- ', 'Dj_SkypeGirl ', 'Narin_Yagish ', 'ПOдeльHИK ', '-D-R-A-K-O-N-', 'DoDaqDan_QelBe', 'Narkaman_8km', 'ПPACЛABЛEHHЫЙ', '-EvA- ', 'DodgeR ', 'Narkaman_Lubvi ', 'ПPOДЮCEP ', '-GladiatoR- ', 'Doktor_Elcan', 'Narmina ', 'ПPИЩИK ', '-JVC- ', 'DolmakimiOglan', 'Nastinka', 'ПapeньБeзДeвyшки', '-KATALA- ', 'DonJuan89 ', 'Nasty_Girl');
                    $random_number = rand(0,count($sknik)-1);
                 trim_title_chars(10, '...', $sknik[$random_number]);?></div>
            </a>
            <div class="cpa_poz"></div>
        <?php
        $w++;
    }

    ?>

</div>





<div class="cpa_sitebar_bl_one">
    <div class="cpa_sitebar_bl_one_title unik">
        Новости
    </div>
    
    <?php
     
    $my_posts = new WP_Query;
    $myposts = $my_posts->query( array(
    	'post_type' => 'stati',
        'posts_per_page' => '5'
    ) );
    $r=0;
    foreach( $myposts as $pst ){

?>
            <div class="cpa_com_on">
                <div class="cpa_coms_title"><a href="<?php echo get_permalink($pst->ID); ?>" title="<?php echo $pst->post_title; ?>"><?php echo $pst->post_title; ?></a><br />
                
<?php
	    
                
                $cur_terms = get_the_terms( $pst->ID, 'kategorii' );
                
                $out_cat = '<div class="cpa_dop_r">Рубрика: ';
                $e=0;
                if($cur_terms){
                    foreach( (array)$cur_terms as $cur_term ){
                        $out_cat .= '<a href="'. get_term_link( (int)$cur_term->term_id, $cur_term->taxonomy ) .'" title="'. $cur_term->name .'">'. $cur_term->name .'</a>,';
                        $e++;
                    }
                }
                
                if($e > 0){
                    echo substr($out_cat, 0, -1);
                    echo '</div>';
                }
                

?>
                
                </div>
                
            </div>
            <div class="cpa_poz"></div>
        <?php
        $r++;
    }

    ?>

</div>

  <?php do_action('installation_point'); ?>