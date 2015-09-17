<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">

	<title><?php wp_title(''); ?></title>

	<?php // mobile meta viewport ?>
		<meta name="viewport" content="width=device-width, initial-scale=1.0"/>

	<?php // icons & favicons  ?>
		<link rel="icon" href="<?php echo get_template_directory_uri(); ?>/favicon/favicon.ico">
		<link rel="icon" href="<?php echo get_template_directory_uri(); ?>/favicon/favicon.png">
		<link rel="apple-touch-icon" href="<?php echo get_template_directory_uri(); ?>/favicon/iPad-icon.png">
		<link rel="apple-touch-icon" href="<?php echo get_template_directory_uri(); ?>/favicon/iPadRetina-icon.png">
		<link rel="apple-touch-icon" href="<?php echo get_template_directory_uri(); ?>/favicon/iPhone-icon.png">
		<link rel="apple-touch-icon" href="<?php echo get_template_directory_uri(); ?>/favicon/iPhoneRetina-icon.png">

	<?php // Pingback y RSS  ?>
		<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>">
		<link rel="alternate" type="application/rss+xml" title="<?php bloginfo('name'); ?> RSS Feed suscription" href="<?php bloginfo('rss2_url'); ?>" />
		<link rel="alternate" type="application/atom+xml" title="<?php bloginfo('name'); ?> Atom Feed suscription" href="<?php bloginfo('atom_url'); ?>" />
	
<?php wp_head(); ?>
		 
</head>
<body <?php body_class(); ?> >
 
	<header>
		
		<input type="checkbox" id="mobile" /><label for="mobile">Menú</label>
      <nav id="main_menu_principal"><?php wp_nav_menu( array( 'theme_location' => 'header-menu' ) ); ?></nav>
		<nav id="mobile"><?php wp_nav_menu( array( 'theme_location' => 'mobile-menu' ) ); ?></nav>
		
		<h2 class="logo">
			<a href="<?php echo home_url(); ?>"><?php bloginfo('name'); ?></a>
		</h2>
		<nav class="main_menu_secondary"><?php wp_nav_menu( array( 'theme_location' => 'secondary-menu' ) ); ?></nav>	 
 	 
	</header>

	