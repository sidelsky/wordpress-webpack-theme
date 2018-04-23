<?php
			/**
			 * Footer
			 */
			echo '<footer class="u-section m-page-footer" role="contentinfo">';
				echo '<div class="u-row u-row--small">';
					echo '<div class="m-page-footer__container">';

						/**
						* Render site logo
						*/
						$logo_module_args = [
							'class' => 'm-page-footer__logo'
						];
						echo '<div class="m-page-footer__logo-container" data-in-viewport>';

							/**
							 * Render SVG icon — Zuma logo
							 */
							echo Render_class::class_render([
								'templateName' => 'template-svg-icons',
								'iconName'		=> 'zuma',
								'className'	 	=> 'm-page-footer__logo',
								'href'	 		=> home_url()
							]);

							echo '<span class="m-page-footer__strapline">';
								echo get_bloginfo('description');
							echo '</span>';
							
						echo '</div>';

						echo '<div class="m-page-footer__copyright-container" data-in-viewport>';
							/**
							 * Copyright details
							 */
							echo '<div class="m-page-footer__copyright">';
								echo $theme_content['copyright']['details'];
							echo '</div>';

							/**
							 * Footer navigation
							 */
							$args = [
								'theme_location'  => 'tertiary-navigation',
								'container'     	=>	'nav',
								'echo'          	=>	true,
								'items_wrap'		=>	'<ul class="site-nav__menu">%3$s</ul>'
							];
							wp_nav_menu($args);

						echo '</div>';
					echo '</div>';
			echo '</footer>';

		/**
		 * END: page-wrap
		 */
		echo '</div> ';

		wp_footer();

		?>
	</body>
</html>