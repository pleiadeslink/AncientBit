<!doctype html>
<html <?php language_attributes(); ?> class="no-js">
	<head>
		<meta charset="<?php bloginfo('charset'); ?>">
		<title><?php wp_title(''); ?><?php if(wp_title('', false)) { echo ' :'; } ?> <?php bloginfo('name'); ?></title>

		<link href="//www.google-analytics.com" rel="dns-prefetch">
        <link rel="shortcut icon" href="http://fractalmonkey.xyz/files/favicon.png" />

		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta name="description" content="<?php bloginfo('description'); ?>">

		<script src="build/jquery.js"></script>
		<script src="build/mediaelement-and-player.min.js"></script>
		<link rel="stylesheet" href="build/mediaelementplayer.css" />


		<?php wp_head(); ?>
		<script>
        // conditionizr.com
        // configure environment tests
        conditionizr.config({
            assets: '<?php echo get_template_directory_uri(); ?>',
            tests: {}
        });
        </script>
	<link href='http://fonts.googleapis.com/css?family=Droid+Sans+Mono' rel='stylesheet' type='text/css'>
	</head>
	<body <?php body_class(); ?>>

		<!-- wrapper -->
		<div class="wrapper">

			<!-- header -->
			<header class="header clear" role="banner">
				<div class="blogtitlecont">
                <div class="blogtitle">
                	Fractal Monkey
                </div></div>

<div class="pmenucont">
<a href="http://fractalmonkey.xyz/"><div class="pmenu">Home</div></a>
<a href="http://fractalmonkey.xyz/"><div class="pmenu">About</div></a>
<a href="http://fractalmonkey.xyz/music/"><div class="pmenu">Music</div></a>
<a href="http://fractalmonkey.xyz/gallery/"><div class="pmenu">Gallery</div></a>
	<a href="http://fractalmonkey.xyz/resources/"><div class="pmenu">Resources</div></a>
<a href="http://fractalmonkey.xyz/contact/"><div class="pmenu">Contact</div></a>
</div>

			</header>
			<!-- /header -->