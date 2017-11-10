<?php defined('BASEPATH') OR exit('No direct script access allowed');?>

<?php
if ($plugins == 'home') { ?>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="https://npmcdn.com/headroom.js@0.9.4"></script>
<script src="<?php echo base_url().$this->data['asfront'];?>js/main.js"></script>
<script src="<?php echo base_url().$this->data['asfront'];?>js/owl.js"></script>
<script src="<?php echo base_url().$this->data['asfront'];?>js/wow.js"></script>
<script src="<?php echo base_url().$this->data['asfront'];?>js/revolution.min.js"></script>

<script>
    new WOW().init();
</script>

<script>
    if ($('.five-item-carousel').length) {
        $('.five-item-carousel').owlCarousel({
            loop:true,
            margin:30,
            smartSpeed: 700,
            autoplay: 4000,
            responsive:{
                0:{
                    items:1
                },
                580:{
                    items:1
                },
                640:{
                    items:2
                },
                800:{
                    items:2
                },
                1024:{
                    items:3
                },
                1100:{
                    items:5
                }
            }
        });
    }
</script>
<script>
    if ($('.four-item-carousel').length) {
        $('.four-item-carousel').owlCarousel({
            loop:true,
            margin:20,
            smartSpeed: 700,
            autoplay: 3000,
            responsive:{
                0:{
                    items:1
                },
                580:{
                    items:1
                },
                640:{
                    items:2
                },
                800:{
                    items:2
                },
                1024:{
                    items:3
                },
                1100:{
                    items:4
                }
            }
        });
    }
</script>

<script>
    if($('.main-slider .tp-banner').length){

    var MainSlider = $('.main-slider');
    var strtHeight = MainSlider.attr('data-start-height');
    var slideOverlay =  "'"+ MainSlider.attr('data-slide-overlay') +"'";

    $('.main-slider .tp-banner').show().revolution({
    //dottedOverlay: slideOverlay,
    delay:5000,
    startwidth:1200,
    startheight:strtHeight,
    hideThumbs:600,

    thumbWidth:80,
    thumbHeight:50,
    thumbAmount:5,

    navigationType:"bullet",
    navigationArrows:"1",
    navigationStyle:"preview3",

    touchenabled:"on",
    onHoverStop:"off",

    swipe_velocity: 0.7,
    swipe_min_touches: 1,
    swipe_max_touches: 1,
    drag_block_vertical: false,

    parallax:"mouse",
    parallaxBgFreeze:"on",
    parallaxLevels:[7,4,3,2,5,4,3,2,1,0],

    keyboardNavigation:"off",

    navigationHAlign:"center",
    navigationVAlign:"bottom",
    navigationHOffset:0,
    navigationVOffset:50,

    soloArrowLeftHalign:"left",
    soloArrowLeftValign:"bottom",
    soloArrowLeftHOffset:20,
    soloArrowLeftVOffset:0,

    soloArrowRightHalign:"right",
    soloArrowRightValign:"center",
    soloArrowRightHOffset:20,
    soloArrowRightVOffset:0,

    shadow:0,
    fullWidth:"on",
    fullScreen:"off",

    spinner:"spinner4",

    stopLoop:"off",
    stopAfterLoops:-1,
    stopAtSlide:-1,

    shuffle:"off",

    autoHeight:"off",
    forceFullWidth:"on",

    hideThumbsOnMobile:"on",
    hideNavDelayOnMobile:1500,
    hideBulletsOnMobile:"on",
    hideArrowsOnMobile:"on",
    hideThumbsUnderResolution:0,

    hideSliderAtLimit:0,
    hideCaptionAtLimit:0,
    hideAllCaptionAtLilmit:0,
    startWithSlide:0,
    videoJsPath:"",
    fullScreenOffsetContainer: ""
});
    }
</script>

<?php
} elseif ($plugins == 'general_addon') {
?>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="https://npmcdn.com/headroom.js@0.9.4"></script>
<script src="<?php echo base_url().$this->data['asfront'];?>js/main.js"></script>
<script src="<?php echo base_url().$this->data['asfront'];?>js/owl.js"></script>
<script src="<?php echo base_url().$this->data['asfront'];?>js/wow.js"></script>

<script>
    new WOW().init();
</script>

<script>
    if ($('.five-item-carousel').length) {
        $('.five-item-carousel').owlCarousel({
            loop:true,
            margin:30,
            smartSpeed: 700,
            autoplay: 4000,
            responsive:{
                0:{
                    items:1
                },
                580:{
                    items:1
                },
                640:{
                    items:2
                },
                800:{
                    items:2
                },
                1024:{
                    items:3
                },
                1100:{
                    items:5
                }
            }
        });
    }
</script>
<script>
    if ($('.four-item-carousel').length) {
        $('.four-item-carousel').owlCarousel({
            loop:true,
            margin:10,
            smartSpeed: 700,
            autoplay: 3000,
            responsive:{
                0:{
                    items:1
                },
                580:{
                    items:1
                },
                640:{
                    items:2
                },
                800:{
                    items:2
                },
                1024:{
                    items:4
                },
                1100:{
                    items:4
                }
            }
        });
    }
</script>
<script>
    if ($('.three-item-carousel').length) {
        $('.three-item-carousel').owlCarousel({
            loop:true,
            margin:20,
            smartSpeed: 700,
            autoplay: 3000,
            responsive:{
                0:{
                    items:1
                },
                580:{
                    items:1
                },
                640:{
                    items:2
                },
                800:{
                    items:2
                },
                1024:{
                    items:3
                },
                1100:{
                    items:3
                }
            }
        });
    }
</script>

<?php } ?>
