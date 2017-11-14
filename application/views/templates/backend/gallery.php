<?php
defined('BASEPATH') OR exit('No direct script access allowed');

$title1 = 'Buat Data Galeri Baru';
$actions = 'savegallery';
$controller = 'gallery';
if($getgallery->idGALLERY != NULL){
 $title1 = 'Perbaharui Data Galeri';
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
        <li class="uk-width-1-2 <?php echo $tab['data-tab']?>>"><a href="#">Daftar Galeri</a></li>
        <li class="uk-width-1-2 <?php echo $tab['form-tab']?>"><a href="#">Form Galeri</a></li>
      </ul>
      <ul id="tabs_4" class="uk-switcher uk-margin">
        <li>
          <table id="dt_individual_search" class="uk-table" cellspacing="0" width="100%">
            <thead>
              <tr>
                <th>No.</th>
                <th>Thumbnail/Video</th>
                <th>Kategori</th>
                <th>Judul</th>
                <th>Created</th>
                <th>Action</th>
              </tr>
            </thead>
            <tfoot>
              <tr>
                <th>No.</th>
                <th>Thumbnail/Video</th>
                <th>Kategori</th>
                <th>Judul</th>
                <th>Created</th>
                <th>Action</th>
              </tr>
            </tfoot>
            <tbody>
              <?php 
              if(!empty($listgallery)){
                foreach ($listgallery  as $key => $gal) { 
                  $id = encode($gal->idGALLERY);
                  if($gal->categoryGALLERY == 1){
                    $cat = 'Foto';
                  } else {
                    $cat = 'Video';
                  }
              ?>
                  <tr>
                    <td><?php echo $key+1; ?></td>
                    <td><img class="img_thumb" src="<?php echo $gal->imageGALLERY;?>" alt="<?php echo $gal->titleGALLERY;?>"/></td>
                    <td><?php echo $cat; ?></td>
                    <td><?php echo $gal->titleGALLERY; ?></td>
                    <td><?php echo date('d F Y', strtotime($gal->createdateGALLERY));?></td>
                    <?php
                    $icndel = '&#xE16C;';
                    $msg1 = 'Are you sure want to delete this data ?';
                    $msg2 = 'Are you sure want to change this data ?';
                    $url1 = 'administrator/'.$controller.'/actiondelete_gallery/'.urlencode($id);
                    $url2 = 'administrator/'.$controller.'/index_gallery/'.urlencode($id);
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
              <h3 class="heading_a uk-margin-bottom">Buat data baru atau Perbaharui data</h3>
              <form method="post" name="formrental" action="<?php echo $url;?>" id="form_validation" enctype="multipart/form-data" class="uk-form-stacked">
              <input type="hidden" name="<?php echo $this->security->get_csrf_token_name();?>" value="<?php echo $this->security->get_csrf_hash();?>" />
                <?php echo form_hidden('idGALLERY',encode($getgallery->idGALLERY),'hidden'); ?>
                <div class="uk-grid" data-uk-grid-margin>
                  <div class="uk-width-medium-1-1">
                    <div class="md-card">
                      <div class="md-card-content">
                        <?php
                          if(!empty($getgallery->imageGALLERY)){
                        ?>
                        <div class="uk-margin-bottom uk-text-center uk-position-relative">
                            <a href="#" class="uk-modal-close uk-close uk-close-alt uk-position-absolute" onclick="UIkit.modal.confirm('Apakah anda yakin akan menghapus gambar ini?', function(){ document.location.href='<?php echo base_url().$this->data['folBACKEND'].$controller."/deleteimggallery/".seo_url($getgallery->titleGALLERY)."/".encode($getgallery->idGALLERY); ?>'; });"></a>
                            <img src="<?php echo $getgallery->imageGALLERY;?>" alt="<?php echo $getgallery->titleGALLERY;?>" class="img_medium"/>
                        </div>
                        <?php } else { ?>
                          <?php echo form_upload('imgGALLERY','','class="md-input" required'); ?>
                        <?php } ?>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="uk-grid" data-uk-grid-margin>
                  <div class="uk-width-medium-1-2 uk-margin-top">
                    <div class="parsley-row">
                      <label>Judul<span class="req">*</span></label>
                      <?php 
                        if(!empty($getgallery->imageGALLERY)){
                          $disa = "disabled data-uk-tooltip='{pos:'top'}' title='Hapus dulu gambar anda.'";
                        } else {
                          $disa = "";
                        }
                      ?>
                      <input type="text" class="md-input" name="titleGALLERY" autocomplete value="<?php echo cetak($getgallery->titleGALLERY);?>" required <?php echo $disa;?>/>
                    </div>
                    <p class="text-red"><?php echo form_error('titleGALLERY'); ?></p>
                  </div>
                  <div class="uk-width-medium-1-2 uk-margin-top">
                    <div class="parsley-row">
                      <select name="categoryGALLERY" id="select_demo_5" data-md-selectize data-md-selectize-bottom>
                          <option value="" disabled="disabled">Pilih Kategori</option>
                          <?php if($getgallery->categoryGALLERY == 1){ ?>
                          <option value="1" selected="selected">Foto</option>
                          <option value="2">Video</option>
                          <?php } else if($getgallery->categoryGALLERY == 2) { ?>
                          <option value="1">Foto</option>
                          <option value="2" selected="selected">Video</option>
                          <?php } else { ?>
                          <option value="1">Foto</option>
                          <option value="2">Video</option>
                          <?php } ?>
                      </select>
                    </div>
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