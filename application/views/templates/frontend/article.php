<?php defined('BASEPATH') OR exit('No direct script access allowed');?>

<section class="nyat-hero hero is-medium" style="background-image: url(<?php echo base_url().$this->data['asfront'];?>img/campaign.jpg);">
    <div class="hero-body">
        <div class="container">
            <h2 class="title">Bergegaslah!</h2>
            <h2 class="subtitle">Bangsa ini harus menang!</h2>
        </div>
    </div>
</section>

<section class="articles section">
    <div class="container">
        <div class="section-title">
            <h3 class="mb10">Buah Pikiran <span class="reddish">Nyat Kadir</span> Untuk Direnungkan</h3>
            <p>Dan bagaimana pemikiran-pemikiran Nyat Kadir amat menarik untuk disimak.</p>
        </div>
        <div class="article-wrapper">
        <?php
        if(!empty($listarticle_category)){
                foreach ($listarticle_category as $article_cat) {
        ?>
            <div class="tile box" style="background-image: url(<?php echo $article_cat->imageARTICLE;?>);">
                <a href="<?php echo base_url();?>article/<?php echo base64_encode($article_cat->idARTICLE).'-'.seo_url($article_cat->titleARTICLE);?>" class="title"><?php echo $article_cat->titleARTICLE;?></a>
                <p class="subtitle"><?php echo indonesian_date($article_cat->createdateARTICLE,'j F Y',''); ?></p>
                <a href="<?php echo base_url();?>article/<?php echo base64_encode($article_cat->idARTICLE).'-'.seo_url($article_cat->titleARTICLE);?>" class="link">
                    <span class="icon mdi mdi-chevron-right"></span>
                </a>
            </div>
        <?php } ?>
        <?php } else {
            if(!empty($listarticle)){
            foreach ($listarticle as $article) {
        ?>
            <div class="tile box" style="background-image: url(<?php echo $article->imageARTICLE;?>);">
                <a href="<?php echo base_url();?>article/<?php echo base64_encode($article->idARTICLE).'-'.seo_url($article->titleARTICLE);?>" class="title"><?php echo $article->titleARTICLE;?></a>
                <p class="subtitle"><?php echo indonesian_date($article->createdateARTICLE,'j F Y',''); ?></p>
                <a href="<?php echo base_url();?>article/<?php echo base64_encode($article->idARTICLE).'-'.seo_url($article->titleARTICLE);?>" class="link">
                    <span class="icon mdi mdi-chevron-right"></span>
                </a>
            </div>
                <?php } ?>
            <?php } ?>
        <?php } ?>
        </div>
    </div>
</section>
