<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

<section class="section press">
    <div class="container">
        <div class="columns">
            <div class="column is-three-quarters">
                <div class="breadcrumb has-bullet-separator">
                    <ul>
                        <li><a href="<?php echo base_url();?>">Home</a></li>
                        <li><a href="<?php echo base_url();?>news">Liputan Media</a></li>
                        <li class="is-active"><a href="#"><?php echo $getpress->titlePRESS;?></a></li>
                    </ul>
                </div>
                <div class="press-detail">
                    <div class="content">
                        <h1 class="title"><?php echo $getpress->titlePRESS;?></h1>
                        <p class="subtitle">Diposting <span class="yellowish"><?php echo indonesian_date($getpress->createdatePRESS,'j F Y',''); ?></span></p>
                        <div class="press-slider four-item-carousel owl-theme owl-carousel">
                        <?php 
                          if(!empty($getpress->map)){
                            foreach ($getpress->map as $key=> $value_img) { 
                        ?>
                            <a href="<?php echo $value_img;?>" data-fancybox="image" data-caption="<?php echo $getpress->titlePRESS;?>">
                                <figure class="image is-2by1">
                                    <img src="<?php echo $value_img;?>" alt="">
                                </figure>
                            </a>
                            <?php } ?>
                        <?php } ?>
                        </div>
                        <?php echo $getpress->descPRESS;?>
                    </div>
                    <div class="share">
                        <h3>Share berita ini:</h3>
                        <ul>
                            <li><a href="#" title="Share to Twitter"><span class="icon mdi mdi-twitter"></span></a></li>
                            <li><a href="#" title="Share to Facebook"><span class="icon mdi mdi-facebook"></span></a></li>
                            <li><a href="#" title="Share to Whatsapp"><span class="icon mdi mdi-whatsapp"></span></a></li>
                            <li><a href="#" title="Share to Google+"><span class="icon mdi mdi-google-plus"></span></a></li>
                        </ul>
                    </div>
                    <hr>
                </div> <!-- kelar Press -->

                <div class="similar">
                    <h3 class="title is-5">Baca juga <span class="yellowish">berita-berita dan event</span> berikut ini</h3>
                    <?php
                        if(!empty($random_press)){
                            foreach ($random_press as $random) {
                    ?>
                    <div class="card">
                        <div class="card-content">
                            <h2 class="title">
                                <a href="<?php echo base_url();?>press/<?php echo base64_encode($random->idPRESS).'-'.seo_url($random->titlePRESS);?>"><?php echo $random->titlePRESS;?></a>
                            </h2>
                        </div>
                        <div class="card-footer">
                            <p class="card-footer-item date"><?php echo indonesian_date($random->createdatePRESS,'j F Y',''); ?></p>
                            <a href="<?php echo base_url();?>press/<?php echo base64_encode($random->idPRESS).'-'.seo_url($random->titlePRESS);?>" class="card-footer-item">Baca <span class="icon mdi mdi-chevron-right"></span></a>
                        </div>
                    </div>
                        <?php } ?>
                    <?php } ?>
                </div>
            </div>

            <div class="column sidebar">
                <div class="top-post">
                    <h3 class="title">Liputan Terbaik</h3>
                    <ul>
                    <?php
                        if(!empty($best_press)){
                            foreach ($best_press as $best) {
                    ?>
                        <li>
                            <a href="<?php echo base_url();?>press/<?php echo base64_encode($best->idPRESS).'-'.seo_url($best->titlePRESS);?>"><?php echo $best->titlePRESS;?></a>
                            <p><?php echo indonesian_date($best->createdatePRESS,'j F Y',''); ?></p>
                        </li>
                        <?php } ?>
                    <?php } ?>
                    </ul>
                </div>
            </div> <!-- kelar Column-Sidebar -->
        </div> <!-- kelar div Columns -->
    </div>
</section>
