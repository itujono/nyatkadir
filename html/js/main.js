(function($) {

    "use strict";

    //Hide Loading Box (Preloader)
	function handlePreloader() {
		if($('.preloader').length){
			$('.preloader').delay(100).fadeOut(1600);
		}
	}

    $(window).on('load', function() {
		handlePreloader();
	});

    var header = document.querySelector(".navbar");
    var headroom  = new Headroom(header, {
        offset: 205,
        tolerance: 5
    });
    headroom.init();

    //Revolution Slider
	

})(window.jQuery);
