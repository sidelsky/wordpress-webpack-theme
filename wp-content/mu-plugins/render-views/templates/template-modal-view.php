<?php
   /**
    * Template modal view
    */

   $themeUrl = get_bloginfo('template_directory');
   $themeImageFolder = $themeUrl . '/assets/img/';

?>
<?php if( !is_page(['World-class team']) ) : ?>

   <div class="remodal m-modal" data-remodal-id="<?= $modalName ?>" data-remodal-options='{ "hashTracking": false }' style="background-image:url('<?= $modalImage ?>');" class="m-modal">

		<?php
			/**
			 * Render SVG icon — Close icon
			 */
			echo Render_class::class_render([
				'templateName'   => 'template-svg-icons',
				'iconName'       => 'close',
				'className'      => NULL,
				'hrefClass'      => 'm-column-group__expand-icon',
				'hrefDataAtts'   => 'data-remodal-action="close"',
				'href'           => '#'
			]);
		?>

      <!-- Show caption toggle button -->
      <input type="checkbox" role="button" class="m-modal__content__caption-toggle__checkbox" id="toggle">
      <label for="toggle" class="m-modal__content__infosheet m-modal__content__caption-toggle__label" data-closed="Read caption" data-open="Close caption"></label>
      
      <!-- Model content -->
      <div class="m-modal__content">
         <div class="m-modal__content__inner">

            <?= $modalDetail ?>

         <!-- Info sheet -->
         <div class="m-modal__content__infosheet">
            <img src="<?= $themeImageFolder ?>pdf-icon.png" alt="Download the info sheet" class="b_icon m-modal__content__infosheet__icon">
            <a href="<?= $modalInfoSheet ?>" target="_blank">Download the info sheet</a>
         </div>

            <!-- Info list -->
            <?php if( $infoList ) : ?>
                <ul class="m-modal__content__list">
                <?php
                    foreach(get_sub_field('info_list') as $listItem) {
                        $list = $listItem;
                        echo '<li class="m-modal__content__list__item">:: ' . $list['list_item'] . '</li>';
                    }
                ?>
                </ul>  
            <?php endif; ?>

         </div>
		</div>
		<!-- <img src="" alt=""> -->
    </div>

<?php endif; ?>