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
            <div class="card">
                <div class="card-content">
                    <h3 class="title">
                        Ada 2 jenis manusia yang ada di dunia ini. Kamu yang mana?
                    </h3>
                </div>
                <div class="card-footer">
                    <div class="card-footer-item">
                        <span>23 Januari 2017</span>
                    </div>
                    <div class="card-footer-item">
                        <a href="#">Baca <span class="icon mdi mdi-chevron-right"></span></a>
                    </div>
                </div>
            </div>
            <div class="card">
                <div class="card-content">
                    <h3 class="title">
                        Ke mana kamu mau jika kelak akan terjadi perselisihan?
                    </h3>
                </div>
                <div class="card-footer">
                    <div class="card-footer-item">
                        <span>23 Januari 2017</span>
                    </div>
                    <div class="card-footer-item">
                        <a href="#">Baca <span class="icon mdi mdi-chevron-right"></span></a>
                    </div>
                </div>
            </div>
            <div class="card">
                <div class="card-content">
                    <h3 class="title">
                        Bagaimana jika burung pelikan tak mampu berdiri satu kaki?
                    </h3>
                </div>
                <div class="card-footer">
                    <div class="card-footer-item">
                        <span>23 Januari 2017</span>
                    </div>
                    <div class="card-footer-item">
                        <a href="#">Baca <span class="icon mdi mdi-chevron-right"></span></a>
                    </div>
                </div>
            </div>
            <div class="card">
                <div class="card-content">
                    <h3 class="title">
                        Sudahkah kamu mengamalkan Pancasila di kehidupan TK mu dulu?
                    </h3>
                </div>
                <div class="card-footer">
                    <div class="card-footer-item">
                        <span>23 Januari 2017</span>
                    </div>
                    <div class="card-footer-item">
                        <a href="#">Baca <span class="icon mdi mdi-chevron-right"></span></a>
                    </div>
                </div>
            </div>
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
                <div class="column">
                    <div class="content">
                        <h3 class="title">Bagaimana pendapatmu tentang kejadian Setya Novanto di Rumah Sakit Jakarta?</h3>
                        <div class="field">
                            <div class="control">
                                <label class="radio">
                                  <input type="radio" name="question">
                                  Biasa aja
                                </label>
                                <label class="radio">
                                  <input type="radio" name="question">
                                  Nggak bisa lah
                                </label>
                                <label class="radio">
                                  <input type="radio" name="question">
                                  Ya bisa tapi nggak boleh
                                </label>
                            </div>
                        </div>
                        <div class="field">
                            <div class="control">
                                <button class="button is-link">Submit</button>
                            </div>
                        </div>
                        </div>
                    </div>
                </div> <!-- kelar Column Radio -->
            </div> <!-- kelar div Columns -->
        </div>
    </div>
</section>

<section class="section partner">
    <div class="container">
        <div class="section-title">
            <h3>Mitra Kerja <span class="reddish">Nyat Kadir</span></h3>
            Instansi-instansi yang menjadi kolega sekaligus mitra dalam bidang profesional Nyat Kadir
        </div>
        <div class="five-item-carousel owl-carousel owl-theme">
            <figure class="image">
                <img src="http://placehold.it/200x60/" alt="">
                <figcaption><a href="#" target="_blank">PT Sentosa Abadi</a></figcaption>
            </figure>
            <figure class="image">
                <img src="http://placehold.it/200x60/" alt="">
                <figcaption><a href="#" target="_blank">PT Karimun Jaya</a></figcaption>
            </figure>
            <figure class="image">
                <img src="http://placehold.it/200x60/" alt="">
                <figcaption><a href="#" target="_blank">Alfatron Batam</a></figcaption>
            </figure>
            <figure class="image">
                <img src="http://placehold.it/200x60/" alt="">
                <figcaption><a href="#" target="_blank">Kek Pisang Villa</a></figcaption>
            </figure>
            <figure class="image">
                <img src="http://placehold.it/200x60/" alt="">
                <figcaption><a href="#" target="_blank">Komunitas Dewan Penasihat Presiden</a></figcaption>
            </figure>
        </div>
    </div>
</section>
