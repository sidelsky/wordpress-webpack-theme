<?php
   /**
    * Sub navigation with magic line
    */
   $args = array(
      'theme_location'  => 'secondary-navigation',
      'container'     	=> 'nav',
      'container_class'	=> 'm-sub-navigation',
      'echo'          	=> true,
      'items_wrap'      => '<ul class="m-sub-navigation__menu" id="zmagic-nav">%3$s</ul>'
   );
   
      echo '<div class="nav-wrapper js-nav-wrapper">';
            echo '<section class="u-section js-subnavigation m-sub-navigation__container" id="subnavigation">';
            echo '<div class="u-row u-row--small" data-in-viewport>';
                  wp_nav_menu($args);
            echo '</div>';
            echo '</section>';
      echo '</div>';
