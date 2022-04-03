var swiper = new Swiper(".mySwiper", {
  slidesPerView: 3,
  spaceBetween: 50,
  centeredSlides: false,
  pagination: {
    el: ".swiper-pagination",
    clickable: true,
  },
});


<script>

var myNav = document.getElementById('menu');
window.onscroll = function () { 
    "use strict";
    if (document.body.scrollTop >= 200 ) {
        myNav.classList.add("bg-red-500");
        myNav.classList.remove("bg-red-500");
    } 
    else {
        myNav.classList.add("nav-transparent");
        myNav.classList.remove("bg-red-500");
    }
};

</script>