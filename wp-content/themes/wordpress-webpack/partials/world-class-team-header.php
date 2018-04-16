<?php

   $args = [
      'World-class team'
   ];
   if( have_rows('layout_builder') && is_page( $args ) ) :

      /**
       * Loop through the rows of data
      */
      while ( have_rows('layout_builder') ) : the_row();

      /**
       * Detail group
      */
      if( get_row_layout() == 'detail_group' ) :

         if( have_rows('detail_group_item') ) :
            echo '<section class="u-section u-section--white-bg" id="world-class-team">';
               echo '<div class="u-row u-row--full-width">';
                  echo '<div class="m-column-group">';
                     while ( have_rows('detail_group_item') ) : the_row();

                        // Detail group item vars
                        $thumbnail = get_sub_field('thumbnail')['url'];
                        $title = get_sub_field('title');

                        // Strip out all whitespace
                        $name_clean = preg_replace('/\s*/', '', $title);

                        // Convert the string to all lowercase
                        $title_name = strtolower($name_clean);

                        // Detail list group
                        echo '<div class="m-column-group__item m-column-group__item--header" data-in-viewport>';
                           echo '<a href="#'. $title_name .'" class="m-column-group__expand">';
                              echo '<img src="'. $thumbnail .'" class="m-column-group__image">';
                           echo '</a>';
                        echo '</div>';

                     endwhile;
                  echo '</div>';
               echo '</div>';
            echo '</section>';
         endif;

      endif;

      endwhile;

   endif;
