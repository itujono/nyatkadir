<?php defined('BASEPATH') OR exit('No direct script access allowed');?>

<section class="section is-medium login">
    <div class="hero-body">
        <div class="container">
            <div class="login-wrapper is-active">
                <div class="login-title">
                    <h3 class="title wow fadeInUp">Selamat datang!</h3>
                    <p class="subtitle wow fadeInUp" data-wow-delay="1s">Silakan login terlebih dahulu untuk melanjutkan aktivitas Anda.</p>
                    <?php
                        if (!empty($message)){
                    ?>
                    <!-- <p class="subtitle"></p> -->
                    <article class="message is-success">
                        <div class="message-header">
                            <p>Sukses!</p>
                            <button class="delete" aria-label="delete"></button>
                        </div>
                        <div class="message-body">
                            <?php echo $message['text'];?>
                        </div>
                    </article>
                    <article class="message is-warning">
                        <div class="message-header">
                            <p>Error!</p>
                            <button class="delete" aria-label="delete"></button>
                        </div>
                        <div class="message-body">
                            <?php echo $message['text'];?>
                        </div>
                    </article>
                    <?php } ?>
                </div>
                <form action="<?php echo base_url();?>user/process" method="POST">
                    <input type="hidden" name="<?php echo $this->security->get_csrf_token_name();?>" value="<?php echo $this->security->get_csrf_hash();?>" />
                    <div class="field">
                        <div class="control">
                            <input type="email" name="email" class="input" placeholder="Email Anda" required="required">
                        </div>
                    </div>
                    <div class="field">
                        <div class="control">
                            <input type="password" class="input" required="required" name="password" placeholder="Kata sandi anda" pattern="^\S{8,}$" onchange="this.setCustomValidity(this.validity.patternMismatch ? 'Minimal 8 karakter' : '');"/>
                        </div>
                    </div>
                    <div class="field wow fadeInUp" data-wow-delay="2s">
                        <div class="control">
                            <input type="submit" class="button is-link is-submit" value="Submit">
                        </div>
                    </div>
                </form>
                <div class="switch-login" id="switch-to-register">
                    <a href="#">Belum punya akun?</a>
                </div>
            </div> <!-- kelar Login Wrapper -->
            <div class="register-wrapper">
                <div class="login-title">
                    <h3 class="title wow fadeInUp">Bergabunglah bersama kami.</h3>
                    <p class="subtitle wow fadeInUp" data-wow-delay="1s">Silakan isi data diri terlebih dahulu untuk melanjutkan.</p>
                    <?php
                        if (!empty($message)){
                    ?>
                    <p class="subtitle"><?php echo $message['text'];?></p>
                    <?php } ?>
                </div>
                <form action="<?php echo base_url();?>user/registration" method="POST">
                    <input type="hidden" name="<?php echo $this->security->get_csrf_token_name();?>" value="<?php echo $this->security->get_csrf_hash();?>" />
                    <div class="field">
                        <div class="control">
                            <input type="text" name="nameUSER" class="input" placeholder="Nama Lengkap Anda" required="required">
                        </div>
                    </div>
                    <div class="field">
                        <div class="control">
                            <input type="email" name="emailUSER" class="input" placeholder="Email Anda" required="required">
                        </div>
                    </div>
                    <div class="field">
                        <div class="control">
                            <input type="password"  name="passwordUSER" class="input" pattern="^\S{8,}$" onchange="this.setCustomValidity(this.validity.patternMismatch ? 'Minimal 8 karakter' : ''); if(this.checkValidity()) form.repasswordUSER.pattern = this.value;" id="passwordUSER" required="" placeholder="Ketik password anda">
                        </div>
                    </div>
                    <div class="field">
                        <div class="control">
                            <input type="password" name="repasswordUSER" class="input" pattern="^\S{8,}$" onchange="this.setCustomValidity(this.validity.patternMismatch ? 'Mohon samakan kata sandi anda seperti kata sandi diatas' : '');" id="repasswordUSER" required="" placeholder="Input Lagi Kata Sandi Anda">
                        </div>
                    </div>
                    <div class="field">
                        <div class="control">
                            <textarea class="textarea" name="addressUSER" placeholder="Domisili Anda" required="required"></textarea>
                        </div>
                    </div>
                    <div class="field is-grouped">
                        <div class="control is-expanded">
                            <input type="text" name="cityUSER" class="input" placeholder="Kota" required="required">
                        </div>
                        <div class="control">
                            <input type="number" name="zipUSER" class="input" placeholder="Kode Pos" required="required">
                        </div>
                    </div>
                    <div class="field is-grouped">
                        <div class="control is-expanded">
                            <label class="radio">
                                <input type="radio" name="genderUSER" value="1" required="required">
                                Laki-laki
                            </label>
                            <label class="radio">
                                <input type="radio" name="genderUSER" value="0" required="required">
                                Perempuan
                            </label>
                        </div>
                        <div class="control">
                            <input type="number" name="ageUSER" class="input" placeholder="Usia Anda" required="required">
                        </div>
                    </div>
                    <div class="field wow fadeInUp" data-wow-delay="2s">
                        <div class="control">
                            <input type="submit" class="button is-link is-submit" value="Submit">
                        </div>
                    </div>
                </form>
                <div class="switch-login" id="switch-to-login">
                    <a href="#">Sudah punya akun?</a>
                </div>
            </div> <!-- kelar Register Wrapper -->
        </div>
    </div>
</section>
