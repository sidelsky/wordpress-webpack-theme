<?php 

   /**
    * Default page template
    */
	include("header.php");
	
	// Sub navigation
	$args = [
		'World-class team',
		'Specification'
	];
	if( !is_page( $args ) ) {
		include("partials/sub-navigation.php");
	}

	// Layout builder
	include("partials/layout-builder.php");

	// Footer
	include("footer.php");
	?>