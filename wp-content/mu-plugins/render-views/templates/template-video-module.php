<?php
   /**
    * Video module
    */
?>

<section class="u-section js-play-button">
   <div class="u-row u-row--full-width" data-in-viewport>
      <div class="u-iframe m-video-player js-video-player">
         <!-- Poster --> 
         <div class="m-video-player__poster" style="background-image:url(<?= get_field( 'poster' )['url'] ?>);">
            <div class="c-play-button js-play-button"><div class="c-play-button__inner"><span class="c-play-button__title">Play</span></div></div>
            <?php
               /**
                * Large copy module
                */
               echo Render_class::class_render([
                  'templateName' => 'template-large-copy-module',
                  'copy' => get_field( 'headline' ),
                  'fontSize' => 'font-small',
                  'fontColor' => 'color-white',
                  'uppercase' => TRUE,
                  'contentOnly' => TRUE
               ]);
            ?>
         </div>

         <?= get_field( 'video' ); ?>
      </div>
   </div>
</section>