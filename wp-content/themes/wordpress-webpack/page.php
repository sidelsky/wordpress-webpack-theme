<?php 

   /**
    * Default page template
    */
	include("header.php");

	/**
	 * Sub navigation with magic line
	 */
   echo '<section class="u-section">';
		echo '<div class="u-row u-row--small">';
			echo '<nav class="m-sub-navigation">';
				echo '<ul class="m-sub-navigation__menu" id="magic-nav">';
					echo '<li class="current_item"><a href="#"><span>Light</span><span>+</span><span>Warmth</span></a></li>';
					echo '<li><a href="#"><span>Light</span><span>+</span><span>Warmth</span></a></li>';
					echo '<li><a href="#"><span>Light</span><span>+</span><span>Warmth</span></a></li>';
				echo '</ul>';
			echo '</nav>';
		echo '</div>';
	// echo '</section>';

	include("footer.php");