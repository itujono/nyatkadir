<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Gallery extends Frontend_Controller {

	public function __construct (){
		parent::__construct();
		$this->load->model('Gallery_m');
	}

	public function index() {
		$data['addONS'] = 'gallery';
		$data['title'] = 'Galeri Nyat Kadir - Laman Resmi';

		$data['listgallery'] = $this->Gallery_m->selectall_gallery()->result();
		foreach ($data['listgallery'] as $key => $value) {
			$map = directory_map('assets/upload/gallery/pic-gallery-'.seo_url($data['listgallery'][$key]->titleGALLERY), FALSE, TRUE);
			if(!empty($map)){
				$data['listgallery'][$key]->imageGALLERY = base_url() . 'assets/upload/gallery/pic-gallery-'.seo_url($data['listgallery'][$key]->titleGALLERY).'/'.$map[0];
			} else {
				$data['listgallery'][$key]->imageGALLERY = base_url() . 'assets/upload/no-image-available.png';
			}
		}

		$data['subview'] = $this->load->view($this->data['frontendDIR'].'gallery', $data, TRUE);
        $this->load->view($this->data['rootDIR'].'_layout_base_frontend',$data);
	}
}
