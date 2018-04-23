<?php 

   /**
    * Default page template
    */
	include("header.php");
	
	// Sub navigation
	if( !is_page([
		'World-class team'
	]) ) {
		include("partials/sub-navigation.php");
	}

	// Layout builder
	include("partials/layout-builder.php");

	// Footer
	include("footer.php");
	?>