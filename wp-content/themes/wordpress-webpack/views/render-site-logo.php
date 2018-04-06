<?php

   $file = '../../classes/class-logo.php';
   require_once __DIR__ . $file;

   /**
    * Render header view
    */
   function render_site_logo() {

      $html = '';

      $logo_module_args = array(
         'icon_name' => 'expand',
         'default_class' => 'b_icon'
         //'class' => 'b_icon'
      );

      $html .= '<a href="'. home_url() .'" class="m-page-header__logo">';
         $html .= Logos::render($logo_module_args);					
      $html .= '</a>';

      echo $html;

   }