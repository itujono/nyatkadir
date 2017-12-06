<?php defined('BASEPATH') OR exit('No direct script access allowed');?>

<section class="section is-medium login">
    <div class="hero-body">
        <div class="container">
            <div class="login-wrapper is-active">
                <div class="login-title">
                    <h3 class="title wow fadeInUp">Reset Kata Sandi anda!</h3>
                </div>
                <form action="<?php echo base_url();?>user/process_reset_password" method="POST">
                    <input type="hidden" name="<?php echo $this->security->get_csrf_token_name();?>" value="<?php echo $this->security->get_csrf_hash();?>" />
                    <input type="hidden" name="idUSER" value="<?php echo encode($idUSER);?>" />
                    <div class="field">
                        <div class="control">
                            <input type="password" name="passwordUSER" class="input" pattern="^\S{8,}$" onchange="this.setCustomValidity(this.validity.patternMismatch ? 'Minimal 8 karakter' : ''); if(this.checkValidity()) form.repasswordUSER.pattern = this.value;" id="passwordUSER" required="" placeholder="Ketik kata sandi baru kamu">
                        </div>
                    </div>
                    <div class="field">
                        <div class="control">
                            <input type="password" name="repasswordUSER" class="input" pattern="^\S{8,}$" onchange="this.setCustomValidity(this.validity.patternMismatch ? 'Mohon samakan kata sandi anda seperti kata sandi diatas' : '');" id="repasswordUSER" required="required" placeholder="Ketik lagi sandi baru kamu">
                        </div>
                    </div>
                    <div class="field wow fadeInUp" data-wow-delay="1.2s">
                        <div class="control">
                            <input type="submit" class="button is-link is-submit" value="Submit">
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </section>
