/* global require */
/* global window */
/* global site_data */
/* jshint -W097 */

"use strict";

import { createLogger } from "./scripts/utils";
import { svgSprite } from "./scripts/svg-sprite";
import init_video from "./scripts/video";

/**
 * Vendor scripts
 */

const log = createLogger("app");
log.setLevel(log.DEBUG);

function init() {
   log.info("Init called");
}

//init();

window.enhance_website = function() {
   log.debug("window.enhance_website", document.readyState);

   if (document.readyState === "complete") {
      log.info("Complete");
      init();
   } else {
      document.onreadystatechange = function() {
         log.debug("document.onreadystatechange", document.readyState);
         if (
            document.readyState === "complete" ||
            document.readyState === "interactive"
         ) {
            init();
         } else {
            document.onreadystatechange = null;
         }
      };
   }
};

enhance_website();
