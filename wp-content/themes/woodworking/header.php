<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<!--
Design by Free CSS Templates
http://www.freecsstemplates.org
Released for free under a Creative Commons Attribution 2.5 License

Name       : Wood Working   
Description: A two-column, fixed-width design with dark color scheme.
Version    : 1.0
Released   : 20110708

-->
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta name="keywords" content="" />
<meta name="description" content="" />
<meta http-equiv="content-type" content="text/html; charset=utf-8" />
<title><?php bloginfo('name');?><?php wp_title();?> <?php if (is_front_page()) { echo "| ";  bloginfo('description'); } ?></title>
 <?php wp_head();?>
</head>
<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<div id="wrapper">
	<div id="wrapper-bgbtm">
		<div id="header">
			<div id="logo">
				<h1><a href="<?php echo site_url()?>">Wood Working </a></h1>
				<p>template design by <a href="http://www.freecsstemplates.org/" rel="nofollow">FreeCSSTemplates.org</a></p>
			</div>
		</div>
		<!-- end #header -->
		<div id="menu">
			<?php	
			wp_nav_menu(array('theme_location' => 'primary-menu'));
			?>
		</div>
		<!-- end #menu -->