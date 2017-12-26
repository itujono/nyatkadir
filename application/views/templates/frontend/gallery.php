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
                        <div class="title">
                            <i class="dropdown icon"></i>
                            Apakah sundalaga itu?
                        </div>
                        <div class="content">
                            <p>A dog is a type of domesticated animal. Known for its loyalty and faithfulness, it can be found as a welcome guest in many households across the world.</p>
                        </div>
                        <div class="title active">
                            <i class="dropdown icon"></i>
                            What kinds of dogs are there?
                        </div>
                        <div class="content active">
                            <p class="transition visible" style="display: block !important;">There are many breeds of dogs. Each breed varies in size and temperament. Owners often select a breed of dog that they find to be compatible with their own lifestyle and desires from a companion.</p>
                        </div>
                        <div class="title">
                            <i class="dropdown icon"></i>
                            How do you acquire a dog?
                        </div>
                        <div class="content">
                            <p>Three common ways for a prospective owner to acquire a dog is from pet shops, private owners, or shelters.</p>
                            <p>A pet shop may be the most convenient way to buy a dog. Buying a dog from a private owner allows you to assess the pedigree and upbringing of your dog before choosing to take it home. Lastly, finding your dog from a shelter, helps give a good home to a dog who may not find one so readily.</p>
                        </div>
                    </div>
                </div>
                <div class="column">
                    <div class="gallery-wrapper">
                    <?php
                        if(!empty($listgallery)){
                            $i= 0;
                            foreach ($listgallery as $key => $gal) {
                            if($gal->categoryGALLERY == 1){
                            $i++;
                            if($i == 1){
                    ?>
                        <div class="tile is-ancestor">
                            <?php } ?>
                            <div class="tile is-parent">
                                <div class="tile is-child box">
                                    <a href="<?php echo $gal->imageGALLERY;?>" data-fancybox="image" data-caption="<?php echo $gal->titleGALLERY;?>">
                                        <div class="image">
                                            <img src="<?php echo $gal->imageGALLERY;?>" alt="<?php echo $gal->titleGALLERY;?>">
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
                                    <?php }?>
                                <?php }?>
                            <?php }?>
                        <?php }?>
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
