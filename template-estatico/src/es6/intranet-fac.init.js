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

	//slider para sys de informacion en mobile

	if(jQuery(window).width() < 768 ){

		jQuery('.lista-iconos .lista-horizontal a').unwrap();

		jQuery('.lista-iconos').slick({
			infinite: true,
			slidesToShow: 1,
	  		slidesToScroll: 1,
	  		dots: false,
	  		arrows:true,
	  		prevArrow: '<a href="#" class="fa fa-chevron-left slick-prev" ></a>',
	  		nextArrow: '<a href="#" class="fa fa-chevron-right slick-next" ></a>'

		});

	}



});