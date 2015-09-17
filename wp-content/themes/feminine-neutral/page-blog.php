<?php
/**
 * The template for displaying all pages.
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site will use a
 * different template.
 *
 * @package Omega
 */

get_header(); ?>
<main  class="<?php echo omega_apply_atomic( 'main_class', 'content' );?>" <?php omega_attr( 'content' ); ?>>
	<?php 
	do_action( 'omega_before_content' ); 
	do_action( 'omega_content' ); 
	do_action( 'omega_after_content' ); 
	?>
<<?php if ( is_active_sidebar( 'sidebar-about' ) ) { ?>
	<ul id="sidebar">
		<?php dynamic_sidebar( 'sidebar-about' ); ?>
	</ul>
<?php } ?> 
</main><!-- .content -->
<h2>THIS IS A ETEST</h2>
<?php get_footer(); ?>