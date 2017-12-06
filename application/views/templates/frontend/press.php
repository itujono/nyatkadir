<?php defined('BASEPATH') OR exit('No direct script access allowed');?>

<section class="nyat-hero hero is-medium" style="background-image: url(<?php echo base_url().$this->data['asfront'];?>img/campaign.jpg);">
    <div class="hero-body">
        <div class="container">
            <h2 class="title">Bergegaslah!</h2>
            <h2 class="subtitle">Bangsa ini harus menang!</h2>
        </div>
    </div>
</section>

<section class="section press">
    <div class="container">
        <div class="columns">
            <div class="column is-three-quarters">

                <div class="section-title">
                    <h3 class="mb10">Berita Liputan Media tentang <span class="reddish">Nyat Kadir</span></h3>
                    <p>Berita-berita Seputar Nyat Kadir yang diliput oleh teman-teman media, lokal maupun nasional</p>
                </div>

                <div class="wrapper">
                <?php 
                    if(!empty($listpress)){
                        foreach ($listpress as $press) {
                ?>
                    <div class="card">
                        <div class="card-image">
                            <figure class="image">
                                <img src="<?php echo $press->imagePRESS ?>" alt="<?php echo $press->titlePRESS ?>">
                            </figure>
                        </div>
                        <div class="card-content">
                            <article class="content">
                                <a href="<?php echo base_url();?>press/<?php echo base64_encode($press->idPRESS).'-'.seo_url($press->titlePRESS);?>" class="title"><?php echo $press->titlePRESS; ?></a>
                                <time datetime="<?php echo indonesian_date($press->createdatePRESS,'Y-m-d',''); ?>"><span class="icon mdi mdi-calendar-check"></span><?php echo indonesian_date($press->createdatePRESS,'j F Y',''); ?></time>
                                <?php echo word_limiter($press->descPRESS,24); ?>
                            </article>
                        </div>
                        <div class="card-footer">
                            <p class="card-footer-item"><?php echo $press->sourcePRESS; ?></p>
                            <a href="<?php echo base_url();?>press/<?php echo base64_encode($press->idPRESS).'-'.seo_url($press->titlePRESS);?>" class="card-footer-item">Selengkapnya</a>
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
                        if(!empty($new_press)){
                            foreach ($new_press as $new) {
                        ?>
                        <li>
                            <a href="<?php echo base_url();?>press/<?php echo base64_encode($new->idPRESS).'-'.seo_url($new->titlePRESS);?>"><?php echo $new->titlePRESS; ?></a>
                            <p><?php echo indonesian_date($new->createdatePRESS,'j F Y',''); ?></p>
                        </li>
                            <?php } ?>
                        <?php } ?>
                    </ul>
                </div>
            </div> <!-- kelar Column Sidebar -->
        </div> <!-- kelar div Columns -->
    </div>
</section>
