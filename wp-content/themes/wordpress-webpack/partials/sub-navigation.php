<?php
   /**
    * Sub navigation with magic line
    */
   $args = array(
      'theme_location'  => 'secondary-navigation',
      'container'     	=>	'nav',
      'container_class'	=> 'm-sub-navigation',
      'echo'          	=>	true,
      'items_wrap'		=>	'<ul class="m-sub-navigation__menu" id="magic-nav">%3$s</ul>'
   );
   

      echo '<section class="u-section js-subheader m-sub-navigation__container">';
         echo '<div class="u-row u-row--small">';
            wp_nav_menu($args);
         echo '</div>';
      echo '</section>';
