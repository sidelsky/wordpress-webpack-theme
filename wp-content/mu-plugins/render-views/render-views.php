<?php
   
   /*
   Plugin Name: Render Views
   Author: Errol Sidelsky
   Description: A plugin to render views.
   */

   include('View.php');

   /**
    * Require all Classes
    */
   function return_classes() {

      $folder = '/classes/*.php';
      $files = glob(dirname(__FILE__) . $folder);

      foreach( $files as $file ) {
         require_once( $file );
      }

   }

   return_classes();