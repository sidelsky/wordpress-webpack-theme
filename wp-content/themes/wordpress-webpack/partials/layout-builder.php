<?php
   /**
    * Layout builder
    */

   $theme_url = get_bloginfo('template_directory');
   $theme_image_folder = $theme_url . '/assets/img/';

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
                  echo '<div class="m-detail-group">';
                     while ( have_rows('detail_group_item') ) : the_row();

                        // Detail group item vars
                        $thumbnail = get_sub_field('thumbnail')['url'];
                        $title = get_sub_field('title');
                        $excerpt = get_sub_field('excerpt');
                        $modal_image = get_sub_field('modal_image')['url'];
                        $modal_detail = get_sub_field('modal_detail');
                        $modal_info_sheet = get_sub_field('modal_info_sheet');

                        // Strip out all whitespace
                        $name_clean = preg_replace('/\s*/', '', $title);
                        // Convert the string to all lowercase
                        $name_clean = strtolower($name_clean);

                        if( $thumbnail ) {
                           echo '<div class="m-detail-group__item">';
                              echo '<a href="#'. $name_clean .'" class="m-detail-group__expand-icon"><svg class="b_icon"><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#icon-exspand" viewBox="0 0 32 32"></use></svg></a>';
                              echo '<img src="'. $thumbnail .'" class="m-detail-group__image">';
                              echo '<h3 class="m-detail-group__title">'. $title .'</h3>';
                              echo '<div class="m-detail-group__copy">'. $excerpt .'</div>';
                           echo '</div>';
                        }
                        
                     endwhile;
                  echo '</div>';
               echo '</div>';
            echo '</section>';
         endif;

      endif;

      endwhile;
   
   endif;

/**
 * Modal view
 */
echo '<div class="remodal" data-remodal-id="'. $name_clean .'">';
   echo $name_clean;
echo '</div>';

echo '<div class="remodal" data-remodal-id="'. $name_clean .'">';
   echo $name_clean;
echo '</div>';

echo '<div class="remodal" data-remodal-id="'. $name_clean .'">';
   echo $name_clean;
echo '</div>';

// if($modal_image) :
//    echo '<div style="background-image:url('. $modal_image .');" class="m-modal">';
//       echo '<div class="m-modal__content">';
         
//       // Modal detail
//          echo '<div class="m-modal__content__inner">';
//             echo $modal_detail;

//             // Info sheet
//             echo '<div class="m-modal__content__infosheet">';
//                echo '<img src="'. $theme_image_folder . 'pdf-icon.png' .'" alt="Download the info sheet">';
//                echo '<a href="'. $modal_info_sheet .'" target="_blank">Download the info sheet</a>';
//             echo '</div>';

//             // Info list
//             if( have_rows('info_list') ) :
//                echo '<ul>';
//                   while ( have_rows('info_list') ) : the_row();
//                      $list_item = get_sub_field('list_item');
//                      echo '<li>';
//                         echo $list_item;
//                      echo '</li>';
//                   endwhile;
//                echo '</ul>';
//             endif;

//          echo '</div>';

//       echo '</div>';
//    echo '</div>';
// endif;