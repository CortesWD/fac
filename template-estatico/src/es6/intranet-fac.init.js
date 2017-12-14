jQuery(document).ready(function($) {

	const $header = jQuery('header.container-fluid');



	jQuery('.btn-toggle').click(function(e) {
		e.preventDefault();

		jQuery('section.container-fluid')
			.toggleClass('push-menu');

		// jQuery('body')
		// 	.toggleClass('hidden-x');
		jQuery('.menu-container')
			.toggleClass('active');

	});


	//Header fijo
	$header.affix({
		offset:{
			top:  100
		}
	});


	// Slider home

	const sliderHome = {
		infinite: true,
		slidesToShow: 1,
  		slidesToScroll: 1,
  		dots: true,
  		arrows:false

	}

	jQuery('#slider-home').slick(sliderHome);
	jQuery('#slider-videos').slick(sliderHome);

	//Mostrar iconos de aplicaciones

	jQuery('.lista-iconos a.btn-more').click( function (e) {
		e.preventDefault();

		jQuery('.lista-iconos .lista-horizontal').toggleClass('active');

	} );


	//Ocultar overlay onplay


	jQuery(document).on('click', '.vjs-big-play-button', function () {
		// body...
		console.log('le di play');

		jQuery(this)
			.parent()
			.parent()
			.parent()
			.parent()
			// .parent()
			.find('.item-text').fadeOut();
	});

	//Pausamos todos los videos al navegar slider
	jQuery('#slider-videos').on('afterChange', (event, slick, currentSlide, nextSlide)=>{
		
		jQuery('.video-js').each(function() {
			
			videojs(this.id).ready(function(){
				let player = this;

				player.pause();

			});

		});


	});


	/*No pasar de aca*/
});