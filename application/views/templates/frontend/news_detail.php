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
                        <div class="news-slider one-item-carousel owl-theme owl-carousel">
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
                            <li><a href="javascript:void(0)" onclick="javascript:genericSocialShare('http://twitter.com/share?text=<?php echo $getnews->titleNEWS;?>&url=<?php echo base_url(uri_string());?>')" title="Share to Twitter"><span class="icon mdi mdi-twitter"></span></a></li>
                            <li><a href="#" title="Share to Facebook" class="ShareFB"><span class="icon mdi mdi-facebook"></span></a></li>
                            <?php
                                $content_wa = str_replace(' ','%20',$getnews->titleNEWS);
                                $url_wa = "https://api.whatsapp.com/send?text=".$content_wa;
                            ?>
                            <li><a href="javascript:void(0)" onclick="javascript:genericSocialShare('<?php echo $url_wa;?>')" title="Share to Whatsapp"><span class="icon mdi mdi-whatsapp"></span></a></li>
                            <li><a href="javascript:void(0)" onclick="javascript:genericSocialShare('https://plus.google.com/share?url=<?php echo base_url(uri_string());?>')" title="Share to Google+"><span class="icon mdi mdi-google-plus"></span></a></li>
                        </ul>
                    </div>
                    <hr>
                </div> <!-- kelar Article-Detail -->

                <div id="disqus_thread"></div>
                <script>
                    var disqus_config = function () { this.page.url = '<?php echo base_url(uri_string());?>';
                    this.page.identifier = '<?php echo base_url(uri_string());?>';
                    };

                    (function() {  // DON'T EDIT BELOW THIS LINE
                        var d = document,
                        s = d.createElement('script');

                        s.src = 'https://nyatkadir-disqus-com.disqus.com/embed.js';

                        s.setAttribute('data-timestamp', +new Date()); (d.head ||
                        d.body).appendChild(s);
                    })();
                </script>
                <noscript>
                    Please enable JavaScript to view the
                    <a href="https://disqus.com/?ref_noscript" rel="nofollow">comments powered by Disqus.</a>
                </noscript>

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
                            <a href="<?php echo base_url();?>news/<?php echo base64_encode($best->idNEWS).'-'.seo_url($best->titleNEWS);?>"><?php echo $best->titleNEWS;?></a>
                            <p><?php echo indonesian_date($best->createdateNEWS,'j F Y',''); ?></p>
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
    '&name=' + encodeURIComponent('<?php echo $getnews->titleNEWS;?>') +
    '&description=' + encodeURIComponent('<?php echo word_limiter($getnews->descNEWS,8);?>') +
    '&redirect_uri=' + '<?php echo base_url(uri_string());?>' +
    '&display=popup';
    window.open(url,'feedDialog','toolbar=0,status=0,width=626,height=436');
}

$(".ShareFB").click(function(e) {
    e.preventDefault();
    createFBShareLink('328440447656043');
});
</script>

<script id="dsq-count-scr" src="//nyatkadir-disqus-com.disqus.com/count.js" async></script>
