<?php
if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Flyer extends Admin_Controller {

	public function __construct (){
		parent::__construct();
		$this->load->model('Flyer_m');
	}

	public function index_flyer($id = NULL){
		$data['addONS'] = 'plugins_flyer';
		$id = decode(urldecode($id));
		
		$data['listflyer'] = $this->Flyer_m->selectall_flyer()->result();
		foreach ($data['listflyer'] as $key => $value) {
			$map = directory_map('assets/upload/flyer/pic-flyer-'.folenc($data['listflyer'][$key]->idFLYER), FALSE, TRUE);
			if(!empty($map)){
				$data['listflyer'][$key]->imageFLYER = base_url() . 'assets/upload/flyer/pic-flyer-'.folenc($data['listflyer'][$key]->idFLYER).'/'.$map[0];
			} else {
				$data['listflyer'][$key]->imageFLYER = base_url() . 'assets/upload/no-image-available.png';
			}
		}
		if($id == NULL){
	        $data['tab'] = array(
	            'data-tab' => 'uk-active',
	            'form-tab' => '',
	        );
			$data['getflyer'] = $this->Flyer_m->get_new();
		} else {
			
			//conf tab (optional)
	        $data['tab'] = array(
	            'data-tab' => '',
	            'form-tab' => 'uk-active',
	        );
			$data['getflyer'] = $this->Flyer_m->selectall_flyer($id)->row();
			$map = directory_map('assets/upload/flyer/pic-flyer-'.folenc($data['getflyer']->idFLYER), FALSE, TRUE);
			if(!empty($map)){
				$data['getflyer']->imageFLYER = base_url() . 'assets/upload/flyer/pic-flyer-'.folenc($data['getflyer']->idFLYER).'/'.$map[0];
			} else {
				$data['getflyer']->imageFLYER = '';
			}
		}

		if(!empty($this->session->flashdata('message'))) {
            $data['message'] = $this->session->flashdata('message');
        }

		$data['subview'] = $this->load->view($this->data['backendDIR'].'flyer', $data, TRUE);
		$this->load->view('templates/_layout_base',$data);
	}

	public function saveflyer() {
		$rules = $this->Flyer_m->rules_flyer;
		$this->form_validation->set_rules($rules);
		$this->form_validation->set_message('required', 'Form %s tidak boleh dikosongkan');
        $this->form_validation->set_message('trim', 'Form %s adalah Trim');

		if ($this->form_validation->run() == TRUE) {
			$data = $this->Flyer_m->array_from_post(array('titleFLYER','startFLYER','endFLYER'));
			$data['startFLYER'] = date("Y-m-d",strtotime($data['startFLYER'] ));
			$data['endFLYER'] = date("Y-m-d",strtotime($data['endFLYER'] ));
			$id = decode(urldecode($this->input->post('idFLYER')));

			if(empty($id))$id=NULL;
			$data = $this->security->xss_clean($data);
			$idsave = $this->Flyer_m->save($data, $id);

			$subject = $idsave;
			$filenamesubject = 'pic-flyer-'.folenc($subject);
			if(!empty($_FILES['imgFLYER']['name'][0])) {
				$path = 'assets/upload/flyer/'.$filenamesubject;
				if (!file_exists($path)){
	            	mkdir($path, 0777, true);
	        	}

				$config['upload_path']		= $path;
	            $config['allowed_types']	= 'jpg|png|jpeg';
	            $config['file_name']        = $this->security->sanitize_filename($filenamesubject);

		        $this->upload->initialize($config);

		        if ($this->upload->do_upload('imgFLYER')){
		        	$data['uploads'] = $this->upload->data();
		        }
		    }
		  		$data = array(
		        	'title' => 'Sukses',
		            'text' => 'Penyimpanan Data berhasil dilakukan',
		            'type' => 'success'
	      		);
	      		$this->session->set_flashdata('message', $data);
	  			redirect('administrator/flyer/index_flyer');
		} else {
			$data = array(
	            'title' => 'Terjadi Kesalahan',
	            'text' => 'mohon ulangi inputan form anda dibawah.',
	            'type' => 'warning'
	        );
	        $this->session->set_flashdata('message',$data);
	        $this->index_flyer();
		}
	}

	public function actiondelete_flyer($id=NULL){
		$id = decode(urldecode($id));
		if($id != 0){
			$this->Flyer_m->delete($id);
			$data = array(
                    'title' => 'Sukses',
                    'text' => 'Penghapusan Data berhasil dilakukan',
                    'type' => 'success'
                );
                $this->session->set_flashdata('message',$data);
                redirect('administrator/flyer/index_flyer');
		}else{
			$data = array(
	            'title' => 'Terjadi Kesalahan',
	            'text' => 'Maaf, data tidak berhasil dihapus silakan coba beberapa saat kembali',
	            'type' => 'error'
		        );
		        $this->session->set_flashdata('message',$data);
		        redirect('administrator/flyer/index_flyer');
		}
	}

	public function deleteimgflyer($id1=NULL){
		if($id1 != NULL){
			$id = decode(urldecode($id1));
			$map = directory_map('assets/upload/flyer/pic-flyer-'.folenc($id), FALSE, TRUE);
			$path = 'assets/upload/flyer/pic-flyer-'.folenc($id);
			foreach ($map as $value) {
				unlink('assets/upload/flyer/pic-flyer-'.folenc($id).'/'.$value);
			}
			if(is_dir($path)){
				rmdir($path);
			}
		}
		$data = array(
            'title' => 'Sukses',
            'text' => 'Penghapusan Gambar berhasil dilakukan',
            'type' => 'success'
        );
        $this->session->set_flashdata('message',$data);
		redirect('administrator/flyer/index_flyer/'.$id1);
	}
}