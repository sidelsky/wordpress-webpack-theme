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
            /**
             * Render Hero
             */
            echo Render_class::class_render([
               'templateName' 		=> 'template-render-hero',
               'postThumbnailUrl' 	=> get_sub_field('image')['url'],
               'heroTitle_1stLine'	=> NULL,
               'heroTitle_2ndLine'	=> NULL,
               'imageOnly'	 		 	=> TRUE,
               'aspectRatio'        => TRUE
            ]);
         endif;

         /**
          * Large copy and title
          */
         if( get_row_layout() == 'large_title_and_copy' ) :

            /**
             * Copy & image
             */
            echo Render_class::class_render([
               'templateName'    => 'template-copy-image',
               'largeTitleCopy'  => get_sub_field('large_title_copy'),
               'largeTitle'      => get_sub_field( 'large_title' ),
               'copy'            => get_sub_field( 'copy' ),
               'image'           => get_sub_field( 'image' )['url'],
               'linkTitle'       => get_sub_field( 'link_title' ),
               'linkUrl'         => get_sub_field( 'link_url' ),
               'darkCopyLeftCol'=> FALSE,
               'darkCopyRightCol'=> TRUE,
            ]);

         endif;

         /**
          * Detail group
          */
         if( get_row_layout() == 'detail_group' ) :
            if( have_rows('detail_group_item') ) :

               /**
                * Detail group
                */
               echo Render_class::class_render([
                  'templateName'    => 'template-detail-group'
               ]);

            endif;
         endif;
         
      endwhile;
   
   endif;