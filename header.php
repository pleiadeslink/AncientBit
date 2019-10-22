<!doctype html>
<html <?php language_attributes(); ?> class="no-js">
	<head>
		<meta charset="<?php bloginfo('charset'); ?>">
		<title><?php wp_title(''); ?><?php if(wp_title('', false)) { echo ' :'; } ?> <?php bloginfo('name'); ?></title>

        <link rel="shortcut icon" href="http://fractalmonkey.xyz/rebirth/favicon.png" />

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
						Rebirth
	
                	</div>
					
							<div class="blogsubtitle"><?php
		  $quotes[] = 'Although there are no mistakes, there are surprises.';
		  $quotes[] = 'An inverted figure signifies a perverted power.';
		  $quotes[] = 'Imagination informs our most important decisions.';
		  $quotes[] = 'A seed is useless and impotent unless it is put in its appropriate soil.';
		  $quotes[] = 'Each responsibility is an honor; each honor, a responsibility.';
		  $quotes[] = 'Out of the darkness shall you rise upward, one with the Light and one with the Stars.';
		$quotes[] = 'Every mortal will taste death, but only some will taste life.';
		$quotes[] = 'Dreams shed light on the dim places where reason itself has yet to voyage.';
		$quotes[] = 'The mind must be opened like a door. The key is silence.';
		$quotes[] = 'By what men fall, by that they rise.';
		$quotes[] = 'To remember oneself is to remember everything.';
		$quotes[] = 'A God who cannot smile could not have created this humorous universe.';
		$quotes[] = 'There is only one dance.';
		  srand ((double) microtime() * 1000000);
		  $random_number = rand(0,count($quotes)-1);
		  echo ($quotes[$random_number]);
		?></div>
				</div>		
				


		<div class="pmenucont">
			<a href="http://fractalmonkey.xyz/rebirth/"><div class="pmenu">Home</div></a>
			<a href="http://fractalmonkey.xyz/rebirth/about/"><div class="pmenu">About</div></a>
			<a href="http://fractalmonkey.xyz/rebirth/download/"><div class="pmenu">Download</div></a>
			<a href="http://fractalmonkey.xyz/rebirth/blog/"><div class="pmenu">Blog</div></a>
			<a href="https://github.com/FractalMonkey/Rebirth/" target="_blank"><div class="pmenu">GitHub</div></a>
			<a href="https://www.patreon.com/rebirth" target="_blank"><div class="pmenu">Patreon</div></a>
			<a href="http://fractalmonkey.xyz/rebirth/guestbook/"><div class="pmenu">Guestbook</div></a>
			<a href="http://fractalmonkey.xyz/rebirth/contact/"><div class="pmenu">Contact</div></a>
		</div>

			</header>
			<!-- /header -->