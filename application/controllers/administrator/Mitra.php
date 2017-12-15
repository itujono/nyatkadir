<?php
if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Mitra extends Admin_Controller {

	public function __construct (){
		parent::__construct();
		$this->load->model('Mitra_m');
	}

	public function index_mitra($id = NULL){
		$data['addONS'] = 'plugins_datatables';
		$id = decode(urldecode($id));
		
		$data['listmitra'] = $this->Mitra_m->selectall_mitra()->result();
		foreach ($data['listmitra'] as $key => $value) {
			$map = directory_map('assets/upload/mitra_kerja/pic-mitra-'.folenc($data['listmitra'][$key]->idMITRA), FALSE, TRUE);
			if(!empty($map)){
				$data['listmitra'][$key]->imageMITRA = base_url() . 'assets/upload/mitra_kerja/pic-mitra-'.folenc($data['listmitra'][$key]->idMITRA).'/'.$map[0];
			} else {
				$data['listmitra'][$key]->imageMITRA = base_url() . 'assets/upload/no-image-available.png';
			}
		}
		if($id == NULL){
	        $data['tab'] = array(
	            'data-tab' => 'uk-active',
	            'form-tab' => '',
	        );
			$data['getmitra'] = $this->Mitra_m->get_new();
		} else {
			
			//conf tab (optional)
	        $data['tab'] = array(
	            'data-tab' => '',
	            'form-tab' => 'uk-active',
	        );
			$data['getmitra'] = $this->Mitra_m->selectall_mitra($id)->row();
			$map = directory_map('assets/upload/mitra_kerja/pic-mitra-'.folenc($data['getmitra']->idMITRA), FALSE, TRUE);
			if(!empty($map)){
				$data['getmitra']->imageMITRA = base_url() . 'assets/upload/mitra_kerja/pic-mitra-'.folenc($data['getmitra']->idMITRA).'/'.$map[0];
			} else {
				$data['getmitra']->imageMITRA = '';
			}
		}

		if(!empty($this->session->flashdata('message'))) {
            $data['message'] = $this->session->flashdata('message');
        }

		$data['subview'] = $this->load->view($this->data['backendDIR'].'mitra_kerja', $data, TRUE);
		$this->load->view('templates/_layout_base',$data);
	}

	public function savemitra() {
		$rules = $this->Mitra_m->rules_mitra;
		$this->form_validation->set_rules($rules);
		$this->form_validation->set_message('required', 'Form %s tidak boleh dikosongkan');
        $this->form_validation->set_message('trim', 'Form %s adalah Trim');
        $this->form_validation->set_message('valid_url', 'Link yang ada masukkan tidak valid');

		if ($this->form_validation->run() == TRUE) {
			$data = $this->Mitra_m->array_from_post(array('nameMITRA','linkMITRA'));

			$id = decode(urldecode($this->input->post('idMITRA')));

			if(empty($id))$id=NULL;
			$data = $this->security->xss_clean($data);
			$idsave = $this->Mitra_m->save($data, $id);

			$subject = $idsave;
			$filenamesubject = 'pic-mitra-'.folenc($subject);
			if(!empty($_FILES['imgMITRA']['name'][0])) {
				$path = 'assets/upload/mitra_kerja/'.$filenamesubject;
				if (!file_exists($path)){
	            	mkdir($path, 0777, true);
	        	}

				$config['upload_path']		= $path;
	            $config['allowed_types']	= 'jpg|png|jpeg';
	            $config['file_name']        = $this->security->sanitize_filename($filenamesubject);

		        $this->upload->initialize($config);

		        if ($this->upload->do_upload('imgMITRA')){
		        	$data['uploads'] = $this->upload->data();
		        }
		    }
		  		$data = array(
		        	'title' => 'Sukses',
		            'text' => 'Penyimpanan Data berhasil dilakukan',
		            'type' => 'success'
	      		);
	      		$this->session->set_flashdata('message', $data);
	  			redirect('administrator/mitra/index_mitra');
		} else {
			$data = array(
	            'title' => 'Terjadi Kesalahan',
	            'text' => 'mohon ulangi inputan form anda dibawah.',
	            'type' => 'warning'
	        );
	        $this->session->set_flashdata('message',$data);
	        $this->index_mitra();
		}
	}

	public function actiondelete_mitra($id=NULL){
		$id = decode(urldecode($id));
		if($id != 0){
			$this->Mitra_m->delete($id);
			$data = array(
                    'title' => 'Sukses',
                    'text' => 'Penghapusan Data berhasil dilakukan',
                    'type' => 'success'
                );
                $this->session->set_flashdata('message',$data);
                redirect('administrator/mitra/index_mitra');
		}else{
			$data = array(
	            'title' => 'Terjadi Kesalahan',
	            'text' => 'Maaf, data tidak berhasil dihapus silakan coba beberapa saat kembali',
	            'type' => 'error'
		        );
		        $this->session->set_flashdata('message',$data);
		        redirect('administrator/mitra/index_mitra');
		}
	}

	public function deleteimgmitra($id1=NULL){
		if($id1 != NULL){
			$id = decode(urldecode($id1));
			$map = directory_map('assets/upload/mitra_kerja/pic-mitra-'.folenc($id), FALSE, TRUE);
			$path = 'assets/upload/mitra_kerja/pic-mitra-'.folenc($id);
			foreach ($map as $value) {
				unlink('assets/upload/mitra_kerja/pic-mitra-'.folenc($id).'/'.$value);
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
		redirect('administrator/mitra/index_mitra/'.$id1);
	}
}