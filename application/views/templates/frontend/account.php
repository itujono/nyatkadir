<?php defined('BASEPATH') OR exit('No direct script access allowed');?>

<section class="account section is-medium">
    <div class="hero-body">
        <div class="container">
            <div class="section-title">
                <h2 class="title">Pengaturan Akun</h2>
            </div>

            <div class="account-wrapper">
                <div class="level topbar">
                    <div class="level-left">
                        <div class="level-item">
                            <input type="file" name="file" id="file" class="inputfile" />
                            <label for="file">
                                <img src="<?php echo base_url().$this->data['asfront'];?>img/user.jpg" alt="Avatar Rusmanto">
                                <span>Edit Gambar...</span>
                            </label>
                        </div>
                    </div>
                    <div class="level-right">
                        <div class="level-item">
                            <span>Rusmanto <br> <small>User ID: 34934290</small></span>
                        </div>
                    </div>
                </div> <!-- kelar Level Pertama -->

                <div class="level tab-wrapper">
                    <div class="level-left tabs">
                        <ul>
                            <li><a href="#" class="tab-link is-active" data-tab="tab-profile">Profile</a></li>
                            <li><a href="#" class="tab-link" data-tab="tab-polling">Polling (3)</a></li>
                            <li><a href="#" class="tab-link" data-tab="tab-aspirasi">Aspirasi (3)</a></li>
                        </ul>
                    </div>
                </div>

                <div class="tab-content-wrapper">
                    <div class="level tab-content is-active" id="tab-profile">
                        <div class="level-left">
                            <dl class="user-info">
                                <dt>Nama</dt>
                                <dd>Rusmanto Jagad Maya</dd>
                                <dt>Email</dt>
                                <dd>rusmanto@rusmantocoy.com</dd>
                                <dt>ID Anggota</dt>
                                <dd>3429843</dd>
                                <dt>Basis Wilayah</dt>
                                <dd>Tanjung Pinang</dd>
                                <dt>Alamat</dt>
                                <dd>Jalan Kepodang Raya #13, Tiban Lama, Batam 29432</dd>
                                <dt>Nomor Telepon</dt>
                                <dd>+62 813 6464 7777</dd>
                            </dl>
                        </div>
                    </div>
                    <div class="content tab-content" id="tab-polling">
                        <div class="polling-list">
                            <h3 class="title">Daftar Polling yang Anda Ikuti</h3>
                            <ul class="polling-item">
                                <li>
                                    <h4>Bagaimana Pendapat Anda Tentang Setya Novanto di Sana?</h4>
                                    <p><strong>Anda memilih: </strong>Biasa aja sih, tapi yaa gitu, deh.</p>
                                    <small>30 Desember 2017 • 02:22 AM</small>
                                </li>
                                <li>
                                    <h4>Bagaimana Pendapat Anda Tentang Setya Novanto di Sana?</h4>
                                    <p><strong>Anda memilih: </strong>Biasa aja sih, tapi yaa gitu, deh.</p>
                                    <small>30 Desember 2017 • 02:22 AM</small>
                                </li>
                                <li>
                                    <h4>Bagaimana Pendapat Anda Tentang Setya Novanto di Sana?</h4>
                                    <p><strong>Anda memilih: </strong>Biasa aja sih, tapi yaa gitu, deh.</p>
                                    <small>30 Desember 2017 • 02:22 AM</small>
                                </li>
                            </ul>
                        </div>
                    </div> <!-- kelar ID Tab-Polling -->

                    <div class="content tab-content" id="tab-aspirasi">
                        <div class="aspirasi-list">
                            <h3 class="title">Daftar Aspirasi yang Anda Sampaikan</h3>
                            <ul class="aspirasi-item">
                                <li>
                                    <h4>Bagaimana Pendapat Anda Tentang Setya Novanto di Sana?</h4>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. <br><br> Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                                    <small>30 Desember 2017 • 02:22 AM</small>
                                </li>
                                <li>
                                    <h4>Bagaimana Pendapat Anda Tentang Setya Novanto di Sana?</h4>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. <br><br> Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                                    <small>30 Desember 2017 • 02:22 AM</small>
                                </li>
                                <li>
                                    <h4>Bagaimana Pendapat Anda Tentang Setya Novanto di Sana?</h4>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. <br><br> Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                                    <small>30 Desember 2017 • 02:22 AM</small>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div> <!-- kelar Container section utama -->
    </div>
</section>
