function init_magic_line() {
   magic_line();
}

function magic_line() {
   
   console.log('Magic');

   var $el, leftPos, newWidth;
    
   /*
       EXAMPLE ONE
   */
   
   /* Add Magic Line markup via JavaScript, because it ain't gonna work without */
   $("#magic-nav").append("<li id='magic-line'></li>");
   
   /* Cache it */
   var $magicLine = $("#magic-line");
   
   var $currentItem =  $(".current_item a");
   var padding = ($currentItem.outerWidth() - $currentItem.width()) / 2;

   $magicLine
       .width($currentItem.width())
       .css("left", $currentItem.position().left + padding)
       .data("origLeft", $magicLine.position().left )
       .data("origWidth", $magicLine.width());
       
   $("#magic-nav li").find("a").hover(function() {
       $el = $(this);
     var padding = ($el.outerWidth() - $el.width()) / 2;
     console.log($el.outerWidth(),$el.width(), padding)
       leftPos = $el.position().left + padding;
       newWidth = $el.width();
       
       $magicLine.stop().animate({
           left: leftPos,
           width: newWidth
       });
   }, function() {
       $magicLine.stop().animate({
           left: $magicLine.data("origLeft"),
           width: $magicLine.data("origWidth")
       });    
   });


}

init_magic_line();