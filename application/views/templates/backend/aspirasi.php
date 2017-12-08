<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<div class="uk-width-medium-1-1">
  <h4 class="heading_a uk-margin-bottom">Daftar Aspirasi</h4>
  <div class="md-card">
    <div class="md-card-content">
      <ul class="uk-tab uk-tab-grid" data-uk-tab="{connect:'#tabs_4'}">
        <li class="uk-width-1-1 uk-active>"><a href="#">Daftar Aspirasi</a></li>
      </ul>
      <ul id="tabs_4" class="uk-switcher uk-margin">
        <li>
          <table id="dt_individual_search" class="uk-table" cellspacing="0" width="100%">
            <thead>
              <tr>
                <th>No.</th>
                <th>Detail</th>
                <th>Nama</th>
                <th>Judul</th>
                <th>Tipe</th>
                <th>Created</th>
              </tr>
            </thead>
            <tfoot>
              <tr>
                <th>No.</th>
                <th>Detail</th>
                <th>Nama</th>
                <th>Judul</th>
                <th>Tipe</th>
                <th>Created</th>
              </tr>
            </tfoot>
            <tbody>
              <?php 
              if(!empty($listaspirasi)){
                foreach ($listaspirasi  as $key => $aspirasi) {
                  if($aspirasi->userASPIRASI > 0){
                    $users_aspirasi = 'Member';
                  } else {
                    $users_aspirasi = 'Tamu';
                  }
                  ?>
                  <tr>
                    <td><?php echo $key+1; ?></td>
                    <td><a class="md-btn" onclick="modalBOX('<?php echo $aspirasi->idASPIRASI; ?>')" data-uk-modal></a></td>
                    <td><?php echo $aspirasi->nameASPIRASI; ?></td>
                    <td><?php echo $aspirasi->subjectASPIRASI; ?></td>
                    <td><?php echo $users_aspirasi; ?></td>
                    <td><?php echo date('d F Y', strtotime($aspirasi->createdateASPIRASI));?></td>
                  </tr>
                  <?php } ?>
                  <?php } ?>
                </tbody>
              </table>
            </li>
            <!-- END LIST SLIDER -->  
          </ul>
        </div>
      </div>
    </div>
    <!-- MODAL -->
      <div class="uk-modal" id="modal_header_footer">
          <div class="uk-modal-dialog">
              <div class="uk-modal-header">
                  <div class="uk-text-right">
                      <button type="button" class="md-btn md-btn-flat md-btn-primary uk-modal-close">Close</button>
                  </div>
                  <div id="subject"></div>
                  <!-- <h3 class="uk-modal-title">Suggestions BOX</h3> -->
              </div>
              <div id="name_user"></div>
              <div id="timestamps"></div>
              
              <div id="description" class="uk-text-justify"></div>
              <div class="uk-modal-footer uk-text-right">
                  <div class="uk-text-right" id="name_user"></div>
              </div>
          </div>
      </div>
  <!-- MODAL -->
