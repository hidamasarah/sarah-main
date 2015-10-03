<?php
/**
 * The template for displaying the homepage
 *
 * @package WordPress
 * @subpackage Feminine Neutral
 * @since Feminine Neutral 1.0
 */

get_header(); ?>

<!--- above the sidebar ---->
<div class="front-page-container">

    <h1> Let’s make something awesome. </h1>

    <h3>I help creative bloggers and small business owners make a remarkable impression online with gorgeous and effective web design. 
       <h3> &</h3>
    <h3>I have a passion for social media marketing and helping others find their careers in digital marketing.</h3>   

    
    </h3>
    
    <div id="front-background">
    
    
    </div>    

<h3> I also love to write. Read the blog or check out some of my popular posts below. I write about a variety of topics, from marketing and career advice to pop culture and web design. </h3>

</div>    



<!--- Primary Sidebar/Featured Posts -->
<div class="sidebar-area">
<h2>Popular Posts</h2>
<?php get_sidebar('primary'); ?>
    
    </div>

<!---- end ----->







<?php get_footer(); ?>