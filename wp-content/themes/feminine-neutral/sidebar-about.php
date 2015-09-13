<?php
/**
 * The About Sidebar
 */

if ( is_active_sidebar( 'primary' ) ) : ?>	
	<aside id="sidebar" class="<?php echo omega_apply_atomic( 'sidebar_class', 'sidebar sidebar-primary widget-area' );?>" <?php omega_attr( 'sidebar' ); ?>>	
		<?php do_action( 'before_primary' ); ?>
		<?php dynamic_sidebar( 'primary' ); ?>
		<?php do_action( 'after_primary' ); ?>
  	</aside><!-- .sidebar -->
<?php endif;  ?>

<div class="post-author">
					<div class="avatar"><img src="upload/Emily2.jpg" alt=""></div>
					<div class="intro-text">I’m Emily, the lead developer at <a href="http://skillcrush.com/">Skillcrush</a> as well as an instructor in Ruby and JavaScript. This is my blog full of inspiration.</div>
				</div>