var $magicNav = $("#magic-nav");

export function init_magic_line() {
    if( $magicNav.length ) {
        magic_line();
    }
}

function magic_line() {

   var $el,
      leftPos,
      newWidth,
      padding;

   /*
       EXAMPLE ONE
   */

  $('#magic-nav > li').addClass('current_item');

   /* Add Magic Line markup via JavaScript, because it ain't gonna work without */
   $magicNav.append("<li class='magic-line'></li>");

   /* Cache it */
   var $magicLine = $(".magic-line"),
      $currentItem = $("#magic-nav .current_page_item a"),
      padding = ($currentItem.outerWidth() - $currentItem.width()) / 2;

   $magicLine
      .width($currentItem.width())
      .css("left", $currentItem.position().left + padding)
      .data("origLeft", $magicLine.position().left)
      .data("origWidth", $magicLine.width());

   $magicNav.find("li a").hover(function(e) {
      $el = $(this);
      padding = ($el.outerWidth() - $el.width()) / 2;
      leftPos = $el.position().left + padding;
      newWidth = $el.width();

      $magicLine.stop().animate({
         left: leftPos,
         width: newWidth
      });
      e.preventDefault();
   }, function () {
      $magicLine.stop().animate({
         left: $magicLine.data("origLeft"),
         width: $magicLine.data("origWidth")
      });
   });

}

init_magic_line();