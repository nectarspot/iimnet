$(document).ready(function(){
  var frm = $('#myform');

  frm.submit(function (e) {

      e.preventDefault();

      $.ajax({
          type: frm.attr('method'),
          url: frm.attr('action'),
          data: frm.serialize(),
          success: function () {
              $("#past-event-video").show();
              $(".access-prsentation").hide();
          },
          error: function () {
              $("#past-event-video").show();
              $(".access-prsentation").hide();

          },
      });
  });
    
var blgfrm = $('.inner-blog-form');

  blgfrm.submit(function (e) {

      e.preventDefault();

      $.ajax({
          type: blgfrm.attr('method'),
          url: blgfrm.attr('action'),
          data: blgfrm.serialize(),
          success: function () {
               $(".thankyou-msg").show();
              $(".inner-blog-form-div").hide();
          },
          error: function () {
              $(".thankyou-msg").show();
              $(".inner-blog-form-div").hide();

          },
      });
  });

 $(".animated-progress span").each(function () {
  $(this).animate(
    {
      width: $(this).attr("data-progress") + "%",
    },
    1000
  );
  $(this).text($(this).attr("data-progress") + "%");
});

  $("body").scrollspy({
    target: "#list-example",
    offset: 70
    
});
$('[data-spy="scroll"]').each(function(){
  var $spy = $(this).scrollspy('refresh');
}); 
  //  $('.navbar-overlay').hide();
  $('.opennav').click(function(){
                //  $('.opennav').toggleClass('fa-bars fa-times');
                 $('.navbar-overlay').show();
                 
                 
               });

               $('.btm-bar-nav').click(function(){
                $('.btm-bar-nav').toggleClass('fa-bars fa-times');
                $('.navbar-overlay').toggle();
                $('.body').toggleClass('overflow-hidden-ftr');
               
              });
              $('.closenav').click(function(){

                $('.navbar-overlay').hide();
                
              });
              $(".more-info").click(function(){
                $(".more-content").slideToggle("fast");
                $(".more-info").hide();
                $(".less-info").css("display", "inline-block");
           
          });  
          $(".less-info").click(function(){
            $(".more-content").hide();
            $("#directions").slideDown("slow");
            $(".more-info").show();
            $(".less-info").hide();
          });

    $(".click-more").click(function(){
        $(".click-more").toggleClass("fa-plus-circle fa-times-circle");
     

   
  });

  $(".view-presentation").click(function(){
    $("#past-event-video").show();
 });
 
  $(".into-icon").click(function(){
      
 $("#golden-trumpet-award").hide();
 $("#scrolls").slideDown("slow");
        
 $(".click-more").addClass("fa-plus-circle");
 $(".click-more").removeClass("fa-times-circle");    

   
  });
  $("#golden-trumpet-award").hide();
    
    $(".click-more").click(function(){
    $("#golden-trumpet-award").slideToggle("fast");
    
  });

    $('.show-hide').on('click', function() {
  $parent_box = $(this).closest('.services-block');
  $parent_box.siblings().find('.show-more').hide();
  $parent_box.find('.show-more').toggle();
});

 


  var owl = $('.owl-carousel');

              owl.owlCarousel({
                items: 4,
                loop: true,
                margin: 10,
                autoplay: true,
                autoplayTimeout: 2000,
                autoplayHoverPause: true,
                responsiveClass:true,
    responsive:{
        0:{
            items:1,
            nav:false,
            loop:true
        },
        600:{
            items:3,
            nav:false,
            loop:true
        },
        1000:{
            items:4,
            nav:false,
            loop:true
        }
    }

    
              });

  //Go through each carousel on the page
  $('.owl-carousel').each(function() {
    //Find each set of dots in this carousel
  $(this).find('.owl-dot').each(function(index) {
    //Add one to index so it starts from 1
    $(this).attr('aria-label', index + 1);
  });
});

var items = $(".list-wrapper .list-item");
    var numItems = items.length;
    var perPage = 6;

    items.slice(perPage).hide();

    $('#pagination-container').pagination({
        items: numItems,
        itemsOnPage: perPage,
        prevText: "&laquo;",
        nextText: "&raquo;",
        onPageClick: function (pageNumber) {
            var showFrom = perPage * (pageNumber - 1);
            var showTo = showFrom + perPage;
            items.hide().slice(showFrom, showTo).show();
        }
    });

    $("#bkgOverlay").delay(20000).fadeIn(400);

$("#delayedPopup").delay(20000).fadeIn(400);


$("#btnClose").click(function (e)
{
   HideDialog();
   e.preventDefault();
});

$("#bkgOverlay").click(function (e)
{
   HideDialog();
   e.preventDefault();
});

function HideDialog()
{
    $("#bkgOverlay").fadeOut(400);
    $("#delayedPopup").fadeOut(300);
}

});


// $(window).scroll(function() {  
 
//   var scroll = $(window).scrollTop();
 
//   if (scroll >= 50) {
//       $(".ns-new-header").addClass("is-hovered");
//   } else {
//       $(".ns-new-header").removeClass("is-hovered");
//   }
//  });
// jQuery(document).ready(function($){
//     $(window).on('scroll', function(){
//         if($(window).scrollTop() == 500){
//             $('.single-listing').addClass('new-list-bg');
//         }
//         else 
//         {
//             $('.single-listing').toggleClass('new-list-bg');
            
//         }
//     });
// });

// let mainNavLinks = document.querySelectorAll(".scrollspy-list li a");
// let mainSections = document.querySelectorAll(".home-media-right-module");

// let lastId;
// let cur = [];

// window.addEventListener("scroll", _event => {
//   let fromTop = window.scrollY;

//   mainNavLinks.forEach(link => {
//     let section = document.querySelector(link.hash);

//     if (
//       section.offsetTop = fromTop &&
//       section.offsetTop + section.offsetHeight > fromTop
//     ) {
//       link.classList.add("active");
//     } else {
//       link.classList.remove("active");
//     }
//   });
// });







