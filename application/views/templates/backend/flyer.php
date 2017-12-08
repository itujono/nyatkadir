<?php
defined('BASEPATH') OR exit('No direct script access allowed');

$title1 = 'Buat Data Flyer Baru';
$actions = 'saveflyer';
$controller = 'flyer';
if($getflyer->idFLYER != NULL){
 $title1 = 'Perbaharui Data Flyer';
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
        <li class="uk-width-1-2 <?php echo $tab['data-tab']?>>"><a href="#">Daftar Flyer</a></li>
        <li class="uk-width-1-2 <?php echo $tab['form-tab']?>"><a href="#">Form Flyer</a></li>
      </ul>
      <ul id="tabs_4" class="uk-switcher uk-margin">
        <li>
          <table id="dt_individual_search" class="uk-table" cellspacing="0" width="100%">
            <thead>
              <tr>
                <th>No.</th>
                <th>Status</th>
                <th>Thumbnail</th>
                <th>Judul</th>
                <th>Mulai</th>
                <th>Berakhir</th>
                <th>Created</th>
                <th>Action</th>
              </tr>
            </thead>
            <tfoot>
              <tr>
                <th>No.</th>
                <th>Status</th>
                <th>Thumbnail</th>
                <th>Judul</th>
                <th>Mulai</th>
                <th>Berakhir</th>
                <th>Created</th>
                <th>Action</th>
              </tr>
            </tfoot>
            <tbody>
              <?php 
              if(!empty($listflyer)){
                foreach ($listflyer  as $key => $flyer) { 
                  $id = encode($flyer->idFLYER);
                  $today = strtotime(date("Y-m-d"));
                  $start_flyer = strtotime($flyer->startFLYER);
                  $end_flyer = strtotime($flyer->endFLYER);
                  if($today > $end_flyer){
                    $status = '<span class="uk-badge uk-badge-danger">Berakhir</span>';
                  } elseif($start_flyer > $today) {
                    $status = '<span class="uk-badge uk-badge-warning">Belum Aktif</span>';
                  } else {
                    $status = '<span class="uk-badge uk-badge-primary">Aktif</span>'; 
                  }
              ?>
                  <tr>
                    <td><?php echo $key+1; ?></td>
                    <td><img class="img_thumb" src="<?php echo $flyer->imageFLYER;?>" alt="<?php echo $flyer->titleFLYER;?>"/></td>
                    <td><?php echo $status; ?></td>
                    <td><?php echo $flyer->titleFLYER; ?></td>
                    <td><?php echo date('d F Y', strtotime($flyer->startFLYER));?></td>
                    <td><?php echo date('d F Y', strtotime($flyer->endFLYER));?></td>
                    <td><?php echo date('d F Y', strtotime($flyer->createdateFLYER));?></td>
                    <?php
                    $icndel = '&#xE16C;';
                    $msg1 = 'Are you sure want to delete this data ?';
                    $msg2 = 'Are you sure want to change this data ?';
                    $url1 = 'administrator/'.$controller.'/actiondelete_flyer/'.urlencode($id);
                    $url2 = 'administrator/'.$controller.'/index_flyer/'.urlencode($id);
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
              <form method="post" name="formslider" action="<?php echo $url;?>" id="form_validation" enctype="multipart/form-data" class="uk-form-stacked">
              <input type="hidden" name="<?php echo $this->security->get_csrf_token_name();?>" value="<?php echo $this->security->get_csrf_hash();?>" />
                <?php echo form_hidden('idFLYER',encode($getflyer->idFLYER),'hidden'); ?>
                <div class="uk-grid" data-uk-grid-margin>
                  <div class="uk-width-medium-1-1">
                    <div class="md-card">
                      <div class="md-card-content">
                        <?php
                          if(!empty($getflyer->imageFLYER)){
                        ?>
                        <div class="uk-margin-bottom uk-text-center uk-position-relative">
                            <a href="#" class="uk-modal-close uk-close uk-close-alt uk-position-absolute" onclick="UIkit.modal.confirm('Apakah anda yakin akan menghapus gambar ini?', function(){ document.location.href='<?php echo base_url().$this->data['folBACKEND'].$controller."/deleteimgflyer/".encode($getflyer->idFLYER); ?>'; });"></a>
                            <img src="<?php echo $getflyer->imageFLYER;?>" alt="<?php echo $getflyer->titleFLYER;?>" class="img_medium"/>
                        </div>
                        <?php } else { ?>
                          <?php echo form_upload('imgFLYER','','class="md-input" required'); ?>
                        <?php } ?>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="uk-grid" data-uk-grid-margin>
                  <div class="uk-width-medium-1-1 uk-margin-top">
                    <div class="parsley-row">
                      <label>Judul<span class="req">*</span></label>
                      <input type="text" class="md-input" name="titleFLYER" autocomplete value="<?php echo cetak($getflyer->titleFLYER);?>" required/>
                    </div>
                    <p class="text-red"><?php echo form_error('titleFLYER'); ?></p>
                  </div>
                </div>
                <div class="uk-grid" data-uk-grid-margin>
                    <div class="uk-width-medium-1-2 uk-margin-top">
                      <div class="uk-input-group">
                          <span class="uk-input-group-addon"><i class="uk-input-group-icon uk-icon-calendar"></i></span>
                          <label for="uk_dp_start">Mulai Flyer</label>
                          <?php 
                          if(!empty($getflyer->startFLYER)){ 
                            $start = str_replace('-', '.', date('d.m.Y',strtotime($getflyer->startFLYER)));
                          } else {
                            $start = $getflyer->startFLYER;
                          }

                          ?>
                          <input class="md-input" name="startFLYER" value="<?php echo $start;?>" type="text" id="uk_dp_start" required="required">
                      </div>
                    </div>
                    <div class="uk-width-medium-1-2 uk-margin-top">
                      <div class="uk-input-group">
                          <span class="uk-input-group-addon"><i class="uk-input-group-icon uk-icon-calendar"></i></span>
                          <label for="uk_dp_end">Berakhir Flyer</label>
                          <?php 
                          if(!empty($getflyer->endFLYER)){ 
                            $end = str_replace('-', '.', date('d.m.Y',strtotime($getflyer->endFLYER)));
                          } else {
                            $end = $getflyer->endFLYER;
                          }
                          ?>
                          <input class="md-input" name="endFLYER" value="<?php echo $end; ?>" type="text" id="uk_dp_end" required="required">
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
   </ul>
 </div>
</div>
</div>