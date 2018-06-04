<!doctype html>
<html <?php language_attributes(); ?>>

	<head>
		<title><?php wp_title(''); ?><?php if(wp_title('', false)) { echo ' |'; } ?> <?php bloginfo('name'); ?></title>

		<meta charset="<?php bloginfo('charset'); ?>" />
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
		<meta name="viewport" content="width=device-width,initial-scale=1.0" />
		<link href="<?php echo get_template_directory_uri(); ?>/assets/img/favicon.ico" rel="shortcut icon" type="image/x-icon" />
		<link rel="icon" type="image/png" href="<?php echo get_template_directory_uri(); ?>/assets/img/favicon-32x32.png" sizes="32x32" />
		<link rel="icon" type="image/png" href="<?php echo get_template_directory_uri(); ?>/assets/img/favicon-16x16.png" sizes="16x16" />

		<?php wp_head(); ?>
	</head>
	
	<body <?php body_class(); ?> >

		<?php
			/**
			 * Import SVG Sprite
			 */
			include('assets/svg-sprite.svg');
			
			/**
			 * Content EN
			 */
			include('content/en.php');
		
		/**
		 * Page wrap
		 */
		echo '<div class="page-wrap">';

		/**
		 * Mobile menu
		 */
		echo '<div class="m-mobile-menu-container">';
			wp_nav_menu([
				'theme_location'  => 'primary-navigation',
				'container'     	=>	'nav',
				'echo'          	=>	true,
				'items_wrap'		=>	'<ul class="site-nav__menu">%3$s</ul>'
			]);
		echo '</div>';

			/**
			 * Page header
			 */
			echo '<section class="u-section m-page-header js-header">';
				echo '<header class="m-page-header__inner-container u-row u-row--small" >';
					echo '<div class="m-page-header__logo-container">';
						/**
						* Render SVG icon — Zuma logo
						*/
						echo Render_class::class_render([
							'templateName' => 'template-svg-icons',
							'iconName'		=> 'zuma',
							'className'	 	=> 'm-page-header__logo',
							'href'	 		=> home_url()
						]);
					echo '</div>';

					/**
					 * Mobile Primary navigation
					 */
					echo '<input type="checkbox" role="button" class="m-page-header-toggle__checkbox" id="menu_toggle">';
					echo '<label for="menu_toggle" class="m-page-header-toggle__label" data-closed="MENU" data-open="CLOSE"></label>';
					
					/**
					 * Primary navigation
					 */
					wp_nav_menu([
						'theme_location'  => 'primary-navigation',
						'container'     	=>	'nav',
						'echo'          	=>	true,
						'items_wrap'		=>	'<ul class="site-nav__menu">%3$s</ul>'
					]);

      			

				echo '</header>';
			echo '</section>';
			
			/**
			* Render Hero
			*/
			echo Render_class::class_render([
				'templateName' 		=> 'template-render-hero',
				'postThumbnailUrl' 	=> get_the_post_thumbnail_url(),
				'heroTitleImage' 		=> get_field('hero_title_image')['url'],
				'heroTitle1stLine'	=> get_field( 'hero_title_1st_line' ),
				'heroTitle2ndLine'	=> get_field( 'hero_title_2nd_line' ),
				'imageOnly'	 		 	=> FALSE
			]);

			/**
			 * Team members header
			 * Check if the flexible content field has rows of data
			*/
			include('partials/world-class-team-header.php');

		?>