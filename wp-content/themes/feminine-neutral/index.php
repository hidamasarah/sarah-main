<?php
/**
 * The main template file.
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * @package Omega
 */

get_header(); ?>


<div id="blog-right">
         
         <main class="<?php echo omega_apply_atomic( 'main_class', 'content' );?>" <?php omega_attr( 'content' ); ?>>
	<?php 
	do_action( 'omega_before_content' ); 
	do_action( 'omega_content' ); 		
	do_action( 'omega_after_content' ); 
	?>
</main></div>

<!-- .content -->

<div id="aboutme">
<!--- add photo and about me text-->
    
    <div class="post-author"> 
    <div class="avatar"><img src="http://localhost:8888/sarah-main/wp-content/uploads/2015/09/methree.jpg
" alt=""></div>
        
        <div class="intro-text">
            <P>I’m Sarah, a marketing technologist creating amazing customer experiences for entreprenuers and creative bloggers. Learn more about what I do here.</P>
            <P>I blog about web design, online marketing, social media, careers and Millennial life, and other topics that fascinate me.</P>
        </div>
    <div class="social-icons">    
        <a href="http://wwww.facebook.com/hidama"><img src="http://localhost:8888/sarah-main/wp-content/uploads/2015/09/FBicon.png"></a>
        
        
        <a href="http://www.twitter.com/hidama"> <img src=" http://localhost:8888/sarah-main/wp-content/uploads/2015/09/twittericon.png"></a>
        
          <a href="http://www.pinterest.com/hidama"><img src="http://localhost:8888/sarah-main/wp-content/uploads/2015/09/social_03.png"></a>
				</div>
    </div>
    </div>

<?php get_footer(); ?>