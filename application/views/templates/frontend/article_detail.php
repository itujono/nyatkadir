<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

<section class="section article">
    <div class="container">
        <div class="columns">
            <div class="column is-three-quarters">
                <div class="breadcrumb has-bullet-separator">
                    <ul>
                        <li><a href="<?php echo base_url();?>">Home</a></li>
                        <li><a href="<?php echo base_url();?>article">Artikel</a></li>
                        <li class="is-active"><a href="#"><?php echo $getarticle->titleARTICLE;?></a></li>
                    </ul>
                </div>
                <div class="article-detail">
                    <div class="content">
                        <h1 class="title"><?php echo $getarticle->titleARTICLE;?></h1>
                        <p class="subtitle">Diposting <span class="yellowish"><?php echo indonesian_date($getarticle->createdateARTICLE,'j F Y',''); ?></span></p>
                        <?php echo $getarticle->descARTICLE;?>
                    </div>
                    <hr>
                </div>

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
                    <h3 class="title is-5">Baca juga <span class="yellowish">artikel-artikel</span> berikut ini</h3>
                    <?php
                        if(!empty($random_article)){
                            foreach ($random_article as $random) {
                    ?>
                    <div class="card">
                        <div class="card-content">
                            <h2 class="title">
                                <a href="<?php echo base_url();?>article/detail/<?php echo base64_encode($random->idARTICLE).'-'.seo_url($random->titleARTICLE);?>"><?php echo $random->titleARTICLE;?></a>
                            </h2>
                        </div>
                        <div class="card-footer">
                            <p class="card-footer-item date"><?php echo indonesian_date($random->createdateARTICLE,'j F Y',''); ?></p>
                            <a href="<?php echo base_url();?>article/detail/<?php echo base64_encode($random->idARTICLE).'-'.seo_url($random->titleARTICLE);?>" class="card-footer-item">Baca <span class="icon mdi mdi-chevron-right"></span></a>
                        </div>
                    </div>
                        <?php } ?>
                    <?php } ?>
                </div>
            </div>
            <div class="column sidebar">
                <div class="top-post">
                    <h3 class="title">Artikel Terbaik</h3>
                    <ul>
                    <?php
                        if(!empty($best_article)){
                            foreach ($best_article as $best) {
                    ?>
                        <li>
                            <a href="<?php echo base_url();?>article/detail/<?php echo base64_encode($best->idARTICLE).'-'.seo_url($best->titleARTICLE);?>"><?php echo $best->titleARTICLE;?></a>
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
<script id="dsq-count-scr" src="//nyatkadir-disqus-com.disqus.com/count.js" async></script>