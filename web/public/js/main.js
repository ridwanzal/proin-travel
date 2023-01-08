$(function () {
   if ($('.mySwiper').length > 0) {
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
   }

   if ($('.js-mh').length > 0) {
      $('.js-mh').matchHeight();
   }

   $(window).on('resize', function () {
      if ($('.js-mh').length > 0) {
         $('.js-mh').matchHeight();
      }
   });

   $('#editor, #editor2').trumbowyg(
      {
         btns: [
            ['viewHTML'],
            ['undo', 'redo'], // Only supported in Blink browsers
            ['formatting'],
            ['strong', 'underline', 'em', 'del'],
            ['superscript', 'subscript'],
            ['link'],
            ['insertImage'],
            ['justifyLeft', 'justifyCenter', 'justifyRight', 'justifyFull'],
            ['unorderedList', 'orderedList'],
            ['horizontalRule'],
            ['removeformat'],
            ['fullscreen']
         ],
         semantic: {
            'b': 'strong',
            'i': 'em',
            's': 'del',
            'strike': 'del',
            'div': 'p'
         },
         tagsToRemove: ['script', 'link'],
         tagsToKeep: ['i', 'script[src]'],
         autogrow: true,
         autogrowOnEnter: true
      }
   );

   // Start datatable
   $('.js-datatable').each(function (i, e) {
      $(this).DataTable({
         "bFilter": true,
         "lengthMenu": [20, 50, 100],
         "bSort": true,
         "ordering": true,
         "responsive": true,
         "language": {
            "emptyTable": "<i class='bi-info-circle-fill'></i>&nbsp;&nbsp;Tidak ada data yang ditampilkan"
         },
      });
   });
   // End datatable

});

// copy
function copyTeks($id){
   var valueText = $('#dataCopy_' + $id).text();
   console.log(valueText)
   var $temp = $("<input>");
   $("body").append($temp);
   $temp.val(valueText).select();
   document.execCommand("copy");
   $temp.remove();
   alert("data '" + valueText + "' berhasil di salin" )
}
// end copy