<?php 

	/**
	 * Front page
	*/
	include("header.php");

	/**
	* Large copy module
	*/
	echo Render_class::class_render([
		'templateName' => 'template-large-copy-module',
		'copy' => get_field( 'large_copy' ),
		'fontSize' => 'font-large',
		'fontColor' => 'color-base',
		'uppercase' => TRUE,
		'contentOnly' => FALSE
	]);

	/**
	 * Video module
	 */
	echo Render_class::class_render([
		'templateName' => 'template-video-module',
		'copy' => get_field( 'large_copy' ),
		'fontSize' => 'font-large',
		'fontColor' => 'color-base',
		'uppercase' => TRUE,
		'contentOnly' => FALSE
	]);

	/**
	 * Large copy module
	 */
	echo Render_class::class_render([
		'templateName' => 'template-large-copy-module',
		'copy' => get_field( 'large_copy_two' ),
		'fontSize' => 'font-medium',
		'fontColor' => 'color-base',
		'uppercase' => FALSE,
		'contentOnly' => FALSE
	]);

	/**
	 * Render Hero
	 */
	echo Render_class::class_render([
		'templateName' 			=> 'template-render-hero',
		'postThumbnailUrl' 	=> get_field( 'large_image' )['url'],
		'imageOnly'	 		 	=> TRUE
	]);

	/**
	 * Brands gallery
	 */
	echo Render_class::class_render([
		'templateName'	=> 'template-brand-logos',
		'brandLogos'		=> get_field( 'brand_logos' )
	]);

	/**
	 * Copy & image
	 */
	echo Render_class::class_render([
		'templateName'	=> 'template-copy-image',
		'largeTitle' => FALSE,
		'copy' => get_field( 'copy' ),
		'image' => get_field( 'image' )['url'],
		'linkTitle' => get_field( 'link_title' ),
		'linkUrl' => get_field( 'link_url' ),
	]);


include("footer.php");