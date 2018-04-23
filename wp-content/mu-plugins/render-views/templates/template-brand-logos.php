<?php
   /**
    * Brand logos
    */
?>

<?php
	if( $brandLogos ) :
?>
   <section class="u-section" >
      <div class="u-row u-row--small">
         <ul class="m-brand-logos">
            <?php
               foreach( $brandLogos as $brandLogo ) {
						$image = $brandLogo['sizes']['large'];
						$alt = $brandLogo['title'];
						echo '<li class="m-brand-logos__logo" data-in-viewport><img src="'. $image .'" alt="'. $alt .'"></li>';
					}
            ?>
         </ul>
      </div>
   </section>
<?php endif; ?>