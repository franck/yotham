<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN" "http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="fr">
<head>
<title><?php bloginfo('name'); ?> <?php wp_title(); ?></title>
<meta http-equiv="content-type" content="text/html; charset=utf-8" />
<meta name="verify-v1" content="0sUG/SQGQWObmqBAbPDpHGEpiKvo6WP0/XCUsHbSMTg=" />

<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" type="text/css" media="screen,projection" />
<link rel="stylesheet" href="<?php bloginfo("template_directory"); ?>/blueprint/print.css" type="text/css" media="print" />
<!--[if IE]><link rel="stylesheet" href="<?php bloginfo("template_directory"); ?>/blueprint/ie.css" type="text/css" media="screen, projection" /><![endif]-->

<?php wp_head(); ?>
</head>
<body>
<div id="container">
	<div id="header">
	  <h1><a href="<?php echo get_option('home'); ?>/"><?php bloginfo('name'); ?></a></h1>
	  <p><?php bloginfo('description'); ?></p>  		
	</div>

	<div id="wrapper"><div id="w">
    <?php get_sidebar(); ?>