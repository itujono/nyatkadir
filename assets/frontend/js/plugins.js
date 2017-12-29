// Avoid `console` errors in browsers that lack a console.
(function() {
    var method;
    var noop = function () {};
    var methods = [
        'assert', 'clear', 'count', 'debug', 'dir', 'dirxml', 'error',
        'exception', 'group', 'groupCollapsed', 'groupEnd', 'info', 'log',
        'markTimeline', 'profile', 'profileEnd', 'table', 'time', 'timeEnd',
        'timeline', 'timelineEnd', 'timeStamp', 'trace', 'warn'
    ];
    var length = methods.length;
    var console = (window.console = window.console || {});

    while (length--) {
        method = methods[length];

        // Only stub undefined methods.
        if (!console[method]) {
            console[method] = noop;
        }
    }
}());




// Place any jQuery/helper plugins in here.

$(document).ready(function() {

    function preview(input) {
        if (input.files && input.files[0]) {
            var reader = new FileReader();
            reader.onload = function (e) { $('#avatar').attr('src', e.target.result);  }
            reader.readAsDataURL(input.files[0]);
        }
    }

    $("#image-upload").change(function(){
        $("#avatar").css({top: 0, left: 0});
        preview(this);
        $("#avatar").draggable({ containment: 'parent',scroll: false });
    });

    // $("#file-upload").dropzone({
    //     maxFiles: 1,
    //     clickable: false
    // });
    //
    // $("#file-upload").on("complete", function(file) {
    //   $(this).removeFile(file);
    //   console.log(this);
    // });

});
