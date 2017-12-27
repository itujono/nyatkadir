<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Article extends Frontend_Controller {

	public function __construct (){
		parent::__construct();
		$this->load->model('Article_m');
	}

	public function index() {
		$data['addONS'] = 'general_addon';
		$data['title'] = 'Artikel Nyat Kadir - Laman Resmi';

		$data['listarticle'] = $this->Article_m->selectall_article()->result();
		foreach ($data['listarticle'] as $key => $value) {
			$map = directory_map('assets/upload/article/pic-article-'.$data['listarticle'][$key]->idARTICLE, FALSE, TRUE);
			if(!empty($map)){
				$data['listarticle'][$key]->imageARTICLE = base_url() . 'assets/upload/article/pic-article-'.$data['listarticle'][$key]->idARTICLE.'/'.$map[0];
			} else {
				$data['listarticle'][$key]->imageARTICLE = base_url() . 'assets/upload/no-image-available.png';
			}
		}
		
		$data['subview'] = $this->load->view($this->data['frontendDIR'].'article', $data, TRUE);
        $this->load->view($this->data['rootDIR'].'_layout_base_frontend',$data);
	}

	public function detail($id) {
		$data['addONS'] = 'general_addon';
		if($id == NULL){
			redirect('article');
		}
		$id = base64_decode(cutting($id));
		$data['getarticle'] = $this->Article_m->selectall_article($id)->row();
		$data['title'] = $data['getarticle']->titleARTICLE.' - Laman Resmi';

		$map = directory_map('assets/upload/article/pic-article-'.folenc($data['getarticle']->idARTICLE), FALSE, TRUE);
		$maps = array();
		$imgs = array();
		if(!empty($map)){
			foreach ($map  as $key => $value) {
				$maps[] = base_url().'assets/upload/article/pic-article-'.folenc($data['getarticle']->idARTICLE).'/'.$value;
			}
		}
		$data['getarticle']->map = $maps;
		
		$data['random_article'] = $this->Article_m->selectall_random_article($id)->result();
		$data['best_article'] = $this->Article_m->selectall_article('',1)->result();

		$data['subview'] = $this->load->view($this->data['frontendDIR'].'article_detail', $data, TRUE);
        $this->load->view($this->data['rootDIR'].'_layout_base_frontend',$data);
	}
}
