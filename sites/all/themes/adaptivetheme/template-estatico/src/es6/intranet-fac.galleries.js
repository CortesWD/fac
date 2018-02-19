jQuery(document).ready(()=>{

	const $containerGall = jQuery('.content-cuadro-honor .counter');

	$containerGall.each(function() {
		
		jQuery(this).magnificPopup({
			type:'image',
			delegate:'a',
			titleSrc: 'title',
			gallery:{
				enabled:true
			}

		});

	});


});