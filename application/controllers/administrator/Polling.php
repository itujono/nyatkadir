<?php
if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Polling extends Admin_Controller {

	public function __construct (){
		parent::__construct();
		$this->load->model('Polling_m');
	}

	public function index_polling($id = NULL){
		$data['addONS'] = 'plugins_polling';
		$id = decode(urldecode($id));
		
		$data['listpolling'] = $this->Polling_m->selectall_polling()->result();

		if(!empty($this->session->flashdata('message'))) {
            $data['message'] = $this->session->flashdata('message');
        }

		$data['subview'] = $this->load->view($this->data['backendDIR'].'polling', $data, TRUE);
		$this->load->view('templates/_layout_base',$data);
	}

	public function form_polling($id=NULL) {
		$data['addONS'] = 'plugins_polling';
		$id = decode(urldecode($id));
		if($id == NULL){
			$data['getpolling'] = $this->Polling_m->get_new();
		} else {
			$data['getpolling'] = $this->Polling_m->selectall_polling($id)->row();
		}
		
		$data['subview'] = $this->load->view($this->data['backendDIR'].'form_polling', $data, TRUE);
		$this->load->view('templates/_layout_base',$data);
	}

	public function savepolling() {
		$rules = $this->Polling_m->rules_polling;
		$this->form_validation->set_rules($rules);
		$this->form_validation->set_message('required', 'Form %s tidak boleh dikosongkan');
        $this->form_validation->set_message('trim', 'Form %s adalah Trim');

		if ($this->form_validation->run() == TRUE) {
			$data = $this->Polling_m->array_from_post(array('questionPOLLING','answerPOLLING','statusPOLLING'));
			if($data['statusPOLLING'] == 'on')$data['statusPOLLING']=1;
			else $data['statusPOLLING']=0;
			$data['answerPOLLING'] = encodingdata_polling($data['answerPOLLING'], 0);
			
			$id = decode(urldecode($this->input->post('idPOLLING')));

			if(empty($id))$id=NULL;
			$data = $this->security->xss_clean($data);
			$idsave = $this->Polling_m->save($data, $id);
			if($idsave) {
				$data = array(
	            	'title' => 'Sukses',
	                'text' => 'Penyimpanan Data berhasil dilakukan',
	                'type' => 'success'
	          	);
		    	$this->session->set_flashdata('message', $data);
		  		redirect('administrator/polling/index_polling');
			}
		  	
		} else {
			$data = array(
	            'title' => 'Terjadi Kesalahan',
	            'text' => 'mohon ulangi inputan form anda dibawah.',
	            'type' => 'warning'
	        );
	        $this->session->set_flashdata('message',$data);
	        $this->form_polling();
		}
	}

	public function actiondelete_polling($id=NULL){
		$id = decode(urldecode($id));
		if($id != 0){
			$this->Polling_m->delete($id);
			$data = array(
                    'title' => 'Sukses',
                    'text' => 'Penghapusan Data berhasil dilakukan',
                    'type' => 'success'
                );
                $this->session->set_flashdata('message',$data);
                redirect('administrator/polling/index_polling');
		}else{
			$data = array(
	            'title' => 'Terjadi Kesalahan',
	            'text' => 'Maaf, data tidak berhasil dihapus silakan coba beberapa saat kembali',
	            'type' => 'error'
		        );
		        $this->session->set_flashdata('message',$data);
		        redirect('administrator/polling/index_polling');
		}
	}

	public function actionedit_polling($id=NULL , $id2=NULL){
		$checkstatus_polling = $this->Polling_m->checkstatus_polling()->row();
		if($id2 != NULL){
			if(!empty($checkstatus_polling)){
			$data = array(
				'title' => 'Perhatian,',
				'text' => 'Silakan non-aktifkan polling <b>("'.$checkstatus_polling->questionPOLLING.'")</b> yang masih aktif.',
				'type' => 'danger'
				);
			$this->session->set_flashdata('message',$data);
			redirect('administrator/polling/index_polling');
			} else {
				$id = decode(urldecode($id));
				$ss = 0;
				if($id2 != NULL)$ss = 1;
				if($id != 0){
					$data['statusPOLLING'] = $ss;
					$this->Polling_m->save($data, $id);
					$data = array(
						'title' => 'Berhasil,',
						'text' => 'Perubahan Data berhasil dilakukan',
						'type' => 'success'
						);
					$this->session->set_flashdata('message',$data);
					redirect('administrator/polling/index_polling');
				}else{
					$data = array(
						'title' => 'Maaf,',
						'text' => 'data tidak berhasil diubah silakan coba beberapa saat kembali',
						'type' => 'error'
						);
					$this->session->set_flashdata('message',$data);
					redirect('administrator/polling/index_polling');
				}
			}
		} else {
			$id = decode(urldecode($id));
			$ss = 0;
			if($id2 != NULL)$ss = 1;
			if($id != 0){
				$data['statusPOLLING'] = $ss;
				$this->Polling_m->save($data, $id);
				$data = array(
					'title' => 'Berhasil,',
					'text' => 'Perubahan Data berhasil dilakukan',
					'type' => 'success'
					);
				$this->session->set_flashdata('message',$data);
				redirect('administrator/polling/index_polling');
			}else{
				$data = array(
					'title' => 'Maaf,',
					'text' => 'data tidak berhasil diubah silakan coba beberapa saat kembali',
					'type' => 'error'
					);
				$this->session->set_flashdata('message',$data);
				redirect('administrator/polling/index_polling');
			}
		}
	}
}