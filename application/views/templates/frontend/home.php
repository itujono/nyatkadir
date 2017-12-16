<?php defined('BASEPATH') OR exit('No direct script access allowed');?>
<section class="section main-slider pb0" data-start-height="550" data-slide-overlay="yes" id="home">

    <!-- <div class="tp-banner-container">
        <div class="tp-banner">
            <ul>
            <?php
            //if(!empty($listslider)){
                //foreach ($listslider as $key => $slider) {
            ?>
                <li data-transition="fade" data-slotamount="1" data-masterspeed="1000" data-thumb="<?php //echo $slider->imageSLIDER; ?>" data-saveperformance="on" data-title="<?php //echo $slider->titleSLIDER; ?>">
                    <img src="<?php //echo $slider->imageSLIDER; ?>" alt="<?php //echo $slider->titleSLIDER; ?>" data-bgposition="center top" data-bgfit="cover" data-bgrepeat="no-repeat">
                    <div class="tp-caption sfl sfb tp-resizeme"
                        data-x="left" data-hoffset="15"
                        data-y="center" data-voffset="-100"
                        data-speed="1500"
                        data-start="500"
                        data-easing="easeOutExpo"
                        data-splitin="none"
                        data-splitout="none"
                        data-elementdelay="0.01"
                        data-endelementdelay="0.3"
                        data-endspeed="1200"
                        data-endeasing="Power4.easeIn">
                        <div class="title yellowish"><?php //echo $slider->titleSLIDER; ?></div>
                    </div>
                    <div class="tp-caption sfl sfb tp-resizeme"
                        data-x="left" data-hoffset="15"
                        data-y="center" data-voffset="-50"
                        data-speed="1500"
                        data-start="1000"
                        data-easing="easeOutExpo"
                        data-splitin="none"
                        data-splitout="none"
                        data-elementdelay="0.01"
                        data-endelementdelay="0.3"
                        data-endspeed="1200"
                        data-endeasing="Power4.easeIn">
                        <h2 class="lhnormal"><?php //echo $slider->descSLIDER; ?></h2>
                    </div>
                </li>
            <?php //} ?>
            <?php //} ?>
            </ul>
        </div>  kelar TP-Banner
    </div> -->

    <div class="rev_slider_wrapper">
        <div id="rev_slider" class="rev_slider tp-overflow-hidden fullscreenbanner">
            <ul>
                <!-- Slide 1 wak -->
                <li data-transition="slotzoom-horizontal"  data-slotamount="6" data-masterspeed="1000" data-fsmasterspeed="1000">

                    <img src="<?php echo base_url().$this->data['asfront'];?>img/pine-forest.jpg" data-bgparallax="10"  alt="" data-bgposition="center 0" data-bgfit="cover" data-bgrepeat="no-repeat" class="rev-slidebg">

                    <!-- Layer 1 -->
                    <div class="tp-caption tp-shape tp-shapewrapper  tp-resizeme"
                    data-x="['left']" data-hoffset="['100']"
                    data-y="['middle','middle','middle','middle']" data-voffset="['-250']"
                    data-width="270"
                    data-height="5"
                    data-whitespace="nowrap"
                    data-type="shape"
                    data-responsive_offset="on"
                    data-frames='[{"from":"x:[-100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;","mask":"x:0px;y:0px;","speed":1000,"to":"o:1;","delay":0,"ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"to":"opacity:0;","ease":"nothing"}]'
                    data-textAlign="['left','left','left','left']"
                    data-paddingtop="[0,0,0,0]"
                    data-paddingright="[0,0,0,0]"
                    data-paddingbottom="[0,0,0,0]"
                    data-paddingleft="[0,0,0,0]"
                    style="background-color:#fdc236;"></div>

                    <!-- Layer 2 -->
                    <div class="tp-caption tp-shape tp-shapewrapper  tp-resizeme"
                    data-x="['left']" data-hoffset="['370']"
                    data-y="['middle','middle','middle','middle']" data-voffset="['19']"
                    data-width="5"
                    data-height="544"
                    data-whitespace="nowrap"
                    data-type="shape"
                    data-responsive_offset="on"
                    data-frames='[{"from":"y:[-100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;","mask":"x:0px;y:0px;","speed":1000,"to":"o:1;","delay":600,"ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"to":"opacity:0;","ease":"nothing"}]'
                    data-textAlign="['left','left','left','left']"
                    data-paddingtop="[0,0,0,0]"
                    data-paddingright="[0,0,0,0]"
                    data-paddingbottom="[0,0,0,0]"
                    data-paddingleft="[0,0,0,0]"
                    style="background-color:#fdc236;"></div>

                    <!-- Layer 3 -->
                    <div class="tp-caption tp-shape tp-shapewrapper  tp-resizeme"
                    data-x="['left']" data-hoffset="['100']"
                    data-y="['middle','middle','middle','middle']" data-voffset="['289']"
                    data-width="270"
                    data-height="5"
                    data-whitespace="nowrap"
                    data-type="shape"
                    data-responsive_offset="on"
                    data-frames='[{"from":"x:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;","mask":"x:0px;y:0px;","speed":1000,"to":"o:1;","delay":1200,"ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"to":"opacity:0;","ease":"nothing"}]'
                    data-textAlign="['left','left','left','left']"
                    data-paddingtop="[0,0,0,0]"
                    data-paddingright="[0,0,0,0]"
                    data-paddingbottom="[0,0,0,0]"
                    data-paddingleft="[0,0,0,0]"
                    style="background-color:#fdc236;"></div>

                    <!-- Layer 4 -->
                    <div class="tp-caption tp-shape tp-shapewrapper  tp-resizeme"
                    data-x="['left']" data-hoffset="['100']"
                    data-y="['middle','middle','middle','middle']" data-voffset="['19']"
                    data-width="5"
                    data-height="544"
                    data-whitespace="nowrap"
                    data-type="shape"
                    data-responsive_offset="on"
                    data-frames='[{"from":"y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;","mask":"x:0px;y:0px;","speed":1000,"to":"o:1;","delay":1800,"ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"to":"opacity:0;","ease":"nothing"}]'
                    data-textAlign="['left','left','left','left']"
                    data-paddingtop="[0,0,0,0]"
                    data-paddingright="[0,0,0,0]"
                    data-paddingbottom="[0,0,0,0]"
                    data-paddingleft="[0,0,0,0]"
                    style="background-color:#fdc236;"></div>

                    <!-- Layer 5 -->
                    <div class="slider-title tp-caption tp-resizeme"
                    data-x="['left']" data-hoffset="['156']"
                    data-y="['middle','middle','middle','middle']" data-voffset="['-30']"
                    data-textAlign="['left']"
                    data-fontsize="['72', '63','57','50']"
                    data-lineheight="['72','68', '62','54']"
                    data-height="none"
                    data-whitespace="nowrap"
                    data-transform_idle="o:1;"
                    data-transform_in="x:[-155%];z:0;rX:0deg;rY:0deg;rZ:0deg;sX:1;sY:1;skX:0;skY:0;s:2000;e:Power2.easeInOut;"
                    data-transform_out="y:[100%];s:1000;e:Power2.easeInOut;s:1000;e:Power2.easeInOut;"
                    data-mask_in="x:50px;y:0px;s:inherit;e:inherit;"
                    data-mask_out="x:inherit;y:inherit;s:inherit;e:inherit;"
                    data-start="500"
                    data-splitin="chars"
                    data-splitout="none"
                    data-responsive_offset="on"
                    data-elementdelay="0.05" style="font-weight:600; letter-spacing:-0.05em;">The luxury<br> residence in<br> forest
                    </div>

                    <!-- Layer 6 -->
                    <div class="slider-title tp-caption"
                    data-x="['left']" data-hoffset="['156']"
                    data-y="['middle','middle','middle','middle']" data-voffset="['-170']"
                    data-textAlign="['left']"
                    data-fontsize="['18']"
                    data-lineheight="['20']"
                    data-height="none"
                    data-whitespace="nowrap"
                    data-transform_idle="o:1;"
                    data-transform_in="x:[155%];z:0;rX:0deg;rY:0deg;rZ:0deg;sX:1;sY:1;skX:0;skY:0;s:2000;e:Power2.easeInOut;"
                    data-transform_out="y:[100%];s:1000;e:Power2.easeInOut;s:1000;e:Power2.easeInOut;"
                    data-mask_in="x:50px;y:0px;s:inherit;e:inherit;"
                    data-mask_out="x:inherit;y:inherit;s:inherit;e:inherit;"
                    data-start="1000"
                    data-splitin="chars"
                    data-splitout="none"
                    data-responsive_offset="on"
                    data-elementdelay="0.05" style="font-weight:600; letter-spacing:0.1em; text-transform:uppercase;">Residential
                    </div>

                    <!-- Layer 7 -->
                    <div class="slider-title tp-caption"
                    data-x="['left']" data-hoffset="['156']"
                    data-y="['middle','middle','middle','middle']" data-voffset="['230']"
                    data-textAlign="['left']"
                    data-fontsize="['18']"
                    data-lineheight="['20']"
                    data-height="none"
                    data-whitespace="nowrap"
                    data-transform_idle="o:1;"
                    data-transform_in="x:[-105%];z:0;rX:0deg;rY:0deg;rZ:0deg;sX:1;sY:1;skX:0;skY:0;s:2000;e:Power2.easeInOut;"
                    data-transform_out="y:[100%];s:1000;e:Power2.easeInOut;s:1000;e:Power2.easeInOut;"
                    data-mask_in="x:50px;y:0px;s:inherit;e:inherit;"
                    data-mask_out="x:inherit;y:inherit;s:inherit;e:inherit;"
                    data-start="1500"
                    data-splitin="none"
                    data-splitout="none"
                    data-responsive_offset="on"
                    data-elementdelay="0.05" style="font-weight:600;">
                        <a href="" class="link-arrow">See project
                            <i class="icon ion-ios-arrow-thin-right"></i>
                        </a>
                    </div>
                </li>

                <!-- Slide 2 -->
                <li  data-transition="slotzoom-horizontal" data-slotamount="6" data-masterspeed="1000" data-fsmasterspeed="1000">

                    <img src="<?php echo base_url().$this->data['asfront'];?>img/road-forest.jpg"  data-bgparallax="10" alt="" data-bgposition="center 0" data-bgfit="cover" data-bgrepeat="no-repeat" class="rev-slidebg">

                    <!-- Layer 1 -->
                    <div class="tp-caption tp-shape tp-shapewrapper  tp-resizeme"
                    data-x="['left']" data-hoffset="['100']"
                    data-y="['middle','middle','middle','middle']" data-voffset="['-250']"
                    data-width="270"
                    data-height="5"
                    data-whitespace="nowrap"
                    data-type="shape"
                    data-responsive_offset="on"
                    data-frames='[{"from":"x:[-100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;","mask":"x:0px;y:0px;","speed":1000,"to":"o:1;","delay":0,"ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"to":"opacity:0;","ease":"nothing"}]'
                    data-textAlign="['left','left','left','left']"
                    data-paddingtop="[0,0,0,0]"
                    data-paddingright="[0,0,0,0]"
                    data-paddingbottom="[0,0,0,0]"
                    data-paddingleft="[0,0,0,0]"
                    style="background-color:#fdc236;"></div>

                    <!-- Layer 2 -->
                    <div class="tp-caption tp-shape tp-shapewrapper  tp-resizeme"
                    data-x="['left']" data-hoffset="['370']"
                    data-y="['middle','middle','middle','middle']" data-voffset="['19']"
                    data-width="5"
                    data-height="544"
                    data-whitespace="nowrap"
                    data-type="shape"
                    data-responsive_offset="on"
                    data-frames='[{"from":"y:[-100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;","mask":"x:0px;y:0px;","speed":1000,"to":"o:1;","delay":600,"ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"to":"opacity:0;","ease":"nothing"}]'
                    data-textAlign="['left','left','left','left']"
                    data-paddingtop="[0,0,0,0]"
                    data-paddingright="[0,0,0,0]"
                    data-paddingbottom="[0,0,0,0]"
                    data-paddingleft="[0,0,0,0]"
                    style="background-color:#fdc236;"></div>

                    <!-- Layer 3 -->
                    <div class="tp-caption tp-shape tp-shapewrapper  tp-resizeme"
                    data-x="['left']" data-hoffset="['100']"
                    data-y="['middle','middle','middle','middle']" data-voffset="['289']"
                    data-width="270"
                    data-height="5"
                    data-whitespace="nowrap"
                    data-type="shape"
                    data-responsive_offset="on"
                    data-frames='[{"from":"x:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;","mask":"x:0px;y:0px;","speed":1000,"to":"o:1;","delay":1200,"ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"to":"opacity:0;","ease":"nothing"}]'
                    data-textAlign="['left','left','left','left']"
                    data-paddingtop="[0,0,0,0]"
                    data-paddingright="[0,0,0,0]"
                    data-paddingbottom="[0,0,0,0]"
                    data-paddingleft="[0,0,0,0]"
                    style="background-color:#fdc236;"></div>

                    <!-- Layer 4 -->
                    <div class="tp-caption tp-shape tp-shapewrapper  tp-resizeme"
                    data-x="['left']" data-hoffset="['100']"
                    data-y="['middle','middle','middle','middle']" data-voffset="['19']"
                    data-width="5"
                    data-height="544"
                    data-whitespace="nowrap"
                    data-type="shape"
                    data-responsive_offset="on"
                    data-frames='[{"from":"y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;","mask":"x:0px;y:0px;","speed":1000,"to":"o:1;","delay":1800,"ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"to":"opacity:0;","ease":"nothing"}]'
                    data-textAlign="['left','left','left','left']"
                    data-paddingtop="[0,0,0,0]"
                    data-paddingright="[0,0,0,0]"
                    data-paddingbottom="[0,0,0,0]"
                    data-paddingleft="[0,0,0,0]"
                    style="background-color:#fdc236;"></div>

                    <!-- Layer 5 -->
                    <div class="slider-title tp-caption tp-resizeme"
                    data-x="['left']" data-hoffset="['156']"
                    data-y="['middle','middle','middle','middle']" data-voffset="['-30']"
                    data-textAlign="['left']"
                    data-fontsize="['72', '63','57','50']"
                    data-lineheight="['72','68', '62','54']"
                    data-height="none"
                    data-whitespace="nowrap"
                    data-transform_idle="o:1;"
                    data-transform_in="x:[-155%];z:0;rX:0deg;rY:0deg;rZ:0deg;sX:1;sY:1;skX:0;skY:0;s:2000;e:Power2.easeInOut;"
                    data-transform_out="y:[100%];s:1000;e:Power2.easeInOut;s:1000;e:Power2.easeInOut;"
                    data-mask_in="x:50px;y:0px;s:inherit;e:inherit;"
                    data-mask_out="x:inherit;y:inherit;s:inherit;e:inherit;"
                    data-start="500"
                    data-splitin="chars"
                    data-splitout="none"
                    data-responsive_offset="on"
                    data-elementdelay="0.05" style="font-weight:600; letter-spacing:-0.05em;">Small<br> House Near<br> Wroclaw
                    </div>

                    <!-- Layer 6 -->
                    <div class="slider-title tp-caption"
                    data-x="['left']" data-hoffset="['156']"
                    data-y="['middle','middle','middle','middle']" data-voffset="['-170']"
                    data-textAlign="['left']"
                    data-fontsize="['18']"
                    data-lineheight="['20']"
                    data-height="none"
                    data-whitespace="nowrap"
                    data-transform_idle="o:1;"
                    data-transform_in="x:[155%];z:0;rX:0deg;rY:0deg;rZ:0deg;sX:1;sY:1;skX:0;skY:0;s:2000;e:Power2.easeInOut;"
                    data-transform_out="y:[100%];s:1000;e:Power2.easeInOut;s:1000;e:Power2.easeInOut;"
                    data-mask_in="x:50px;y:0px;s:inherit;e:inherit;"
                    data-mask_out="x:inherit;y:inherit;s:inherit;e:inherit;"
                    data-start="1000"
                    data-splitin="chars"
                    data-splitout="none"
                    data-responsive_offset="on"
                    data-elementdelay="0.05" style="font-weight:600; letter-spacing:0.1em; text-transform:uppercase;">House
                    </div>

                    <!-- Layer 7 -->
                    <div class="slider-title tp-caption"
                    data-x="['left']" data-hoffset="['156']"
                    data-y="['middle','middle','middle','middle']" data-voffset="['230']"
                    data-textAlign="['left']"
                    data-fontsize="['18']"
                    data-lineheight="['20']"
                    data-height="none"
                    data-whitespace="nowrap"
                    data-transform_idle="o:1;"
                    data-transform_in="x:[-105%];z:0;rX:0deg;rY:0deg;rZ:0deg;sX:1;sY:1;skX:0;skY:0;s:2000;e:Power2.easeInOut;"
                    data-transform_out="y:[100%];s:1000;e:Power2.easeInOut;s:1000;e:Power2.easeInOut;"
                    data-mask_in="x:50px;y:0px;s:inherit;e:inherit;"
                    data-mask_out="x:inherit;y:inherit;s:inherit;e:inherit;"
                    data-start="1500"
                    data-splitin="none"
                    data-splitout="none"
                    data-responsive_offset="on"
                    data-elementdelay="0.05" style="font-weight:600; ">
                        <a href="" class="link-arrow">See project
                            <i class="icon ion-ios-arrow-thin-right"></i>
                        </a>
                    </div>
                </li>

                <!-- Slide 3 -->
                <li  data-transition="slotzoom-horizontal" data-slotamount="6" data-masterspeed="1000" data-fsmasterspeed="1000">
                    <img src="<?php echo base_url().$this->data['asfront'];?>img/gletser.jpg"  data-bgparallax="10" alt="" data-bgposition="center 0" data-bgfit="cover" data-bgrepeat="no-repeat" class="rev-slidebg">

                    <!-- Layer 1 -->
                    <div class="tp-caption tp-shape tp-shapewrapper  tp-resizeme"
                    data-x="['left']" data-hoffset="['100']"
                    data-y="['middle','middle','middle','middle']" data-voffset="['-250']"
                    data-width="270"
                    data-height="5"
                    data-whitespace="nowrap"
                    data-type="shape"
                    data-responsive_offset="on"
                    data-frames='[{"from":"x:[-100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;","mask":"x:0px;y:0px;","speed":1000,"to":"o:1;","delay":0,"ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"to":"opacity:0;","ease":"nothing"}]'
                    data-textAlign="['left','left','left','left']"
                    data-paddingtop="[0,0,0,0]"
                    data-paddingright="[0,0,0,0]"
                    data-paddingbottom="[0,0,0,0]"
                    data-paddingleft="[0,0,0,0]"
                    style="background-color:#fdc236;"></div>

                    <!-- Layer 2 -->
                    <div class="tp-caption tp-shape tp-shapewrapper  tp-resizeme"
                    data-x="['left']" data-hoffset="['370']"
                    data-y="['middle','middle','middle','middle']" data-voffset="['19']"
                    data-width="5"
                    data-height="544"
                    data-whitespace="nowrap"
                    data-type="shape"
                    data-responsive_offset="on"
                    data-frames='[{"from":"y:[-100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;","mask":"x:0px;y:0px;","speed":1000,"to":"o:1;","delay":600,"ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"to":"opacity:0;","ease":"nothing"}]'
                    data-textAlign="['left','left','left','left']"
                    data-paddingtop="[0,0,0,0]"
                    data-paddingright="[0,0,0,0]"
                    data-paddingbottom="[0,0,0,0]"
                    data-paddingleft="[0,0,0,0]"
                    style="background-color:#fdc236;"></div>

                    <!-- Layer 3 -->
                    <div class="tp-caption tp-shape tp-shapewrapper  tp-resizeme"
                    data-x="['left']" data-hoffset="['100']"
                    data-y="['middle','middle','middle','middle']" data-voffset="['289']"
                    data-width="270"
                    data-height="5"
                    data-whitespace="nowrap"
                    data-type="shape"
                    data-responsive_offset="on"
                    data-frames='[{"from":"x:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;","mask":"x:0px;y:0px;","speed":1000,"to":"o:1;","delay":1200,"ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"to":"opacity:0;","ease":"nothing"}]'
                    data-textAlign="['left','left','left','left']"
                    data-paddingtop="[0,0,0,0]"
                    data-paddingright="[0,0,0,0]"
                    data-paddingbottom="[0,0,0,0]"
                    data-paddingleft="[0,0,0,0]"
                    style="background-color:#fdc236;"></div>

                    <!-- Layer 4 -->
                    <div class="tp-caption tp-shape tp-shapewrapper  tp-resizeme"
                    data-x="['left']" data-hoffset="['100']"
                    data-y="['middle','middle','middle','middle']" data-voffset="['19']"
                    data-width="5"
                    data-height="544"
                    data-whitespace="nowrap"
                    data-type="shape"
                    data-responsive_offset="on"
                    data-frames='[{"from":"y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;","mask":"x:0px;y:0px;","speed":1000,"to":"o:1;","delay":1800,"ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"to":"opacity:0;","ease":"nothing"}]'
                    data-textAlign="['left','left','left','left']"
                    data-paddingtop="[0,0,0,0]"
                    data-paddingright="[0,0,0,0]"
                    data-paddingbottom="[0,0,0,0]"
                    data-paddingleft="[0,0,0,0]"
                    style="background-color:#fdc236;"></div>

                    <!-- Layer 5 -->
                    <div class="slider-title tp-caption tp-resizeme"
                    data-x="['left']" data-hoffset="['156']"
                    data-y="['middle','middle','middle','middle']" data-voffset="['-30']"
                    data-textAlign="['left']"
                    data-fontsize="['72', '63','57','50']"
                    data-lineheight="['72','68', '62','54']"
                    data-height="none"
                    data-whitespace="nowrap"
                    data-transform_idle="o:1;"
                    data-transform_in="x:[-155%];z:0;rX:0deg;rY:0deg;rZ:0deg;sX:1;sY:1;skX:0;skY:0;s:2000;e:Power2.easeInOut;"
                    data-transform_out="y:[100%];s:1000;e:Power2.easeInOut;s:1000;e:Power2.easeInOut;"
                    data-mask_in="x:50px;y:0px;s:inherit;e:inherit;"
                    data-mask_out="x:inherit;y:inherit;s:inherit;e:inherit;"
                    data-start="500"
                    data-splitin="chars"
                    data-splitout="none"
                    data-responsive_offset="on"
                    data-elementdelay="0.05" style="font-weight:600; letter-spacing:-0.05em;">The luxury<br> residence in<br> forest
                    </div>

                    <!-- Layer 6 -->
                    <div class="slider-title tp-caption"
                    data-x="['left']" data-hoffset="['156']"
                    data-y="['middle','middle','middle','middle']" data-voffset="['-170']"
                    data-textAlign="['left']"
                    data-fontsize="['18']"
                    data-lineheight="['20']"
                    data-height="none"
                    data-whitespace="nowrap"
                    data-transform_idle="o:1;"
                    data-transform_in="x:[155%];z:0;rX:0deg;rY:0deg;rZ:0deg;sX:1;sY:1;skX:0;skY:0;s:2000;e:Power2.easeInOut;"
                    data-transform_out="y:[100%];s:1000;e:Power2.easeInOut;s:1000;e:Power2.easeInOut;"
                    data-mask_in="x:50px;y:0px;s:inherit;e:inherit;"
                    data-mask_out="x:inherit;y:inherit;s:inherit;e:inherit;"
                    data-start="1000"
                    data-splitin="chars"
                    data-splitout="none"
                    data-responsive_offset="on"
                    data-elementdelay="0.05" style="font-weight:600; letter-spacing:0.1em; text-transform:uppercase;">Residential
                    </div>

                    <!-- Layer 7 -->
                    <div class="slider-title tp-caption"
                    data-x="['left']" data-hoffset="['156']"
                    data-y="['middle','middle','middle','middle']" data-voffset="['230']"
                    data-textAlign="['left']"
                    data-fontsize="['18']"
                    data-lineheight="['20']"
                    data-height="none"
                    data-whitespace="nowrap"
                    data-transform_idle="o:1;"
                    data-transform_in="x:[-105%];z:0;rX:0deg;rY:0deg;rZ:0deg;sX:1;sY:1;skX:0;skY:0;s:2000;e:Power2.easeInOut;"
                    data-transform_out="y:[100%];s:1000;e:Power2.easeInOut;s:1000;e:Power2.easeInOut;"
                    data-mask_in="x:50px;y:0px;s:inherit;e:inherit;"
                    data-mask_out="x:inherit;y:inherit;s:inherit;e:inherit;"
                    data-start="1500"
                    data-splitin="none"
                    data-splitout="none"
                    data-responsive_offset="on"
                    data-elementdelay="0.05" style="font-weight:600; ">
                        <a href="" class="link-arrow">See project
                            <i class="icon ion-ios-arrow-thin-right"></i>
                        </a>
                    </div>
                </li>
            </ul>
        </div> <!-- kelar ID Rev-Slider -->
    </div> <!-- kelar Rev-SLider Wrapper -->
</section>
<?php
    $about = select_row_about();
    $title_about = $about->titlehomeABOUT;
    $desc_about = $about->deschomeABOUT;
    $map = directory_map('assets/upload/about/home-about/pic-home-about-'.folenc($about->idABOUT), FALSE, TRUE);
    if(!empty($map)){
        $imageHOMEABOUT = base_url() . 'assets/upload/about/home-about/pic-home-about-'.folenc($about->idABOUT).'/'.$map[0];
    } else {
        $imageHOMEABOUT = '';
    }
?>
<section class="section ataglance">
    <div class="columns">
        <div class="column">
            <img src="<?php echo $imageHOMEABOUT; ?>" width="300" alt="<?php echo $title_about;?>">
        </div>
        <div class="column">
            <div class="columns">
                <div class="column p20 lead-title" class="wow fadeInUp" data-wow-delay="2s">
                    <h3><?php echo $title_about;?></h3>
                </div>
                <div class="column wow fadeInUp">
                    <p><?php echo $desc_about;?></p>
                    <div class="button-cta">
                        <a href="<?php echo base_url();?>about">
                            <div class="level">
                                <div class="level-left">
                                    <div class="level-item">
                                        <span>Kenali Nyat Kadir</span>
                                        <h3>Lebih dalam</h3>
                                    </div>
                                </div>
                                <div class="level-right">
                                    <div class="level-item">
                                        <a href="#"><span class="icon mdi mdi-chevron-right"></span></a>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div> <!-- kelar Button-CTA -->
                </div>
            </div> <!-- kelar Columns -->
        </div>
    </div> <!-- kelar Columns pas di bawah At A Glance -->
</section>

<section class="section article-section">
    <div class="container">
        <div class="section-title dark">
            <div class="iconic">
                <span class="icon mdi mdi-barley"></span>
            </div>
            <div>
                <h3>Infografis <span class="reddish">Nyat Kadir</span></h3>
                Visualisasi data berbagai macam hal dalam baluran infografis
            </div>
        </div>
        <div class="read-more">
            <a href="<?php echo base_url();?>article/infographic">Lihat semua <span class="icon mdi mdi-chevron-right"></span></a>
        </div>
        <div class="article-carousel four-item-carousel owl-carousel owl-theme">
        <?php
            if(!empty($listarticle)){
                foreach ($listarticle as $key => $article) {
        ?>
            <div class="card">
                <div class="card-image">
                    <div class="image is-square">
                        <img src="http://source.unsplash.com/random/" alt="Titel Infografis">
                        <span class="title"><?php echo $article->titleARTICLE;?></span>
                    </div>
                </div>
                <div class="card-footer">
                    <div class="card-footer-item">
                        <span><?php echo date('d F Y', strtotime($article->createdateARTICLE));?></span>
                    </div>
                    <div class="card-footer-item">
                        <a href="<?php echo base_url();?>article/detail/<?php echo base64_encode($article->idARTICLE).'-'.seo_url($article->titleARTICLE);?>">Baca <span class="icon mdi mdi-chevron-right"></span></a>
                    </div>
                </div>
            </div>
                <?php } ?>
            <?php } ?>
        </div> <!-- kelar Article-Carousel -->
    </div>
</section>

<section class="hero voting parallax-window" data-stellar-ratio="0.5">
    <div class="hero-body">
        <div class="container">
            <div class="columns">
                <div class="column is-one-third">
                    <div class="section-title dark">
                        <h3 class="mb10">Mau ikut <span class="yellowish">berpartisipasi</span> <br> dalam pemberian opini?</h3>
                        Hari di mana demokrasi merupakan hak-hak yang mutlak bagi seluruh rakyat. Semua suku bangsa yang ada di Indonesia, haruslah bersatu tanpa terkecuali.
                    </div>
                </div>
                <?php if(!empty($getpolling)){ ?>
                <div class="column">
                <?php
                    if (empty($message_choice)){
                ?>
                    <div class="content">
                        <h3 class="title"><?php echo $getpolling->questionPOLLING;?></h3>
                        <?php
                            if(!empty($check_choice_polling)){
                        ?>
                        <div class="field">
                            <div class="control">
                                <label class="radio">
                                    <input type="radio" value="<?php echo $check_choice_polling->nameCHOICE;?>" required="required" checked>
                                    <?php echo $check_choice_polling->nameCHOICE;?> <br> <h6 class="title">Anda telah memilih</h6>
                                </label>
                            </div>
                        </div>
                        <?php } else { ?>
                        <form class="" action="<?php echo base_url();?>polling/submit_polling" method="POST">
                            <input type="hidden" name="<?php echo $this->security->get_csrf_token_name();?>" value="<?php echo $this->security->get_csrf_hash();?>" />
                            <input type="hidden" name="idUSER" value="<?php echo $this->session->userdata('idUSER');?>">
                            <input type="hidden" name="idPOLLING" value="<?php echo $getpolling->idPOLLING;?>" required="required">
                            <div class="field">
                                <div class="control">
                                    <?php
                                    $data_polling = json_decode($getpolling->answerPOLLING,TRUE);
                                    foreach ($data_polling as $value) {
                                        ?>
                                        <label class="radio">
                                            <input type="radio" name="answer" value="<?php echo $value[0];?>" required="required">
                                            <?php echo $value[0];?>
                                        </label>
                                        <?php } ?>
                                </div>
                            </div>
                                <div class="field">
                                    <div class="control">
                                        <input type="submit" name="" value="Submit" class="button is-link">
                                    </div>
                                </div>
                        </form>
                        <?php } ?>
                    </div>
                    <?php } else { ?>
                    <div class="column">
                        <div class="successful box">
                            <article class="media">
                                <div class="media-left">
                                    <figure class="image">
                                        <span class="icon is-large mdi mdi-trophy-award"></span>
                                    </figure>
                                </div>
                                <div class="media-content">
                                    <div class="content">
                                        <h3><?php echo $message_choice['title'];?></h3>
                                        <p><?php echo $message_choice['text'];?></p>
                                    </div>
                                </div>
                            </article>
                        </div>
                    </div>
                    <?php } ?>
                </div>
            <?php } else { ?>
                <div class="column">
                    <div class="successful box">
                        <article class="media">
                            <div class="media-left">
                                <figure class="image">
                                    <span class="icon is-large mdi mdi-trophy-award"></span>
                                </figure>
                            </div>
                            <div class="media-content">
                                <div class="content">
                                    <h3>Mohon Maaf!</h3>
                                    <p>Tidak ada polling untuk saat ini.</p>
                                </div>
                            </div>
                        </article>
                    </div>
                </div>
            <?php } ?>
                <div class="column"> <!--Hasil polling ya wak-->
                    <div class="voting-result">
                        <h4 class="wow fadeInUp">A. Bagus - 15%</h4>
                        <progress class="progress is-primary wow fadeInUp" value="15" max="100">15%</progress>
                        <h4 class="wow fadeInUp" data-wow-delay=".3s">B. Biasa saja - 35%</h4>
                        <progress class="progress is-primary wow fadeInUp" data-wow-delay=".3s" value="35" max="100">35%</progress>
                        <h4 class="wow fadeInUp" data-wow-delay=".6s">C. Tidak Bagus - 40%</h4>
                        <progress class="progress is-primary wow fadeInUp" data-wow-delay=".6s" value="40" max="100">40%</progress>
                        <h4 class="wow fadeInUp" data-wow-delay=".9s">D. Tidak Tahu - 10%</h4>
                        <progress class="progress is-primary wow fadeInUp" data-wow-delay=".9s" value="10" max="100">10%</progress>
                    </div>
                    <div class="share">
                        <h3>Share Polling ini:</h3>
                        <ul>
                            <li class="wow fadeInUp">
                                <a href="#" title="Share to Twitter" data-wow-delay=".9s"><span class="icon mdi mdi-twitter"></span></a>
                            </li>
                            <li class="wow fadeInUp" data-wow-delay="1.1s">
                                <a href="#" title="Share to Facebook"><span class="icon mdi mdi-facebook"></span></a>
                            </li>
                            <li class="wow fadeInUp" data-wow-delay="1.3s">
                                <a href="#" title="Share to Whatsapp"><span class="icon mdi mdi-whatsapp"></span></a>
                            </li>
                            <li class="wow fadeInUp" data-wow-delay="1.5s">
                                <a href="#" title="Share to Google+"><span class="icon mdi mdi-google-plus"></span></a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div> <!-- kelar div Columns -->
        </div>
    </div> <!-- kelar Hero-Body -->
</section>

<section class="section news-section">
    <section class="hero">
        <div class="container">
            <div class="video-pop">
                <figure class="image">
                    <img src="<?php echo base_url().$this->data['asfront'];?>img/sushi-man-edited.jpg" alt="Video Pop">
                </figure>
                <div class="caption">
                    <a data-fancybox href="https://www.youtube.com/watch?v=_sI_Ps7JSEk&amp;autoplay=1&amp;rel=0&amp;controls=0&amp;showinfo=0" class="icon play-button"><i class="mdi mdi-play"></i></a>
                    <span class="title">Mengisi Kemerdekaan Dengan Rasa Bangga Mendalam</span>
                </div>
            </div>
        </div>
    </section>
    <div class="container">
        <div class="section-title">
            <h3>Berita dan Event <span class="reddish">Nyat Kadir</span></h3>
            Segala hal yang Nyat Kadir lakukan baru-baru ini
        </div>
        <div class="columns">
            <div class="column is-half news-started">
                <div class="box wow fadeInUp">
                    <?php
                        if(!empty($updated_at_home)){
                            foreach ($updated_at_home as $key => $updated) {
                    ?>
                    <div class="media wow fadeInUp">
                        <div class="media-content">
                            <div class="content">
                                <h3><?php echo $updated->titleNEWS;?></h3>
                                <?php echo word_limiter($updated->descNEWS,35);?>
                                <span class="wow fadeInUp" data-wow-delay=".5s">0<?php echo $key+1;?></span>
                                <a href="<?php echo base_url();?>news/detail/<?php echo base64_encode($updated->idNEWS).'-'.seo_url($updated->titleNEWS);?>">Selengkapnya <i class="icon mdi mdi-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                        <?php } ?>
                    <?php } ?>
                </div>
            </div>
            <div class="column parallax-window" data-stellar-background-ratio="0.5">
                <figure class="image">
                    <img src="<?php echo base_url().$this->data['asfront'];?>img/looking.jpg" alt="">
                </figure>
                <div class="read-more">
                    <h4>Lihat semua <br> <span class="goldish">Berita dan Event</span></h4>
                    <a href="<?php echo base_url();?>news"><span class="icon mdi mdi-chevron-right"></span></a>
                </div>
            </div>
        </div> <!-- kelar div Columns -->
    </div>
</section>

<section class="section partner">
    <div class="container">
        <div class="section-title">
            <h3>Mitra Kerja <span class="reddish">Nyat Kadir</span></h3>
            Instansi-instansi yang menjadi kolega sekaligus mitra dalam bidang profesional Nyat Kadir
        </div>
        <div class="five-item-carousel owl-carousel owl-theme">
        <?php
            if(!empty($listmitra)){
                foreach ($listmitra as $key => $mitra) {
        ?>
            <figure class="image">
                <img src="<?php echo $mitra->imageMITRA;?>" alt="<?php echo $mitra->nameMITRA;?>">
                <figcaption><a href="#" target="_blank"><?php echo $mitra->nameMITRA;?></a></figcaption>
            </figure>
                <?php } ?>
            <?php } ?>
        </div>
    </div>
</section>

<!-- <div class="modal is-active">
    <div class="modal-background"></div>
    <div class="modal-content">
        <p class="image">
            <img src="http://source.unsplash.com/300x400/" alt="Flyer Hari Besar">
        </p>
    </div>
    <button class="modal-close is-large" aria-label="close"></button>
</div> -->
