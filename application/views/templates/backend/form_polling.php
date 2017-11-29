<?php
defined('BASEPATH') OR exit('No direct script access allowed');

$title1 = 'Masukan data polling';
$actions = 'savepolling';
$controller = 'polling';
if($getpolling->idPOLLING != NULL){
 $title1 = 'Perbaharui data polling';
} 
$url = base_url().$this->data['folBACKEND'].$controller.'/'.$actions;
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
        <li class="uk-width-1-1 uk-active"><a href="#">Form Polling</a></li>
      </ul>
      <ul id="tabs_4" class="uk-switcher uk-margin">
        <li>
          <h3 class="heading_a uk-margin-bottom">Tambah atau perbaharui Polling</h3>
          <form method="POST" name="form_polling" action="<?php echo $url;?>" id="form_validation">
            <input type="hidden" name="<?php echo $this->security->get_csrf_token_name();?>" value="<?php echo $this->security->get_csrf_hash();?>" />
            <?php echo form_hidden('idPOLLING',encode($getpolling->idPOLLING),'hidden'); ?>
            <div class="uk-grid" data-uk-grid-margin>
              <div class="uk-width-medium-1-1">
                <div class="uk-form-row">
                  <div class="uk-grid" data-uk-grid-margin>
                    <div class="uk-width-medium-1-2 uk-margin-top">
                      <label>Pertanyaan Polling</label>
                      <input type="text" class="md-input input-count" id="input_counter" maxlength="120" name="questionPOLLING" required autocomplete value="<?php echo $getpolling->questionPOLLING;?>" />
                      <p class="uk-text-danger uk-text-bold"><?php echo form_error('questionPOLLING'); ?></p>
                    </div>
                    <div class="uk-width-medium-1-2 uk-margin-top">
                      <?php
                      $checkdis= '';
                      if($getpolling->statusPOLLING == 1) $checkdis = 'checked' ;
                      ?>
                      <input type="checkbox" data-switchery <?php echo $checkdis; ?> data-switchery-size="large" data-switchery-color="#d32f2f" name="statusPOLLING" id="switch_demo_large">
                      <label for="switch_demo_large" class="inline-label"><b>Aktifkan Ruangan</b></label>
                    </div>
                  </div>
                  <?php 
                  $data_polling = json_decode($getpolling->answerPOLLING,TRUE);
                  if(!empty($data_polling)){
                    ?>
                    <div class="uk-grid" data-uk-grid-margin>
                      <div class="uk-width-medium-1-1 multi-field-wrapper">
                        <button style="min-width: 49px !important; margin-left: 17px !important; padding-bottom: 10px;" type="button" class="md-btn md-btn-primary add-field"><i class="material-icons md-24">&#xE146;</i></button>
                        <div class="multi-fields">
                          <?php foreach ($data_polling as $value) { ?>
                          <div class="uk-grid multi-field" data-uk-grid-margin>
                            <div style="width: 10%" class="uk-width-medium-1-2 uk-margin-top">
                              <div class="uk-input-group mt-m">
                                <span class="uk-input-group-addon remove-field">
                                  <button type="button" style="min-width:1px; padding-bottom: 10px;" class="md-btn md-btn-danger"><i class="material-icons md-24">&#xE872;</i></button>
                                </span>
                              </div>
                            </div>
                            <div class="uk-width-medium-1-2 uk-margin-top">
                              <div class="uk-input-group">
                                <label class="uk-form-label"><b>Option Polling</b></label>
                                <label for="answerPOLLING[]"></label>
                                <input type="text" class="md-input" name="answerPOLLING[]" value="<?php echo $value[0];?>">
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
                            <div style="width: 10%" class="uk-width-medium-1-2 uk-margin-top">
                              <div class="uk-input-group mt-m">
                                <span class="uk-input-group-addon remove-field">
                                  <button type="button" style="min-width:1px; padding-bottom: 10px;" class="md-btn md-btn-danger"><i class="material-icons md-24">&#xE872;</i></button>
                                </span>
                              </div>
                            </div>
                            <div class="uk-width-medium-1-2 uk-margin-top">
                              <div class="uk-input-group">
                                <label class="uk-form-label"><b>Option Polling</b></label>
                                <label for="answerPOLLING[]"></label>
                                <input type="text" class="md-input" name="answerPOLLING[]">
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <?php } ?>
                    <div class="uk-width-medium-1-1 uk-margin-top">
                     <div class="uk-form-row">
                       <span class="uk-input-group-addon"><?php echo form_submit('submit', 'SIMPAN', 'class="md-btn md-btn-primary" id="show_preloader_md"'); ?></span>
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