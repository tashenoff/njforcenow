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



$(function () {
  $(document).scroll(function () {
    var $nav = $(".menu");
    $nav.toggleClass('bg-primary', $(this).scrollTop() > $nav.height());
  });
});



var modal = document.getElementById('myModal');


var btn = document.getElementById("myBtn");


var span = document.getElementsByClassName("close")[0];


btn.onclick = function() {
    modal.style.display = "block";
}


span.onclick = function() {
    modal.style.display = "none";
}


window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
}