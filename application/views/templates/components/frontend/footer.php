<?php
defined('BASEPATH') OR exit('No direct script access allowed');?>
<?php
    if($addONS != 'non_footer_page' AND $addONS != 'reset_password_user'){
?>
<footer class="footer">
    <section class="hero aspirasi">
        <div class="hero-body">
            <div class="container">
                <div class="columns">
                    <div class="column introduction">
                        <h5 class="wow fadeInDown">Punya aspirasi dalam benak?</h5>
                        <h2 class="wow fadeInUp" data-wow-delay="1.5s">Suarakan aspirasimu demi kemajuan masyarakat! Apapun itu, pasti akan kami dengar dengan seksama.</h2>
                        Gunakan form di samping. Tulis sejelas-jelasnya isi aspirasimu. Jangan hanya simpan mereka di dalam benak.
                    </div>
                    <div class="column">
                        <form class="form-aspirasi" action="<?php echo base_url();?>aspirasi/send_aspirasi" method="POST">
                            <input type="hidden" name="<?php echo $this->security->get_csrf_token_name();?>" value="<?php echo $this->security->get_csrf_hash();?>" />
                            <div class="field">
                                <div class="control">
                                    <?php
                                        if(!empty($this->session->userdata('idUSER'))){
                                            $data_val = $this->session->userdata('Name');
                                            $read_only = 'readonly';
                                        } else {
                                            $data_val = '';
                                            $read_only = '';
                                        }
                                    ?>
                                    <input type="text" class="input" name="nameASPIRASI" placeholder="Nama Anda" value="<?php echo $data_val;?>" required="required" <?php echo $read_only;?>>
                                </div>
                            </div>
                            <div class="field">
                                <div class="control">
                                    <?php
                                        if(!empty($this->session->userdata('idUSER'))){
                                            $data_val = $this->session->userdata('Email');
                                            $read_only = 'readonly';
                                        } else {
                                            $data_val = '';
                                            $read_only = '';
                                        }
                                    ?>
                                    <input type="email" name="emailASPIRASI" class="input" placeholder="Email Anda" value="<?php echo $data_val;?>" required="required" <?php echo $read_only;?>>
                                </div>
                            </div>
                            <div class="field">
                                <div class="control">
                                    <?php
                                        if(!empty($this->session->userdata('idUSER'))){
                                            $val = get_data_user_row($this->session->userdata('idUSER'));
                                            $data_val = $val->ageUSER;
                                            $read_only = 'readonly';
                                        } else {
                                            $data_val = '';
                                            $read_only = '';
                                        }
                                    ?>
                                    <input type="number" class="input" name="ageASPIRASI" placeholder="Usia Anda" required="required" value="<?php echo $data_val;?>" <?php echo $read_only;?>>
                                </div>
                            </div>
                            <div class="field">
                                <div class="control">
                                    <input type="text" class="input" name="subjectASPIRASI" placeholder="Judul Aspirasi Anda" required="required" id="aspirasi-title">
                                </div>
                            </div>
                            <div class="field">
                                <div class="control">
                                    <textarea  class="textarea" rows="6" name="descASPIRASI" placeholder="Isi Aspirasi" required="required" id="aspirasi-message"></textarea>
                                </div>
                            </div>
                            <div class="field">
                                <div class="control">
                                    <input type="submit" class="button is-link is-submit" value="Submit">
                                </div>
                            </div>
                        </form>
                        <?php if(!empty($message_aspirasi)){ ?>
                        <div class="successful box" id="submit-success">
                            <article class="media">
                                <div class="media-left">
                                    <figure class="image">
                                        <span class="icon is-large mdi mdi-trophy-award"></span>
                                    </figure>
                                </div>
                                <div class="media-content">
                                    <div class="content">
                                        <h3><?php echo $message_aspirasi['title']; ?></h3>
                                        <p><?php echo $message_aspirasi['text']; ?></p>
                                    </div>
                                </div>
                            </article>
                        </div>
                    </div> <!-- kelar div Column form -->
                    <?php } ?>
                </div>
            </div> <!-- kelar Container -->
        </div>
    </section>
    <div class="container">
        <div class="columns is-centered">
            <div class="column">
                <figure class="image logo-footer m0 wow bounceInUp">
                    <img src="<?php echo base_url().$this->data['asfront'];?>img/logo.png" alt="Logo Footer" width="100">
                </figure>
            </div>
            <div class="column is-two-thirds">
                <div class="social">
                    <h3>Berkawan</h3>
                    <ul>
                        <li><a href="#" class="" title="Twitter Nyat Kadir"><!--<span class="mdi mdi-twitter"></span>-->Twitter</a></li>
                        <li><a href="#" class="" title="Facebook Nyat Kadir"><!--<span class="mdi mdi-facebook"></span>-->Facebook</a></li>
                        <li><a href="#" class="" title="Instagram Nyat Kadir"><!--<span class="mdi mdi-instagram"></span>-->Instagram</a></li>
                        <li><a href="#" class="" title="Google+ Nyat Kadir"><!--<span class="mdi mdi-google-plus"></span>-->Google Plus</a></li>
                    </ul>
                </div>
                <div class="quick-links">
                    <h3>Quick Links</h3>
                    <ul>
                        <li><a href="#">Fraksi Nasdem</a></li>
                        <li><a href="#">Website Resmi Partai Nasdem</a></li>
                        <li><a href="#">Mitra Kerja Nyat Kadir</a></li>
                        <li><a href="#">Sekapur Sirih</a></li>
                    </ul>
                </div>
            </div>
            <div class="column old-man">
                <img src="<?php echo base_url().$this->data['asfront'];?>img/old-man-in-suit.png" width="200" alt="Nyat Kadir in Suit" class="wow fadeInRight" data-wow-delay="1.5s">
            </div>
        </div>
    </div>
    <div class="level copyright">
        <div class="level-left">
            <div class="level-item">
                Copyright &copy; Codewell Indonesia 2017
            </div>
        </div>
        <div class="level-right">
            <div class="level-item">
                Last update: October 17th, 2017
            </div>
        </div>
    </div>
</footer>
<?php } ?>
<?php echo $plugins; ?>
</body>
</html>
