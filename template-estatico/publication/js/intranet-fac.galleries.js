'use strict';

jQuery(document).ready(function () {

	var $containerGall = jQuery('.content-gallery');

	$containerGall.each(function () {

		jQuery(this).magnificPopup({
			type: 'image',
			delegate: 'a',
			gallery: {
				enabled: true
			}

		});
	});
});
//# sourceMappingURL=../maps/intranet-fac.galleries.js.map
