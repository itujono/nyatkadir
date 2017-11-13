<?php
if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class About extends Admin_Controller {

	public function __construct (){
		parent::__construct();
		$this->load->model('About_m');
	}

	public function index_about($id = NULL){
		$data['addONS'] = 'plugins_datatables';
		$id = decode(urldecode($id));
		
		$data['listabout'] = $this->About_m->selectall_about()->result();
		
		if($id == NULL){
	        $data['tab'] = array(
	            'data-tab' => 'uk-active',
	            'form-tab' => '',
	        );
			$data['getabout'] = $this->About_m->get_new();
		} else {
			
			//conf tab (optional)
	        $data['tab'] = array(
	            'data-tab' => '',
	            'form-tab' => 'uk-active',
	        );
			$data['getabout'] = $this->About_m->selectall_about($id)->row();
			$map = directory_map('assets/upload/about/home-about/pic-home-about-'.folenc($data['getabout']->idABOUT), FALSE, TRUE);
			if(!empty($map)){
				$data['getabout']->imageHOMEABOUT = base_url() . 'assets/upload/about/home-about/pic-home-about-'.folenc($data['getabout']->idABOUT).'/'.$map[0];
			} else {
				$data['getabout']->imageHOMEABOUT = '';
			}

			$map2 = directory_map('assets/upload/about/header-about/pic-header-about-'.folenc($data['getabout']->idABOUT), FALSE, TRUE);
			if(!empty($map2)){
				$data['getabout']->imageABOUT = base_url() . 'assets/upload/about/header-about/pic-header-about-'.folenc($data['getabout']->idABOUT).'/'.$map2[0];
			} else {
				$data['getabout']->imageABOUT = '';
			}
		}

		if(!empty($this->session->flashdata('message'))) {
            $data['message'] = $this->session->flashdata('message');
        }

		$data['subview'] = $this->load->view($this->data['backendDIR'].'about', $data, TRUE);
		$this->load->view('templates/_layout_base',$data);
	}

	public function saveabout() {
		$rules = $this->About_m->rules_slider;
		$this->form_validation->set_rules($rules);
		$this->form_validation->set_message('required', 'Form %s tidak boleh dikosongkan');
        $this->form_validation->set_message('trim', 'Form %s adalah Trim');

		if ($this->form_validation->run() == TRUE) {
			$data = $this->About_m->array_from_post(array('titlehomeABOUT','deschomeABOUT','headertitleABOUT','titleABOUT','descABOUT','titleawardABOUT','listawardABOUT'));
			$data['listawardABOUT'] = encodingdata($data['listawardABOUT'], 0, $this->input->post('diberikanawardABOUT'), $this->input->post('tahunawardABOUT'));


			$id = decode(urldecode($this->input->post('idABOUT')));

			if(empty($id))$id=NULL;
			$data = $this->security->xss_clean($data);
			$idsave = $this->About_m->save($data, $id);

			$subject = $idsave;
			$filenamesubject = 'pic-home-about-'.folenc($subject);
			$filenamesubject2 = 'pic-header-about-'.folenc($subject);

			if(!empty($_FILES['imghomeABOUT']['name'][0])) {
				$path = 'assets/upload/about/home-about/'.$filenamesubject;
				if (!file_exists($path)){
	            	mkdir($path, 0777, true);
	        	}

				$config['upload_path']		= $path;
	            $config['allowed_types']	= 'jpg|png|jpeg';
	            $config['file_name']        = $this->security->sanitize_filename($filenamesubject);

		        $this->upload->initialize($config);

		        if ($this->upload->do_upload('imghomeABOUT')){
		        	$data['uploads'] = $this->upload->data();
		        }

		  	}

		  	if(!empty($_FILES['imgABOUT']['name'][0])) {
		  		$path2 = 'assets/upload/about/header-about/'.$filenamesubject2;
				if (!file_exists($path2)){
	            	mkdir($path2, 0777, true);
	        	}

				$config['upload_path']		= $path2;
	            $config['allowed_types']	= 'jpg|png|jpeg';
	            $config['file_name']        = $this->security->sanitize_filename($filenamesubject2);

		        $this->upload->initialize($config);

		        if ($this->upload->do_upload('imgABOUT')){
		        	$data['uploads'] = $this->upload->data();
		        }
		  	}

		  	$data = array(
            	'title' => 'Sukses',
                'text' => 'Penyimpanan Data berhasil dilakukan',
                'type' => 'success'
          	);
	    	$this->session->set_flashdata('message', $data);
	  		redirect('administrator/about/index_about');

		} else {
			$data = array(
	            'title' => 'Terjadi Kesalahan',
	            'text' => 'mohon ulangi inputan form anda dibawah.',
	            'type' => 'warning'
	        );
	        $this->session->set_flashdata('message',$data);
	        $this->index_about();
		}
	}

	public function actiondelete_about($id=NULL){
		$id = decode(urldecode($id));
		if($id != 0){
			$this->About_m->delete($id);
			$data = array(
                    'title' => 'Sukses',
                    'text' => 'Penghapusan Data berhasil dilakukan',
                    'type' => 'success'
                );
                $this->session->set_flashdata('message',$data);
                redirect('administrator/about/index_about');
		}else{
			$data = array(
	            'title' => 'Terjadi Kesalahan',
	            'text' => 'Maaf, data tidak berhasil dihapus silakan coba beberapa saat kembali',
	            'type' => 'error'
		        );
		        $this->session->set_flashdata('message',$data);
		        redirect('administrator/about/index_about');
		}
	}

	public function deleteimg_homeabout($id1=NULL){
		if($id1 != NULL){
			$id = decode(urldecode($id1));
			$map = directory_map('assets/upload/about/home-about/'.folenc($id), FALSE, TRUE);
			$path = 'assets/upload/about/home-about/'.folenc($id);
			foreach ($map as $value) {
				unlink('assets/upload/about/home-about/'.folenc($id).'/'.$value);
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
		redirect('administrator/about/index_about/'.$id1);
	}

	public function deleteimg_headerabout($id1=NULL){
		if($id1 != NULL){
			$id = decode(urldecode($id1));
			$map = directory_map('assets/upload/about/header-about/'.folenc($id), FALSE, TRUE);
			$path = 'assets/upload/about/header-about/'.folenc($id);
			foreach ($map as $value) {
				unlink('assets/upload/about/header-about/'.folenc($id).'/'.$value);
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
		redirect('administrator/about/index_about/'.$id1);
	}
}