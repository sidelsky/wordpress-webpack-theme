<?php

   $file = '../../classes/class-hero.php';
   require_once __DIR__ . $file;

   /**
    * Render Hero view
    */
   function render_hero($hero_module_args) {
        $html .= Hero::render($hero_module_args);
      return $html;

   }