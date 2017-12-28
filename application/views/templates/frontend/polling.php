<?php defined('BASEPATH') OR exit('No direct script access allowed');?>

<section class="hero voting">
    <div class="hero-body">
     <div class="container">
        <div class="columns">
            <div class="column is-one-third">
                <div class="section-title dark">
                    <h3 class="mb10">Mau ikut <span class="yellowish">berpartisipasi</span> <br> dalam pemberian opini?</h3>
                    Hari di mana demokrasi merupakan hak-hak yang mutlak bagi seluruh rakyat. Semua suku bangsa yang ada di Indonesia, haruslah bersatu tanpa terkecuali.
                </div>
            </div>
            <?php if(!empty($getpolling)){ ?>
            <div class="column">
                <div class="content">
                    <h3 class="title"><?php echo $getpolling->questionPOLLING;?></h3>
                    <?php
                    if(!empty($check_choice_polling)){
                        ?>
                        <div class="field">
                            <div class="control">
                                <label class="radio">
                                    <h6 class="title">Anda telah memilih:</h6>
                                    <input type="radio" value="<?php echo $check_choice_polling->nameCHOICE;?>" required="required" checked>
                                    <?php echo $check_choice_polling->nameCHOICE;?>
                                </label>
                            </div>
                        </div>
                        <?php if(!empty($message_choice)){ ?>
                        <div class="column">
                            <div class="successful box">
                                <article class="media">
                                    <div class="media-left">
                                        <figure class="image">
                                            <span class="icon is-large mdi mdi-trophy-award"></span>
                                        </figure>
                                    </div>
                                    <div class="media-content">
                                        <div class="content">
                                            <h3><?php echo $message_choice['title'];?></h3>
                                            <p><?php echo $message_choice['text'];?></p>
                                        </div>
                                    </div>
                                </article>
                            </div>
                        </div>
                        <?php } ?>
                        <div class="column"> <!--Hasil polling ya wak-->
                            <h6 class="title">Hasil Polling:</h6>
                            <div class="voting-result">
                                <?php
                                if(!empty($number_voting)){
                                    foreach ($number_voting as $choice) {
                                      if($choice->idPOLLING == $check_choice_polling->idPOLLING){
                                        $total_vote = round(100*($choice->vote_value / $choice->total),2);
                                        ?>
                                        <h4 class="wow fadeInUp"><?php echo $choice->nameCHOICE;?> - <?php echo $total_vote;?>%</h4>
                                        <progress class="progress is-primary wow fadeInUp" value="<?php echo $total_vote;?>" max="100"><?php echo $total_vote;?>%</progress>
                                        <?php } ?>
                                        <?php } ?>
                                        <?php } ?>
                                    </div>
                                    <div class="share">
                                        <h3>Share Polling ini:</h3>
                                        <ul>
                                            <li class="wow fadeInUp">
                                                <a href="javascript:void(0)" onclick="javascript:genericSocialShare('http://twitter.com/share?text=Ikuti polling di nyatkadir.org dengan tema <?php echo $getpolling->questionPOLLING;?>&url=<?php echo base_url();?>polling/<?php echo base64_encode($getpolling->idPOLLING).'-'.seo_url($getpolling->questionPOLLING);?>')" title="Share to Twitter" data-wow-delay=".9s"><span class="icon mdi mdi-twitter"></span></a>
                                            </li>
                                            <li class="wow fadeInUp" data-wow-delay="1.1s">
                                                <a href="#" title="Share to Facebook" class="ShareFB"><span class="icon mdi mdi-facebook"></span></a>
                                            </li>
                                            <?php
                                                $content_wa = str_replace(' ','%20',$getpolling->questionPOLLING);
                                                $url_wa = "https://api.whatsapp.com/send?text=Ikuti%20polling%20di%20nyatkadir.org%20dengan%20tema%20".$content_wa." di ".base_url(uri_string());
                                            ?>
                                            <li class="wow fadeInUp" data-wow-delay="1.3s">
                                                <a href="javascript:void(0)" onclick="javascript:genericSocialShare('<?php echo $url_wa;?>')" title="Share to Whatsapp"><span class="icon mdi mdi-whatsapp"></span></a>
                                            </li>
                                            <li class="wow fadeInUp" data-wow-delay="1.5s">
                                                <a href="javascript:void(0)" onclick="javascript:genericSocialShare('https://plus.google.com/share?url=<?php echo base_url();?>polling/<?php echo base64_encode($getpolling->idPOLLING).'-'.seo_url($getpolling->questionPOLLING);?>')" title="Share to Google+"><span class="icon mdi mdi-google-plus"></span></a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <?php } else { ?>
                                <form class="" action="<?php echo base_url();?>polling/submit_polling" method="POST">
                                    <input type="hidden" name="<?php echo $this->security->get_csrf_token_name();?>" value="<?php echo $this->security->get_csrf_hash();?>" />
                                    <input type="hidden" name="idUSER" value="<?php echo $this->session->userdata('idUSER');?>">
                                    <input type="hidden" name="idPOLLING" value="<?php echo $getpolling->idPOLLING;?>" required="required">
                                    <div class="field">
                                        <div class="control">
                                            <?php
                                            $data_polling = json_decode($getpolling->answerPOLLING,TRUE);
                                            foreach ($data_polling as $value) {
                                                ?>
                                                <label class="radio">
                                                    <input type="radio" name="answer" value="<?php echo $value[0];?>" required="required">
                                                    <?php echo $value[0];?>
                                                </label>
                                                <?php } ?>
                                            </div>
                                        </div>
                                        <div class="field">
                                            <div class="control">
                                                <input type="submit" name="" value="Submit" class="button is-link">
                                            </div>
                                        </div>
                                    </form>
                                    <?php } ?>
                                </div>
                            </div>
                            <?php } else { ?>
                            <div class="column pl4em">
                                <div class="successful box">
                                    <article class="media">
                                        <div class="media-left">
                                            <figure class="image">
                                                <span class="icon is-large mdi mdi-trophy-award"></span>
                                            </figure>
                                        </div>
                                        <div class="media-content">
                                            <div class="content">
                                                <h3>Mohon Maaf!</h3>
                                                <p>Tidak ada polling untuk saat ini.</p>
                                            </div>
                                        </div>
                                    </article>
                                </div>
                            </div>
                            <?php } ?>
                        </div> <!-- kelar div Columns -->
                    </div>
                </div> <!-- kelar Hero-Body -->
            </section>
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
    '&name=' + encodeURIComponent('<?php echo $getpolling->questionPOLLING;?>') +
    '&description=' + encodeURIComponent('<?php echo $getpolling->questionPOLLING;?>') +
    '&redirect_uri=' + '<?php echo base_url(uri_string());?>' +
    '&display=popup';
    window.open(url,'feedDialog','toolbar=0,status=0,width=626,height=436');
}

$(".ShareFB").click(function(e) {
    e.preventDefault();
    createFBShareLink('328440447656043');
});
</script>
