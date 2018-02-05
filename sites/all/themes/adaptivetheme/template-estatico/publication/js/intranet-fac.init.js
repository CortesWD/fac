'use strict';

function _defineProperty(obj, key, value) { if (key in obj) { Object.defineProperty(obj, key, { value: value, enumerable: true, configurable: true, writable: true }); } else { obj[key] = value; } return obj; }

jQuery(document).ready(function ($) {

	var $header = jQuery('header.container-fluid');
	// Dropdown menu

	jQuery('.drop-submenu > a').click(function (e) {
		e.preventDefault();

		// jQuery(this).parent().addClass('active');
		jQuery('.drop-submenu').removeClass('active');
		if (!jQuery(this).parent().hasClass('active')) {
			jQuery(this).parent().addClass('active');
		}
	});

	jQuery('.btn-toggle').click(function (e) {
		e.preventDefault();

		if (jQuery(window).width() > 768) {
			jQuery('section.container-fluid').toggleClass('push-menu');
		};

		// jQuery('body')
		// 	.toggleClass('hidden-x');
		jQuery('.menu-container').toggleClass('active');

		if (jQuery('.drop-submenu').hasClass('active')) {
			jQuery('.drop-submenu').removeClass('active');
		}
	});

	//Header fijo
	var topsi = void 0;
	if (jQuery(window).width() > 768) topsi = 100;
	topsi = 20;

	$header.affix({
		offset: {
			top: topsi
		}
	});

	// Slider home

	var sliderHome = _defineProperty({
		infinite: true,
		slidesToShow: 1,
		slidesToScroll: 1,
		dots: true,
		arrows: false,
		autoplay: true,
		autoplaySpeed: 5000
	}, 'infinite', true);

	jQuery('#slider-home').slick(sliderHome);
	jQuery('#slider-videos').slick(_defineProperty({
		infinite: true,
		slidesToShow: 1,
		slidesToScroll: 1,
		dots: true,
		arrows: false,
		autoplay: false
	}, 'infinite', true));

	//Mostrar iconos de aplicaciones

	jQuery('.lista-iconos a.btn-more').click(function (e) {
		e.preventDefault();

		jQuery('.lista-iconos .lista-horizontal').toggleClass('active');
	});

	//Ocultar overlay onplay


	jQuery(document).on('click', '.vjs-big-play-button', function () {
		// body...
		// console.log('le di play');

		jQuery(this).parent().parent().parent().parent()
		// .parent()
		.find('.item-text').fadeOut();
	});

	//Pausamos todos los videos al navegar slider
	jQuery('#slider-videos').on('afterChange', function (event, slick, currentSlide, nextSlide) {

		jQuery('.video-js').each(function () {

			videojs(this.id).ready(function () {
				var player = this;

				player.pause();
			});
		});
	});

	//ajustes de layout para mobile

	if (jQuery(window).width() < 768) {

		//boton categoria va primero
		jQuery('.noticia-container .overlay').each(function (index, el) {

			jQuery(this).find('.btn-more').detach().prependTo(this);
		});
		//fecha va primero

		jQuery('.destacado .destacado-content').each(function (index, el) {

			jQuery(this).find('.destacado-fecha').detach().prependTo(this);
		});
	};

	//clearfix en views-destacados//

	jQuery('.page-views .view-content .views-row').each(function (i, el) {

		if (i % 3 == 0 && i > 0) {

			// jQuery('<div class="clearfix" />').appendTo(el).next();
			jQuery('<div class="clearfix" />').insertAfter(el);
		}
	});
});
//# sourceMappingURL=../maps/intranet-fac.init.js.map
