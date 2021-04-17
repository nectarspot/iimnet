$(document).ready(function(){
  $("body").scrollspy({
    target: "#list-example",
    offset: 70
    
});
$('[data-spy="scroll"]').each(function(){
  var $spy = $(this).scrollspy('refresh');
}); 
var items = $(".list-wrapper .list-item");
    var numItems = items.length;
    var perPage = 4;

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
  //  $('.navbar-overlay').hide();
  $('.opennav').click(function(){
                 $('.opennav').toggleClass('fa-bars fa-times');
                 $('.navbar-overlay').toggle();
                 $('.body').toggleClass('overflow-hidden');
                 
               });

               $('.btm-bar-nav').click(function(){
                $('.btm-bar-nav').toggleClass('fa-bars fa-times');
                $('.navbar-overlay').toggle();
                $('.body').toggleClass('overflow-hidden-ftr');
               
              });
      

    $(".click-more").click(function(){
        $(".click-more").toggleClass("fa-plus-circle fa-times-circle");
     

   
  });
  $(".into-icon").click(function(){
      
 $("#golden-trumpet-award").hide();
 $("#scrolls").slideDown("slow");
        
 $(".click-more").addClass("fa-plus-circle");
 $(".click-more").removeClass("fa-times-circle");    

   
  });

    $('.show-hide').on('click', function() {
	$parent_box = $(this).closest('.services-block');
	$parent_box.siblings().find('.show-more').hide();
	$parent_box.find('.show-more').toggle();
});

 $("#golden-trumpet-award").hide();
    
    $(".click-more").click(function(){
    $("#golden-trumpet-award").slideToggle("fast");
    
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

});








