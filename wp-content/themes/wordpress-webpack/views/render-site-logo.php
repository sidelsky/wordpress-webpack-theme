<?php

   $file = '../../classes/logos.php';
   require_once __DIR__ . $file;

   /**
    * Render header view
    */
   function render_site_logo() {

      $html = '';

      $logo_module_args = array(
         'icon_name' => 'zuma-logo',
         'icon_class' => NULL
      );

      $html .= '<a href="'. home_url() .'" class="page-header__logo">';
         $html .= Logos::render($logo_module_args);					
      $html .= '</a>';

      echo $html;

   }