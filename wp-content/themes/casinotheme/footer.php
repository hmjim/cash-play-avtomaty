<?php
/**
 * The template for displaying the footer
 *
 * Contains footer content and the closing of the #main and #page div elements.
 *
 * @package WordPress
 * @subpackage Casino_Theme
 * @since Casino Theme 1.0
 */
?>


        </div>
        </div>
    </div>
    
    
    <div class="cpa_all_footer">
        <div class="cpa_footer_m">
            <div class="cpa_footer_onem">
                <?php wp_nav_menu( array( 'theme_location' => 'top', 'menu_class' => 'nav-menu' ) ); ?>
            </div>
        </div>
    </div>
    
    <div class="cpa_all_footertwo">
        <div class="cpa_footer_one">
                <?php wp_nav_menu( array( 'theme_location' => 'bottom', 'menu_class' => 'nav-menu' ) ); ?>
        </div>
    </div>
    
    <div class="cpa_all_footertwo">
        <div class="cpa_footer_one">
            <div class="cpa_f2text"><?php dynamic_sidebar( 'index-widget-butt' ); ?></div>
        </div>
    </div>    
    
<script>
    $('.sub-menu').hover(function(){
        par = $(this).parents();
        out = par['0']['className'].split(' ');
    $('li#' + out[out.length - 1] + ' a').attr('class', 'liho');
    $('.sub-menu li a').attr('class', '');
    },function(){
    $('li#' + out[out.length - 1] + ' a').attr('class', '');
    });
	
/* Вставляем блоки в меню*/
function innermobile(){
if ($( document ).width() <= 641) {
if($('div').is('.cpa_center_content_right')) {
var innermobile = '<div class="cpa_center_content_right">'+$(".cpa_center_content_right").html()+'</div>';
$("#innermobile").html(innermobile);
}}}
innermobile();
var resizeTimer;
$(window).on('resize', function(e) {
clearTimeout(resizeTimer);
resizeTimer = setTimeout(function() {innermobile();}, 1000);
});
</script>  




<script>


function windowSize(){

        if(window.innerWidth < 940){
                        $(".vertical .carousel").jCarouselLite({
                            visible: 3,
                            btnNext: ".vertical .next",
                            btnPrev: ".vertical .prev",
                            vertical: true,
                            auto: 3500,
                            speed: 700,
                            mouseWheel: true
                        });
                        
                        $(".slower .carousel").jCarouselLite({
                            visible: 1,
                            btnNext: ".slower .next",
                            btnPrev: ".slower .prev",
                            vertical: false,
                            auto: 3500,
                            speed: 700,
                            mouseWheel: true
                        });
                        
                        $(".content_flash iframe").attr('height', 'auto');
                        
        } else {
                        $(".vertical .carousel").jCarouselLite({
                            visible: 8,
                            btnNext: ".vertical .next",
                            btnPrev: ".vertical .prev",
                            vertical: true,
                            auto: 3500,
                            speed: 700,
                            mouseWheel: true
                        });
                        
                        $(".slower .carousel").jCarouselLite({
                            visible: 3,
                            btnNext: ".slower .next",
                            btnPrev: ".slower .prev",
                            vertical: false,
                            auto: 3500,
                            speed: 700,
                            mouseWheel: true
                        });
        }
        
        
        
        
        var one   = $('.center_content_left'),
        two   = $('.center_content_right');
        if(window.innerWidth < 768){
            one.insertAfter(two);
        } else {
            two.insertAfter(one);
        }




}

jQuery(window).load(windowSize); // ÔË Á‡„ÛÁÍÂ
jQuery(window).resize(windowSize); // ÔË ËÁÏÂÌÂÌËË ‡ÁÏÂÓ‚
</script>
  

<?php wp_footer(); ?>
</body>
</html>