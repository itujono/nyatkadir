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
                <th>Home Video</th>
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
                <th>Home Video</th>
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
                    $image = '<img class="img_thumb" src="'.$gal->imageGALLERY.'" alt="'.$gal->titleGALLERY.'"/>';
                  } else {
                    $cat = 'Video';
                    $thumbnail = get_thumbnail_from_youtube($gal->linkvideoGALLERY);
                    $image = '<img class="img_thumb" src="'.$thumbnail.'" alt="'.$gal->titleGALLERY.'"/>';
                  }
                   $icn = '&#xE04C;'; 
                   if($gal->ishomevideoGALLERY == 1){
                      $icn = '&#xE04B;';
                   }
                  ?>
                  <tr>
                    <td><?php echo $key+1; ?></td>
                    <td><i class="md-icon material-icons"><?php echo $icn; ?></i></td>
                    <td><?php echo $image;?></td>
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
                  <div class="uk-width-medium-1-1 uk-margin-top">
                    <div class="parsley-row">
                      <label>Pilih<span class="req">*</span></label>
                      <select name="categoryGALLERY" id="selbox_cat" data-md-selectize data-md-selectize-bottom>
                        <option value="" disabled="disabled" selected>Pilih Kategori</option>
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
                <div class="uk-grid" data-uk-grid-margin id="row_photo">
                  <div class="uk-width-medium-1-1">Gallery Upload
                    <?php echo form_upload('imgGALLERY[]','','class="md-input" multiple');?>
                    <ul class="img-edit clearfix">
                      <?php 
                      if(!empty($getgallery->map)){
                      foreach ($getgallery->map as $key=> $value_img) { ?>
                        <li class="uk-position-relative">
                            <a href="#" class="uk-modal-close uk-close uk-close-alt uk-position-absolute" onclick="UIkit.modal.confirm('Are you sure want to delete this picture?', function(){ document.location.href='<?php echo base_url().'administrator/'.$controller."/deleteimggallery/".encode($getgallery->idGALLERY).'/'.$getgallery->imgs[$key]; ?>'; });"></a>
                              <img src="<?php echo $value_img; ?>" class="img_medium"/>
                        </li>
                        <br>
                      <?php } ?>
                      <?php } ?>
                    </ul>
                  </div>
                  </div>
                  <div class="uk-grid" data-uk-grid-margin>
                    <div class="uk-width-medium-1-2 uk-margin-top">
                      <div class="parsley-row">
                        <label>Judul<span class="req">*</span></label>
                        <input type="text" class="md-input" name="titleGALLERY" autocomplete value="<?php echo cetak($getgallery->titleGALLERY);?>" required/>
                      </div>
                      <p class="text-red"><?php echo form_error('titleGALLERY'); ?></p>
                    </div>
                    <div class="uk-width-medium-1-2 uk-margin-top">
                      <div class="parsley-row">
                        <?php
                          $checkdis= '';
                          if($getgallery->ishomevideoGALLERY == 1) $checkdis = 'checked' ;
                        ?>
                        <input type="checkbox" data-switchery <?php echo $checkdis; ?> data-switchery-size="large" data-switchery-color="#304ffe" name="ishomevideoGALLERY" id="switch_demo_large">
                        <label for="switch_demo_large" class="inline-label"><b>Video Home</b></label>
                      </div>
                    </div>
                  </div>
                  <div class="uk-grid" data-uk-grid-margin id="row_video">
                    <div class="uk-width-medium-1-1 uk-margin-top">
                      <div class="parsley-row">
                        <label>Link Video<span class="req">*</span></label>
                        <input type="text" class="md-input" name="linkvideoGALLERY" autocomplete value="<?php echo cetak($getgallery->linkvideoGALLERY);?>" id="link_required"/>
                      </div>
                      <p class="text-red"><?php echo form_error('linkvideoGALLERY'); ?></p>
                    </div>
                  </div>
                  <div class="uk-width-medium-1-1 uk-margin-top">
                   <div class="uk-form-row">
                     <span class="uk-input-group-addon"><?php echo form_submit('submit', 'SAVE', 'class="md-btn md-btn-primary" id="show_preloader_md"'); ?></span>
                   </div>
                 </div>
               </form>
             </li>    
           </ul>
         </div>
       </div>
     </div>
<script
src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
integrity="sha256-k2WSCIexGzOj3Euiig+TlR8gA0EmPjuc79OEeY5L45g="
crossorigin="anonymous"></script>
<?php if($getgallery->categoryGALLERY == 1){ ?>
<script type="text/javascript">
  $("#row_photo").show();
  $("#row_video").hide();
</script>
<?php } else { ?>
<script type="text/javascript">
  $("#row_video").show();
  $("#row_photo").hide();
</script>
<?php } ?>
<script type="text/javascript">
  $(document).ready(function () {
  
  $('#selbox_cat').on('change',function(){
    if( $(this).val()==="1"){
      $("#row_photo").show();
      $("#row_video").hide();
    } else {
      $('#link_required').attr('required', true);
      $("#row_video").show();
      $("#row_photo").hide();
    }
  });
});
</script>