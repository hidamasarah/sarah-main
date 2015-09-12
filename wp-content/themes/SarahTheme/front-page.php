<?php
/**
 * The template for displaying the homepage
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages and that
 * other "pages" on your WordPress site will use a different template.
 *
 * @package WordPress
 * @subpackage Sarah_Theme
 * @since Sarah Theme 1.0
 */

get_header(); ?>

<!-- Main image bar  --->
<!-- Featured Posts -->
<!-- Sidebar -->




	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">
            
    

		<?php
		// Start the loop.
		while ( have_posts() ) : the_post();

		// End the loop.
		endwhile;
		?>
            <h2> Hello can you see me?</h2>

		</main><!-- .site-main -->
	</div><!-- .content-area -->

<?php get_footer(); ?>
