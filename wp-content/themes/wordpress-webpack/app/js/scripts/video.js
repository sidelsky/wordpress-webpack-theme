/* global require */
/* global window */
/* global site_data */
/* jshint -W097 */

import Player from "@vimeo/player";

let videoPlayer = document.querySelector(".js-video-player");
let iframe = document.querySelector("iframe");
let playButton = document.querySelector(".js-play-button");

export function init_video() {
   
   if(iframe) {
      vimeo_player();
   }
   
}

function vimeo_player() {
   //let pauseButton = document.querySelector(".pause-button");
   let player = new Player(iframe);

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
