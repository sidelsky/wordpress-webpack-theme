<?php

   /**
    * Logo module
    */
    class Logos {

      public static function render($logo_module_args) {

         if( isset($logo_module_args) && is_array($logo_module_args) ){
            $args = $logo_module_args;
         } else {
            $args = array();
         } 
      
         $defaults = array(
            'icon_name' => NULL,
            'default_class' => 'b_icon'
            //'class' => 'b_icon'
         );
      
         $args = wp_parse_args( $args, $defaults );
      
         // Vars
         $icon_name = $args['icon_name'];
         $default_class = $args['default_class'];
         //$icon_class = $args['icon_class'];

         $html = '';

         $html .= '<svg class="'. $default_class . '">';
            $html .= '<use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#icon-' . $icon_name . '" viewBox="0 0 32 32"></use>';
         $html .= '</svg>';
         
         return $html;

      }

    }



   