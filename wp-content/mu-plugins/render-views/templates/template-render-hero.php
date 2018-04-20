<?php
   /**
    * Check to see if there is a background image
    */
   $background = $post_thumbnail_url ? 'style="background-image:url('. $post_thumbnail_url .')"' : '';
?>

<section class="u-section" >
   <div class="m-hero u-row u-row--<?= $width ?>" <?= $background ?> data-in-viewport>

      <?php 
         /**
          * Check to see if it's image only and no copy
          */
         if( $imageOnly == FALSE ) : ?>
         <h1 class="m-hero__title-container">
            <?php
            /**
             * If page is - Front page / Home
             */
            if( is_front_page() ) : ?>
               <span class="m-hero__title m-hero__title--home m-hero__title--home--top"><?= $hero_title_1st_line ?></span>
               <span class="m-hero__title m-hero__title--home m-hero__title--home--bottom"><?= $hero_title_2nd_line ?></span>
            <?php endif; ?>
            <?php
            /**
             * If page is — Zuma Halo
            */
            if( !is_front_page() || is_page( 'Zuma Halo' ) ) : ?>
               <span class="m-hero__title m-hero__title--zuma-halo m-hero__title--zuma-halo--top">
                  <strong><?= $hero_title_1st_line ?></strong><br>
                  <?= $hero_title_2nd_line ?>
               </span>
            <?php endif; ?>
         </h1>
      <?php endif; ?>

   </div>