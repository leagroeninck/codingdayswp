<!DOCTYPE html>
<!--[if IE 7]>
<html class="ie ie7" <?php language_attributes(); ?>>
<![endif]-->
<!--[if IE 8]>
<html class="ie ie8" <?php language_attributes(); ?>>
<![endif]-->
<!--[if !(IE 7) & !(IE 8)]><!-->
<html <?php language_attributes(); ?>>
<!--<![endif]-->
<head >
	<meta charset="UTF-8">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css" media="screen" title="no title" charset="utf-8">
	<meta name="viewport" content="width=device-width">
	<link href="https://fonts.googleapis.com/css?family=Abel" rel="stylesheet">
	<title><?php wp_title( '|', true, 'right' ); ?></title>
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
	<script type="text/javascript" src="https://code.jquery.com/jquery-3.0.0.min.js"></script>
	<!--[if lt IE 9]>
		<script src="<?php echo get_template_directory_uri(); ?>/assets/js/html5.min.js"></script>
	<![endif]-->
	<?php wp_head(); ?>
</head>
<body>
	<header>
				<h1><a href="index.html">Léa Groeninck</a></h1>
		</header>

		<aside class="sidebar">
			<nav>


				<h2>Me connaître</h2>
				<ul>
					<li>Me contacter</li>
				</ul>

				<h2>Mes projets</h2>
				<ul class="menu1">
					<li><a href="articulation.html">Articulation</a></li>
					<li><a href="prehension.html">Préhension</a></li>
					<li>Construction</li>
					<li>Division</li>
					<li>Mécanisation</li>
					<li>Tension</li>
					<li>Pigmentation</li>
					<li>Industrialisation</li>
				</ul>

				</nav>
			</aside>
