<?php

   /**
   * Get the content with formatting
   */

   function get_the_content_with_formatting ($more_link_text = '(more...)', $stripteaser = 0, $more_file = '') {
      $content = get_the_content($more_link_text, $stripteaser, $more_file);
      $content = apply_filters('the_content', $content);
      $content = str_replace(']]>',']]&gt;', $content);
      
      return $content;

   }

?>