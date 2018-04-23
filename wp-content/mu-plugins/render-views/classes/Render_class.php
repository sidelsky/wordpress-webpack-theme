<?php

   /**
    * SVG Icon Render function
      * @param $template_name - [REQUIRED] include path to the template.
      * @param $icon_name - [REQUIRED] the icon MUST have a name which maches is source name #icon-{$icon_name} eg. #icon-close.
      * @param $class_name - [OPTIONAL] add a unique class name to the SVG.
   */
  class Render_class {

    public static function class_render($args) {

       if (!is_array($args) ){
          print('Error! Array not set!');
          return;
       }
       
       // Template folder
       $template_folder = 'templates/';
       $template_name = $args['templateName'];
       $args['template'] = $template_folder . $template_name . '.php';

       // Render the contents
       $content = View::render($args);

       // Return the contents
       return $content;
    }

 }