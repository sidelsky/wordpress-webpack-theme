<?php

   /**
    * Large copy
    */

   class Large_copy {

      public static function render($large_copy_module_args) {

         // Get post title and content for about us
         if( isset($large_copy_module_args) && is_array($large_copy_module_args) ){

         $args = $large_copy_module_args;
            } else {
                  $args = array();
            }

         $defaults = array(
            'copy' => NULL,
            'font-size' => 'font-large',
            'font-color' => 'color-base',
            'content-only' => FALSE,
         );

         $args = wp_parse_args( $args, $defaults );

         // this variable to item
         $copy = $args['copy'];
         $fontSize = $args['font-size'];
         $fontColor = $args['font-color'];
         $contentOnly = $args['content-only'];

         $html = '';

         if( $contentOnly == TRUE ) {
            $html .= '<div class="m-large-copy m-large-copy--'. $fontSize .' m-large-copy--'. $fontColor .' u-text-transform--uppercase">';
               $html .= $copy;
            $html .= '</div>';
         } else {
            $html .= '<section class="u-section">';
               $html .= '<div class="u-row u-row--small">';
                  $html .= '<div class="m-large-copy m-large-copy--'. $fontSize .' m-large-copy--'. $fontColor .' u-text-transform--uppercase">';
                     $html .= $copy;
                  $html .= '</div>';
               $html .= '</div>';
            $html .= '</section>';
         }

         return $html;

      }

   }