$(function () {
   var swiper = new Swiper(".mySwiper", {
      spaceBetween: 30,
      breakpoints: {
         '@0.75': {
            slidesPerView: 1,
         },
         '@1.00': {
            slidesPerView: 1,
         },
         '@1.50': {
            slidesPerView: 1.6,
         },
      },
      pagination: {
         el: ".swiper-pagination",
         clickable: true,
      },
   });
   $('.js-mh').matchHeight();

   $(window).on('resize', function () {
      $('.js-mh').matchHeight();
   })
});