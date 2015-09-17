<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<title><?php wp_title( ' |', true, 'right' ); ?></title>
<link rel="profile" href="http://gmpg.org/xfn/11">
<!-- Add your font styles here -->
  <link href='https://fonts.googleapis.com/css?family=Droid+Sans:400,700' rel='stylesheet' type='text/css'>
<link href='https://fonts.googleapis.com/css?family=Quicksand' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=La+Belle+Aurore' rel='stylesheet' type='text/css'>
<link href='https://fonts.googleapis.com/css?family=Raleway:200' rel='stylesheet' type='text/css'>

<!-- end font styles -->
    
    
    
    
    
<?php wp_head(); ?>
</head>
<body <?php body_class(); ?> <?php omega_attr( 'body' ); ?>>
<?php do_action( 'omega_before' ); ?>
<div class="<?php echo omega_apply_atomic( 'site_container_class', 'site-container' );?>">
	<?php 
	do_action( 'omega_before_header' );
	do_action( 'omega_header' );
	do_action( 'omega_after_header' ); 
	?>
	<div class="site-inner">
		<?php do_action( 'omega_before_main' ); ?>