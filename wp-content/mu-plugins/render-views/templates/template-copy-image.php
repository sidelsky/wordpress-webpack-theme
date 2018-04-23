<?php
   /**
    * Copy image
    */  

   echo $darkCopy;
?>

<section class="u-section">
   <div class="u-row u-row--small" data-in-viewport>
      <div class="m-copy-image">
         
         <div class="m-copy-image__column <?= $largeTitle ? 'm-copy-image--headline' : '' ?> <?= $darkCopy ? 'm-copy-image--color-dark' : ''; ?>">
            <?php if($copy) : ?>
               <?= $copy ?>
            <?php else : ?>
               <?= $largeTitle ?>
            <?php endif; ?>

            <?php if($linkUrl) : ?>
               <a href="<?= $linkUrl ?>" class="m-copy-image__link"><?= $linkTitle ?></a>
            <?php endif; ?>
         </div>

         <div class="m-copy-image__column">
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