

function demo_1() {
    (function($) {

        // parallax initialization
        if (!Modernizr.touch) {
            $(function() {
                $.stellar({
                    horizontalScrolling: false,
                    verticalOffset: 40
                });
            });
        };

    })(jQuery);
}
