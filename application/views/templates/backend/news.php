<?php
defined('BASEPATH') OR exit('No direct script access allowed');

$title1 = 'Buat Data Berita';
$actions = 'savenews';
$controller = 'news';
if($getnews->idNEWS != NULL){
 $title1 = 'Perbaharui Data Berita';
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
        <li class="uk-width-1-2 <?php echo $tab['data-tab']?>>"><a href="#">List Berita</a></li>
        <li class="uk-width-1-2 <?php echo $tab['form-tab']?>"><a href="#">Form Berita</a></li>
      </ul>
      <ul id="tabs_4" class="uk-switcher uk-margin">
        <li>
          <table id="dt_individual_search" class="uk-table" cellspacing="0" width="100%">
            <thead>
              <tr>
                <th>No.</th>
                <th>Gambar</th>
                <th>Judul</th>
                <th>Created</th>
                <th>Action</th>
              </tr>
            </thead>
            <tfoot>
              <tr>
                <th>No.</th>
                <th>Gambar</th>
                <th>Judul</th>
                <th>Created</th>
                <th>Action</th>
              </tr>
            </tfoot>
            <tbody>
              <?php
              if(!empty($listnews)){
                foreach ($listnews  as $key => $news) {
                  $id = encode($news->idNEWS);
                  ?>
                  <tr>
                    <td><?php echo $key+1; ?></td>
                    <td><img class="img_thumb" src="<?php echo $news->imageNEWS;?>" alt="<?php echo $news->titleNEWS;?>"/></td>
                    <td><?php echo $news->titleNEWS; ?></td>
                    <td><?php echo date('d F Y', strtotime($news->createdateNEWS));?></td>
                    <?php
                    $icndel = '&#xE16C;';
                    if($news->bestNEWS == 1){
                        $id2 = '';
                        $icnbest = '&#xE838;';
                        $tooltip = 'Berita Terbaik';
                      } else {
                        $id2 = '/1';
                        $icnbest = '&#xE83A;';
                        $tooltip = 'Bukan Berita Terbaik';
                      }
                    $msg1 = 'Are you sure want to delete this data ?';
                    $msg2 = 'Are you sure want to change this data ?';
                    $msg3 = 'Are you sure want to change this best news ?';
                    $url1 = 'administrator/'.$controller.'/actiondelete_news/'.urlencode($id);
                    $url2 = 'administrator/'.$controller.'/index_news/'.urlencode($id);
                    $url3 = 'administrator/'.$controller.'/change_best_news/'.urlencode($id).$id2;
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
            <li>
              <h3 class="heading_a uk-margin-bottom">Buat data baru atau Perbaharui data</h3>
              <form method="post" name="formnews" action="<?php echo $url;?>" enctype="multipart/form-data" id="form_validation">
                <input type="hidden" name="<?php echo $this->security->get_csrf_token_name();?>" value="<?php echo $this->security->get_csrf_hash();?>" />
                <?php echo form_hidden('idNEWS',encode($getnews->idNEWS),'hidden'); ?>
                <div class="uk-grid" data-uk-grid-margin>
                  <div class="uk-width-medium-1-1">Upload Gambar Berita
                    <?php echo form_upload('imgNEWS[]','','class="md-input" multiple');?>
                    <ul class="img-edit clearfix">
                      <?php 
                      if(!empty($getnews->map)){
                        foreach ($getnews->map as $key=> $value_img) { ?>
                        <li class="uk-position-relative">
                          <a href="#" class="uk-modal-close uk-close uk-close-alt uk-position-absolute" onclick="UIkit.modal.confirm('Are you sure want to delete this picture?', function(){ document.location.href='<?php echo base_url().'administrator/'.$controller."/deleteimg_news/".encode($getnews->idNEWS).'/'.$getnews->imgs[$key]; ?>'; });"></a>
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
                      <label>Judul</label>
                      <br>
                      <input type="text" class="md-input label-fixed" name="titleNEWS" autocomplete value="<?php echo $getnews->titleNEWS;?>" required/>
                      <p class="text-red"><?php echo form_error('titleNEWS'); ?></p>
                    </div>
                    <div class="uk-width-medium-1-2 uk-margin-top">
                    <div class="parsley-row">
                      <?php
                        $checkdis= '';
                        if($getnews->bestNEWS == 1) $checkdis = 'checked' ;
                      ?>
                      <input type="checkbox" data-switchery <?php echo $checkdis; ?> data-switchery-size="large" data-switchery-color="#7cb342" name="bestNEWS" id="switch_demo_large">
                      <label for="switch_demo_large" class="inline-label"><b>Berita Terbaik</b></label>
                    </div>
                  </div>
                  </div>
                  <div class="uk-grid" data-uk-grid-margin>
                    <div class="uk-width-medium-1-1 uk-margin-top">
                      <label>Isi</label>
                      <br>
                      <textarea id="wysiwyg_tinymce_codewell" cols="30" rows="4" name="descNEWS" class="md-input autosized"><?php echo $getnews->descNEWS;?></textarea>
                      <p class="text-red"><?php echo form_error('descNEWS'); ?></p>
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
