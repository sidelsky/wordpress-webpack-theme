<?php if($href) : ?>
   <a href="<?= $href ?>">
<?php endif; ?>

   <svg class="b_icon <?= $class_name ?>">
      <use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#icon-<?= $icon_name ?>" viewBox="0 0 32 32"></use>
   </svg>
   
<?php if($href) : ?>
   </a>
<?php endif; ?>