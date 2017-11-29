<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends Frontend_Controller {

	public function __construct (){
		parent::__construct();
		$this->load->model('Slider_m');
		$this->load->model('Idea_m');
		$this->load->model('Polling_m');
		$this->load->model('Mitra_m');
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
		$data['listidea'] = $this->Idea_m->selectall_idea()->result();
		$data['getpolling'] = $this->Polling_m->selectall_polling('',1)->row();

		$data['listmitra'] = $this->Mitra_m->selectall_mitra()->result();
		foreach ($data['listmitra'] as $key => $value) {
			$map = directory_map('assets/upload/mitra_kerja/pic-mitra-'.folenc($data['listmitra'][$key]->idMITRA), FALSE, TRUE);
			if(!empty($map)){
				$data['listmitra'][$key]->imageMITRA = base_url() . 'assets/upload/mitra_kerja/pic-mitra-'.folenc($data['listmitra'][$key]->idMITRA).'/'.$map[0];
			} else {
				$data['listmitra'][$key]->imageMITRA = base_url() . 'assets/upload/no-image-available.png';
			}
		}

		$data['subview'] = $this->load->view($this->data['frontendDIR'].'home', $data, TRUE);
        $this->load->view($this->data['rootDIR'].'_layout_base_frontend',$data);
	}
}
