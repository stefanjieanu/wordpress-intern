<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" <?php language_attributes(); ?>>
<head>
<link rel="profile" href="http://gmpg.org/xfn/11" />
<link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo( 'stylesheet_url' ); ?>" />

<meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>" />
<meta name="viewport" content="width=device-width, initial-scale=1">
<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>

<?php
  $menu_name = 'MainMenu';
  $locations = get_nav_menu_locations();
  $menu = wp_get_nav_menu_object( $locations[ $menu_name ] );
  $menuitems = wp_get_nav_menu_items( $menu->term_id, array( 'order' => 'DESC' ) );
?>
<!-- <div class="container-flex top-menu" style="text-align: center;">
	<div class="row">
		<div class="col-md-1">
		</div>
	    <div class="col-md-2 top-menu-item">
	    	<?php wp_nav_menu(array(
				'menu' => 'Who we serve', 
				'container_id' => 'cssmenu', 
				'walker' => new CSS_Menu_Walker()
			)); ?>
	    </div>
	    <div class="col-md-2 top-menu-item">
	    	<?php wp_nav_menu(array(
				'menu' => 'Who we are', 
				'container_id' => 'cssmenu', 
				'walker' => new CSS_Menu_Walker()
			)); ?>
	    </div>
	    <div class="col-md-2 top-menu-item">
	    	<?php wp_nav_menu(array(
				'menu' => 'Get involved', 
				'container_id' => 'cssmenu', 
				'walker' => new CSS_Menu_Walker()
			)); ?>
	    </div>
	    <div class="col-md-2 top-menu-item">
	    	<?php wp_nav_menu(array(
				'menu' => 'Explore more', 
				'container_id' => 'cssmenu', 
				'walker' => new CSS_Menu_Walker()
			)); ?>
	    </div>
	    <div class="col-md-2 top-menu-item">
	    	<?php wp_nav_menu(array(
				'menu' => 'Get in touch', 
				'container_id' => 'cssmenu', 
				'walker' => new CSS_Menu_Walker()
			)); ?>
	    </div>
	    <div class="col-md-1">
	    </div>
	</div>
	<div class="row nav-background">
		<div class="col-md-3">
			<div class="lentila">
				<h1>Our founders</h1>
				<p>"Lorem ipsum is just a thing for web devs."</p>
			</div>
		</div>
		<div class="col-md-9">
			
		</div>
	</div>
</div> -->

<br><br><br><br>

<div class="container-fluid nav-container">
<nav class="navbar navbar-default">
<div class="container">
<div class="navbar-header">
<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
<span class="sr-only">Toggle navigation</span>
<span class="icon-bar"></span>
<span class="icon-bar"></span>
<span class="icon-bar"></span>
</button>
</div>
<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
<ul class="nav navbar-nav" style="">
	<?php wp_nav_menu( array('theme_location' => 'primary')); ?>
</ul>

</div>
</div>
</div>
</nav>
