<?php
   /**
    * Copy image
    */

   // Check to see if it's a headline
   $isHeadline = $largeTitle ? 'm-copy-image--headline' : '';

   // Check to see if it has copy
   $colorDark = $largeTitleCopy ? 'm-copy-image--color-dark' : '';  
?>

<section class="u-section">
   <div class="u-row u-row--small" data-in-viewport>
      <div class="m-copy-image">
         
         <div class="m-copy-image__column <?= $isHeadline ?>">
            <?php if($copy) : ?>
               <?= $copy ?>
            <?php else : ?>
               <?= $largeTitle ?>
            <?php endif; ?>

            <?php if($linkUrl) : ?>
               <a href="<?= $linkUrl ?>" class="m-copy-image__link"><?= $linkTitle ?></a>
            <?php endif; ?>
         </div>

         <div class="m-copy-image__column <?= $colorDark ?>">
            <?php if( $image ) : ?>
               <img src="<?= $image ?>">
            <?php endif; ?>
            <?php if( $largeTitleCopy ) : ?>
               <?= $largeTitleCopy; ?>
            <?php endif; ?>
         </div>


      </div>
   </div>
</section>