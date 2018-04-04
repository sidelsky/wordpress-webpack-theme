<?php

	/**
	 * Enqueues
	 * @author Errol Sidelsky
	 */
	
	//Constants
	define( 'THEME_URI', get_template_directory_uri() );

	//Enqueue scripts
	add_action( 'wp_enqueue_scripts', 'enqueue_scripts' );

	//Enqueue styles
	add_action( 'wp_enqueue_scripts', 'enqueue_styles' );

	//Enqueue scripts
	function enqueue_scripts() {

		//jQuery enqueued
		if ( !is_admin() && $GLOBALS['pagenow'] != 'wp-login.php' ) {
			wp_deregister_script('jquery');
			wp_register_script('jquery', '//ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js', false, '3.3.1', true);
			wp_enqueue_script('jquery');
		}
		
		$scriptFilename = 'app.min.js';

		// if (WP_ENV == 'production') {
		// 	$scriptFilename = 'app.min.js';
		// } else {
		// 	$scriptFilename = 'app.min.js';
		// }

		wp_register_script('theme_js', THEME_URI . '/asset/' . $scriptFilename, array(), '1.1', true);
			// Localize the script with new data
			$site_data = array(
			'themePath' =>  THEME_URI
		);
		wp_localize_script('theme_js', 'site_data', $site_data);

		// Enqueued script with localized data.
		wp_enqueue_script('theme_js');

	}


	//Enqueue styles
	function enqueue_styles() {
	wp_enqueue_style('theme_css', THEME_URI . '/asset/style.css');

	}
?>
