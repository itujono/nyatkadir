<?php
if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Idea extends Admin_Controller {

	public function __construct (){
		parent::__construct();
		$this->load->model('Idea_m');
	}

	public function index_idea($id = NULL){
		$data['addONS'] = 'plugins_datatables';
		$id = decode(urldecode($id));
		
		$data['listidea'] = $this->Idea_m->selectall_idea()->result();
		foreach ($data['listidea'] as $key => $value) {
			$map = directory_map('assets/upload/idea/pic-idea-'.seo_url($data['listidea'][$key]->titleIDEA), FALSE, TRUE);
			if(!empty($map)){
				$data['listidea'][$key]->imageIDEA = base_url() . 'assets/upload/idea/pic-idea-'.seo_url($data['listidea'][$key]->titleIDEA).'/'.$map[0];
			} else {
				$data['listidea'][$key]->imageIDEA = base_url() . 'assets/upload/no-image-available.png';
			}
		}
		if($id == NULL){
	        $data['tab'] = array(
	            'data-tab' => 'uk-active',
	            'form-tab' => '',
	        );
			$data['getidea'] = $this->Idea_m->get_new();
		} else {
			
			//conf tab (optional)
	        $data['tab'] = array(
	            'data-tab' => '',
	            'form-tab' => 'uk-active',
	        );
			$data['getidea'] = $this->Idea_m->selectall_idea($id)->row();
			$map = directory_map('assets/upload/idea/pic-idea-'.seo_url($data['getidea']->titleIDEA), FALSE, TRUE);
			if(!empty($map)){
				$data['getidea']->imageIDEA = base_url() . 'assets/upload/idea/pic-idea-'.seo_url($data['getidea']->titleIDEA).'/'.$map[0];
			} else {
				$data['getidea']->imageIDEA = '';
			}
		}

		if(!empty($this->session->flashdata('message'))) {
            $data['message'] = $this->session->flashdata('message');
        }

		$data['subview'] = $this->load->view($this->data['backendDIR'].'idea', $data, TRUE);
		$this->load->view('templates/_layout_base',$data);
	}

	public function saveidea() {
		$rules = $this->Idea_m->rules_idea;
		$this->form_validation->set_rules($rules);
		$this->form_validation->set_message('required', 'Form %s tidak boleh dikosongkan');
        $this->form_validation->set_message('trim', 'Form %s adalah Trim');

		if ($this->form_validation->run() == TRUE) {
			$data = $this->Idea_m->array_from_post(array('titleIDEA','descIDEA'));
			$id = decode(urldecode($this->input->post('idIDEA')));

			if(empty($id))$id=NULL;
			$data = $this->security->xss_clean($data);
			$this->Idea_m->save($data, $id);

			$subject = $this->input->post('titleIDEA');
			$filenamesubject = 'pic-idea-'.seo_url($subject);

			if(!empty($_FILES['imgIDEA']['name'][0])) {
				$path = 'assets/upload/idea/'.$filenamesubject;
				if (!file_exists($path)){
	            	mkdir($path, 0777, true);
	        	}

				$config['upload_path']		= $path;
	            $config['allowed_types']	= 'jpg|png|jpeg';
	            $config['file_name']        = $this->security->sanitize_filename($filenamesubject);

		        $this->upload->initialize($config);

		        if ($this->upload->do_upload('imgIDEA')){
		        	$data['uploads'] = $this->upload->data();
		        }
	    	}
	    $data = array(
        	'title' => 'Sukses',
            'text' => 'Penyimpanan Data berhasil dilakukan',
            'type' => 'success'
  		);
  		$this->session->set_flashdata('message', $data);
		redirect('administrator/idea/index_idea');
		  		
		} else {
			$data = array(
	            'title' => 'Terjadi Kesalahan',
	            'text' => 'mohon ulangi inputan form anda dibawah.',
	            'type' => 'warning'
	        );
	        $this->session->set_flashdata('message',$data);
	        $this->index_idea();
		}
	}

	public function actiondelete_idea($id=NULL){
		$id = decode(urldecode($id));
		if($id != 0){
			$this->Idea_m->delete($id);
			$data = array(
                    'title' => 'Sukses',
                    'text' => 'Penghapusan Data berhasil dilakukan',
                    'type' => 'success'
                );
                $this->session->set_flashdata('message',$data);
                redirect('administrator/idea/index_idea');
		}else{
			$data = array(
	            'title' => 'Terjadi Kesalahan',
	            'text' => 'Maaf, data tidak berhasil dihapus silakan coba beberapa saat kembali',
	            'type' => 'error'
		        );
		        $this->session->set_flashdata('message',$data);
		        redirect('administrator/idea/index_idea');
		}
	}

	public function deleteimgidea($title=NULL, $id1=NULL){
		if($title != NULL){
			$map = directory_map('assets/upload/idea/pic-idea-'.seo_url($title), FALSE, TRUE);
			$path = 'assets/upload/idea/pic-idea-'.seo_url($title);
			foreach ($map as $value) {
				unlink('assets/upload/idea/pic-idea-'.seo_url($title).'/'.$value);
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
		redirect('administrator/idea/index_idea/'.$id1);
	}
}