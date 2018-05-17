<!DOCTYPE html>
<!--[if IE 7]><html class="ie ie7" <?php language_attributes(); ?>><![endif]-->
<!--[if IE 8]><html class="ie ie8" <?php language_attributes(); ?>><![endif]-->
<!--[if !(IE 7) | !(IE 8)  ]><!--><html <?php language_attributes(); ?>><!--<![endif]-->
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>" />
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<title><?php wp_title( '|', true, 'right' ); ?> Denise Gabel<?php print ( is_front_page() || is_home() ? " | Mentor for Change" : "" ); ?></title>

	<link rel="profile" href="http://gmpg.org/xfn/11" />
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />

	<?php wp_head(); ?>
	<link href="<?php bloginfo( "template_url" ) ?>/css/main.css?v=6" rel="stylesheet" type="text/css">
</head>
<body <?php body_class(); ?>>
	<nav class="main">
		<button class="menu-toggle">menu</button>
		<ul>
			<li><a href="<?php print ( is_front_page() ? ( isset( $_REQUEST['scroll'] ) ? "/" : '#header' ) : get_bloginfo( 'home' ) ) ?>">Home</a></li>
			<li><a href="<?php print ( is_front_page() ? '#about' : get_bloginfo( 'home' ) . "?scroll=about" ) ?>">About</a></li>
			<li><a href="<?php print ( is_front_page() ? '#topics' : get_bloginfo( 'home' ) . "?scroll=topics" ) ?>">Topics</a></li>
			<li><a href="<?php print ( is_front_page() ? '#testimonials' : get_bloginfo( 'home' ) . "?scroll=testimonials" ) ?>">Testimonials</a></li>
			<li><a href="<?php print ( is_front_page() ? '#video' : get_bloginfo( 'home' ) . "?scroll=video" ) ?>">Videos</a></li>
			<li><a href="/blog">Blog</a></li>
			<li><a href="<?php print ( is_front_page() ? '#connect' : get_bloginfo( 'home' ) . "?scroll=connect" ) ?>">Connect</a></li>
		</ul>
	</nav>

	<header id="header" class="header<?php print ( !is_front_page() ? " interior" : "" ) ?>">
		
		<a href="/" class="logo"><img src="<?php bloginfo( 'template_url' ) ?>/img/logo.png" title="Denise Gabel - Consultant"></a>
		
	</header>
