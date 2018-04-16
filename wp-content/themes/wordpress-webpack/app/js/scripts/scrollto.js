(function(){

   var $worldClassTeam = $('#world-class-team'),
   elem = $('a[href*=\\#]:not([href=\\#])'),
   body = $('html,body'),
	target,
	navigation = document.querySelector('.js-header'),
	navigationHeight = navigation.offsetHeight - 20;

   elem.on('click', scrolltoani );

   function scrolltoani() {
		
		if( $worldClassTeam.length ) {

			if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'') 
				|| location.hostname == this.hostname) {

				target = $(this.hash);

				target = target.length ? target : $('[name=' + this.hash.slice(1) +']');
					if (target.length) {
						body.animate({
							scrollTop: target.offset().top - navigationHeight
					}, 1000);
					return false;
				}
			}
			
		}
   }

}());