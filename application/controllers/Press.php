<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Press extends Frontend_Controller {

	public function __construct (){
		parent::__construct();
		//$this->load->model('Rental_m');
	}

	public function index() {
		$data['addONS'] = 'general_addon';
		$data['title'] = 'Liputan Media - Nyat Kadir - Laman Resmi';

		$data['subview'] = $this->load->view($this->data['frontendDIR'].'press', $data, TRUE);
        $this->load->view($this->data['rootDIR'].'_layout_base_frontend',$data);
	}

	public function press_detail() {
		$data['addONS'] = 'gallery';
		$data['title'] = 'Liputan Media - Nyat Kadir - Laman Resmi';

		$data['subview'] = $this->load->view($this->data['frontendDIR'].'press_detail', $data, TRUE);
        $this->load->view($this->data['rootDIR'].'_layout_base_frontend',$data);
	}
}
