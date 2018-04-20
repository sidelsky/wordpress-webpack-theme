<?php
	/**
	 * SVG Icon
	 */
	class Svg_icon {

      public static function render($svg_icon_args) {

			if( isset($svg_icon_args) && is_array($svg_icon_args) ){
				$args = $svg_icon_args;
					} else {
						$args = array();
					}

				$defaults = array(
					'icon' => NULL,
					'class' => NULL
				);

				$args = wp_parse_args($args, $defaults);

				$icon = $args['icon'];
				$class = $args['class'];

				$html = '<svg class="b_icon ' . $class . '"><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#icon-' . $icon . '" viewBox="0 0 32 32"></use></svg>';

			return $html;

      }

   }