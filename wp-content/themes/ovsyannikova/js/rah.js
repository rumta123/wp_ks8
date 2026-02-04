$(document).ready(function () {

  headerHeight = ($('header').height());

  $(window).scroll(function () {
    if ($(this).scrollTop() <= headerHeight) {
      $('.navbar').removeClass('navbar-fixed-top');
    }

    if ($(this).scrollTop() > headerHeight) {
      $('.navbar').addClass('navbar-fixed-top');
    }
  });
});


$(".owl-one").owlCarousel({
  autoPlay : 50000,
  pagination: false,
  slideSpeed : 300,
  paginationSpeed : 400,
  singleItem: true
});

$(".owl-three").owlCarousel({
  responsiveBaseWidth: ".container",
  items : 3,
  itemsDesktop : [1240,3],
  itemsDesktopSmall : [1000,3],
  itemsTablet: [780,2],
  itemsMobile : [639,1],
  pagination: false,
  navigation : true,
  navigationText: [
    "<span class='glyphicon glyphicon-chevron-left'></span>",
    "<span class='glyphicon glyphicon-chevron-right'></span>"
  ]
});

$(".owl-four").owlCarousel({
  responsiveBaseWidth: ".container",
  items : 4,
  itemsDesktop : [1000,4],
  itemsDesktopSmall : [780,3],
  itemsTablet: [689,2],
  itemsMobile : [515,1],
  pagination: false,
  navigation : true,
  navigationText: [
    "<span class='glyphicon glyphicon-chevron-left'></span>",
    "<span class='glyphicon glyphicon-chevron-right'></span>"
  ]
});


