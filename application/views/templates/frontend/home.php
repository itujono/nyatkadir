<?php defined('BASEPATH') OR exit('No direct script access allowed');?>
<section class="section main-slider pb0" data-start-height="550" data-slide-overlay="yes" id="home">

    <div class="tp-banner-container">
        <div class="tp-banner">
            <ul>
            <?php
            if(!empty($listslider)){
                foreach ($listslider as $key => $slider) {
            ?>
                <li data-transition="fade" data-slotamount="1" data-masterspeed="1000" data-thumb="<?php echo $slider->imageSLIDER; ?>" data-saveperformance="on" data-title="<?php echo $slider->titleSLIDER; ?>">
                    <img src="<?php echo $slider->imageSLIDER; ?>" alt="<?php echo $slider->titleSLIDER; ?>" data-bgposition="center top" data-bgfit="cover" data-bgrepeat="no-repeat">
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
                    <div class="title yellowish"><?php echo $slider->titleSLIDER; ?></div>
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
                    <h2 class="lhnormal"><?php echo $slider->descSLIDER; ?></h2>
                </div>
            </li>
            <?php } ?>
            <?php } ?>
            </ul>
        </div> <!-- kelar TP-Banner -->
    </div>
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
                <div class="column p20" class="wow fadeInUp" data-wow-delay="2s">
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
            <h3>Buah Pikiran <span class="reddish">Nyat Kadir</span></h3>
            Pemikiran-pemikiran Nyat Kadir tentang Indonesia
        </div>
        <div class="read-more">
            <a href="<?php echo base_url();?>article">Lihat semua <span class="icon mdi mdi-chevron-right"></span></a>
        </div>
        <div class="article-carousel four-item-carousel owl-carousel owl-theme">
        <?php
            if(!empty($listidea)){
                foreach ($listidea as $key => $idea) {
        ?>
            <div class="card">
                <div class="card-content">
                    <h3 class="title">
                        <?php echo $idea->titleIDEA;?>
                    </h3>
                </div>
                <div class="card-footer">
                    <div class="card-footer-item">
                        <span><?php echo date('d F Y', strtotime($idea->createdateIDEA));?></span>
                    </div>
                    <div class="card-footer-item">
                        <a href="#">Baca <span class="icon mdi mdi-chevron-right"></span></a>
                    </div>
                </div>
            </div>
                <?php } ?>
            <?php } ?>
        </div> <!-- kelar Article-Carousel -->
    </div>
</section>

<section class="hero voting">
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
                    <div class="content">
                        <h3 class="title"><?php echo $getpolling->questionPOLLING;?></h3>
                        <form class="" action="index.html" method="post">
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
                                        <!-- <button class="button is-link">Submit</button> -->
                                        <input type="submit" name="" value="Submit" class="button is-link">
                                    </div>
                                </div>
                        </form>
                    </div>
                    <div class="successful box">
                        <article class="media">
                            <div class="media-left">
                                <figure class="image">
                                    <span class="icon is-large mdi mdi-trophy-award"></span>
                                </figure>
                            </div>
                            <div class="media-content">
                                <div class="content">
                                    <h3>Terima kasih!</h3>
                                    <p>Opini Anda telah kami rekam. Dan terima kasih sudah berpartisipasi. Kami berharap dapat bertemu Anda di lain kesempatan.</p>
                                </div>
                            </div>
                        </article>
                    </div>
                </div>
            <?php } ?>
            </div> <!-- kelar div Columns -->
        </div>
    </div> <!-- kelar Hero-Body -->
</section>

<section class="section news-section">
    <div class="container">
        <div class="section-title dark">
            <h3>Berita dan Event <span class="reddish">Nyat Kadir</span></h3>
            Segala hal yang Nyat Kadir lakukan baru-baru ini
        </div>
        <div class="columns">
            <div class="column is-half news-started">
                <div class="box wow fadeInUp">
                    <div class="media">
                        <div class="media-content">
                            <div class="content">
                                <h3>Membangun Pribadi Gubernur yang Unggul di Indonesia</h3>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud.</p>
                                <span>01</span>
                                <a href="#">Selengkapnya <i class="icon mdi mdi-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="media">
                        <div class="media-content">
                            <div class="content">
                                <h3>Membangun Pribadi Gubernur yang Unggul di Indonesia</h3>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud.</p>
                                <span>02</span>
                                <a href="#">Selengkapnya <i class="icon mdi mdi-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="media">
                        <div class="media-content">
                            <div class="content">
                                <h3>Membangun Pribadi Gubernur yang Unggul di Indonesia</h3>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud.</p>
                                <span>03</span>
                                <a href="#">Selengkapnya <i class="icon mdi mdi-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="read-more">
                    <a href="<?php echo base_url();?>news">Lihat semua <span class="icon mdi mdi-chevron-right"></span></a>
                </div>
            </div>
            <div class="column">
                <figure class="image">
                    <img src="<?php echo base_url().$this->data['asfront'];?>img/looking.jpg" alt="">
                </figure>
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
