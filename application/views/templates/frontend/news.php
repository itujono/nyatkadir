<?php defined('BASEPATH') OR exit('No direct script access allowed');?>

<section class="nyat-hero hero is-medium" style="background-image: url(<?php echo base_url().$this->data['asfront'];?>img/campaign.jpg);">
    <div class="hero-body">
        <div class="container">
            <h2 class="title">Bergegaslah!</h2>
            <h2 class="subtitle">Bangsa ini harus menang!</h2>
        </div>
    </div>
</section>

<section class="section news">
    <div class="container">
        <div class="columns">
            <div class="column is-three-quarters">
                <div class="section-title">
                    <h3 class="mb10">Aktifitas dan Berita <span class="reddish">Nyat Kadir</span></h3>
                    <p>Daftar kegiatan yang baru saja dilakukan oleh Nyat Kadir</p>
                </div>
                <div class="wrapper">
                <?php
                    if(!empty($listnews)){
                        foreach ($listnews as $news) {
                ?>
                    <div class="card">
                        <div class="card-image">
                            <figure class="image">
                                <img src="<?php echo $news->imageNEWS; ?>" alt="<?php echo $news->titleNEWS; ?>">
                            </figure>
                        </div>
                        <div class="card-content">
                            <article class="content">
                                <a href="<?php echo base_url();?>news/<?php echo base64_encode($news->idNEWS).'-'.seo_url($news->titleNEWS);?>" class="title"><?php echo $news->titleNEWS; ?></a>
                                <time datetime="<?php echo date('Y-m-d', strtotime($news->createdateNEWS));?>"><span class="icon mdi mdi-calendar-check"></span> <?php echo indonesian_date($news->createdateNEWS,'j F Y',''); ?></time>
                                <?php echo word_limiter($news->descNEWS,24); ?>
                            </article>
                        </div>
                        <div class="card-footer">
                            <a href="<?php echo base_url();?>news/<?php echo base64_encode($news->idNEWS).'-'.seo_url($news->titleNEWS);?>" class="card-footer-item">Selengkapnya</a>
                        </div>
                    </div> <!-- kelar Single Card -->
                        <?php } ?>
                    <?php } ?>
                </div>
            </div> <!-- kelar div Column Single -->

            <div class="column sidebar">
                <div class="top-post" id="latest-news">
                    <h3 class="title">Kegiatan Terbaru</h3>
                    <ul>
                    <?php
                        if(!empty($new_news)){
                            foreach ($new_news as $new) {
                    ?>
                        <li>
                            <a href="<?php echo base_url();?>news/<?php echo base64_encode($new->idNEWS).'-'.seo_url($new->titleNEWS);?>"><?php echo $new->titleNEWS; ?></a>
                            <p><?php echo indonesian_date($new->createdateNEWS,'j F Y',''); ?></p>
                        </li>
                        <?php } ?>
                    <?php } ?>
                    </ul>
                </div>
            </div> <!-- kelar Column Sidebar -->
        </div> <!-- kelar div Columns -->
    </div>
</section>
