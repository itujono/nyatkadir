<?php
defined('BASEPATH') OR exit('No direct script access allowed');

$title1 = 'Buat Data Menu';
$actions = 'savemenu';
$controller = 'menu_admin';
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
        <?php 
          if($listmenu != NULL){
            $li = '<li class="uk-width-1-1 uk-active"><a href="#">Form Menu Admin</a></li>';
          } else {
            $li = '<li class="uk-width-1-1 uk-active"><a href="#">List Menu Admin</a></li>';
          }
        ?>
        <?php echo $li;?>
      </ul>
      <ul id="tabs_4" class="uk-switcher uk-margin">
      <?php 
          if($listmenu == NULL){
      ?>
        <li>
          <div class="uk-grid" data-uk-grid-margin>
              <div class="uk-width-1-1">
                  <ul class="uk-nestable" data-uk-nestable>
                      <li class="uk-nestable-item">
                        <?php
                        if(!empty($parent)) {
                          foreach ($parent as $par) {
                            if($par->parentMENU == 0){
                              $id = encode($par->idMENU);
                              $url1 = 'administrator/'.$controller.'/form_menu/'.urlencode($id);
                        ?>
                          <div class="uk-nestable-panel">
                              <i class="material-icons md-24 md-dark"><?php echo $par->iconMENU;?></i>&nbsp;<?php echo $par->namaMENU;?>
                              <?php if($this->session->userdata('is_admin') == 1) { ?>
                              <a href="#" onclick="UIkit.modal.confirm('Are you sure want to change this data  <b><?php echo $par->namaMENU;?> ?', function(){ document.location.href='<?php echo site_url($url1);?>'; });"><i class="md-icon material-icons" data-uk-tooltip title="Edit Menu">&#xE254;</i>
                              </a>
                              <?php } ?>
                          </div>
                          <br>
                          <ul>
                          <?php
                          if(!empty($child)) {
                          foreach ($child as $chi) {
                            if($chi->parentMENU != 0){
                              if($par->idMENU == $chi->parentMENU){
                              $id = encode($chi->idMENU);
                              $url2 = 'administrator/'.$controller.'/form_menu/'.urlencode($id);
                          ?>
                              <li class="uk-nestable-item">
                                  <div class="uk-nestable-panel">
                                      - &nbsp;<?php echo $chi->namaMENU;?>&nbsp;
                                      <?php if($this->session->userdata('is_admin') == 1) { ?>
                                      <a href="#" onclick="UIkit.modal.confirm('Are you sure want to change this data <b><?php echo $chi->namaMENU;?> ?', function(){ document.location.href='<?php echo site_url($url2);?>'; });"><i class="md-icon material-icons" data-uk-tooltip title="Edit Menu">&#xE254;</i>
                                      </a>
                                      <?php } ?>
                                  </div>
                              </li>
                              <br>
                              <?php } ?>
                            <?php } ?>
                          <?php } ?>
                          <?php } ?>
                          </ul>
                        <?php } ?>
                        <?php } ?>
                        <?php } ?>
                      </li>
                  </ul>
              </div>
          </div>
        </li>
        <?php } else { ?>
        <li>
          <h3 class="heading_a uk-margin-bottom">Buat data baru atau Perbaharui data</h3>
          <form method="post" name="formmenu" action="<?php echo $url;?>" id="form_validation">
            <?php echo form_hidden('idMENU',encode($getmenu->idMENU),'hidden'); ?>
            <div class="uk-grid" data-uk-grid-margin>
              <div class="uk-width-medium-1-3 uk-margin-top">
                <label>Nama Menu</label>
                <br>
                <input type="text" class="md-input label-fixed" name="namaMENU" autocomplete value="<?php echo $getmenu->namaMENU;?>" required/>
                <p class="text-red"><?php echo form_error('namaMENU'); ?></p>
              </div>
              <div class="uk-width-medium-1-3 uk-margin-top">
                <label>Parent Menu</label>
                <br>
                  <?php echo form_dropdown('parentMENU', $list_dropdown_menu, $getmenu->parentMENU,'required id="select_demo_5" data-md-selectize data-md-selectize-bottom'); ?>
                  <p class="text-red"><?php echo form_error('parentMENU'); ?></p>
              </div>
              <div class="uk-width-medium-1-3 uk-margin-top">
                <label>Icon Menu</label>
                <br>
                <input type="text" class="md-input label-fixed" name="iconMENU" autocomplete value="<?php echo $getmenu->iconMENU;?>" required/>
                <p class="text-red"><?php echo form_error('iconMENU'); ?></p>
              </div>
            </div>
            <div class="uk-grid" data-uk-grid-margin>
              <div class="uk-width-medium-1-1 uk-margin-top">
                <div class="md-card">
                  <div class="md-card-content">
                  <label>Akses Menu</label>
                  <br>
                    <select id="select_access" name="accessMENU[]" multiple>
                    <?php
                    $getuseraccess = select_accessmenu_by_user();
                    print_r($this->db->last_query());
                    exit;
                    if(!empty($getuseraccess)){
                      foreach ($getuseraccess as $key => $val) {
                    ?>
                      <option value="<?php echo $val->idADMIN;?>" selected><?php echo $val->nameADMIN;?></option>
                      <?php } ?>
                    <?php } ?>
                    </select>
                  </div>
                </div>
              </div>
            </div>
            <div class="uk-grid" data-uk-grid-margin>
              <div class="uk-width-medium-1-2 uk-margin-top">
                <label>Status Menu</label>
                <br>
                <br>
                  <?php
                    $checkdis= '';
                    if($getmenu->statusMENU == 1) $checkdis = 'checked' ;
                  ?>
                  <input type="checkbox" data-switchery <?php echo $checkdis; ?> data-switchery-size="large" data-switchery-color="#d32f2f" name="statusMENU" id="switch_demo_large">
                  <label for="switch_demo_large" class="inline-label"><b>Aktifkan Status</b></label>
              </div>
            </div>
            <div class="uk-width-medium-1-1 uk-margin-top">
             <div class="uk-form-row">
               <span class="uk-input-group-addon"><?php echo form_submit('submit', 'SAVE', 'class="md-btn md-btn-primary" id="show_preloader_md"'); ?></span>
             </div>
            </div>
         </form>
        </li>
        <?php } ?>
      </ul>
    </div>
  </div>
</div>


