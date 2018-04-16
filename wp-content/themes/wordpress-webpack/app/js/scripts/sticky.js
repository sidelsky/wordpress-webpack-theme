/* global require */
/* global window */
/* global site_data */
/* jshint -W097 */

(function () {

	var subNavigation,
		navigation,
		pageWrap,
		navigationHeight,
		subNavigationHeight,
		stickyTop;

		subNavigation = document.querySelector('.js-subnavigation');
		navigation = document.querySelector('.js-header');
		pageWrap = document.querySelector('.page-wrap');
		navigationHeight = navigation.offsetHeight;

	if (subNavigation) {
		subNavigationHeight = subNavigation.offsetHeight;
		stickyTop = subNavigation.offsetTop;
	}
	
	pageWrap.style.paddingTop = navigationHeight + 'px';

	function setHeight() {
		navigationHeight = navigation.offsetHeight;
		pageWrap.classList.add('is-sticky');
	}
	
	function skicky_navigation() {

		if (subNavigation) {
			if (window.pageYOffset + navigationHeight > stickyTop + 10) {
				
				setHeight();
				
				subNavigation.style.top = navigationHeight + 'px';
				pageWrap.style.paddingTop = subNavigationHeight + navigationHeight + 'px';
				
			} else {
				pageWrap.classList.remove('is-sticky');
				subNavigation.style.top = null;
				pageWrap.style.paddingTop = navigationHeight + 'px';
			}
		} else {
			if (window.pageYOffset >= navigationHeight) {
				pageWrap.classList.add('is-sticky');
				pageWrap.style.paddingTop = navigationHeight + 'px';
			} else {
				pageWrap.classList.remove('is-sticky');
			}
		}

	}

	window.onscroll = function () {
		skicky_navigation();
	};

}());



