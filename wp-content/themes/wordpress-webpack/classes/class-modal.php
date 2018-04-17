<?php

   /**
    * Modal view
    */

    class Modal {

      public static function render($modal_args) {

         $theme_url = get_bloginfo('template_directory');
         $theme_image_folder = $theme_url . '/assets/img/';

         if( isset($modal_args) && is_array($modal_args) ) {
            $args = $modal_args;
            } else {
               $args = [];
            }

         $defaults = [
            'modal-name' => NULL,
            'modal-image' => NULL,
            'modal_info_sheet' => NULL,
            'modal_detail' => NULL,
            'info_list' => NULL
         ];

         $args = wp_parse_args( $args, $defaults );

         // Vars
         $modal_name = $args['modal-name'];
         $modal_image = $args['modal-image'];
         $modal_info_sheet = $args['modal_info_sheet'];
         $modal_detail = $args['modal_detail'];
         $info_list = $args['info_list'];

         $html .= '<div class="remodal m-modal" data-remodal-id="'. $modal_name .'" style="background-image:url('. $modal_image .');" class="m-modal">';

            // Close icon
            $svg_icon_args = array(
               'icon' => 'close'
            );
            $html .= '<a href="#'. $modal_name .'" class="m-column-group__expand-icon" data-remodal-action="close">';
               $html .= Svg_icon::render($svg_icon_args);
            $html .= '</a>';

            // Show caption toggle button
            $html .= '<input type="checkbox" role="button" class="m-modal__content__caption-toggle__checkbox" id="toggle">';
            $html .= '<label for="toggle" class="m-modal__content__infosheet m-modal__content__caption-toggle__label" data-closed="Read caption" data-open="Close caption"></label>';
            // Model content
            $html .= '<div class="m-modal__content">';
               $html .= '<div class="m-modal__content__inner">';

                  $html .= $modal_detail;

                  // Info sheet 
                  $html .= '<div class="m-modal__content__infosheet">';
                     $html .= '<img src="'. $theme_image_folder . 'pdf-icon.png' .'" alt="Download the info sheet" class="b_icon m-modal__content__infosheet__icon">';
                     $html .= '<a href="'. $modal_info_sheet .'" target="_blank">Download the info sheet</a>';
                  $html .= '</div>';

                  // Info list
                  if( $info_list ) {
                     $html .= '<ul class="m-modal__content__list">';
                        foreach($info_list as $list_item) {
                           $list = $list_item;
                           $html .= '<li class="m-modal__content__list__item">';
                              $html .= ':: ' . $list['list_item'];
                           $html .= '</li>';
                        }
                     $html .= '</ul>';
                  }
            
               $html .= '</div>';
            $html .= '</div>';
         $html .= '</div>';

         return $html;

      }

   }