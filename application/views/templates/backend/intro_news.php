<?php
defined('BASEPATH') OR exit('No direct script access allowed');

$title1 = 'Buat Data Kata Pembuka';
$actions = 'saveintronews';
$controller = 'news';
if($getintro->idINTRONEWS != NULL){
 $title1 = 'Perbaharui Data Kata Pembuka';
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
        <li class="uk-width-1-2 <?php echo $tab['data-tab']?>>"><a href="#">Daftar Kata Pembuka</a></li>
        <li class="uk-width-1-2 <?php echo $tab['form-tab']?>"><a href="#">Form Kata Pembuka</a></li>
      </ul>
      <ul id="tabs_4" class="uk-switcher uk-margin">
        <li>
          <table id="dt_individual_search" class="uk-table" cellspacing="0" width="100%">
            <thead>
              <tr>
                <th>No.</th>
                <th>Gambar</th>
                <th>Judul Halaman Utama</th>
                <th>Created</th>
                <th>Action</th>
              </tr>
            </thead>
            <tfoot>
              <tr>
                <th>No.</th>
                <th>Gambar</th>
                <th>Judul Halaman Utama</th>
                <th>Created</th>
                <th>Action</th>
              </tr>
            </tfoot>
            <tbody>
              <?php 
              if(!empty($listintro)){
                foreach ($listintro  as $key => $intro) { 
                  $id = encode($intro->idINTRONEWS);
                  ?>
                  <tr>
                    <td><?php echo $key+1; ?></td>
                    <td><img class="img_thumb" src="<?php echo $intro->imageINTRONEWS;?>" alt="<?php echo $intro->titleINTRONEWS;?>"/></td>
                    <td><?php echo $intro->titleINTRONEWS; ?></td>
                    <td><?php echo date('d F Y', strtotime($intro->createdateINTRONEWS));?></td>
                    <?php
                    $icndel = '&#xE16C;';
                    $msg1 = 'Are you sure want to delete this data ?';
                    $msg2 = 'Are you sure want to change this data ?';
                    $url1 = 'administrator/'.$controller.'/actiondelete_intro_news/'.urlencode($id);
                    $url2 = 'administrator/'.$controller.'/index_intro_news/'.urlencode($id);
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
                <?php echo form_hidden('idINTRONEWS',encode($getintro->idINTRONEWS),'hidden'); ?>
                <hr class="md-hr"/>
                <div class="uk-grid" data-uk-grid-margin>
                  <div class="uk-width-medium-1-1">
                    <div class="md-card">
                      <div class="md-card-content">
                        <?php
                        if(!empty($getintro->imageINTRONEWS)){
                          ?>
                          <div class="uk-margin-bottom uk-text-center uk-position-relative">
                            <a href="#" class="uk-modal-close uk-close uk-close-alt uk-position-absolute" onclick="UIkit.modal.confirm('Apakah anda yakin akan menghapus gambar ini di halaman news?', function(){ document.location.href='<?php echo base_url().$this->data['folBACKEND'].$controller."/deleteimg_intro_news/".encode($getintro->idINTRONEWS); ?>'; });"></a>
                            <img src="<?php echo $getintro->imageINTRONEWS;?>" alt="<?php echo $getintro->titleINTRONEWS;?>" class="img_medium"/>
                          </div>
                          <?php } else { ?>
                          <?php echo form_upload('imgINTRONEWS','','class="md-input" required'); ?>
                          <?php } ?>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="uk-grid" data-uk-grid-margin>
                    <div class="uk-width-medium-1-1 uk-margin-top">
                      <div class="parsley-row">
                        <label>Judul di Halaman News<span class="req">*</span></label>
                        <input type="text" class="md-input" name="titleINTRONEWS" autocomplete value="<?php echo cetak($getintro->titleINTRONEWS);?>" required/>
                      </div>
                      <p class="text-red"><?php echo form_error('titleINTRONEWS'); ?></p>
                    </div>
                  </div>
                  <?php if(!empty($getintro->idINTRONEWS)){ ?>
                    <div class="uk-width-medium-1-1 uk-margin-top">
                     <div class="uk-form-row">
                       <span class="uk-input-group-addon"><?php echo form_submit('submit', 'SAVE', 'class="md-btn md-btn-primary" id="show_preloader_md"'); ?></span>
                     </div>
                   </div>
                   <?php } ?>
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