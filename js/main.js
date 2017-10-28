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

})(window.jQuery);
