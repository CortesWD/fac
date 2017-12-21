jQuery(document).ready(function($) {

	const $header = jQuery('header.container-fluid');



	jQuery('.btn-toggle').click(function(e) {
		e.preventDefault();

		if(jQuery(window).width() > 768){
		jQuery('section.container-fluid')
			.toggleClass('push-menu');

		};

		// jQuery('body')
		// 	.toggleClass('hidden-x');
		jQuery('.menu-container')
			.toggleClass('active');

	});


	//Header fijo
	let topsi;
	if (jQuery(window).width() > 768)  topsi = 100;
	topsi = 20;

	$header.affix({
		offset:{
			top:  topsi
		}
	});


	// Slider home

	const sliderHome = {
		infinite: true,
		slidesToShow: 1,
  		slidesToScroll: 1,
  		dots: true,
  		arrows:false,
  		autoplay:true,
  		autoplaySpeed: 5000,
  		infinite: true


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
		// console.log('le di play');

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

	//ajustes de layout para mobile

	if(jQuery(window).width() < 768 ){

		//boton categoria va primero
		jQuery('.noticia-container .overlay').each(function(index, el) {
				
				jQuery(this).find('.btn-more')
					.detach()
					.prependTo(this);


		});
		//fecha va primero

		jQuery('.destacado .destacado-content').each(function(index, el) {

			jQuery(this).find('.destacado-fecha')
				.detach()
				.prependTo(this)

			
		});

	}



});