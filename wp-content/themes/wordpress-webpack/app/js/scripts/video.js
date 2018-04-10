/* global require */
/* global window */
/* global site_data */
/* jshint -W097 */

import Player from "@vimeo/player";

("use strict");

export function init_video() {
   vimeo_player();
}

export function vimeo_player() {
   let videoPlayer = document.querySelector(".js-video-player");
   let iframe = document.querySelector("iframe");
   let player = new Player(iframe);
   let playButton = document.querySelector(".js-play-button");
   //let pauseButton = document.querySelector(".pause-button");

   playButton.onclick = playVideo;
   //pauseButton.onclick = pauseVideo;

   function playVideo() {
      player.play();
      videoPlayer.classList.add("isPlaying");
      console.log("playing....");
   }

   /*
      function pauseVideo() {
         player.pause();
         videoPlayer.classList.remove("isPlaying");
         console.log("paused!");
      }
   */
}

init_video();
