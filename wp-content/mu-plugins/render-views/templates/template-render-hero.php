<?php
   /**
    * Check to see if there is a background image
    */
?>
<?php if( $postThumbnailUrl ) : ?>
   <section class="u-section" >
      <div class="m-hero u-row u-row--<?= $width ?>" <?= $postThumbnailUrl ? 'style="background-image:url('. $postThumbnailUrl .')"' : ''; ?> data-in-viewport>

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
                     <span class="m-hero__title m-hero__title--home m-hero__title--home--top"><?= $heroTitle1stLine ?></span>
                     <span class="m-hero__title m-hero__title--home m-hero__title--home--bottom"><?= $heroTitle2ndLine ?></span>
                  <?php endif; ?>
                  <?php
                  /**
                   * If page is — Zuma Halo
                  */
                  if( !is_front_page() || is_page( 'Zuma Halo' ) ) : ?>
                     <span class="m-hero__title m-hero__title--zuma-halo m-hero__title--zuma-halo--top">
                        <strong><?= $heroTitle1stLine ?></strong><br>
                        <?= $heroTitle2ndLine ?>
                     </span>
                  <?php endif; ?>
               </h1>
         <?php endif; ?>

      </div>
   </section>
<?php endif; ?>