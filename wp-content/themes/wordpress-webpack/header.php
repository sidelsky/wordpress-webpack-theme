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
			 * Require all Views (Functions)
			*/
			function return_views() {

				$folder = '/views/*.php';
				$files = glob(dirname(__FILE__) . $folder);

				foreach( $files as $file ) {
					require_once( $file );
				}

			}

			return_views();
		
		/**
		 * Page wrap
		 */
		echo '<div class="page-wrap">';
			
			/**
			 * Page header
			 */
			echo '<section class="u-section m-page-header">';
				echo '<header class="m-page-header__inner-container u-row u-row--small">';

					echo '<div class="m-page-header__logo-container">';

						/**
						* Render site logo
						*/
						$svg_icon_args = [
							'class' => 'm-page-header__logo',
							'icon' => 'zuma'
						];
						echo '<a href="'. home_url() .'">';
							echo Svg_icon::render($svg_icon_args);
						echo '</a>';

					echo '</div>';
					
					/**
					 * Primary navigation
					 */
					$args = [
						'theme_location'  => 'primary-navigation',
						'container'     	=>	'nav',
						'echo'          	=>	true,
						'items_wrap'		=>	'<ul class="site-nav__menu">%3$s</ul>'
					];
					wp_nav_menu($args);

				echo '</header>';
			echo '</section>';

			/**
			 * Render Hero
			 */
			$hero_module_args = [
				'post_thumbnail_url' => get_the_post_thumbnail_url(), 
				'hero_title_1st_line' => get_field( 'hero_title_1st_line' ),
				'hero_title_2nd_line' => get_field( 'hero_title_2nd_line' ),
				'image_only' => FALSE
			];
			echo render_hero( $hero_module_args );

		?>