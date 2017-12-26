<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

<section class="section press-detail">
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
                        <div class="press-slider one-item-carousel owl-theme owl-carousel">
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
                            <li><a href="javascript:void(0)" onclick="javascript:genericSocialShare('http://twitter.com/share?text=<?php echo $getpress->titlePRESS;?>&url=<?php echo base_url(uri_string());?>')" title="Share to Twitter"><span class="icon mdi mdi-twitter"></span></a></li>
                            <li><a href="#" title="Share to Facebook" class="ShareFB"><span class="icon mdi mdi-facebook"></span></a></li>
                            <?php
                                $content_wa = str_replace(' ','%20',$getpress->titlePRESS);
                                $url_wa = "https://api.whatsapp.com/send?text=".$content_wa;
                            ?>
                            <li><a href="javascript:void(0)" onclick="javascript:genericSocialShare('<?php echo $url_wa;?>')" title="Share to Whatsapp"><span class="icon mdi mdi-whatsapp"></span></a></li>
                            <li><a href="javascript:void(0)" onclick="javascript:genericSocialShare('https://plus.google.com/share?url=<?php echo base_url(uri_string());?>')" title="Share to Google+"><span class="icon mdi mdi-google-plus"></span></a></li>
                        </ul>
                    </div>
                    <hr>
                </div> <!-- kelar Press -->

                <div class="similar">
                    <h3 class="title is-5">Baca juga <span class="yellowish">liputan-liputan media</span> berikut ini</h3>
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
<script
  src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
  integrity="sha256-k2WSCIexGzOj3Euiig+TlR8gA0EmPjuc79OEeY5L45g="
  crossorigin="anonymous"></script>
<script type="text/javascript">
    function genericSocialShare(url){
        window.open(url,'sharer','toolbar=0,status=0,width=648,height=395');
        return true;
    }

function createFBShareLink(FBVars) {
    // FBVars is app_id
    var url = 'http://www.facebook.com/dialog/feed?app_id='+FBVars+
    '&link=' + '<?php echo base_url(uri_string());?>' +
    '&picture=' + '<?php echo base_url().$this->data['asfront'];?>img/logo.png' +
    '&name=' + encodeURIComponent('<?php echo $getpress->titlePRESS;?>') +
    '&description=' + encodeURIComponent('<?php echo word_limiter($getpress->descPRESS,8);?>') +
    '&redirect_uri=' + '<?php echo base_url(uri_string());?>' +
    '&display=popup';
    window.open(url,'feedDialog','toolbar=0,status=0,width=626,height=436');
}

$(".ShareFB").click(function(e) {
    e.preventDefault();
    createFBShareLink('328440447656043');
});
</script>
