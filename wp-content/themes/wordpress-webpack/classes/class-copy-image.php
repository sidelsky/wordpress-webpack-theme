<?php

   /**
    * Copy and image class - also supports Copy headline with copy
    */

   class Copy_image {

      public static function render($copy_image_args) {

         if( isset($copy_image_args) && is_array($copy_image_args) ){

            $args = $copy_image_args;
                  } else {
                     $args = array();
                  }
         
            $defaults = array(
               'copy' => NULL,
               'image' => NULL,
               'link_title' => NULL,
               'link_url' => NULL,
               'large_title' => FALSE
            );
            
            $args = wp_parse_args( $args, $defaults );
         
            $copy = $args['copy'];
            $large_title_copy = $args['large_title_copy'];
            $image = $args['image'];
            $link_title = $args['link_title'];
            $link_url = $args['link_url'];
            $large_headline = $args['large_title'];
            
            // Check to see if it's a headline
            $is_headline = $large_headline ? 'm-copy-image--headline' : '';

            // Check to see if it has copy
            $color_dark = $large_title_copy ? 'm-copy-image--color-dark' : ''; 
         
            $html .= '<section class="u-section">';
               $html .= '<div class="u-row u-row--small" data-in-viewport>';
                  $html .= '<div class="m-copy-image">';
                     $html .= '<div class="m-copy-image__column '. $is_headline .'">';
                        if( $copy ) {
                           $html .= $copy;
                        } else {
                           $html .= $large_headline;
                        }
                        if( $link_url ) {
                           $html .= '<a href="'. $link_url .'" class="m-copy-image__link">'. $link_title .'</a>';
                        } 
                     $html .= '</div>';
                     $html .= '<div class="m-copy-image__column '. $color_dark .'">';
                        if( $image ) {
                           $html .= '<img src="'. $image .'">';
                        }
                        if( $large_title_copy ) {
                           $html .= $large_title_copy;
                        }
                     $html .= '</div>';
                  $html .= '</div>';
               $html .= '</div>';
            $html .= '</section>';

         return $html;

      }

   }