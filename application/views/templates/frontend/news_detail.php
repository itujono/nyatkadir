<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

<section class="section article">
    <div class="container">
        <div class="columns">
            <div class="column is-three-quarters">
                <div class="breadcrumb has-bullet-separator">
                    <ul>
                        <li><a href="<?php echo base_url();?>">Home</a></li>
                        <li><a href="<?php echo base_url();?>news">News/Events</a></li>
                        <li class="is-active"><a href="#"><?php echo $getnews->titleNEWS;?></a></li>
                    </ul>
                </div>
                <div class="article-detail">
                    <div class="content">
                        <h1 class="title"><?php echo $getnews->titleNEWS;?></h1>
                        <p class="subtitle">Diposting <span class="yellowish"><?php echo indonesian_date($getnews->createdateNEWS,'j F Y',''); ?></span></p>
                        <div class="news-slider four-item-carousel owl-theme owl-carousel">
                        <?php
                          if(!empty($getnews->map)){
                            foreach ($getnews->map as $key=> $value_img) {
                        ?>
                            <figure class="image">
                                <img src="<?php echo $value_img;?>" alt="<?php echo $getnews->titleNEWS;?>">
                            </figure>
                            <?php } ?>
                        <?php } ?>
                        </div>
                        <?php echo $getnews->descNEWS;?>
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
                </div> <!-- kelar Article-Detail -->
                <div class="similar">
                    <h3 class="title is-5">Baca juga <span class="yellowish">berita-berita dan event</span> berikut ini</h3>
                    <?php
                        if(!empty($random_news)){
                            foreach ($random_news as $random) {
                    ?>
                    <div class="card">
                        <div class="card-content">
                            <h2 class="title">
                                <a href="<?php echo base_url();?>news/<?php echo base64_encode($random->idNEWS).'-'.seo_url($random->titleNEWS);?>"><?php echo $random->titleNEWS;?></a>
                            </h2>
                        </div>
                        <div class="card-footer">
                            <p class="card-footer-item date"><?php echo indonesian_date($random->createdateNEWS,'j F Y',''); ?></p>
                            <a href="<?php echo base_url();?>news/<?php echo base64_encode($random->idNEWS).'-'.seo_url($random->titleNEWS);?>" class="card-footer-item">Baca <span class="icon mdi mdi-chevron-right"></span></a>
                        </div>
                    </div>
                        <?php } ?>
                    <?php } ?>
                </div>
            </div>
            <div class="column sidebar">
                <div class="top-post">
                    <h3 class="title">Berita Terbaik</h3>
                    <ul>
                    <?php
                        if(!empty($best_news)){
                            foreach ($best_news as $best) {
                    ?>
                        <li>
                            <a href="<?php echo base_url();?>news/<?php echo base64_encode($best->idNEWS).'-'.seo_url($best->titleNEWS);?>"><?php echo $best->titleARTICLE;?></a>
                            <p><?php echo indonesian_date($best->createdateARTICLE,'j F Y',''); ?></p>
                        </li>
                        <?php } ?>
                    <?php } ?>
                    </ul>
                </div>
            </div> <!-- kelar Column-Sidebar -->
        </div> <!-- kelar div Columns -->
    </div>
</section>
