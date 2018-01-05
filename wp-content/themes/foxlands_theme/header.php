<!doctype html>
<html class="no-js" lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title><?php wp_title(); ?></title>
        <meta name="format-detection" content="telephone=no"/>
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link href="https://fonts.googleapis.com/css?family=Asap:400,500,600,700" rel="stylesheet">

		<script>window.theme_uri = '<?php echo get_template_directory_uri(); ?>';</script>
		<script src="<?php bloginfo('template_directory'); ?>/js/vendor/modernizr-2.8.0.min.js"></script>
		<?php wp_head(); ?>
	</head>
	<body <?php body_class(); ?>>
		<!--[if lt IE 7]>
			<p class="browsehappy">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
		<![endif]-->
		
	<?php if(is_front_page()): ?>


		<aside class="hero-home">
			

			<header id="masthead" class="header-home" role="banner">
				


			

				<nav id="mastnav" class="fw text-align center" role="navigation">
					
					<?php wp_nav_menu( array( 'theme_location' => 'header', 'container' => false) ); ?>
					
				</nav>

				<div id="menu-toggle">
				  	<span class="menu-line line-1"></span>
				  	<span class="menu-line line-2"></span>
				  	<span class="menu-line line-3"></span>
				  	<span class="menu-line line-4"></span>
				</div>
				
			</header>	

			<div class="mobile-menu non-front-page no-bg">
		
				<nav id="mobnav" class="fw text-align center" role="navigation">
					
					<?php wp_nav_menu( array( 'theme_location' => 'header', 'container' => false) ); ?>
					
				</nav>

			</div>

			<div class="container hero-content-wrap text-align center">
				<?php if ($content = get_field( 'hero_content' ) ) : ?>
					<div class="content container small"><?php echo $content; ?></div>
				<?php endif; ?>

				<?php if ($img_top = get_field( 'hero_image_middle' ) ) : ?>

					<img src="<?php echo $img_top['url'] ?>" id="hero_image" alt="<?php echo $img_top['title'] ?>">

				<?php endif; ?>
			</div>
			<?php if ($img_bottom = get_field( 'hero_logo_bottom' ) ) : ?>
				<img src="<?php echo $img_bottom['url'] ?>" id="hero_image_bottom" alt="<?php echo $img_bottom['title']; ?>">
			<?php endif; ?>
		</aside>


	<?php else: ?>


		<header id="masthead" class="header-standard" role="banner">
			
			<div class="container">
						
				<a href="<?php bloginfo('url'); ?>" id="logo"><img src="<?php bloginfo('template_directory'); ?>/img/logo.png" alt="Logo Alt Here"></a>
				
				<nav id="mastnav" class="fw text-align center" role="navigation">
					
					<?php wp_nav_menu( array( 'theme_location' => 'header', 'container' => false) ); ?>
					
				</nav>

				<div id="menu-toggle">
					<span class="menu-line line-1"></span>
					<span class="menu-line line-2"></span>
					<span class="menu-line line-3"></span>
					<span class="menu-line line-4"></span>
				</div>
			
			</div>

		</header>
	<div class="mobile-menu non-front-page">
		
		<nav id="mobnav" class="fw text-align center" role="navigation">
			
			<?php wp_nav_menu( array( 'theme_location' => 'header', 'container' => false) ); ?>
			
		</nav>

	</div>
	<?php endif; ?>

