<?php
   /**
    * Layout builder
    */

   /**
    *  Check if the flexible content field has rows of data
    */ 
   if( have_rows('layout_builder') ) :

      /**
       * Loop through the rows of data
       */
      while ( have_rows('layout_builder') ) : the_row();

         /**
          * Single large images
          */
         if( get_row_layout() == 'single_image' ) :
            $image = get_sub_field('image')['url'];
            $hero_module_args = [
               'post_thumbnail_url' => $image, 
               'hero_title_1st_line' => NULL,
               'hero_title_2nd_line' => NULL,
               'image_only' => TRUE
            ];
            echo render_hero($hero_module_args);
         endif;

         /**
          * Large copy and title
          */
         if( get_row_layout() == 'large_title_and_copy' ) :
            
            /**
             * Copy & image
             */
            $large_title = get_sub_field( 'large_title' );
            $copy = get_sub_field( 'copy' );
            $large_title_copy = get_sub_field('large_title_copy');
            $image = get_sub_field( 'image' )['url'];
            $link_title = get_sub_field( 'link_title' );
            $link_url = get_sub_field( 'link_url' );

            $copy_image_args = [
               'large_title' => $large_title,
               'copy' => $copy,
               'large_title_copy' => $large_title_copy,
               'image' => $image,
               'link_title' => $link_title,
               'link_url' => $link_url,
            ];
            echo Copy_image::render($copy_image_args);

         endif;

      /**
       * Detail group
       */
      if( get_row_layout() == 'detail_group' ) :

         if( have_rows('detail_group_item') ) :
            echo '<section class="u-section">';
               echo '<div class="u-row u-row--small">';
                  echo '<div class="m-column-group">';
                     while ( have_rows('detail_group_item') ) : the_row();

                        // Detail group item vars
                        $thumbnail = get_sub_field('thumbnail')['url'];
                        $title = get_sub_field('title');
                        $subtitle = get_sub_field('subtitle');
                        $excerpt = get_sub_field('excerpt');
                        $modal_image = get_sub_field('modal_image')['url'];
                        $modal_detail = get_sub_field('modal_detail');
                        $modal_info_sheet = get_sub_field('modal_info_sheet')['url'];
                        $info_list = get_sub_field('info_list');

                        // Strip out all whitespace
                        $name_clean = preg_replace('/\s*/', '', $title);

                        // Convert the string to all lowercase
                        $title_name = strtolower($name_clean);

                        // Detail list group
                        echo '<div class="m-column-group__item" id="'. $title_name .'" data-in-viewport>';
                           $svg_icon_args = [
                              'icon' => 'expand'
                           ];
                           // If there is a Modal image
                           if( $modal_image ) {
                              echo '<a href="#'. $title_name .'" class="m-column-group__expand m-column-group__expand--has-modal">';
                                 echo '<span class="m-column-group__expand-icon">';
                                    echo Svg_icon::render($svg_icon_args);
                                 echo '</span>';
                                 echo '<img src="'. $thumbnail .'" class="m-column-group__image">';
                              echo '</a>';
                              // If there is NO Modal image
                           } else {
                              echo '<div class="m-column-group__expand">';
                                 echo '<img src="'. $thumbnail .'" class="m-column-group__image">';
                              echo '</div>';
                           }

                           $args = [
                              'World-class team'
                           ];
                           // Check for a Subtitle
                           $subtitle_name = $subtitle ? '<br><span class="m-column-group__subtitle">'. $subtitle .'</span>' : '';
                           $is_team_page = ( is_page( $args ) ) ? 'm-column-group__title--small' : '';
                           echo '<h3 class="m-column-group__title' . ' ' . $is_team_page . '">'. $title . $subtitle_name . '</h3>';
                           echo '<div class="m-column-group__copy">'. $excerpt .'</div>';

                        echo '</div>';

                        /**
                         * Modal view
                        */
                        if( !is_page( $args ) ) {
                           $modal_args = [
                              'modal-name' => $title_name,
                              'modal-image' => $modal_image,
                              'modal_info_sheet' => $modal_info_sheet,
                              'modal_detail' => $modal_detail,
                              'info_list' => $info_list
                           ];
                           echo Modal::render($modal_args);
                        }

                     endwhile;
                  echo '</div>';
               echo '</div>';
            echo '</section>';
         endif;

      endif;

      endwhile;
   
   endif;