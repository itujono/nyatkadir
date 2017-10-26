<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>
<h3 class="heading_b uk-margin-bottom">Daftar Pengguna</h3>
<?php if (!empty($message)){ ?>
  <div class="uk-alert uk-alert-<?php echo $message['type']; ?>" data-uk-alert>
    <a href="#" class="uk-alert-close uk-close"></a>
    <h4><?php echo $message['title']; ?></h4>
    <?php echo $message['text']; ?>
    <?php if(!empty(form_error('emailADMIN')) OR !empty(form_error('passwordADMIN'))) { ?>
    <ul>
        <?php if(!empty(form_error('emailADMIN'))) { ?>
        <li><p class="text-red"><?php echo form_error('emailADMIN'); ?></p></li>
        <?php } elseif (!empty(form_error('passwordADMIN'))) { ?>
        <li><p class="text-red"><?php echo form_error('passwordADMIN'); ?></p></li>
        <?php } ?>
    </ul>
    <?php } ?>
  </div>
<?php } ?>
<div class="md-card uk-margin-medium-bottom">
    <div class="md-card-content">
        <div class="uk-grid" data-uk-grid-margin>
            <div class="uk-width-medium-1-2">
                <label for="contact_list_search">Cari... (min. 3 karakter.)</label>
                <input class="md-input" type="text" id="contact_list_search"/>
            </div>
            <div class="uk-width-medium-1-2">
            <button class="md-fab md-fab-accent" data-uk-modal="{target:'#modal_large'}"><i class="material-icons">&#xE145;</i></button>
            <div class="uk-modal" id="modal_large">
            <div class="uk-modal-dialog uk-modal-dialog-large">
                <button type="button" class="uk-modal-close uk-close"></button>
                <?php
                    $actions = 'saveuser';
                    $controller = 'user';
                    $url = base_url().'administrator/'.$controller.'/'.$actions;
                ?>
                <h3 class="heading_a uk-margin-bottom">Buat data baru atau Perbaharui data</h3>
                <form method="post" name="formuser" action="<?php echo $url;?>"">
                <div class="uk-grid" data-uk-grid-margin>
                  <div class="uk-width-medium-1-1 uk-margin-top">
                    <label>Nama</label>
                    <br>
                    <input type="text" class="md-input" name="nameADMIN" autocomplete required="required" />
                    <p class="text-red"><?php echo form_error('nameADMIN'); ?></p>
                  </div>
                  <div class="uk-width-medium-1-1 uk-margin-top">
                    <label>Email</label>
                    <br>
                    <input type="email" class="md-input" name="emailADMIN" required="required" />
                    <p class="text-red"><?php echo form_error('emailADMIN'); ?></p>
                  </div>
                  <div class="uk-width-medium-1-1 uk-margin-top">
                    <label>Password</label>
                    <br>
                    <input type="password" class="md-input" name="passwordADMIN" required="required"/>
                    <p class="text-red"><?php echo form_error('passwordADMIN'); ?></p>
                  </div>
                </div>
                <div class="uk-width-medium-1-1 uk-margin-top">
                 <div class="uk-form-row">
                   <span class="uk-input-group-addon"><?php echo form_submit('submit', 'SAVE', 'class="md-btn md-btn-primary" id="show_preloader_md"'); ?></span>
                 </div>
                </div>
               </form>
            </div>  
            </div>
        </div>
        </div>
    </div>
</div>

<h3 class="heading_b uk-text-center grid_no_results" style="display:none">Tidak ada data ditemukan.</h3>
<div class="uk-grid-width-small-1-2 uk-grid-width-medium-1-3 uk-grid-width-large-1-4 uk-grid-width-xlarge-1-5 hierarchical_show" id="contact_list">
<?php 
if(!empty($listuser)){
    foreach ($listuser as $user) {

?>
    <div data-uk-filter="<?php echo strtolower($user->emailADMIN);?>,<?php echo strtolower($user->nameADMIN);?>">
        <div class="md-card md-card-hover">
            <div class="md-card-head">
                <div class="md-card-head-menu" data-uk-dropdown="{pos:'bottom-right'}">
                    <i class="md-icon material-icons">&#xE5D4;</i>
                    <div class="uk-dropdown uk-dropdown-small">
                        <ul class="uk-nav">
                            <li><a href="<?php echo base_url();?>administrator/user/saveuser/<?php echo encode($user->idADMIN);?>">Edit</a></li>
                            <li><a href="<?php echo base_url();?>administrator/user/actiondelete_user/<?php echo encode($user->idADMIN);?>">Hapus</a></li>
                        </ul>
                    </div>
                </div>
                <div class="uk-text-center">
                    <img class="md-card-head-avatar" src="<?php echo base_url().$this->data['asback'];?>img/avatars/avatar_06.png" alt=""/>
                </div>
                <h3 class="md-card-head-text uk-text-center">
                    <?php echo ucwords($user->nameADMIN);?>
                    <br>
                </h3>
            </div>
            <div class="md-card-content">
                <ul class="md-list">
                    <li>
                        <div class="md-list-content">
                            <span class="md-list-heading">Email</span>
                            <span class="uk-text-small uk-text-muted uk-text-truncate"><?php echo strtolower($user->emailADMIN);?></span>
                        </div>
                    </li>
                    <li>
                        <div class="md-list-content">
                            <span class="md-list-heading">Terakhir Login</span>
                            <?php
                            if($user->lastloginADMIN == '0000-00-00 00:00:00'){
                                $lastlog = 'Belum ada';
                            } else {
                                $lastlog = '<b style="color:red;"><i>'.timeAgo(dF('H:i:s',strtotime($user->lastloginADMIN))).'</i></b>';
                            }
                            ?>
                            <span class="uk-text-small uk-text-muted"><?php echo $lastlog; ?></span>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <?php } ?>
<?php } ?>
</div>