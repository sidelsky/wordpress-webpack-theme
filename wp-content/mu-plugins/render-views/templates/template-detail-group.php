<?php
   /**
    * Template detail group
    */
?>

<section class="u-section">
   <div class="u-row u-row--small" data-in-viewport>
      <div class="m-column-group m-column-group--tb-padding">

         <?php 
            while ( have_rows('detail_group_item') ) : the_row();

               // Detail group item vars
               $thumbnail = get_sub_field('thumbnail')['url'];
               $title = get_sub_field('title');
               $subtitle = get_sub_field('subtitle');
               $excerpt = get_sub_field('excerpt');
               $modalImage = get_sub_field('modal_image')['url'];
               $modalDetail = get_sub_field('modal_detail');
               $modalInfoSheet = get_sub_field('modal_info_sheet')['url'];
               $infoList = get_sub_field('info_list');
               
               // Strip out all whitespace
               $nameClean = preg_replace('/\s*/', '', $title);
               // Convert the string to all lowercase
               $titleName = strtolower($nameClean);
               // The thumbnail
               $theThumbnail = '<img src="'. $thumbnail .'" class="m-column-group__image">';

               // Detail list group
               echo '<div class="m-column-group__item" id="'. $titleName .'" data-in-viewport>';

                  // If there is a Modal image
                  if( $modalImage ) {
                     echo '<a data-remodal-target="'. $titleName .'" class="m-column-group__expand m-column-group__expand--has-modal" id="'. $titleName .'">';
                        echo '<span class="m-column-group__expand-icon">';
                           /**
                            * Render SVG icon — Close icon
                              */
                           echo Render_class::class_render([
                              'templateName' => 'template-svg-icons',
                              'iconName'    => 'expand'
                           ]);
                        echo '</span>';
                        echo $theThumbnail;
                     echo '</a>';

                     // If there is NO Modal image
                  } else {
                     echo '<div class="m-column-group__expand">';
                        echo $theThumbnail;
                     echo '</div>';
                  }

                  // Check for a Subtitle
                  $subtitleName = $subtitle ? '<br><span class="m-column-group__subtitle">'. $subtitle .'</span>' : '';
                  $isTeamPage = ( is_page( ['World-class team'] ) ) ? 'm-column-group__title--small' : '';
                  echo '<h3 class="m-column-group__title' . ' ' . $isTeamPage . '">'. $title . $subtitleName . '</h3>';
                  echo '<div class="m-column-group__copy">'. $excerpt .'</div>';

               echo '</div>';

               /**
                * Modal view template-modal-view.php
               */
               echo Render_class::class_render([
                  'templateName'	=> 'template-modal-view',
                  'modalName' => $titleName,
                  'modalImage' => $modalImage,
                  'modalInfoSheet' => $modalInfoSheet,
                  'modalDetail' => $modalDetail,
                  'infoList' => $infoList
               ]);
            endwhile;
         ?>

      </div>
   </div>
</section>