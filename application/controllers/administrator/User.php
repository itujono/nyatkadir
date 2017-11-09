<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends Admin_Controller {

	public function __construct (){
		parent::__construct();
		$this->load->model('User_m');
	}

	public function index_user() {
		$data['addONS'] = 'plugins_user';
		$data['listuser'] = $this->User_m->selectall_user()->result();
		if(!empty($this->session->flashdata('message'))) {
            $data['message'] = $this->session->flashdata('message');
        }

		$data['subview'] = $this->load->view($this->data['backendDIR'].'user', $data, TRUE);
		$this->load->view('templates/_layout_base',$data);
	}

	public function saveuser() {
		$rules = $this->User_m->rules_save_user;
		$this->form_validation->set_rules($rules);
		$this->form_validation->set_message('required', 'Form %s tidak boleh dikosongkan');
        $this->form_validation->set_message('trim', 'Form %s adalah Trim');
        $this->form_validation->set_message('valid_email', 'Email anda tidak valid');
        $this->form_validation->set_message('is_unique', 'Email yang anda masukkan sudah ada');
        $this->form_validation->set_message('min_length', 'Kata sandi Minimal 8 karakter');

		if ($this->form_validation->run() == TRUE) {
			$data = $this->User_m->array_from_post(array('nameADMIN','emailADMIN','passwordADMIN','is_adminADMIN'));
			$data['passwordADMIN'] = $this->User_m->hash($data['passwordADMIN']);
			$data['statusADMIN'] = 1;
			
			$id = decode(urldecode($this->input->post('idADMIN')));
			if(empty($id))$id=NULL;
			
			$data = $this->security->xss_clean($data);

			if($this->User_m->save($data, $id)){
				$data = array(
	            	'title' => 'Sukses',
	                'text' => 'Penyimpanan Data berhasil dilakukan',
	                'type' => 'success'
	          	);
		    	$this->session->set_flashdata('message', $data);
		  		redirect('administrator/user/index_user');
			}
	  		
		} else {
				$data = array(
		            'title' => 'Terjadi Kesalahan',
		            'text' => 'mohon ulangi inputan form anda.',
		            'type' => 'warning'
		        );
	        $this->session->set_flashdata('message',$data);
	        $this->index_user();
		}
	}

	public function actiondelete_user($id=NULL){
		$id = decode(urldecode($id));
		if($id != 0){
			$this->User_m->delete($id);
			$data = array(
                    'title' => 'Sukses',
                    'text' => 'Penghapusan Data berhasil dilakukan',
                    'type' => 'success'
                );
                $this->session->set_flashdata('message',$data);
                redirect('administrator/user/index_user');
		}else{
			$data = array(
	            'title' => 'Terjadi Kesalahan',
	            'text' => 'Maaf, data tidak berhasil dihapus silakan coba beberapa saat kembali',
	            'type' => 'error'
		        );
		        $this->session->set_flashdata('message',$data);
		        $this->index_user();
		}
	}
}
