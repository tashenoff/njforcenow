(() => {
  // resources/js/app.js
  var swiper = new Swiper(".mySwiper", {
    slidesPerView: 3,
    spaceBetween: 50,
    centeredSlides: false,
    pagination: {
      el: ".swiper-pagination",
      clickable: true
    }
  });
})();