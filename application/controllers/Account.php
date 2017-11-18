<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Account extends Frontend_Controller {

	public function __construct (){
		parent::__construct();
	}

	public function index() {
		$data['addONS'] = 'general_addon';
		$data['title'] = 'Rusmanto - Nyat Kadir - Laman Resmi';

		$data['subview'] = $this->load->view($this->data['frontendDIR'].'account', $data, TRUE);
        $this->load->view($this->data['rootDIR'].'_layout_base_frontend',$data);
	}
}
