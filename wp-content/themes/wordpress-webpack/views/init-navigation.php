<?php

/**
 * Navigation options
 */

function init_navigation() {

   $args = array(
      'container'     	=>	'nav',
      'menu_class' 		=> 'm-primary-navigation',
      'echo'          	=>	true,
      'items_wrap'		=>	'<ul class="site-nav__menu">%3$s</ul>'
   );
   wp_nav_menu($args);

}

