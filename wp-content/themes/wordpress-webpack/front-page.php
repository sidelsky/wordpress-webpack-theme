<?php 

	/**
	 * Front page
	*/
	include("header.php");

	/**
	 * Page Vars
	*/
	$headline = get_field( 'headline' );
	$content = get_field( 'large_copy' );
	$content_two = get_field( 'large_copy_two' );
	$poster = get_field( 'poster' )['url'];
	$iframe = get_field( 'video' );
	$large_image = get_field( 'large_image' )['url'];

	$poster_image = $poster ? '<div class="m-video-player__poster" style="background-image:url('. $poster .');"></div>' : ''; 


	/**
	 * Large copy module
	*/
	$large_copy_module_args = [
		'copy' => $content,
		'font-size' => 'font-large',
		'font-color' => 'color-base',
		'content-only' => FALSE
	];
	echo Large_copy::render($large_copy_module_args);

	/**
	 * Video module
	*/
	echo '<section class="u-section">';
		echo '<div class="u-row u-row--full-width">';
			echo '<div class="u-iframe m-video-player js-video-player">';

				echo '<div class="m-video-player__content u-row--small">';

					$large_copy_module_args = [
						'copy' => $headline,
						'font-size' => 'font-small',
						'font-color' => 'color-white',
						'content-only' => TRUE
					];
					echo Large_copy::render($large_copy_module_args);

					echo '<div class="c-play-button js-play-button"><span class="c-play-button__title">Play</span></div>';
				echo '</div>';

				echo $poster_image;
				echo $iframe;
			echo '</div>';
		echo '</div>';
	echo '</section>';

	/**
	 * Large copy module
	*/
	$large_copy_module_args = [
		'copy' => $content_two,
		'font-size' => 'font-large',
		'font-color' => 'color-base',
		'content-only' => FALSE
	];
	echo Large_copy::render($large_copy_module_args);

	/**
	 * Render Hero
	*/
	$hero_module_args = [
		'post_thumbnail_url' => $large_image, 
		'hero_title_1st_line' => NULL,
		'hero_title_2nd_line' => NULL,
		'image_only' => TRUE
	];
	echo render_hero($hero_module_args);

	/**
	 * Brands gallery
	*/
	$brand_logos = get_field( 'brand_logos' );
	if( $brand_logos ) {
		echo '<section class="u-section">';
			echo '<div class="u-row u-row--small">';
				echo '<ul class="m-brand-logos">';
					foreach( $brand_logos as $brand_logo ) {
						$image = $brand_logo['sizes']['large'];
						$alt = $brand_logo['title'];
						echo '<li class="m-brand-logos__logo"><img src="'. $image .'" alt="'. $alt .'"></li>';
					}
				echo '</ul>';
			echo '</div>';
		echo '</section>';
	}

	/**
	 * Copy & image
	 */
	$copy = get_field( 'copy' );
	$image = get_field( 'image' )['url'];
	$link_title = get_field( 'link_title' );
	$link_url = get_field( 'link_url' );

	$copy_image_args = [
		'large_title' => FALSE,
		'copy' => $copy,
		'image' => $image,
		'link_title' => $link_title,
		'link_url' => $link_url,
	];
	echo Copy_image::render($copy_image_args);

   

include("footer.php");