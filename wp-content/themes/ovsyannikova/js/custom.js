
$(function () {
	$('.popup-modal').magnificPopup({
		type: 'inline',
		preloader: false,
		focus: '#username',
		modal: true
	});
	$(document).on('click', '.popup-modal-dismiss', function (e) {
		e.preventDefault();
		$.magnificPopup.close();
	});
	
	$(document).on('click', '.close-modal', function (e) {
		e.preventDefault();
		$.magnificPopup.close();
	});
	
	
	$('.popup-gallery').magnificPopup({
		delegate: 'a.image-gallery',
		type: 'image',
		tLoading: 'Loading image #%curr%...',
		mainClass: 'mfp-img-mobile',
		gallery: {
			enabled: true,
			navigateByImgClick: true,
			preload: [0,1] // Will preload 0 - before current, and 1 after the current image
		},
		image: {
			tError: '<a href="%url%">The image #%curr%</a> could not be loaded.',
			titleSrc: function(item) {
				return item.el.attr('title') + '';
			}
		}
	}); 
	
	$('.popup-youtube, .popup-vimeo, .popup-gmaps').magnificPopup({
		disableOn: 700,
		type: 'iframe',
		mainClass: 'mfp-fade',
		removalDelay: 160,
		preloader: false,
		
		fixedContentPos: false
	});    
});

$(".owl-three").owlCarousel({
  responsiveBaseWidth: ".container",
  items : 4,
  itemsDesktop : [1540,3],
  itemsDesktopSmall : [1200,3],
  itemsTablet: [780,2],
  itemsMobile : [619,1],
  pagination: true,
  navigation : true,
  navigationText: [
    "<i class='fa fa-chevron-left'></i>",
    "<i class='fa fa-chevron-right'></i>"
  ]
});
    