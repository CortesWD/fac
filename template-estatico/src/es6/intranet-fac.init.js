jQuery(document).ready(function($) {

	const $header = jQuery('header.container-fluid');



	jQuery('.btn-toggle').click(function(e) {
		e.preventDefault();

		jQuery('section.container-fluid')
			.toggleClass('push-menu');

		jQuery('body')
			.toggleClass('hidden-x');
		jQuery('.menu-container')
			.toggleClass('active');

	});


	//Header fijo
	$header.affix({
		offset:{
			top:  100
		}
	});




	/*No pasar de aca*/
});