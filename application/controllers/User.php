<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends Frontend_Controller {

	public function __construct (){
		parent::__construct();
		$this->load->model('Users_m');
		$this->load->model('Attempts_m');
	}

	public function index() {
		$data['addONS'] = 'login_user';
		$data['title'] = 'Login -  Nyat Kadir - Laman Resmi';

		if(!empty($this->session->flashdata('message'))) {
            $data['message'] = $this->session->flashdata('message');
        }

		$data['subview'] = $this->load->view($this->data['frontendDIR'].'users', $data, TRUE);
        $this->load->view($this->data['rootDIR'].'_layout_base_frontend',$data);
	}

	public function registration(){
		$rules = $this->Users_m->rules_save_users;
		$this->form_validation->set_rules($rules);
		$this->form_validation->set_message('required', 'Form %s tidak boleh dikosongkan');
        $this->form_validation->set_message('trim', 'Form %s adalah Trim');
        $this->form_validation->set_message('valid_email', 'Maaf $s anda tidak valid');
        $this->form_validation->set_message('is_unique', 'Email anda sudah terdaftar');
        $this->form_validation->set_message('min_length', 'Minimal 8 karakter');

		if ($this->form_validation->run() == TRUE) {
			$data = $this->Users_m->array_from_post(array('nameUSER','emailUSER','passwordUSER','addressUSER','cityUSER','zipUSER','genderUSER','ageUSER'));
            $data['passwordUSER'] = $this->Users_m->hash($data['passwordUSER']);

   			$data = $this->security->xss_clean($data);
			$saveid = $this->Users_m->save($data);

			if ($saveid) {

				// $email = $this->input->post('emailUSER');
    //             $name = ucwords($this->input->post('nameUSER'));

	                //if($this->sendemailconfirmation($saveid, $name, $email)){

					$data = array(
						'title' => 'Sukses',
						'style' => 'is-success',
	                    'text' => 'Terima kasih sudah mendaftar, silakan cek kotak masuk ataupun kotak spam anda!. Terima Kasih!'
	                );
	                $this->session->set_flashdata('message',$data);
	                redirect('user');

					// } else {
					// $data = array(
	    //                 'text' => 'Maaf, mungkin ada Kesalahan koneksi, mohon ulangi beberapa saat lagi.'
	    //             );
	    //             $this->session->set_flashdata('message',$data);
	    //             redirect('Home');
					// }

			} else {
				$data = array(
					'title' => 'Error!',
					'style' => 'is-warning',
		            'text' => 'Maaf, Sistem tidak dapat menyimpan data anda, silakan ulangi beberapa saat lagi.'
		        );
		        $this->session->set_flashdata('message',$data);
		        redirect('user');
			}
		} else {
			$data = array(
				'title' => 'Error!',
				'style' => 'is-warning',
	            'text' => 'Maaf ada kesalahan, mohon ulangi inputan form registrasi anda!.'
	        );
	        $this->session->set_flashdata('message',$data);
	        redirect('user');
		}
	}

	private function _checkbrute_users($email) {
	    $now = time();
	    $valid_attempts = $now - (2 * 60 * 60);

	    $idlogin_users = $this->Users_m->checkusers($email)->row();

	    if(empty($idlogin_users)){
	    	$data = array(
	    		'title' => 'Error!',
				'style' => 'is-warning',
	            'text' => 'Maaf, akun anda tidak terdaftar di data kami.'
	        );
	        $this->session->set_flashdata('message',$data);
			redirect($_SERVER['HTTP_REFERER']);
	    }

	    $attempts = $this->Attempts_m->checkingbrute_users($idlogin_users->idUSER,$valid_attempts);
	    if($attempts  >= 4){
	    	return true;
	    } else {
	    	return false;
	    }
	}

	public function process(){
		
		$rules = $this->Users_m->rules_login_users;
		$this->form_validation->set_rules($rules);
		$this->form_validation->set_message('required', 'Form %s tidak boleh dikosongkan');
        $this->form_validation->set_message('trim', 'Form %s adalah Trim');
        $this->form_validation->set_message('valid_email', 'Maaf $s anda tidak valid');
        $this->form_validation->set_message('min_length', 'Minimal 8 karakter');

		if($this->form_validation->run() == TRUE){

			$email = $this->input->post('email');
			$pass = $this->input->post('password');
			
			$attemptslogin = $this->_checkbrute_users($email);
			$countencrypt = strlen($this->Users_m->hash($pass));

			if($attemptslogin == true){

				$data = array(
					'title' => 'Error!',
					'style' => 'is-warning',
		            'text' => 'Maaf!, untuk sementara akun anda telah terkunci, silakan hubungi bagian admin kami untuk melaporkan masalah ini. Terima kasih!'
		        );
		        $this->session->set_flashdata('message',$data);
				redirect($_SERVER['HTTP_REFERER']);
			}

			if ($countencrypt > 128 OR $countencrypt < 128) {
				$data = array(
					'title' => 'Error!',
					'style' => 'is-warning',
		            'text' => 'Akun anda terdeteksi ada kesalahan, anda telah mencoba praktek pembobolan akun, secara otomatis akun yang bersangkutan dinonaktifkan.'
		        );

		        $checks = $this->Users_m->checkusers($email)->row();
		        $data_stat['statusUSER'] = 0;
		        $this->Users_m->delete($data_stat, $checks->idUSER);

		        $this->session->set_flashdata('message',$data);
				redirect($_SERVER['HTTP_REFERER']);
			}

			if ($this->Users_m->login($email, $pass) == "USER"){
				
				$data = array(
					'title' => 'Sukses!',
					'style' => 'is-success',
		            'text' => 'Hallo, Selamat datang '. $this->session->userdata('Name')
		        );

		        $this->session->set_flashdata('message',$data);
				redirect($_SERVER['HTTP_REFERER']);
			} else if ($this->Users_m->login($email, $pass) == "NOT ACTIVE"){

				$data = array(
					'title' => 'Error!',
					'style' => 'is-warning',
		            'text' => 'Maaf, akun anda tidak aktif, silakan cek email anda untuk konfirmasi, atau hubungi kami di form contact us. Terima kasih!'
		        	);
		        $this->session->set_flashdata('message',$data);
				redirect($_SERVER['HTTP_REFERER']);

			} else {
				$mailing = $this->input->post('email');

				$logindata_users = $this->Users_m->checkusers($mailing)->row();
				$data['idUSER'] = $logindata_users->idUSER;
				$data['timeATTEMPTS'] = time();
				$this->Attempts_m->save($data);

				$data = array(
					'title' => 'Error!',
					'style' => 'is-warning',
		            'text' => 'Maaf, email dan kata sandi yang anda masukkan salah'
		        	);
		        $this->session->set_flashdata('message',$data);
				redirect($_SERVER['HTTP_REFERER']);
			}
		} else {
			$data = array(
			'title' => 'Error!',
			'style' => 'is-warning',
            'text' => 'Maaf, Silakan ulangi email dan kata sandi anda dibawah!'
        	);
        $this->session->set_flashdata('message',$data);
		redirect($_SERVER['HTTP_REFERER']);
		}
	}

	public function logout (){
		$this->Users_m->logout();
		$data = array(
			'title' => 'Sukses!',
			'style' => 'is-success',
            'text' => 'Selamat! Kamu sudah logout. Sampai jumpa lagi!'
        	);
        $this->session->set_flashdata('message',$data);
		redirect($_SERVER['HTTP_REFERER']);
	}
}
