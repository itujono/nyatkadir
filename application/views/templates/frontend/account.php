<?php defined('BASEPATH') OR exit('No direct script access allowed');?>

<section class="account section is-medium">
    <div class="hero-body">
        <div class="container">
            <div class="section-title">
                <h2 class="title">Pengaturan Akun</h2>
                <h4 class="subtitle">Dan histori aktifitas Anda sebagai member Nyat Kadir.com</h4>
            </div>

            <div class="account-wrapper">
                <div class="level topbar">
                    <div class="level-left">
                        <div class="level-item">
                            <div class="thumb">
                                <img src="<?php echo base_url().$this->data['asfront'];?>img/user.jpg" alt="Avatar Rusmanto" id="avatar">
                                <form class="image-upload" method="POST" name="form_upload" action="<?php echo base_url();?>user/upload_profile_picture" enctype="multipart/form-data">
                                    <input type="hidden" name="<?php echo $this->security->get_csrf_token_name();?>" value="<?php echo $this->security->get_csrf_hash();?>" />
                                    <label for="image-upload">
                                        <input type="file" name="file_profile_picture" class="inputfile" id="image-upload" accept=".jpg, .jpeg, .png">
                                        <span>Edit Gambar...</span>
                                    </label>
                                    <input type="submit" class="button is-link" value="Simpan foto">
                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="level-right">
                        <div class="level-item">
                            <span><?php echo $getuser->nameUSER;?> <br> <small>User ID: <?php echo $getuser->idUSER;?></small></span>
                        </div>
                    </div>
                </div> <!-- kelar Level Pertama -->

                <div class="level tab-wrapper">
                    <div class="level-left tabs">
                        <ul>
                            <li><a href="#" class="tab-link is-active" data-tab="tab-profile">Profile</a></li>
                            <li><a href="#" class="tab-link" data-tab="tab-polling">Polling (<?php echo $count_polling_user;?>)</a></li>
                            <li><a href="#" class="tab-link" data-tab="tab-aspirasi">Aspirasi (<?php echo $count_submited_aspirasi_user;?>)</a></li>
                        </ul>
                    </div>
                </div>

                <div class="tab-content-wrapper">
                    <div class="level tab-content is-active" id="tab-profile">
                        <div class="level-left">
                            <dl class="user-info">
                                <dt>Nama</dt>
                                <dd><?php echo $getuser->nameUSER;?></dd>
                                <dt>Email</dt>
                                <dd><?php echo $getuser->emailUSER;?></dd>
                                <dt>ID Anggota</dt>
                                <dd><?php echo $getuser->idUSER;?></dd>
                                <dt>Basis Wilayah</dt>
                                <dd><?php echo $getuser->cityUSER;?></dd>
                                <dt>Alamat</dt>
                                <dd><?php echo $getuser->addressUSER;?></dd>
                                <dt>Nomor Telepon</dt>
                                <dd><?php echo $getuser->teleUSER;?></dd>
                            </dl>
                        </div>
                    </div>
                    <div class="content tab-content" id="tab-polling">
                        <div class="polling-list">
                            <h3 class="title">Daftar Polling yang Anda Ikuti</h3>
                            <ul class="polling-item">
                            <?php
                                if(!empty($list_choice_polling_users)){
                                    foreach ($list_choice_polling_users as $choice) {
                            ?>
                                <li>
                                    <h4><?php echo $choice->questionPOLLING;?></h4>
                                    <p><strong>Anda memilih: </strong><?php echo $choice->nameCHOICE;?></p>
                                    <small><?php echo indonesian_date($choice->createdateCHOICE);?></small>
                                </li>
                                <?php } ?>
                            <?php } ?>
                            </ul>
                        </div>
                    </div> <!-- kelar ID Tab-Polling -->

                    <div class="content tab-content" id="tab-aspirasi">
                        <div class="aspirasi-list">
                            <h3 class="title">Daftar Aspirasi yang Anda Sampaikan</h3>
                            <ul class="aspirasi-item">
                            <?php
                                if(!empty($list_submited_aspirasi_user)){
                                    foreach ($list_submited_aspirasi_user as $asp_user) {
                            ?>
                                <li>
                                    <h4><?php echo $asp_user->subjectASPIRASI;?></h4>
                                    <p><?php echo $asp_user->descASPIRASI;?></p>
                                    <small><?php echo indonesian_date($asp_user->createdateASPIRASI,'j F Y H:i'); ?></small>
                                </li>
                                <?php } ?>
                            <?php } ?>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div> <!-- kelar Container section utama -->
    </div>
</section>
