$(function () {
   var swiper = new Swiper(".mySwiper", {
      slidesPerView: 1.8,
      spaceBetween: 30,
      pagination: {
         el: ".swiper-pagination",
         clickable: true,
      },
   });
   $('.js-mh').matchHeight();
});