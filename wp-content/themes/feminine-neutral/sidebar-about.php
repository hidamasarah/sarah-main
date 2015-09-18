<?php
/**
 * The About Sidebar
 */

if ( is_active_sidebar( 'about' ) ) : ?>	
	<aside id="sidebar" class="<?php echo omega_apply_atomic( 'sidebar_class', 'sidebar sidebar-primary widget-area' );?>" <?php omega_attr( 'sidebar' ); ?>>	
		<?php do_action( 'before_primary' ); ?>
		<?php dynamic_sidebar( 'about' ); ?>
		<?php do_action( 'after_primary' ); ?>
  	</aside><!-- .sidebar -->
<?php endif;  ?>
