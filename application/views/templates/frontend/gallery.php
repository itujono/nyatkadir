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
                    <?php
                    if(!empty($list_month_gallery)){
                        foreach ($list_month_gallery as $key => $month) {
                            if($month->categoryGALLERY == 1){
                            if($key == 0){
                                $active = 'active';
                                $div = 'ui menu content active';
                            } else {
                                $active = '';
                                $div = 'content';
                            }
                        $date_form = dF($month->createdateGALLERY, "m");
                    ?>
                        <div class="title <?php echo $active;?>">
                            <i class="dropdown icon"></i>
                            <?php echo indonesian_date($month->createdateGALLERY,'F Y',''); ?>
                        </div>
                        <div class="<?php echo $div;?>">
                            <ul>
                            <?php
                                foreach ($listgallery as $keys => $gal) {
                                if($gal->categoryGALLERY == 1){
                                if($keys == 0){
                                    $active = 'active';
                                } else {
                                    $active = '';
                                }
                                $date_format_gallery = dF($gal->createdateGALLERY, "m");
                                    if($date_form == $date_format_gallery){
                            ?>
                                <li><a href="#" class="item <?php echo $active;?>" data-tab="<?php echo replacesymbol_tounderscore($gal->titleGALLERY); ?>"><?php echo $gal->titleGALLERY; ?></a></li>
                                        <?php } ?>
                                    <?php } ?>
                                <?php } ?>
                            </ul>
                        </div>
                            <?php } ?>
                        <?php } ?>
                    <?php } ?>
                    </div> <!-- kelar Accordion -->
                </div>
                <div class="column">
                    <div class="gallery-wrapper">
                    <?php
                    foreach ($listgallery as $keying => $gallery) {
                        if($gallery->categoryGALLERY == 1){
                        if($keying == 0){
                            $active = 'active';
                        } else {
                            $active = '';
                        }
                    ?>
                        <div class="ui tab hero is-primary <?php echo $active;?>" data-tab="<?php echo replacesymbol_tounderscore($gallery->titleGALLERY); ?>">
                            <div class="hero-body">
                                <h1 class="title"><?php echo $gallery->titleGALLERY; ?></h1>
                            </div>
                        </div>
                    </div>
                </div> <!-- kelar Tab-Content 1 -->
                <?php } ?>
            <?php } ?>
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
                    <?php
                    if(!empty($list_month_gallery)){
                        foreach ($list_month_gallery as $key => $month) {
                            if($month->categoryGALLERY == 2){
                            if($key == 0){
                                $active = 'active';
                                $div = 'ui menu content active';
                            } else {
                                $active = '';
                                $div = 'content';
                            }
                        $date_form = dF($month->createdateGALLERY, "m");
                    ?>
                    <div class="title <?php echo $active;?>">
                        <i class="dropdown icon"></i>
                        <?php echo indonesian_date($month->createdateGALLERY,'F Y',''); ?>
                    </div>
                    <div class="<?php echo $div;?>">
                        <ul>
                        <?php
                        foreach ($listgallery as $keys => $gal) {
                            if($gal->categoryGALLERY == 2){
                            if($keys == 0){
                                $active = 'active';
                            } else {
                                $active = '';
                            }
                            $date_format_gallery = dF($gal->createdateGALLERY, "m");
                                if($date_form == $date_format_gallery){
                        ?>
                            <li><a href="#" class="item <?php echo $active;?>" data-tab="<?php echo replacesymbol_tounderscore($gal->titleGALLERY); ?>"><?php echo $gal->titleGALLERY; ?></a></li>
                                <?php } ?>
                            <?php } ?>
                        <?php } ?>
                        </ul>
                    </div>
                            <?php } ?>
                        <?php } ?>
                    <?php } ?>
                </div> <!-- kelar Accordion -->
            </div>
            <div class="column">
                <div class="gallery-wrapper">
                <?php
                foreach ($listgallery as $keying => $gallery) {
                    if($gallery->categoryGALLERY == 2){
                    if($keying == 0){
                        $active = 'active';
                    } else {
                        $active = '';
                    }
                ?>
                    <div class="ui tab hero is-primary <?php echo $active;?>" data-tab="<?php echo replacesymbol_tounderscore($gallery->titleGALLERY); ?>">
                        <div class="hero-body">
                            <div class="container">
                                <h1 class="title"><?php echo $gallery->titleGALLERY; ?></h1>
                            </div>
                        </div>
                    </div>
                    <?php } ?>
                <?php } ?>
                </div> <!-- kelar Gallery-Wrapper / Ancestor tile -->
            </div>
        </div> <!-- kelar div Columns -->
    </section> <!-- kelar Section Gallery-Video -->
    </div>
</section>
