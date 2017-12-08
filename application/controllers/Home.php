<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends Frontend_Controller {

	public function __construct (){
		parent::__construct();
		$this->load->model('Slider_m');
		$this->load->model('Article_m');
		$this->load->model('Polling_m');
		$this->load->model('Mitra_m');
		$this->load->model('Polling_choice_m');
		$this->load->model('News_m');
		$this->load->model('Flyer_m');
	}

	public function index() {
		$data['addONS'] = 'home';
		$data['title'] = 'Nyat Kadir - Laman Resmi';

		$data['listslider'] = $this->Slider_m->selectall_slider()->result();
		foreach ($data['listslider'] as $key => $value) {
			$map = directory_map('assets/upload/slider/pic-slider-'.folenc($data['listslider'][$key]->idSLIDER), FALSE, TRUE);
			if(!empty($map)){
				$data['listslider'][$key]->imageSLIDER = base_url() . 'assets/upload/slider/pic-slider-'.folenc($data['listslider'][$key]->idSLIDER).'/'.$map[0];
			} else {
				$data['listslider'][$key]->imageSLIDER = base_url() . 'assets/upload/no-image-available.png';
			}
		}
		$data['listarticle'] = $this->Article_m->selectall_article()->result();
		$data['getpolling'] = $this->Polling_m->selectall_polling('',1)->row();

		$session_user = $this->session->userdata('idUSER');
		if(empty($data['getpolling'])){
			$polling_data = '';
		} else {
			$polling_data = $data['getpolling']->idPOLLING;
		}
		
		$data['check_choice_polling'] = $this->Polling_choice_m->check_choice_polling($polling_data, $session_user)->row();

		$data['listmitra'] = $this->Mitra_m->selectall_mitra()->result();
		foreach ($data['listmitra'] as $key => $value) {
			$map = directory_map('assets/upload/mitra_kerja/pic-mitra-'.folenc($data['listmitra'][$key]->idMITRA), FALSE, TRUE);
			if(!empty($map)){
				$data['listmitra'][$key]->imageMITRA = base_url() . 'assets/upload/mitra_kerja/pic-mitra-'.folenc($data['listmitra'][$key]->idMITRA).'/'.$map[0];
			} else {
				$data['listmitra'][$key]->imageMITRA = base_url() . 'assets/upload/no-image-available.png';
			}
		}

		$data['updated_at_home'] = $this->News_m->selectall_random_news('',1)->result();

		$data['getflyer'] = $this->Flyer_m->select_flyer_in_frontend()->row();
		$map = directory_map('assets/upload/flyer/pic-flyer-'.folenc($data['getflyer']->idFLYER), FALSE, TRUE);
		if(!empty($map)){
			$data['getflyer']->imageFLYER = base_url() . 'assets/upload/flyer/pic-flyer-'.folenc($data['getflyer']->idFLYER).'/'.$map[0];
		} else {
			$data['getflyer']->imageFLYER = '';
		}

		if(!empty($this->session->flashdata('message_choice'))) {
            $data['message_choice'] = $this->session->flashdata('message_choice');
        }
        if(!empty($this->session->flashdata('message_aspirasi'))) {
            $data['message_aspirasi'] = $this->session->flashdata('message_aspirasi');
        }
        
		$data['subview'] = $this->load->view($this->data['frontendDIR'].'home', $data, TRUE);
        $this->load->view($this->data['rootDIR'].'_layout_base_frontend',$data);
	}
}
