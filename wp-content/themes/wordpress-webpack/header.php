<!doctype html>
<html <?php language_attributes(); ?>>

	<head>
		<title><?php wp_title(''); ?><?php if(wp_title('', false)) { echo ' |'; } ?> <?php bloginfo('name'); ?></title>

		<meta charset="<?php bloginfo('charset'); ?>" />
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
		<meta name="viewport" content="width=device-width,initial-scale=1.0" />

		<link href="<?php echo get_template_directory_uri(); ?>/assets/img/favicon.ico" rel="shortcut icon" />

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