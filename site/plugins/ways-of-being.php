<?php

      /* *************************** */
      /* waysofbeing                 */
      /* v.1.0.1                     */
      /* by Max Fenton               */
      /* (telescopicmarkdown)        */
      /* based on telescopictext.org */
      /* Do what you want with it.   */
      /* *************************** */

      // ---------------------------------------------------
      // REFERENCE
      /*
            Original telescope regex:
            '\{\{([^|]+)\|\|', '\}\}'

            <span class="a"><span class="b">%s</span><span class="c">%s</span></span>
      */
      // ~cf. http://jsfiddle.net/gryzzly/q7mBZ/ */
      // ~cf. https://github.com/maxfenton/studip-plugin-telescopic-text/blob/master/telescopic.js

      // ---------------------------------------------------
      // RENDERING (TELESCOPE MARKDOWN-ISH TO MARKUP)
      //
      //   BEFORE | AFTER
      //  --------|---------------------------
      //   `{{ `  | `<ul class="ways-of-being"><li class="is-active">`
      //  ` ||  ` | `</li><li class="hiddem">`
      //   ` }}`  | `</li></ul>`
      // -------------------------------------

    function waysofbeing( $html ) {
      $string = $html;
      $patterns = array();
      $patterns[0] = '/\{\{ /';
      $patterns[1] = '/ \|\| /';
      $patterns[2] = '/ \}\}/';
      $replacements = array();
      $replacements[0] = "<span class=\"waysofbeing\"><span class=\"is-active\">";
      $replacements[1] = "</span><span class=\"hidden\">";
      $replacements[2] = "</span></span>";
      return preg_replace($patterns, $replacements, $string);
    }

?>