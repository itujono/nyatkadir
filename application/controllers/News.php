<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class News extends Frontend_Controller {

	public function __construct (){
		parent::__construct();
		$this->load->model('News_m');
	}

	public function index() {
		$data['addONS'] = 'general_addon';
		$data['title'] = 'News & Event - Nyat Kadir - Laman Resmi';

		$data['listnews'] = $this->News_m->selectall_news()->result();
		foreach ($data['listnews'] as $key => $value) {
			$map = directory_map('assets/upload/news/pic-news-'.folenc($data['listnews'][$key]->idNEWS), FALSE, TRUE);
			if(!empty($map)){
				$data['listnews'][$key]->imageNEWS = base_url() . 'assets/upload/news/pic-news-'.folenc($data['listnews'][$key]->idNEWS).'/'.$map[0];
			} else {
				$data['listnews'][$key]->imageNEWS = '';
			}
		}

		$data['subview'] = $this->load->view($this->data['frontendDIR'].'news', $data, TRUE);
        $this->load->view($this->data['rootDIR'].'_layout_base_frontend',$data);
	}
	
	public function detail() {
		$data['addONS'] = 'general_addon';
		$data['title'] = 'Detail News Nyat Kadir - Laman Resmi';

		$data['subview'] = $this->load->view($this->data['frontendDIR'].'news_detail', $data, TRUE);
        $this->load->view($this->data['rootDIR'].'_layout_base_frontend',$data);
	}
}
