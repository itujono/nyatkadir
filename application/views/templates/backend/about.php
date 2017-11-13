<?php
defined('BASEPATH') OR exit('No direct script access allowed');

$title1 = 'Buat Data About Baru';
$actions = 'saveabout';
$controller = 'about';
if($getabout->idABOUT != NULL){
 $title1 = 'Perbaharui Data About';
} 
$url = base_url().'administrator/'.$controller.'/'.$actions;
?>
<div class="uk-width-medium-1-1">
  <h4 class="heading_a uk-margin-bottom"><?php echo $title1;?></h4>

  <?php if (!empty($message)){ ?>
  <div class="uk-alert uk-alert-<?php echo $message['type']; ?>" data-uk-alert>
    <a href="#" class="uk-alert-close uk-close"></a>
    <h4><?php echo $message['title']; ?></h4>
    <?php echo $message['text']; ?>
  </div>
  <?php } ?>

  <div class="md-card">
    <div class="md-card-content">
      <ul class="uk-tab uk-tab-grid" data-uk-tab="{connect:'#tabs_4'}">
        <li class="uk-width-1-2 <?php echo $tab['data-tab']?>>"><a href="#">Daftar About</a></li>
        <li class="uk-width-1-2 <?php echo $tab['form-tab']?>"><a href="#">Form About</a></li>
      </ul>
      <ul id="tabs_4" class="uk-switcher uk-margin">
        <li>
          <table id="dt_individual_search" class="uk-table" cellspacing="0" width="100%">
            <thead>
              <tr>
                <th>No.</th>
                <th>Judul Halaman Utama</th>
                <th>Judul Header</th>
                <th>Judul Halaman Tentang</th>
                <th>Judul Penghargaan</th>
                <th>Created</th>
                <th>Action</th>
              </tr>
            </thead>
            <tfoot>
              <tr>
                <th>No.</th>
                <th>Judul Halaman Utama</th>
                <th>Judul Header</th>
                <th>Judul Halaman Tentang</th>
                <th>Judul Penghargaan</th>
                <th>Created</th>
                <th>Action</th>
              </tr>
            </tfoot>
            <tbody>
              <?php 
              if(!empty($listabout)){
                foreach ($listabout  as $key => $about) { 
                  $id = encode($about->idABOUT);
                  ?>
                  <tr>
                    <td><?php echo $key+1; ?></td>
                    <td><?php echo $about->titlehomeABOUT; ?></td>
                    <td><?php echo $about->headertitleABOUT; ?></td>
                    <td><?php echo $about->titleABOUT; ?></td>
                    <td><?php echo $about->titleawardABOUT; ?></td>
                    <td><?php echo date('d F Y', strtotime($about->createdateABOUT));?></td>
                    <?php
                    $icndel = '&#xE16C;';
                    $msg1 = 'Are you sure want to delete this data ?';
                    $msg2 = 'Are you sure want to change this data ?';
                    $url1 = 'administrator/'.$controller.'/actiondelete_about/'.urlencode($id);
                    $url2 = 'administrator/'.$controller.'/index_about/'.urlencode($id);
                    ?>
                    <td class="uk-text-center">
                      <a href="#" onclick="UIkit.modal.confirm('<?php echo $msg1; ?>', function(){ document.location.href='<?php echo site_url($url1);?>'; });"><i class="md-icon material-icons"><?php echo $icndel; ?></i></a>
                      <a href="#" onclick="UIkit.modal.confirm('<?php echo $msg2; ?>', function(){ document.location.href='<?php echo site_url($url2);?>'; });"><i class="md-icon material-icons">&#xE254;</i></a>
                    </td>
                  </tr>
                  <?php } ?>
                  <?php } ?>
                </tbody>
              </table>
            </li>
            <!-- END LIST SLIDER -->

            <!-- START FORM INPUT AREA -->
            <li>
              <form method="post" name="formrental" action="<?php echo $url;?>" id="form_validation" enctype="multipart/form-data" class="uk-form-stacked">
              <input type="hidden" name="<?php echo $this->security->get_csrf_token_name();?>" value="<?php echo $this->security->get_csrf_hash();?>" />
                <?php echo form_hidden('idABOUT',encode($getabout->idABOUT),'hidden'); ?>
                <h2 class="heading_a">
                  Informasi Tentang di Halaman Utama
                  <span class="sub-heading">Silakan masukkan informasi data tentang halaman utama sesuai form inputan dibawah.</span>
                </h2>
                <hr class="md-hr"/>
                <div class="uk-grid" data-uk-grid-margin>
                  <div class="uk-width-medium-1-1">
                    <div class="md-card">
                      <div class="md-card-content">
                        <?php
                          if(!empty($getabout->imageHOMEABOUT)){
                        ?>
                        <div class="uk-margin-bottom uk-text-center uk-position-relative">
                            <a href="#" class="uk-modal-close uk-close uk-close-alt uk-position-absolute" onclick="UIkit.modal.confirm('Apakah anda yakin akan menghapus gambar ini di halaman utama?', function(){ document.location.href='<?php echo base_url().$this->data['folBACKEND'].$controller."/deleteimg_homeabout/".encode($getabout->idABOUT); ?>'; });"></a>
                            <img src="<?php echo $getabout->imageHOMEABOUT;?>" alt="<?php echo $getabout->titlehomeABOUT;?>" class="img_medium"/>
                        </div>
                        <?php } else { ?>
                          <?php echo form_upload('imghomeABOUT','','class="md-input" required'); ?>
                        <?php } ?>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="uk-grid" data-uk-grid-margin>
                  <div class="uk-width-medium-1-1 uk-margin-top">
                    <div class="parsley-row">
                      <label>Judul di Halaman Utama<span class="req">*</span></label>
                      <input type="text" class="md-input" name="titlehomeABOUT" autocomplete value="<?php echo cetak($getabout->titlehomeABOUT);?>" required/>
                    </div>
                    <p class="text-red"><?php echo form_error('titlehomeABOUT'); ?></p>
                  </div>
                </div>
                <div class="uk-grid" data-uk-grid-margin>
                  <div class="uk-width-medium-1-1 uk-margin-top">
                    <div class="parsley-row">
                      <label>Deskripsi di Halaman Utama</label>
                      <textarea cols="30" rows="4" name="deschomeABOUT" class="md-input" id="wysiwyg_tinymce_codewell"><?php echo cetak($getabout->deschomeABOUT);?></textarea>
                    </div>
                    <p class="text-red"><?php echo form_error('deschomeABOUT'); ?></p>
                  </div>
                </div>
                <h2 class="heading_a">
                  Informasi di Halaman Tentang
                  <span class="sub-heading">Silakan masukkan informasi data halaman tentang sesuai form inputan dibawah.</span>
                </h2>
                <hr class="md-hr"/>
                <div class="uk-grid" data-uk-grid-margin>
                  <div class="uk-width-medium-1-1">
                    <div class="md-card">
                      <div class="md-card-content">
                        <?php
                          if(!empty($getabout->imageABOUT)){
                        ?>
                        <div class="uk-margin-bottom uk-text-center uk-position-relative">
                            <a href="#" class="uk-modal-close uk-close uk-close-alt uk-position-absolute" onclick="UIkit.modal.confirm('Apakah anda yakin akan menghapus gambar ini di halaman tentang?', function(){ document.location.href='<?php echo base_url().$this->data['folBACKEND'].$controller."/deleteimg_headerabout/".encode($getabout->idABOUT); ?>'; });"></a>
                            <img src="<?php echo $getabout->imageABOUT;?>" alt="<?php echo $getabout->titleABOUT;?>" class="img_medium"/>
                        </div>
                        <?php } else { ?>
                          <?php echo form_upload('imgABOUT','','class="md-input" required'); ?>
                        <?php } ?>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="uk-grid" data-uk-grid-margin>
                  <div class="uk-width-medium-1-2 uk-margin-top">
                    <div class="parsley-row">
                      <label>Judul Header <span class="req">*</span></label>
                      <input type="text" class="md-input" name="headertitleABOUT" autocomplete value="<?php echo cetak($getabout->headertitleABOUT);?>" required/>
                    </div>
                    <p class="text-red"><?php echo form_error('headertitleABOUT'); ?></p>
                  </div>
                  <div class="uk-width-medium-1-2 uk-margin-top">
                    <div class="parsley-row">
                      <label>Judul di Halaman Utama <span class="req">*</span></label>
                      <input type="text" class="md-input" name="titleABOUT" autocomplete value="<?php echo cetak($getabout->titleABOUT);?>" required/>
                    </div>
                    <p class="text-red"><?php echo form_error('titleABOUT'); ?></p>
                  </div>
                </div>
                <div class="uk-grid" data-uk-grid-margin>
                  <div class="uk-width-medium-1-1 uk-margin-top">
                    <div class="parsley-row">
                      <label>Deskripsi di Halaman Tentang</label>
                      <textarea cols="30" rows="4" name="descABOUT" class="md-input" id="wysiwyg_tinymce_codewell_second"><?php echo cetak($getabout->descABOUT);?></textarea>
                    </div>
                    <p class="text-red"><?php echo form_error('descABOUT'); ?></p>
                  </div>
                </div>
                <div class="uk-grid" data-uk-grid-margin>
                  <div class="uk-width-medium-1-1 uk-margin-top">
                    <div class="parsley-row">
                      <label>Judul Penghargaan<span class="req">*</span></label>
                      <input type="text" class="md-input" name="titleawardABOUT" autocomplete value="<?php echo cetak($getabout->titleawardABOUT);?>" required/>
                    </div>
                    <p class="text-red"><?php echo form_error('titleawardABOUT'); ?></p>
                  </div>
                </div>
                 <h2 class="heading_a">
                  Informasi Penghargaan yang telah diperoleh Nyat Kadir
                <span class="sub-heading">Silakan masukkan informasi data penghargaan sesuai form inputan dibawah.</span>
              </h2>
              <hr class="md-hr"/>
              <?php 
              $data_penghargaan = json_decode($getabout->listawardABOUT,TRUE);
              if(!empty($data_penghargaan)){
                ?>
                <div class="uk-grid" data-uk-grid-margin>
                  <div class="uk-width-medium-1-1 multi-field-wrapper">
                    <button style="min-width: 49px !important; margin-left: 17px !important; padding-bottom: 10px;" type="button" class="md-btn md-btn-primary add-field"><i class="material-icons md-24">&#xE146;</i></button>
                    <div class="multi-fields">
                      <?php foreach ($data_penghargaan as $value) { ?>
                      <div class="uk-grid multi-field" data-uk-grid-margin>
                        <div style="width: 10%" class="uk-width-medium-1-5 uk-margin-top">
                          <div class="uk-input-group mt-m">
                            <span class="uk-input-group-addon remove-field">
                              <button type="button" style="min-width:1px; padding-bottom: 10px;" class="md-btn md-btn-danger"><i class="material-icons md-24">&#xE872;</i></button>
                            </span>
                          </div>
                        </div>
                        <div class="uk-width-medium-1-4 uk-margin-top">
                          <div class="uk-input-group">
                            <label class="uk-form-label"><b>Judul Penghargaan</b></label>
                            <label for="listawardABOUT[]"></label>
                            <input type="text" class="md-input" name="listawardABOUT[]" value="<?php echo $value[0];?>">
                          </div>
                        </div>
                        <div class="uk-width-medium-1-4 uk-margin-top">
                          <div class="uk-input-group">
                            <label class="uk-form-label"><b>Diberikan oleh</b></label>
                            <label for="diberikanawardABOUT[]"></label>
                            <input type="text" class="md-input" name="diberikanawardABOUT[]" value="<?php echo $value[1];?>">
                          </div>
                        </div>
                        <div class="uk-width-medium-1-4 uk-margin-top">
                          <div class="uk-input-group">
                            <label class="uk-form-label"><b>Tahun Penghargaan</b></label>
                            <label for="tahunawardABOUT[]"></label>
                            <input type="text" class="md-input" name="tahunawardABOUT[]" value="<?php echo $value[2];?>">
                          </div>
                        </div>
                      </div>
                      <?php } ?>
                    </div>
                  </div>
                </div>
                <?php } else { ?>
                <div class="uk-grid" data-uk-grid-margin>
                  <div class="uk-width-medium-1-1 multi-field-wrapper">
                    <button style="min-width: 49px !important; margin-left: 17px !important; padding-bottom: 10px;" type="button" class="md-btn md-btn-primary add-field"><i class="material-icons md-24">&#xE146;</i></button>
                    <div class="multi-fields">
                      <div class="uk-grid multi-field" data-uk-grid-margin>
                        <div style="width: 10%" class="uk-width-medium-1-5 uk-margin-top">
                          <div class="uk-input-group mt-m">
                            <span class="uk-input-group-addon remove-field">
                              <button type="button" style="min-width:1px; padding-bottom: 10px;" class="md-btn md-btn-danger"><i class="material-icons md-24">&#xE872;</i></button>
                            </span>
                          </div>
                        </div>
                        <div class="uk-width-medium-1-4 uk-margin-top">
                          <div class="uk-input-group">
                            <label class="uk-form-label"><b>Judul Penghargaan</b></label>
                            <label for="listawardABOUT[]"></label>
                            <input type="text" class="md-input" name="listawardABOUT[]">
                          </div>
                        </div>
                        <div class="uk-width-medium-1-4 uk-margin-top">
                          <div class="uk-input-group">
                            <label class="uk-form-label"><b>Diberikan oleh</b></label>
                            <label for="diberikanawardABOUT[]"></label>
                            <input type="text" class="md-input" name="diberikanawardABOUT[]">
                          </div>
                        </div>
                        <div class="uk-width-medium-1-4 uk-margin-top">
                          <div class="uk-input-group">
                            <label class="uk-form-label"><b>Tahun Penghargaan</b></label>
                            <label for="tahunawardABOUT[]"></label>
                            <input type="number" class="md-input" name="tahunawardABOUT[]">
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <?php } ?>
                <div class="uk-width-medium-1-1 uk-margin-top">
                 <div class="uk-form-row">
                   <span class="uk-input-group-addon"><?php echo form_submit('submit', 'SAVE', 'class="md-btn md-btn-primary" id="show_preloader_md"'); ?></span>
                 </div>
               </div>
             </div>
           </div>
         </div>
       </form>
     </li>
     <!-- END FORM INPUT AREA -->
   </ul>
 </div>
</div>
</div>