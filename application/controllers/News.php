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

		$data['new_news'] = $this->News_m->selectall_news('','',1)->result();

		$data['subview'] = $this->load->view($this->data['frontendDIR'].'news', $data, TRUE);
        $this->load->view($this->data['rootDIR'].'_layout_base_frontend',$data);
	}
	
	public function detail($id) {
		$data['addONS'] = 'general_addon';
		if($id == NULL){
			redirect('news');
		}
		$id = base64_decode(cutting($id));
		$check_id_news = $this->News_m->check_id_news($id)->row();
		if(empty($check_id_news)){
			redirect('news');
		}
		$data['getnews'] = $this->News_m->selectall_news($id)->row();
		$data['title'] = $data['getnews']->titleNEWS.' - Laman Resmi';

		$map = directory_map('assets/upload/news/pic-news-'.folenc($data['getnews']->idNEWS), FALSE, TRUE);
		$maps = array();
		$imgs = array();
		if(!empty($map)){
			foreach ($map  as $key => $value) {
				$maps[] = base_url().'assets/upload/news/pic-news-'.folenc($data['getnews']->idNEWS).'/'.$value;
				$imgs[] = $value;
			}
		}
		$data['getnews']->map = $maps;

		$data['random_news'] = $this->News_m->selectall_random_news($id)->result();
		$data['best_news'] = $this->News_m->selectall_news('',1)->result();

		$data['subview'] = $this->load->view($this->data['frontendDIR'].'news_detail', $data, TRUE);
        $this->load->view($this->data['rootDIR'].'_layout_base_frontend',$data);
	}
}
