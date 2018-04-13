export function init_sticky() {
   
   skicky();
   
}

   function skicky() {


   }

   var subNavigation = document.querySelector('.js-subheader');
   var navigation = document.querySelector('.js-header');
   var pageWrap = document.querySelector('.page-wrap');
   var navigationHeight = navigation.offsetHeight;
   pageWrap.style.paddingTop = navigationHeight + 'px';

   if( subNavigation ) {

   var subNavigationHeight = subNavigation.offsetHeight;
   var sticky = subNavigation.offsetTop;
   
      function myFunction() {

         if(window.pageYOffset + navigationHeight >= sticky ) {
            pageWrap.classList.add('is-sticky');
            subNavigation.style.top = navigationHeight + 'px';
            pageWrap.style.paddingTop = subNavigationHeight + navigationHeight + 'px';
         } else {
            pageWrap.classList.remove('is-sticky');
            subNavigation.style.top = null;
            pageWrap.style.paddingTop = navigationHeight + 'px';
         }

      }

      window.onscroll = function() {
         myFunction();
      }

   }



init_sticky()