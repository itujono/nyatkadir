<?php defined('BASEPATH') OR exit('No direct script access allowed');?>
<?php
    $about = select_row_about();
    $header_title_about = $about->headertitleABOUT;
    $title_about = $about->titleABOUT;
    $desc_about = $about->descABOUT;
    $title2_about = $about->title2ABOUT;
    $desc2_about = $about->desc2ABOUT;
    $title_award = $about->titleawardABOUT;
    $map = directory_map('assets/upload/about/header-about/pic-header-about-'.folenc($about->idABOUT), FALSE, TRUE);
    if(!empty($map)){
        $imageABOUT = base_url() . 'assets/upload/about/header-about/pic-header-about-'.folenc($about->idABOUT).'/'.$map[0];
    } else {
        $imageABOUT = base_url() . 'assets/upload/no-image-available.png';
    }
    $map2 = directory_map('assets/upload/about/about-desc/pic-about-'.folenc($about->idABOUT), FALSE, TRUE);
    if(!empty($map2)){
        $imageABOUT2 = base_url() . 'assets/upload/about/about-desc/pic-about-'.folenc($about->idABOUT).'/'.$map2[0];
    } else {
        $imageABOUT2 = base_url() . 'assets/upload/no-image-available.png';
    }
?>

<section class="nyat-hero hero is-medium" style="background: url(<?php echo $header_title_intro;?>);">
    <div class="hero-body">
        <div class="container">
            <h2 class="title"><?php echo $header_title_about;?></h2>
        </div>
    </div>
</section>

<section class="few-gallery section">
    <div class="container">
        <div class="columns">
            <div class="column is-one-third">
                <div class="section-title dark">
                    <h3 class="mb10"><?php echo $title_about;?></h3>
                    <?php echo $desc_about;?>
                </div>
            </div>
            <div class="column">
                <div class="three-item-carousel owl-theme owl-carousel">
                <?php
                    if(!empty($listgallery)){
                        foreach ($listgallery as $key => $gal) {
                ?>
                    <div class="card">
                        <div class="card-image">
                            <img src="<?php echo $gal->imageGALLERY;?>" alt="<?php echo $gal->titleGALLERY;?>">
                        </div>
                        <div class="card-footer">
                            <p class="card-footer-item"><?php echo $gal->titleGALLERY;?></p>
                        </div>
                    </div>
                        <?php } ?>
                    <?php } ?>
                </div>
            </div>
        </div> <!-- kelar div Columns -->
    </div>
</section>

<section class="achievements section">
    <div class="container">
        <div class="columns">
            <div class="column is-half fraksi">
                <div class="box">
                    <h2 class="title">
                        <?php echo $title2_about;?>
                    </h2>
                    <div class="content">
                        <div class="image">
                            <img src="<?php echo $imageABOUT2; ?>" alt="<?php echo $title2_about;?>">
                        </div>
                        <?php echo $desc2_about;?>
                    </div>
                    <div class="button-cta">
                        <a href="<?php echo base_url();?>#">
                            <div class="level">
                                <div class="level-left">
                                    <div class="level-item">
                                        <span>Berkenalan dengan</span>
                                        <h3>Fraksi Nasdem</h3>
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
            </div> <!-- kelar div Fraksi -->


            
            <div class="column award">
                <div class="section-title">
                    <h3 class="mb10"><?php echo $title_award;?></h3>
                </div>
                <div class="level">
                <?php
                    $award = json_decode($about->listawardABOUT,TRUE);
                    if(!empty($award)){
                    $i=0;
                    foreach ($award as $key => $val) {
                    $i++;
                    if($i == 1){
                ?>
                    <div class="level-item">
                        <dl>
                <?php } ?>
                            <dt><?php echo $val[0];?></dt>
                            <dd><?php echo $val[1];?>
                            <br> <?php echo $val[2];?>
                            </dd>
                <?php 
                    if($i == 4){ 
                    $i = 0;
                ?>
                        </dl>
                    </div>
                <?php } ?>
                <?php } ?>
                <?php } ?>

                </div> <!-- kelar div Level -->

            </div> <!-- kelar div Column -->
        </div>
    </div> <!-- kelar Container Utama -->
</section>
