export function init_sticky() {
   
   skicky();
   
}

   function skicky() {


   }



   var navigation = document.querySelector('.js-header');
   var pageWrap = document.querySelector('.page-wrap');
   var navigationHeight = navigation.offsetHeight;
   var subNavigation = document.querySelector('.js-subheader');
   var subNavigationHeight = subNavigation.offsetHeight;
   var sticky = subNavigation.offsetTop;

   function myFunction() {

      if(window.pageYOffset + navigationHeight >= sticky ) {
         subNavigation.classList.add('is-sticky');
         subNavigation.style.top = navigationHeight + 'px';
         pageWrap.style.paddingTop = subNavigationHeight + navigationHeight + 'px';
      } else {
         subNavigation.classList.remove('is-sticky');
         subNavigation.style.top = null;
         pageWrap.style.paddingTop = null
      }
   }




   window.onscroll = function() {
      myFunction();
   }


init_sticky()