<?php
/**
 * The template for displaying the web design sell page
 *
 * @package WordPress
 * @subpackage Feminine Neutral
 * @since Feminine Neutral 1.0
 */

get_header(); ?>

<main  class="<?php echo omega_apply_atomic( 'main_class', 'content' );?>" <?php omega_attr( 'content' ); ?>>
	<?php 
	do_action( 'omega_before_content' ); 
	do_action( 'omega_content' ); 
	do_action( 'omega_after_content' ); 
	?>

<!--- insert pretty pictures and text! -->




<?php get_footer(); ?>