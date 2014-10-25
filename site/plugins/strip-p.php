<?php

      /* *************************** */
      /* strip_p                     */
      /* v.1.0.0                     */
      /* by Max Fenton               */
      /* *************************** */

    function strip_p( $html ) {
      $string = $html;
      $patterns = array();
      $patterns[0] = '/\<p\>/';
      $patterns[1] = '/\<\/p\>/';
      $replacements = array();
      $replacements[0] = "";
      $replacements[1] = "";
      return preg_replace($patterns, $replacements, $string);
    }

?>