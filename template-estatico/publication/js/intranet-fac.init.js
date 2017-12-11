'use strict';

jQuery(document).ready(function ($) {

	var $header = jQuery('header.container-fluid');

	jQuery('.btn-toggle').click(function (e) {
		e.preventDefault();

		jQuery('section.container-fluid').toggleClass('push-menu');

		// jQuery('body')
		// 	.toggleClass('hidden-x');
		jQuery('.menu-container').toggleClass('active');
	});

	//Header fijo
	$header.affix({
		offset: {
			top: 100
		}
	});

	// Slider home

	var sliderHome = {
		infinite: true,
		slidesToShow: 1,
		slidesToScroll: 1,
		dots: true,
		arrows: false

	};

	jQuery('#slider-home').slick(sliderHome);
	jQuery('#slider-videos').slick(sliderHome);

	//Mostrar iconos de aplicaciones

	jQuery('.lista-iconos a.btn-more').click(function (e) {
		e.preventDefault();

		jQuery('.lista-iconos .lista-horizontal').toggleClass('active');
	});

	/*No pasar de aca*/
});
//# sourceMappingURL=../maps/intranet-fac.init.js.map
