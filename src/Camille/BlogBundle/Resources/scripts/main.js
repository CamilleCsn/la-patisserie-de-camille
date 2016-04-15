$(function() {

	'use strict';

	//VIEW RECIPE - TRAITEMENT FORM
	$('.ingredients').each(function() {
		var html = $(this).html();
		html = html.split("-").join("<li>");
		$(this).html(html);
	});

	$('.recipe-content').each(function() {
		var html = $(this).html();
		html = html.split(".").join("<br />");
		$(this).html(html);
	});

	//VIEW RECIPE - IMG PARALLAX
	$('.img-holder').imageScroll({
    coverRatio: 0.5
	});

	//VIEW RECIPE - SCROLL UP
	$(window).scroll(function () {
	    if ($(this).scrollTop() > 500) {
	        $('.scrollup').fadeIn();
	    } else {
	        $('.scrollup').fadeOut();
	    }
	});

	$('.scrollup').click(function () {
	    $("html, body").animate({
	        scrollTop: 0
	    }, 600);
	    return false;
	});


	//SVG

	for (var i=1; i<=4; i++) {
		new Vivus('rouleau'+i, {duration: 200}, function () {
				$('#entrer').addClass('start');
			});
	}

	for (var i=1; i<=4; i++) {
		new Vivus('cake'+i, {duration: 200});
	}


	for (var i=1; i<=4; i++) {
		new Vivus('ble'+i, {duration: 200});
	}


	for (var i=1; i<=4; i++) {
		new Vivus('fouet'+i, {duration: 200});
	}

	//BTN ENTRER

	$('#entrer').click(function() {
		$('html, body').animate({scrollTop: $('#home').offset().top}, 
			1000
    )
	});


  //INFINITE SCROLL + MASSONRY
  
	$(document).ready(function() {
		var grid = $('.grid');

		grid.imagesLoaded(function() {
			grid.masonry({
				itemSelector: '.grid-item',
				columnWidth: 0
			});
		});


		grid.infinitescroll({
			// Pagination element that will be hidden
			navSelector: '#pagination',

			// Next page link
			nextSelector: '#pagination li .next-prev',

			// Selector of items to retrieve
			itemSelector: '.grid-item',

			// Loading message
			loadingText: 'Loading new items…'
		},

		// Function called once the elements are retrieved
		function(new_elts) {
			var elts = $(new_elts).css('opacity', 0);

			elts.animate({opacity: 1});
			grid.imagesLoaded(function() {
				grid.masonry('appended', elts);
			});
		});
	});



});
