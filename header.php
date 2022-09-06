<?php

/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package eqafit
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>

<head>
	<meta charset="<?php bloginfo('charset'); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
	<?php wp_body_open(); ?>
	<div id="page" class="site">
		<a class="skip-link screen-reader-text" href="#primary"><?php esc_html_e('Skip to content', 'eqafit'); ?></a>

		<header id="masthead" class="site-header">

			<div class="menu fixed scrolled">
				<nav class="navbar navbar-expand-lg container border-menu">
					<div class="container-fluid row">
						<div class="col-md-1 col-1">
							<a class="navbar-brand" href="<?php echo site_url() ?>">
								<?php the_custom_logo(); ?>
							</a>
						</div>
						<div class="col-md-11 col-10">
							<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#eqafit-menu" aria-controls="eqafit-menu" aria-expanded="false" aria-label="Toggle navigation">
								<span class="navbar-toggler-icon"></span>
							</button>

							<div class="collapse navbar-collapse" id="eqafit-menu">
								<?php
								wp_nav_menu(array(
									'theme_location' => 'menu-header',
									'container' => false,
									'menu_class' => '',
									'fallback_cb' => '__return_false',
									'items_wrap' => '<ul id="%1$s" class="navbar-nav me-auto mb-2 mb-md-0 %2$s">%3$s</ul>',
									'depth' => 2,
									'walker' => new bootstrap_5_wp_nav_menu_walker()
								));
								?>
								<a href="https://www.linkedin.com/showcase/eqafit/" target="_blank"> <i class="fab fa-linkedin"></i></a>

							</div>
						</div>

					</div>

				</nav>

			</div>

			<!--
			<div class="site-branding">
				<?php //				the_custom_logo(); 
				?> -->

	</div><!-- .site-branding -->
	<!--
			<nav id="site-navigation" class="main-navigation">
				<button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false"><?php esc_html_e('Primary Menu', 'eqafit'); ?></button>
				<?php
				wp_nav_menu(
					array(
						'theme_location' => 'menu-1',
						'menu_id'        => 'primary-menu',
					)
				);
				?> 	-->
	</nav><!-- #site-navigation -->

	</header><!-- #masthead -->