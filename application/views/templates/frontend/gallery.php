<?php defined('BASEPATH') OR exit('No direct script access allowed');?>

<section class="nyat-hero hero is-medium" style="background-image: url(<?php echo base_url().$this->data['asfront'];?>img/campaign.jpg);">
    <div class="hero-body">
        <div class="container">
            <h2 class="title">Bergegaslah!</h2>
            <h2 class="subtitle">Bangsa ini harus menang!</h2>
        </div>
    </div>
</section>

<section class="few-gallery section">

    <div class="container">
        <section class="image-gallery section">
            <div class="columns">
                <div class="column is-one-third">
                    <div class="section-title dark">
                        <span class="bar"></span>
                        <h3 class="mb10">Galeri <span class="yellowish">Foto</span></h3>
                        Hari di mana demokrasi merupakan hak-hak yang mutlak bagi seluruh rakyat. Semua suku bangsa yang ada di Indonesia, haruslah bersatu tanpa terkecuali.
                    </div>
                    <div class="ui styled accordion">
                        <div class="title active">
                            <i class="dropdown icon"></i>
                            Desember 2017
                        </div>
                        <div class="ui menu content active">
                            <ul>
                                <li><a href="#" class="item active" data-tab="tab1">Makestool</a></li>
                                <li><a href="#" class="item" data-tab="tab2">Perencanaan Fly-over</a></li>
                                <li><a href="#" class="item" data-tab="tab3">Jurang Pemisah di Antara Umat Manusia</a></li>
                            </ul>
                        </div>
                        <div class="title">
                            <i class="dropdown icon"></i>
                            November 2017
                        </div>
                        <div class="content">
                            <ul>
                                <li><a href="#">Makestool</a></li>
                                <li><a href="#">Perencanaan Fly-over</a></li>
                                <li><a href="#">Jurang Pemisah di Antara Umat Manusia</a></li>
                            </ul>
                        </div>
                        <div class="title">
                            <i class="dropdown icon"></i>
                            Oktober 2017
                        </div>
                        <div class="content">
                            <ul>
                                <li><a href="#">Makestool</a></li>
                                <li><a href="#">Perencanaan Fly-over</a></li>
                                <li><a href="#">Jurang Pemisah di Antara Umat Manusia</a></li>
                            </ul>
                        </div>
                    </div> <!-- kelar Accordion -->
                </div>
                <div class="column">
                    <div class="gallery-wrapper">
                    <!-- <?php
                        if(!empty($listgallery)){
                            $i= 0;
                            foreach ($listgallery as $key => $gal) {
                            if($gal->categoryGALLERY == 1){
                            $i++;
                            if($i == 1){
                    ?>
                        <div class="tile is-ancestor">
                            <?php //} ?>
                            <div class="tile is-parent">
                                <div class="tile is-child box">
                                    <a href="<?php //echo $gal->imageGALLERY;?>" data-fancybox="image" data-caption="<?php //echo $gal->titleGALLERY;?>">
                                        <div class="image">
                                            <img src="<?php //echo $gal->imageGALLERY;?>" alt="<?php //echo $gal->titleGALLERY;?>">
                                        </div>
                                        <h4><?php //echo $gal->titleGALLERY;?></h4>
                                    </a>
                                </div>
                            </div>
                        <?php
                        // if($i == 4){
                        // $i = 0;
                        // ?>
                        </div>
                                    <?php }?>
                                <?php }?>
                            <?php }?>
                        <?php }?> -->
                        <div class="ui tab hero is-primary active" data-tab="tab1">
                            <div class="hero-body">
                                <div class="container">
                                    <h1 class="title">Makestool</h1>
                                    <h2 class="subtitle">Sempardak tulisan membahana di muka bumi dan di mata Cerberus.</h2>
                                </div>
                            </div>
                        </div> <!-- kelar Tab-Content 1 -->
                        <div class="ui tab hero is-info" data-tab="tab2">
                            <div class="hero-body">
                                <div class="container">
                                    <h1 class="title">Perencanaan Fly-over</h1>
                                    <h2 class="subtitle">Sempardak tulisan membahana di muka bumi dan di mata Cerberus.</h2>
                                </div>
                            </div>
                        </div> <!-- kelar Tab-Content 2 -->
                        <div class="ui tab hero is-success" data-tab="tab3">
                            <div class="hero-body">
                                <div class="container">
                                    <h1 class="title">Jurang Pemisah di Antara Umat Manusia</h1>
                                    <h2 class="subtitle">Sempardak tulisan membahana di muka bumi dan di mata Cerberus.</h2>
                                </div>
                            </div>
                        </div> <!-- kelar Tab-Content 3 -->

                    </div> <!-- kelar Gallery-Wrapper / Ancestor tile -->
                </div>
            </div> <!-- kelar div Columns -->
        </section> <!-- kelar Section Gallery-Image -->

        <section class="video-gallery section">
        <div class="columns">
            <div class="column is-one-third">
                <div class="section-title dark">
                    <h3 class="mb10">Galeri <span class="yellowish">Video</span></h3>
                    Hari di mana demokrasi merupakan hak-hak yang mutlak bagi seluruh rakyat. Semua suku bangsa yang ada di Indonesia, haruslah bersatu tanpa terkecuali.
                </div>
                <div class="ui styled accordion">
                    <div class="title active">
                        <i class="dropdown icon"></i>
                        Desember 2017
                    </div>
                    <div class="content active">
                        <ul>
                            <li><a href="#">Makestool</a></li>
                            <li><a href="#">Perencanaan Fly-over</a></li>
                            <li><a href="#">Jurang Pemisah di Antara Umat Manusia</a></li>
                        </ul>
                    </div>
                    <div class="title">
                        <i class="dropdown icon"></i>
                        November 2017
                    </div>
                    <div class="content">
                        <ul>
                            <li><a href="#">Makestool</a></li>
                            <li><a href="#">Perencanaan Fly-over</a></li>
                            <li><a href="#">Jurang Pemisah di Antara Umat Manusia</a></li>
                        </ul>
                    </div>
                    <div class="title">
                        <i class="dropdown icon"></i>
                        Oktober 2017
                    </div>
                    <div class="content">
                        <ul>
                            <li><a href="#">Makestool</a></li>
                            <li><a href="#">Perencanaan Fly-over</a></li>
                            <li><a href="#">Jurang Pemisah di Antara Umat Manusia</a></li>
                        </ul>
                    </div>
                </div> <!-- kelar Accordion -->
            </div>
            <div class="column">
                <div class="gallery-wrapper">
                <?php
                    if(!empty($listgallery)){
                        $i= 0;
                        foreach ($listgallery as $key => $gal) {
                        if($gal->categoryGALLERY == 2){
                        $thumbnail = get_thumbnail_from_youtube($gal->linkvideoGALLERY);
                        $i++;
                        if($i == 1){
                ?>
                    <div class="tile is-ancestor">
                        <?php } ?>
                        <div class="tile is-parent">
                            <div class="tile is-child box">
                                <a href="<?php echo $gal->linkvideoGALLERY;?>" data-fancybox="video" data-caption="<?php echo $gal->titleGALLERY;?>">
                                    <div class="image">
                                        <img src="<?php echo $thumbnail;?>" alt="<?php echo $gal->titleGALLERY;?>">
                                        <span class="play-button"><i class="mdi mdi-play"></i></span>
                                    </div>
                                    <h4><?php echo $gal->titleGALLERY;?></h4>
                                </a>
                            </div>
                        </div>
                    <?php
                    if($i == 4){
                    $i = 0;
                    ?>
                    </div>
                                <?php } ?>
                            <?php } ?>
                        <?php } ?>
                    <?php } ?>
                </div> <!-- kelar Gallery-Wrapper / Ancestor tile -->
            </div>
        </div> <!-- kelar div Columns -->
    </section> <!-- kelar Section Gallery-Video -->
    </div>
</section>
