(function() {
   var menuLabel, navigation, navigationContainer, body;

   menuLabel = document.querySelector(".m-page-header-toggle__label");
   navigationContainer = document.querySelector(".m-mobile-menu-container");
   body = document.body;

   menuLabel.addEventListener("click", openMobileMenu);

   function openMobileMenu() {
      body.classList.toggle("active");
   }
})();
