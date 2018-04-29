// import ResponsiveLazyLoader from 'responsive-lazy-loader';

// new ResponsiveLazyLoader({
//    callback(el) {
//       el.classList.add('loaded');
//       console.log('loader');
//   }
// });

// Javascript version
//import "waypoints/lib/noframework.waypoints";

// jQuery version
import "waypoints/lib/jquery.waypoints";

// var waypoint = new Waypoint({
//    element: document.querySelector('.m-brand-logos'),
//    handler: function(direction) {
//      alert('You have scrolled to a thing')
//    }
//  })

(function($) {
   var $this,
      animate = "animate",
      time = 20,
      $window = $(window),
      $elem = $("[data-in-viewport]"),
      itemQueue = [],
      delay = 30,
      queueTimer;

   function processItemQueue() {
      //$this = $(this);

      if (queueTimer) return;

      queueTimer = window.setInterval(function() {
         if (itemQueue.length) {
            $(itemQueue.shift()).animate(
               {
                  opacity: 1
               },
               time,
               function() {
                  $(this).addClass("animate");
               }
            );
            processItemQueue();
         } else {
            window.clearInterval(queueTimer);
            queueTimer = null;
         }
      }, delay);
   }

   $elem.waypoint(
      function() {
         itemQueue.push(this.element);
         processItemQueue();
      },
      {
         offset: "100%"
      }
   );
})(jQuery);
