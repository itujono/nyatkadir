<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Polling extends Frontend_Controller {

	public function __construct (){
		parent::__construct();
		$this->load->model('Polling_m');
		$this->load->model('Polling_choice_m');
	}

	public function index() {
		$data['addONS'] = 'non_footer_page';
		$data['title'] = 'Judul Polling nya -  Nyat Kadir - Laman Resmi';

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
