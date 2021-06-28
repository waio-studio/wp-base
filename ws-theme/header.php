<!doctype html>
<html <?php language_attributes(); ?> class="no-js">
	<head>
		<meta charset="<?php bloginfo('charset'); ?>">
		<title><?php wp_title(''); ?><?php if(wp_title('', false)) { echo ' :'; } ?> <?php bloginfo('name'); ?></title>
        <!-- Prefetch -->
		<link href="//www.google-analytics.com" rel="dns-prefetch">
		<link rel="dns-prefetch" href="//www.facebook.com">
		<link rel="dns-prefetch" href="//connect.facebook.net">
		<link rel="dns-prefetch" href="//static.ak.facebook.com">
		<link rel="dns-prefetch" href="//static.ak.fbcdn.net">
		<link rel="dns-prefetch" href="//s-static.ak.facebook.com">

		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta name="description" content="<?php bloginfo('description'); ?>">
        
		<?php wp_head(); ?>
	</head>
	<body <?php body_class(); ?>>