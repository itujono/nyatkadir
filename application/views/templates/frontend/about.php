<?php defined('BASEPATH') OR exit('No direct script access allowed');?>
<?php 
    $about = select_row_about();
    $header_title_about = $about->headertitleABOUT;
    $title_about = $about->titleABOUT;
    $desc_about = $about->descABOUT;
    $title_award = $about->titleawardABOUT;
    $map = directory_map('assets/upload/about/header-about/pic-header-about-'.folenc($about->idABOUT), FALSE, TRUE);
    if(!empty($map)){
        $about->imageABOUT = base_url() . 'assets/upload/about/header-about/pic-header-about-'.folenc($about->idABOUT).'/'.$map[0];
    } else {
        $about->imageABOUT = base_url() . 'assets/upload/no-image-available.png';
    }
?>
<section class="nyat-hero hero is-medium">
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
                    <div class="card">
                        <div class="card-image">
                            <img src="http://placehold.it/250x200" alt="">
                        </div>
                        <div class="card-footer">
                            <p class="card-footer-item">Demi bangsa</p>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-image">
                            <img src="http://placehold.it/250x200" alt="">
                        </div>
                        <div class="card-footer">
                            <p class="card-footer-item">Menjaga marwah Melayu</p>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-image">
                            <img src="http://placehold.it/250x200" alt="">
                        </div>
                        <div class="card-footer">
                            <p class="card-footer-item">Negeri segantang lada</p>
                        </div>
                    </div>
                </div>
            </div>
        </div> <!-- kelar div Columns -->
    </div>
</section>

<section class="achievements section">
    <div class="container">
        <div class="columns">
            <div class="column is-half"></div>
            <div class="column">
                <div class="section-title">
                    <h3 class="mb10"><?php echo $title_award;?></h3>
                </div>
                <dl>
                    <dt>Anugerah Politikus Terbaik 2016</dt>
                    <dd>Diberikan oleh KPK <br> 2016</dd>
                    <dt>Anugerah Politikus Terpelajar 2014</dt>
                    <dd>Diberikan oleh BPK <br> 2014</dd>
                    <dt>Anugerah Tokoh Melayu 2015</dt>
                    <dd>Diberikan oleh Dinpar <br> 2015</dd>
                    <dt>Tuanku Diraja Melayu 2016</dt>
                    <dd>Diberikan oleh Sultan Bolqiah <br> 2016</dd>
                </dl>
            </div>
            <div class="column">
                <dl>
                    <dt>Anugerah Politikus Terbaik 2016</dt>
                    <dd>Diberikan oleh KPK <br> 2016</dd>
                    <dt>Anugerah Politikus Terpelajar 2014</dt>
                    <dd>Diberikan oleh BPK <br> 2014</dd>
                    <dt>Anugerah Tokoh Melayu 2015</dt>
                    <dd>Diberikan oleh Dinpar <br> 2015</dd>
                    <dt>Anugerah Politikus Terpelajar 2014</dt>
                    <dd>Diberikan oleh BPK <br> 2014</dd>
                    <dt>Anugerah Tokoh Melayu 2015</dt>
                    <dd>Diberikan oleh Dinpar <br> 2015</dd>
                </dl>
            </div>
        </div>
    </div>
</section>