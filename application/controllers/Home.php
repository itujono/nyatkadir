<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends Frontend_Controller {

	public function __construct (){
		parent::__construct();
		//$this->load->model('Rental_m');
	}

	public function index() {
		$data['addONS'] = 'home';
		$data['title'] = 'Nyat Kadir - Laman Resmi';

		$data['subview'] = $this->load->view($this->data['frontendDIR'].'home', $data, TRUE);
        $this->load->view($this->data['rootDIR'].'_layout_base_frontend',$data);
	}
}