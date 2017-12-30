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
		
		$data['list_month_gallery'] = $this->Gallery_m->list_month_gallery()->result();
		
		$data['subview'] = $this->load->view($this->data['frontendDIR'].'gallery', $data, TRUE);
        $this->load->view($this->data['rootDIR'].'_layout_base_frontend',$data);
	}
}
