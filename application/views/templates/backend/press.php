<?php
defined('BASEPATH') OR exit('No direct script access allowed');

$title1 = 'Buat Data Liputan Media Baru';
$actions = 'savepress';
$controller = 'press';
if($getpress->idPRESS != NULL){
 $title1 = 'Perbaharui Liputan Media';
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
        <li class="uk-width-1-2 <?php echo $tab['data-tab']?>>"><a href="#">Daftar Liputan Media</a></li>
        <li class="uk-width-1-2 <?php echo $tab['form-tab']?>"><a href="#">Form Liputan Media</a></li>
      </ul>
      <ul id="tabs_4" class="uk-switcher uk-margin">
        <li>
          <table id="dt_individual_search" class="uk-table" cellspacing="0" width="100%">
            <thead>
              <tr>
                <th>No.</th>
                <th>Thumbnail</th>
                <th>Judul</th>
                <th>Sumber Liputan</th>
                <th>Created</th>
                <th>Action</th>
              </tr>
            </thead>
            <tfoot>
              <tr>
                <th>No.</th>
                <th>Thumbnail</th>
                <th>Judul</th>
                <th>Sumber Liputan</th>
                <th>Created</th>
                <th>Action</th>
              </tr>
            </tfoot>
            <tbody>
              <?php 
              if(!empty($listpress)){
                foreach ($listpress  as $key => $press) { 
                  $id = encode($press->idPRESS);
              ?>
                  <tr>
                    <td><?php echo $key+1; ?></td>
                    <td><img class="img_thumb" src="<?php echo $press->imagePRESS;?>" alt="<?php echo $press->titlePRESS;?>"/></td>
                    <td><?php echo $press->titlePRESS; ?></td>
                    <td><?php echo $press->sourcePRESS; ?></td>
                    <td><?php echo date('d F Y', strtotime($press->createdatePRESS));?></td>
                    <?php
                    $icndel = '&#xE16C;';
                    if($press->bestPRESS == 1){
                        $id2 = '';
                        $icnbest = '&#xE838;';
                        $tooltip = 'Liputan Media Terbaik';
                      } else {
                        $id2 = '/1';
                        $icnbest = '&#xE83A;';
                        $tooltip = 'Bukan Liputan Media Terbaik';
                      }
                    $msg1 = 'Are you sure want to delete this data ?';
                    $msg2 = 'Are you sure want to change this data ?';
                    $msg3 = 'Are you sure want to change this best press ?';
                    $url1 = 'administrator/'.$controller.'/actiondelete_press/'.urlencode($id);
                    $url2 = 'administrator/'.$controller.'/index_press/'.urlencode($id);
                    $url3 = 'administrator/'.$controller.'/change_best_press/'.urlencode($id).$id2;
                    ?>
                    <td class="uk-text-center">
                      <a href="#"  data-uk-tooltip title="<?php echo $tooltip;?>" onclick="UIkit.modal.confirm('<?php echo $msg3; ?>', function(){ document.location.href='<?php echo site_url($url3);?>'; });"><i class="md-icon material-icons"><?php echo $icnbest; ?></i></a>
                      <a href="#" onclick="UIkit.modal.confirm('<?php echo $msg1; ?>', function(){ document.location.href='<?php echo site_url($url1);?>'; });"><i class="md-icon material-icons"><?php echo $icndel; ?></i></a>
                      <a href="#" onclick="UIkit.modal.confirm('<?php echo $msg2; ?>', function(){ document.location.href='<?php echo site_url($url2);?>'; });"><i class="md-icon material-icons">&#xE254;</i></a>
                    </td>
                  </tr>
                  <?php } ?>
                  <?php } ?>
                </tbody>
              </table>
            </li>

            <!-- START FORM INPUT AREA -->
            <li>
              <h3 class="heading_a uk-margin-bottom">Buat data baru atau Perbaharui data</h3>
              <form method="post" name="formrental" action="<?php echo $url;?>" id="form_validation" enctype="multipart/form-data" class="uk-form-stacked">
              <input type="hidden" name="<?php echo $this->security->get_csrf_token_name();?>" value="<?php echo $this->security->get_csrf_hash();?>" />
                <?php echo form_hidden('idPRESS',encode($getpress->idPRESS),'hidden'); ?>
                <div class="uk-grid" data-uk-grid-margin>
                  <div class="uk-width-medium-1-1">Upload Gambar Liputan Media
                    <?php echo form_upload('imgPRESS[]','','class="md-input" multiple');?>
                    <ul class="img-edit clearfix">
                      <?php 
                      if(!empty($getpress->map)){
                      foreach ($getpress->map as $key=> $value_img) { ?>
                        <li class="uk-position-relative">
                            <a href="#" class="uk-modal-close uk-close uk-close-alt uk-position-absolute" onclick="UIkit.modal.confirm('Are you sure want to delete this picture?', function(){ document.location.href='<?php echo base_url().'administrator/'.$controller."/deleteimg_press/".encode($getpress->idPRESS).'/'.$getpress->imgs[$key]; ?>'; });"></a>
                              <img src="<?php echo $value_img; ?>" class="img_medium"/>
                        </li>
                        <br>
                      <?php } ?>
                      <?php } ?>
                    </ul>
                  </div>
                </div>
                <div class="uk-grid" data-uk-grid-margin>
                  <div class="uk-width-medium-1-3 uk-margin-top">
                    <div class="parsley-row">
                      <label>Judul Media<span class="req">*</span></label>
                      <input type="text" class="md-input" name="titlePRESS" autocomplete value="<?php echo cetak($getpress->titlePRESS);?>" required/>
                    </div>
                    <p class="text-red"><?php echo form_error('titlePRESS'); ?></p>
                  </div>
                  <div class="uk-width-medium-1-3 uk-margin-top">
                    <div class="parsley-row">
                      <label>Sumber Media<span class="req">*</span></label>
                      <input type="text" class="md-input" name="sourcePRESS" autocomplete value="<?php echo cetak($getpress->sourcePRESS);?>" required/>
                    </div>
                    <p class="text-red"><?php echo form_error('sourcePRESS'); ?></p>
                  </div>
                  <div class="uk-width-medium-1-3 uk-margin-top">
                    <div class="parsley-row">
                      <?php
                        $checkdis= '';
                        if($getpress->bestPRESS == 1) $checkdis = 'checked' ;
                      ?>
                      <input type="checkbox" data-switchery <?php echo $checkdis; ?> data-switchery-size="large" data-switchery-color="#7cb342" name="bestPRESS" id="switch_demo_large">
                      <label for="switch_demo_large" class="inline-label"><b>Liputan Terbaik</b></label>
                    </div>
                  </div>
                </div>
                <div class="uk-grid" data-uk-grid-margin>
                  <div class="uk-width-medium-1-1 uk-margin-top">
                    <div class="parsley-row">
                      <label>Deskripsi Liputan Media</label>
                      <br>
                      <textarea cols="30" rows="4" name="descPRESS" class="md-input" id="wysiwyg_tinymce_codewell"><?php echo cetak($getpress->descPRESS);?></textarea>
                    </div>
                    <p class="text-red"><?php echo form_error('descPRESS'); ?></p>
                  </div>
                </div>
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