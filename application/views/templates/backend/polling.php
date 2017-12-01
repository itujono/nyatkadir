<?php defined('BASEPATH') OR exit('No direct script access allowed');?>

<h3 class="heading_b uk-margin-bottom">Daftar Polling</h3>
<?php if (!empty($message)){ ?>
<div class="uk-alert uk-alert-<?php echo $message['type']; ?>" data-uk-alert>
  <a href="#" class="uk-alert-close uk-close"></a>
  <h4><?php echo $message['title']; ?></h4>
  <?php echo $message['text']; ?>
</div>
<?php } ?>
<div class="md-card uk-margin-medium-bottom">
  <div class="md-card-content">
    <div class="uk-grid" data-uk-grid-margin>
      <div class="uk-width-medium-1-2">
        <label for="contact_list_search">Pencarian... (minimal 3 karakter.)</label>
        <input class="md-input" type="text" id="contact_list_search"/>
      </div>
      <div class="uk-width-medium-1-6 uk-margin-top">
        <a class="md-btn md-btn-success md-btn-block md-btn-wave-light md-btn-icon" href="<?php echo base_url();?>administrator/polling/form_polling"><i class="material-icons">add</i> Polling</a>
      </div>
    </div>
  </div>
</div>

<h3 class="heading_b uk-text-center grid_no_results" style="display:none">Tidak ada data polling yang ditemukan</h3>

<div class="uk-grid-width-medium-1-2 uk-grid-width-large-1-3 hierarchical_show" id="contact_list">
  <?php
  if(!empty($listpolling)){
    foreach ($listpolling as $key => $polling) {
     $controller = 'polling';
     $id = encode($polling->idPOLLING);
     $nm = 'Aktifkan Polling';
     $id2 = '/1';
     if($polling->statusPOLLING == 1){
      $id2 = '';
      $nm = 'Non Aktifkan Polling';
     }
     $msg1 = 'Apakah kamu yakin akan merubah data polling ini ?';
     $msg2 = 'Apakah kamu yakin akan menghapus data polling ini?';
     $msg3 = 'Apakah kamu yakin akan merubah status data polling ini?';
     $url1 = $this->data['folBACKEND'].$controller.'/form_polling/'.urlencode($id);
     $url2 = $this->data['folBACKEND'].$controller.'/actiondelete_polling/'.urlencode($id);
     $url3 = $this->data['folBACKEND'].$controller.'/actionedit_polling/'.urlencode($id).$id2;
     ?>
     <div data-uk-filter="<?php echo strtolower($polling->questionPOLLING);?>">
      <div class="md-card md-card-hover md-card-horizontal" style="padding-bottom: 132px;">
        <div class="md-card-head">
          <div class="md-card-head-menu" data-uk-dropdown="{pos:'bottom-left'}">
            <i class="md-icon material-icons">&#xE5D4;</i>
            <div class="uk-dropdown uk-dropdown-small">
              <ul class="uk-nav">
                <li><a href="#"  onclick="UIkit.modal.confirm('<?php echo $msg1; ?>', function(){ document.location.href='<?php echo site_url($url1);?>'; });">Edit</a></li>
                <li><a href="#" onclick="UIkit.modal.confirm('<?php echo $msg2; ?>', function(){ document.location.href='<?php echo site_url($url2);?>'; });">Hapus</a></li>
                <li><a href="#" onclick="UIkit.modal.confirm('<?php echo $msg3; ?>', function(){ document.location.href='<?php echo site_url($url3);?>'; });"><?php echo $nm;?></a></li>
              </ul>
            </div>
          </div>
          <div class="uk-text-center">
            <br>
            <br>
          </div>
          <h3 class="md-card-head-text uk-text-center">
            <?php echo $polling->questionPOLLING;?>
            <br>
            <br>
            <?php
              if(!empty($number_voting)){
                foreach ($number_voting as $choice) {
                  if($choice->idPOLLING == $polling->idPOLLING){
                    $randomprogress = ['uk-progress-success', 'uk-progress-danger', 'uk-progress-warning', ''];
                    $randomprogress = $randomprogress[array_rand($randomprogress)];
                    $total_vote = round(100*($choice->vote_value / $choice->total),2);
            ?>
            <span class="uk-text-medium uk-text-muted uk-text-left"><?php echo $choice->nameCHOICE;?> - <?php echo $total_vote;?>%</span>
            <div class="uk-progress <?php echo $randomprogress;?> uk-progress-striped uk-active uk-progress-small">
                <div class="uk-progress-bar" style="width: <?php echo $total_vote;?>%;"></div>
            </div>
            <br>
                  <?php } ?>
                <?php } ?>
              <?php } ?>
          </h3>
        </div>
        <div class="md-card-content">
          <ul class="md-list">
            <li>
              <div class="md-list-content">
                <center><span class="md-list-heading">Jumlah Pemilih</span></center>
                <br>
                <center>
                  <?php
                    $counters = counter_choice($polling->idPOLLING);
                    if($counters > 0){
                      $count = $counters." Orang";
                    } else {
                      $count = "Belum ada yang memilih";
                    }
                  ?>
                  <h3 class="md-card-head-text uk-text-center"><?php echo $count;?></h3>
                </center>
              </div>
            </li>
            <li>
              <div class="md-list-content uk-margin-top">
                <span class="md-list-heading">Dibuat</span>
                <span class="uk-text-medium uk-text-muted"><?php echo indonesian_date(strtotime($polling->createdatePOLLING));?></span>
                <br>
                <span class="md-list-heading">Status</span>
                <br>
                <?php
                  $style = "uk-text-danger";
                  $title = "Tak Aktif";
                  $icon = "error";
                  if($polling->statusPOLLING == 1){
                    $style = "uk-text-success";
                    $title = "Aktif";
                    $icon = "check_circle";
                  }
                ?>
                <i class="material-icons md-36 <?php echo $style;?>" data-uk-tooltip="{pos:'right'}" title="<?php echo $title;?>"><?php echo $icon;?></i>
              </div>
            </li>
          </ul>
        </div>
      </div>
    </div>
    <?php } ?>
    <?php } ?>
  </div>