<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class About extends Frontend_Controller {

	public function __construct (){
		parent::__construct();
		$this->load->model('About_m');
		$this->load->model('Gallery_m');
	}

	public function index() {
		$data['addONS'] = 'general_addon';
		$data['title'] = 'Tentang Nyat Kadir - Laman Resmi';

		$data['listabout'] = $this->About_m->selectall_about()->result();
		foreach ($data['listabout'] as $key => $value) {
			$map = directory_map('assets/upload/about/header-about/pic-header-about-'.folenc($data['listabout'][$key]->idABOUT), FALSE, TRUE);
			if(!empty($map)){
				$data['listabout'][$key]->imageABOUT = base_url() . 'assets/upload/about/header-about/pic-header-about-'.folenc($data['listabout'][$key]->idABOUT).'/'.$map[0];
			} else {
				$data['listabout'][$key]->imageABOUT = base_url() . 'assets/upload/no-image-available.png';
			}
		}
		$data['listgallery'] = $this->Gallery_m->selectall_gallery('',1)->result();
		foreach ($data['listgallery'] as $key => $value) {
			$map = directory_map('assets/upload/gallery/pic-gallery-'.seo_url($data['listgallery'][$key]->titleGALLERY), FALSE, TRUE);
			if(!empty($map)){
				$data['listgallery'][$key]->imageGALLERY = base_url() . 'assets/upload/gallery/pic-gallery-'.seo_url($data['listgallery'][$key]->titleGALLERY).'/'.$map[0];
			} else {
				$data['listgallery'][$key]->imageGALLERY = base_url() . 'assets/upload/no-image-available.png';
			}
		}

		$data['subview'] = $this->load->view($this->data['frontendDIR'].'about', $data, TRUE);
        $this->load->view($this->data['rootDIR'].'_layout_base_frontend',$data);
	}
}
