<?php

   /**
    * Page hero
    */
   class Hero {

      public static function render($hero_module_args) {

         if( isset($hero_module_args) && is_array($hero_module_args) ){
            $args = $hero_module_args;
         } else {
            $args = [];
         } 

         $defaults = [
            'post_thumbnail_url' => NULL, 
            'hero_title_1st_line' => NULL,
            'hero_title_2nd_line' => NULL,
            'image_only' => FALSE
         ];

         $post_thumbnail_url = $args['post_thumbnail_url'];
         $hero_title_1st_line = $args['hero_title_1st_line'];
         $hero_title_2nd_line = $args['hero_title_2nd_line'];
         $imageOnly = $args['image_only'];

         if( $post_thumbnail_url ) {
            $background = ' style="background-image:url('. $args['post_thumbnail_url'] .')" ';
         }

         $html = '';

         $html .= '<section class="u-section">';
            $html .= '<div class="m-hero u-row--full-width" '. $background .' >';

            if( $imageOnly == FALSE ) {
               $html .= '<h1 class="m-hero__title-container">';
                  $html .= '<span class="m-hero__title m-hero__title--top">'. $args['hero_title_1st_line'] .'</span>';
                  $html .= '<span class="m-hero__title m-hero__title--bottom">'. $args['hero_title_2nd_line'] .'</span>';
               $html .= '</h1>';
            }
            $html .= '</div>';
         $html .= '</section>';

         return $html;

      }

   }