<!doctype html>
<html <?php language_attributes(); ?> class="no-js">
	<head>
		<meta charset="<?php bloginfo('charset'); ?>">
		<title><?php wp_title(''); ?><?php if(wp_title('', false)) { echo ' :'; } ?> <?php bloginfo('name'); ?></title>

		<link href="//www.google-analytics.com" rel="dns-prefetch">
		<link href="<?php echo get_template_directory_uri(); ?>/img/icons/favicon.ico" rel="shortcut icon">
		<link href="<?php echo get_template_directory_uri(); ?>/img/icons/touch.png" rel="apple-touch-icon-precomposed">

		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta name="description" content="<?php bloginfo('description'); ?>">

		<?php wp_head(); ?>
		<script>
        // conditionizr.com
        // configure environment tests
        conditionizr.config({
            assets: '<?php echo get_template_directory_uri(); ?>',
            tests: {}
        });
        </script>
	<script src="https://code.jquery.com/jquery-3.1.0.js"   integrity="sha256-slogkvB1K3VOkzAI8QITxV3VzpOnkeNVsKvtkYLMjfk="   crossorigin="anonymous"></script>

	</head>
	<body <?php body_class(); ?>>

			<!-- header -->
			<header class="header clear" role="banner">
				<div class="header-image"><div class="logo fade-in"></div></div>


					<!-- Nav -->
					<!-- made div into a nav instead of semantic <nav>, so I don't have to overwrite nav's display: block  -->
					<div class="nav slide-in" role="navigation">
						<ul class="delayed-fade-in">
							<a href="/index.php"><li>home</li></a>
							<a><li>gba</li></a>
							<a><li>upcoming</li></a>
							<a href="/index.php?p=4"><li>contact</li></a>
						</ul>
					<div class="handle">Menu</div>
					</div>
					<!-- /Nav -->

			</header>
			<!-- /Header -->
	<!-- Wrapper -->
		<div class="wrapper">
