<!doctype html>
<html <?php language_attributes(); ?> class="no-js">
	<head>
		<meta charset="<?php bloginfo('charset'); ?>">
		<title><?php wp_title(''); ?><?php if(wp_title('', false)) { echo ' : '; } ?><?php bloginfo('name'); ?></title>

		<link href="//www.google-analytics.com" rel="dns-prefetch">
        <link href="<?php echo get_template_directory_uri(); ?>/assets/src/img/favicon.png" rel="shortcut icon">

		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">

		<!-- GOOGLE FONTS -->

		<link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">

		<?php wp_head(); ?>

	</head>
	<body <?php body_class(); ?>>

		<div class="container">
			<header>
				<a href="<?php bloginfo('URL'); ?>">
					<img class="logo" src="wp-content/themes/gill-law-group/assets/src/img/svg/Asset1.svg">
				</a>
				<nav>
					<?php html5blank_nav() ?>
				</nav>
			</header>
		</div>
