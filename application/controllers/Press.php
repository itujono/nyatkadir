<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Press extends Frontend_Controller {

	public function __construct (){
		parent::__construct();
		$this->load->model('Press_m');
	}

	public function index() {
		$data['addONS'] = 'general_addon';
		$data['title'] = 'Liputan Media - Nyat Kadir - Laman Resmi';

		$data['listpress'] = $this->Press_m->selectall_press()->result();
		foreach ($data['listpress'] as $key => $value) {
			$map = directory_map('assets/upload/press/pic-press-'.folenc($data['listpress'][$key]->idPRESS), FALSE, TRUE);
			if(!empty($map)){
				$data['listpress'][$key]->imagePRESS = base_url() . 'assets/upload/press/pic-press-'.folenc($data['listpress'][$key]->idPRESS).'/'.$map[0];
			} else {
				$data['listpress'][$key]->imagePRESS = base_url() . 'assets/upload/no-image-available.png';
			}
		}

		$data['new_press'] = $this->Press_m->selectall_press('','',1)->result();

		$data['subview'] = $this->load->view($this->data['frontendDIR'].'press', $data, TRUE);
        $this->load->view($this->data['rootDIR'].'_layout_base_frontend',$data);
	}

	public function detail($id) {
		$data['addONS'] = 'general_addon';
		if($id == NULL){
			redirect('press');
		}
		$id = base64_decode(cutting($id));
		$data['getpress'] = $this->Press_m->selectall_press($id)->row();
		$data['title'] = $data['getpress']->titlePRESS.' - Nyat Kadir - Laman Resmi';

		$map = directory_map('assets/upload/press/pic-press-'.folenc($data['getpress']->idPRESS), FALSE, TRUE);
		$maps = array();
		$imgs = array();
		if(!empty($map)){
			foreach ($map  as $key => $value) {
				$maps[] = base_url().'assets/upload/press/pic-press-'.folenc($data['getpress']->idPRESS).'/'.$value;
				$imgs[] = $value;
			}
		}
		$data['getpress']->map = $maps;

		$data['random_press'] = $this->Press_m->selectall_random_press($id)->result();
		$data['best_press'] = $this->Press_m->selectall_press('',1)->result();

		$data['subview'] = $this->load->view($this->data['frontendDIR'].'press_detail', $data, TRUE);
        $this->load->view($this->data['rootDIR'].'_layout_base_frontend',$data);
	}
}
