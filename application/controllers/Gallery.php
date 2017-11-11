<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Gallery extends Frontend_Controller {

	public function __construct (){
		parent::__construct();
		//$this->load->model('Rental_m');
	}

	public function index() {
		$data['addONS'] = 'gallery';
		$data['title'] = 'Galeri Nyat Kadir - Laman Resmi';

		$data['subview'] = $this->load->view($this->data['frontendDIR'].'gallery', $data, TRUE);
        $this->load->view($this->data['rootDIR'].'_layout_base_frontend',$data);
	}
}
