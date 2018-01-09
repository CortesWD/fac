jQuery(document).ready(()=>{

	const $containerGall = jQuery('.content-gallery');

	$containerGall.each(function() {
		
		jQuery(this).magnificPopup({
			type:'image',
			delegate:'a',
			gallery:{
				enabled:true
			}

		});

	});


});