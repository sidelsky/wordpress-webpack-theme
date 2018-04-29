<?php
   /**
    * Check to see if there is a background image
    */

    if( $foregroundImage ) {
        $img = '<img src="'. $postThumbnailUrl .'" alt="Zuma light">';
    } else {
        $img = 'style="background-image:url('. $postThumbnailUrl .')"';
    }
?>
<?php if( $postThumbnailUrl ) : ?>
   <section class="u-section" >
      <div id="main-hero" <?= $foregroundImage == FALSE ? $img : '' ?> class="m-hero <?= $aspectRatio === TRUE ? 'm-hero--aspect-ratio' : '' ?> u-row u-row--<?= $width ?> <?= $foregroundImage == TRUE ? 'main-hero--with-image' : '' ?>" data-in-viewport>

         <?php 
            /**
             * Check to see if it's image only and no copy
            */
            if( $imageOnly == FALSE ) : ?>
               <h1 class="m-hero__title-container">
                   <div id="title">
                    <?php
                    /**
                     * If page is - Front page / Home
                     */
                    if( is_front_page() ) : ?>
                        <span class="m-hero__title m-hero__title--home m-hero__title--home--top"><?= $heroTitle1stLine ?></span>
                        <img src="<?= $heroTitleImage ?>" alt="" class="m-hero__title-image">
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
                            <img src="<?= $heroTitleImage ?>" alt="" class="m-hero__title-image">
                        </span>
                    <?php endif; ?>
                  </div>
               </h1>
         <?php endif; ?>

         <!-- Show as normal image -->
         <?= $foregroundImage == TRUE ? $img : '' ?>

      </div>
   </section>
<?php endif; ?>