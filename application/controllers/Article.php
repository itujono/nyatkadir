<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Article extends Frontend_Controller {

	public function __construct (){
		parent::__construct();
		//$this->load->model('Rental_m');
	}

	public function index() {
		$data['addONS'] = 'general_addon';
		$data['title'] = 'Artikel Nyat Kadir - Laman Resmi';

		$data['subview'] = $this->load->view($this->data['frontendDIR'].'article', $data, TRUE);
        $this->load->view($this->data['rootDIR'].'_layout_base_frontend',$data);
	}

	public function detail_article() {
		$data['addONS'] = 'general_addon';
		$data['title'] = 'Detail Artikel Nyat Kadir - Laman Resmi';

		$data['subview'] = $this->load->view($this->data['frontendDIR'].'article_detail', $data, TRUE);
        $this->load->view($this->data['rootDIR'].'_layout_base_frontend',$data);
	}
}
