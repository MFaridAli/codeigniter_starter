jQuery(document).ready(function( $ ) {
  $("#menu").mmenu({
    "slidingSubmenus": false,
    navbar    : {
      title   : ''
    },
    "extensions": [ 
    "pagedim-black"
    ]
  });
});

$(document).ready(function(){ 
    var API = $("#menu").data("mmenu");
    $(".close-menu-page").click(function() {
       API.close();
    });
  });


$(document).scroll(function(e){
$('.menu-header-top').css('display','none');
var scrollTop = $(document).scrollTop();
if(scrollTop > 200){
  $('.top').slideUp();
  $('.navigation ul.list-inline li').css('padding','5px 20px');
  $('.logo.des img').css({'width':'70%', "padding-top": "5px"});
}else{
  $('.top').slideDown();
  $('.navigation ul.list-inline li').css('padding','32px 20px');
  $('.logo.des img').css({'width':'100%', "padding-top": "25px"});
}
});

$('.owl-tes').slick({
  infinite: false,
  arrows:false,
  slidesToShow: 1.3,
  slidesToScroll: 1
});

$(document).ready(function() {
  var owl = $("#owl-demo");
  owl.owlCarousel({ 
        navigation:true,
        navigationText: [
        '<svg class="nc-icon outline" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="32px" height="32px" viewBox="0 0 32 32"> <polyline fill="none" stroke="#ffffff" stroke-width="2" stroke-linecap="square" stroke-miterlimit="10" points="23,30 9,16 23,2 "></polyline> </svg>',
        '<svg class="nc-icon outline" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="32px" height="32px" viewBox="0 0 32 32"> <polyline fill="none" stroke="#ffffff" stroke-width="2" stroke-linecap="square" stroke-miterlimit="10" points="9,2 23,16 9,30 "></polyline> </svg>'
        ],
        items : 1,
        itemsDesktop : [1199,1],
        itemsDesktopSmall : [979,1],
        itemsTablet : [768,1],
        itemsMobile : [479,1],
        autoPlay: true,
        dots: true
  });
});

$(document).ready(function(){
 if ($('#back-to-top').length) {
  var scrollTrigger = 100, // px
    backToTop = function () {
        var scrollTop = $(window).scrollTop();
        if (scrollTop > scrollTrigger) {
            $('#back-to-top').addClass('show');
        } else {
            $('#back-to-top').removeClass('show');
        }
    };
    backToTop();
    $(window).on('scroll', function () {
        backToTop();
    });
    $('#back-to-top').on('click', function (e) {
        e.preventDefault();
        $('html,body').animate({
            scrollTop: 0
        }, 700);
    });
  }
});