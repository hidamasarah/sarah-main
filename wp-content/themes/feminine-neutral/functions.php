<?php add_action( 'widgets_init', 'theme_slug_widgets_init' );
function theme_slug_widgets_init() {

    register_sidebar( array(
        'name' => __( 'about', 'about' ),
        'id' => 'sidebar-2',
        'description' => __( 'wheeee.', 'theme-slug' ),
        'before_widget' => '<li id="%1$s" class="widget %2$s">',
	'after_widget'  => '</li>',
	'before_title'  => '<h2 class="widgettitle">',
	'after_title'   => '</h2>',
    ) );
}



