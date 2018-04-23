<?php
   /**
    * Large copy module
    */

   $isUppercase = $uppercase === ( TRUE ) ? 'u-text-transform--uppercase' : '';
   $isAltsize = $altsize === ( TRUE ) ? 'altsize' : '';

   ?> 

   <?php if( $contentOnly == TRUE ) : ?>
      <!-- Content only -->
      <div class="m-large-copy m-large-copy--<?= $fontSize ?>  m-large-copy--<?= $fontColor ?> <?= $isUppercase ?>">
         <?= $copy ?>
      </div>
   <?php else : ?>
   <!-- With structure -->
      <section class="u-section">
         <div class="u-row u-row--small" data-in-viewport>
            <div class="m-large-copy m-large-copy--<?= $fontSize ?> m-large-copy--<?= $fontColor ?> <?= $isUppercase ?>">
               <?= $copy ?>
            </div>
         </div>
      </section>
   <?php endif; ?>