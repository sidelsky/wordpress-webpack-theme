//Scroll events
$(window).scroll(function() {
   var top = $(this).scrollTop(),
      title = $("#title");

   title.css({
      transform: "translate3d(0px, " + +top / 8 + "px, 0px)"
   });
});

// window.onscroll = function() {
//    var title = document.getElementById("title");
//    var top = this.scrollTop;
//    console.log(top);
//    title.style.transform = "translateY(" + +top / 3 + "px)";
// };
