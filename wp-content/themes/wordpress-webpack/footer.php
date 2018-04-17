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
							$svg_icon_args = [
								'class' => 'm-page-footer__logo',
								'icon' => 'zuma'
							];
							echo '<a href="'. home_url() .'">';
								echo Svg_icon::render($svg_icon_args);
							echo '</a>';
						echo '</div>';

						echo '<div class="m-page-footer__social-icons" data-in-viewport>';
							foreach( $theme_content['social'] as $content ) {
								echo '<a href="' . $content['url'] . '" target="'. $content['target'] .'">';
									$svg_icon_args = [
										'icon' => $content['icon']
									];
									echo Svg_icon::render( $svg_icon_args );
								echo '</a>';
							}
						echo '</div>';
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
			echo '</footer>';

		/**
		 * END: page-wrap
		 */
		echo '</div> ';

		wp_footer();

		?>
	</body>
</html>