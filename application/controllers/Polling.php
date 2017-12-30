<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Polling extends Frontend_Controller {

	public function __construct (){
		parent::__construct();
		$this->load->model('Polling_m');
		$this->load->model('Polling_choice_m');
	}

	public function detail($id) {
		$data['addONS'] = 'non_footer_page';

		if($id == NULL){
			redirect('home');
		}
		$id = base64_decode(cutting($id));
		$check_id_polling = $this->Polling_m->check_id_polling($id)->row();
		if(empty($check_id_polling)){
			redirect('home');
		}
		$data['getpolling'] = $this->Polling_m->selectall_polling($id,1)->row();
		$data['title'] = $data['getpolling']->questionPOLLING.' -  Nyat Kadir - Laman Resmi';

		$session_user = $this->session->userdata('idUSER');
		if(empty($data['getpolling'])){
			$polling_data = '';
		} else {
			$polling_data = $data['getpolling']->idPOLLING;
		}
		$data['check_choice_polling'] = $this->Polling_choice_m->check_choice_polling($polling_data, $session_user)->row();
		$data['number_voting'] = $this->Polling_choice_m->getNumberVoting($polling_data);

		if(!empty($this->session->flashdata('message_choice'))) {
            $data['message_choice'] = $this->session->flashdata('message_choice');
        }

		$data['subview'] = $this->load->view($this->data['frontendDIR'].'polling', $data, TRUE);
        $this->load->view($this->data['rootDIR'].'_layout_base_frontend',$data);
	}

	public function submit_polling(){
		$rules = $this->Polling_choice_m->rules_save_choice_polling;
		$this->form_validation->set_rules($rules);
		$this->form_validation->set_message('required', 'Form %s tidak boleh dikosongkan');

		if ($this->form_validation->run() == TRUE) {
			$data = $this->Polling_choice_m->array_from_post(array('idUSER','idPOLLING','valueCHOICE'));
            $data['nameCHOICE'] = $this->input->post('answer');
            $data['valueCHOICE'] = 1;

            if(empty($data['idUSER']) OR empty($this->session->userdata('idUSER'))){
            	$data = array(
					'title' => 'Error!',
                    'text' => 'Maaf, anda diharuskan untuk login terlebih dahulu, atau jika anda belum mendaftar silakan menuju link ini "'.base_url().'user'.'"'
                );
                $this->session->set_flashdata('message_choice',$data);
                redirect('home');
            }

   			$data = $this->security->xss_clean($data);
			$saveid = $this->Polling_choice_m->save($data);

			if ($saveid) {

				$data = array(
					'title' => 'Terima Kasih!',
                    'text' => 'Opini Anda telah kami rekam. Dan terima kasih sudah berpartisipasi. Kami berharap dapat bertemu Anda di lain kesempatan.'
                );
                $this->session->set_flashdata('message_choice',$data);
                redirect('home');

			} else {
				$data = array(
					'title' => 'Error!',
                    'text' => 'Maaf, polling sistem sedang mengalami kesalahan, silakan coba beberapa saat lagi.'
                );
                $this->session->set_flashdata('message_choice',$data);
                redirect('home');
			}
		} else {
			$data = array(
				'title' => 'Error!',
                'text' => 'Maaf, silakan masukkan opsi pilihan anda.'
            );
            $this->session->set_flashdata('message_choice',$data);
            redirect('home');
		}
	}
}
