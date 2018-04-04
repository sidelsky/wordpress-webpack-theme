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
			include('dist/svg-sprite.svg');

			/**
			 * Require all Classes
			*/
			function return_views() {

				$folder = '/views/*.php';
				$files = glob(dirname(__FILE__) . $folder);

				foreach( $files as $file ) {
					require_once( $file );
				}

			}

			return_views();

		echo '<div class="page-wrap">';
			
			echo '<header class="page-header">';
				echo '<div class="page-header__logo-container">';
					render_site_logo();
				echo '</div>';
			echo '</header>';

			/**
			 * Primary navigation
			 */
			$args = array(
				'container'     	=>	'nav',
				'container_class' => 'site-nav',
				'echo'          	=>	true,
				'items_wrap'		=>	'<ul class="site-nav__menu">%3$s</ul>'
			);
			wp_nav_menu($args);

		?>