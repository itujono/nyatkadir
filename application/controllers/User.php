<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends Frontend_Controller {

	public function __construct (){
		parent::__construct();
		$this->load->model('Users_m');
		$this->load->model('Attempts_m');
		$this->load->model('Polling_m');
		$this->load->model('Polling_choice_m');
		$this->load->model('Aspirasi_m');
	}

	public function index() {
		$data['addONS'] = 'non_footer_page';
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
		$this->form_validation->set_message('required', 'Form %s tidak boleh kosong');
        $this->form_validation->set_message('trim', 'Form %s adalah Trim');
        $this->form_validation->set_message('valid_email', 'Maaf, $s Anda tidak valid');
        $this->form_validation->set_message('is_unique', 'Tampaknya email Anda sudah terdaftar');
        $this->form_validation->set_message('min_length', 'Minimal kata sandi 8 karakter');

		if ($this->form_validation->run() == TRUE) {
			$data = $this->Users_m->array_from_post(array('nameUSER','emailUSER','passwordUSER','addressUSER','cityUSER','zipUSER','genderUSER','ageUSER'));
            $data['passwordUSER'] = $this->Users_m->hash($data['passwordUSER']);

   			$data = $this->security->xss_clean($data);
			$saveid = $this->Users_m->save($data);

			if ($saveid) {

				$email = $this->input->post('emailUSER');
                $name = ucwords($this->input->post('nameUSER'));

	                if($this->sendemailconfirmation($name, $email, $saveid)){

					$data = array(
						'title' => 'Sukses',
						'style' => 'is-success',
	                    'text' => 'Terima kasih sudah mendaftar. Silakan cek kotak masuk ataupun kotak spam email Anda. Terima Kasih!'
	                );
	                $this->session->set_flashdata('message',$data);
	                redirect('user');

					} else {
					$data = array(
	                    'title' => 'Error',
						'style' => 'is-warning',
	                    'text' => 'Maaf, ada kesalahan koneksi.'
	                );
	                $this->session->set_flashdata('message',$data);
	                redirect('user');
					}

			} else {
				$data = array(
					'title' => 'Error!',
					'style' => 'is-warning',
		            'text' => 'Maaf, sistem tidak dapat menyimpan data Anda. Silakan ulangi beberapa saat lagi.'
		        );
		        $this->session->set_flashdata('message',$data);
		        redirect('user');
			}
		} else {
			$data = array(
				'title' => 'Error!',
				'style' => 'is-warning',
	            'text' => 'Maaf, sedang terjadi kesalahan. Mohon ulangi inputan form registrasi Anda.'
	        );
	        $this->session->set_flashdata('message',$data);
	        redirect('user');
		}
	}

	private function sendemailconfirmation($name=NULL, $email=NULL, $id=NULL)
	{

		$from_email = 'no-reply@nyatkadir.org';
        $subject = 'Selamat datang, '.$name.' - NyatKadir.org';
        $word1 = 'NyatKadir.org adalah rumah dan wadah aspirasi untuk kawan-kawan di seluruh belahan Bumi Pertiwi. Melalui portal ini, Anda diharapkan dapat turut berpartisipasi menyuarakan aspirasi yang belum sempat tersalurkan. Sebelumnya, silakan klik tautan berikut ini untuk mengonfirmasi keanggotaan Anda.';
        $message = '
        <!DOCTYPE html>
		<html lang="en" xmlns="http://www.w3.org/1999/xhtml" xmlns:v="urn:schemas-microsoft-com:vml" xmlns:o="urn:schemas-microsoft-com:office:office">
		<head>
		    <meta charset="utf-8"> <!-- utf-8 works for most cases -->
		    <meta name="viewport" content="width=device-width">
		    <meta http-equiv="X-UA-Compatible" content="IE=edge">
		    <meta name="x-apple-disable-message-reformatting">
		    <title>'.$subject.'</title>
		    <style>
		        html,
		        body {
		            margin: 0 auto !important;
		            padding: 0 !important;
		            height: 100% !important;
		            width: 100% !important;
		        }
		        * {
		            -ms-text-size-adjust: 100%;
		            -webkit-text-size-adjust: 100%;
		        }

		        div[style*="margin: 16px 0"] {
		            margin: 0 !important;
		        }
		        table,
		        td {
		            mso-table-lspace: 0pt !important;
		            mso-table-rspace: 0pt !important;
		        }
		        table {
		            border-spacing: 0 !important;
		            border-collapse: collapse !important;
		            table-layout: fixed !important;
		            margin: 0 auto !important;
		        }
		        table table table {
		            table-layout: auto;
		        }
		        img {
		            -ms-interpolation-mode:bicubic;
		        }
		        *[x-apple-data-detectors],  /* iOS */
		        .x-gmail-data-detectors,    /* Gmail */
		        .x-gmail-data-detectors *,
		        .aBn {
		            border-bottom: 0 !important;
		            cursor: default !important;
		            color: inherit !important;
		            text-decoration: none !important;
		            font-size: inherit !important;
		            font-family: inherit !important;
		            font-weight: inherit !important;
		            line-height: inherit !important;
		        }
		        .a6S {
		           display: none !important;
		           opacity: 0.01 !important;
		       }
		       img.g-img + div {
		           display: none !important;
		       }
		        .button-link {
		            text-decoration: none !important;
		        }

		        @media only screen and (min-device-width: 375px) and (max-device-width: 413px) { /* iPhone 6 and 6+ */
		            .email-container {
		                min-width: 375px !important;
		            }
		        }

			    @media screen and (max-width: 480px) {
			        /* What it does: Forces Gmail app to display email full width */
			        u ~ div .email-container {
				        min-width: 100vw;
				        width: 100% !important;
			        }
				}

		    </style>

		    <style>

		        .button-td,
		        .button-a {
		            transition: all 100ms ease-in;
		        }
		        .button-td:hover,
		        .button-a:hover {
		            background: #555555 !important;
		            border-color: #555555 !important;
		        }

		        @media screen and (max-width: 600px) {

		            .email-container {
		                width: 100% !important;
		                margin: auto !important;
		            }

		            .fluid {
		                max-width: 100% !important;
		                height: auto !important;
		                margin-left: auto !important;
		                margin-right: auto !important;
		            }

		            .stack-column,
		            .stack-column-center {
		                display: block !important;
		                width: 100% !important;
		                max-width: 100% !important;
		                direction: ltr !important;
		            }

		            .stack-column-center {
		                text-align: center !important;
		            }

		            .center-on-narrow {
		                text-align: center !important;
		                display: block !important;
		                margin-left: auto !important;
		                margin-right: auto !important;
		                float: none !important;
		            }
		            table.center-on-narrow {
		                display: inline-block !important;
		            }

		            .email-container p {
		                font-size: 17px !important;
		            }
		        }

		    </style>

		</head>
		<body width="100%" bgcolor="#eee" style="margin: 0; mso-line-height-rule: exactly;">
		    <center style="width: 100%; background: #32384c; text-align: left;">

		        <div style="display: none; font-size: 1px; line-height: 1px; max-height: 0px; max-width: 0px; opacity: 0; overflow: hidden; mso-hide: all; font-family: sans-serif;">
		            Terima kasih! Satu langkah lagi Anda akan menjadi anggota di laman resmi Nyat Kadir.org. Silakan klik tautan berikut untuk mengonfirmasi status registrasi keanggotaan Anda.
		        </div> <!-- Visually Hidden Preheader Text : END -->

		        <table role="presentation" cellspacing="0" cellpadding="0" border="0" align="center" width="600" style="margin: auto;" class="email-container">
		            <tr>
		                <td style="padding: 20px 0; text-align: center">
		                    <h2 style="height: auto; font-family: sans-serif; font-size: 24px; line-height: 140%; color: #f3f3f3;">NyatKadir.<span style="color: #fdc236">org</span></h2>
		                </td>
		            </tr>
		        </table>

		        <table role="presentation" cellspacing="0" cellpadding="0" border="0" align="center" width="600" style="margin: auto;" class="email-container">

		            <tr>
		                <td bgcolor="#ffffff" align="center">
		                    <img src="http://placehold.it/1200x600" width="600" height="" alt="alt_text" border="0" align="center" style="width: 100%; max-width: 600px; height: auto; background: #dddddd; font-family: sans-serif; font-size: 15px; line-height: 140%; color: #555555; margin: auto;" class="g-img">
		                </td>
		            </tr>

		            <tr>
		                <td bgcolor="#ffffff" style="padding: 40px 40px 20px; text-align: center;">
		                    <h1 style="margin: 0; font-family: sans-serif; font-size: 24px; line-height: 125%; color: #2e2f48; font-weight: bold;">Selamat Datang di Nyat Kadir!</h1>
		                </td>
		            </tr>
		            <tr>
		                <td bgcolor="#ffffff" style="padding: 0 40px 40px; font-family: sans-serif; font-size: 15px; line-height: 140%; color: #555555; text-align: center;">
		                    <p style="margin: 0;">'.$word1.'</p>
		                </td>
		            </tr>
		            <tr>
		                <td bgcolor="#ffffff" style="padding: 0 40px 40px; font-family: sans-serif; font-size: 15px; line-height: 140%; color: #555555;">
		                    <table role="presentation" cellspacing="0" cellpadding="0" border="0" align="center" style="margin: auto">
		                        <tr>
		                            <td style="border-radius: 3px; background: #2e2f48; text-align: center;" class="button-td">
		                                <a href="'.base_url().'user/confirmuser/'.encode($id).'" style="background: #2e2f48; border: 15px solid #2e2f48; font-family: sans-serif; font-size: 13px; line-height: 110%; text-align: center; text-decoration: none; display: block; border-radius: 3px; font-weight: bold;" class="button-a">
		                                    &nbsp;&nbsp;&nbsp;&nbsp;<span style="color:#ffffff;">Konfirmasi Keanggotaan</span>&nbsp;&nbsp;&nbsp;&nbsp;
		                                </a>
		                            </td>
		                        </tr>
		                    </table>
		                </td>
		            </tr>
		    </table>
		    <table role="presentation" cellspacing="0" cellpadding="0" border="0" align="center" width="100%" style="max-width: 680px; font-family: sans-serif; color: #888888; font-size: 12px; line-height: 140%;">
		        <tr>
		            <td style="padding: 40px 10px; width: 100%; font-family: sans-serif; font-size: 12px; line-height: 140%; text-align: center; color: #888888;" class="x-gmail-data-detectors">

		                <br><br>
		                Nyat Kadir.org<br>Komplek Tiban 2 Blok H #33, Batam 29432<br>(0778) 456-7890
		                <br><br>
		            </td>
		        </tr>
		    </table>
		    </center>
		</body>
		</html>';

        //configure email settings
        $config = $this->mail_config();
        $this->email->initialize($config);

        //send mail
        $this->email->from($from_email, 'Kawan Nyat Kadir');
        $this->email->to($email);
        $this->email->subject($subject);
        $this->email->message($message);
        return $this->email->send();
	}

	public function confirmuser($id=NULL) {
		if (empty($id)){
			$data = array(
				'title' => 'Error!',
				'style' => 'is-warning',
	            'text' => 'Maaf, sedang terjadi kesalahan teknis. Silakan coba beberapa saat lagi.'
        	);
		} else {
			$id = decode($id);
			$checkuser = $this->Users_m->checkusers('',$id);
			if (!empty($checkuser)) {
				$data['statusUSER'] = '1';
				if ($this->Users_m->save($data, $id)) {

					$data = array(
						'title' => 'Sukses!',
						'style' => 'is-success',
		                'text' => 'Selamat, kami telah mengkonfirmasi email Anda. Silakan login terlebih dulu untuk memulai beraktifitas di NyatKadir.org.'
	            	);
				} else{
					$data = array(
						'title' => 'Error!',
						'style' => 'is-warning',
			            'text' => 'Maaf, sedang terjadi kesalahan teknis. Silakan coba beberapa saat lagi.'
		        	);
				}

			} else {
				$data = array(
					'title' => 'Error!',
					'style' => 'is-warning',
		            'text' => 'Maaf, Anda belum terdaftar di sistem kami, silakan mendaftar terlebih dulu.'
	        	);
			}
		}
		$this->session->set_flashdata('message',$data);
        redirect('user');
	}

	private function _checkbrute_users($email) {
	    $now = time();
	    $valid_attempts = $now - (2 * 60 * 60);

	    $idlogin_users = $this->Users_m->checkusers($email)->row();

	    if(empty($idlogin_users)){
	    	$data = array(
	    		'title' => 'Error!',
				'style' => 'is-warning',
	            'text' => 'Maaf, akun Anda tidak terdaftar di data kami.'
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
		$this->form_validation->set_message('required', 'Form %s tidak boleh kosong');
        $this->form_validation->set_message('trim', 'Form %s adalah Trim');
        $this->form_validation->set_message('valid_email', 'Maaf, $s anda tidak valid');
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
		            'text' => 'Maaf, untuk sementara akun Anda telah terkunci, silakan hubungi bagian Admin kami untuk melaporkan masalah ini. Terima kasih!'
		        );
		        $this->session->set_flashdata('message',$data);
				redirect($_SERVER['HTTP_REFERER']);
			}

			if ($countencrypt > 128 OR $countencrypt < 128) {
				$data = array(
					'title' => 'Error!',
					'style' => 'is-warning',
		            'text' => 'Maaf, untuk sementara akun Anda telah terkunci, silakan hubungi bagian Admin kami untuk melaporkan masalah ini. Terima kasih!'
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
		            'text' => 'Halo! Selamat datang, '. $this->session->userdata('Name')
		        );

		        $this->session->set_flashdata('message',$data);
				redirect($_SERVER['HTTP_REFERER']);
			} else if ($this->Users_m->login($email, $pass) == "NOT ACTIVE"){

				$data = array(
					'title' => 'Error!',
					'style' => 'is-warning',
		            'text' => 'Maaf, akun Anda belum aktif, silakan cek email Anda untuk konfirmasi, atau hubungi kami di form Contact Us. Terima kasih!'
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
					'title' => 'Gagal',
					'style' => 'is-warning',
		            'text' => 'Maaf, email atau kata sandi yang Anda masukkan salah. Mohon periksa kembali terlebih dulu dengan seksama.'
		        	);
		        $this->session->set_flashdata('message',$data);
				redirect($_SERVER['HTTP_REFERER']);
			}
		} else {
			$data = array(
			'title' => 'Error',
			'style' => 'is-warning',
            'text' => 'Maaf, silakan ulangi inputan email dan kata sandi Anda di bawah.'
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
            'text' => 'Anda sudah berhasil logout. Sampai jumpa lagi!'
        	);
        $this->session->set_flashdata('message',$data);
		redirect('user');
	}

	public function account() {
		if(empty($this->session->userdata('idUSER'))){
			redirect('user/logout');
		}

		$data['addONS'] = 'general_addon';
		$data['title'] = $this->session->userdata('Name').' - Nyat Kadir - Laman Resmi';
		$id = $this->session->userdata('idUSER');
		$data['getuser'] = $this->Users_m->selectall_user($id)->row();

		$data['list_choice_polling_users'] = $this->Polling_choice_m->list_choice_polling_users($id)->result();
		$data['count_polling_user'] = count($data['list_choice_polling_users']);

		$data['list_submited_aspirasi_user'] = $this->Aspirasi_m->selectall_aspirasi_at_account($this->session->userdata('idUSER'))->result();
		$data['count_submited_aspirasi_user'] = count($data['list_submited_aspirasi_user']);

		$data['subview'] = $this->load->view($this->data['frontendDIR'].'account', $data, TRUE);
        $this->load->view($this->data['rootDIR'].'_layout_base_frontend',$data);
	}

	public function processreset(){
		$email = $this->input->post('emailing');
		if(empty($email)){
			$data = array(
				'title' => 'Warning!',
				'style' => 'is-warning',
	            'text' => 'Maaf, Anda belum memasukkan email.'
	        	);
	        $this->session->set_flashdata('message',$data);
			redirect('user');
		} else {
			$checkemail = $this->Users_m->checkusers($email)->row();
			if(!empty($checkemail)){
				$emailnotifreset = $this->sendemailnotificationreset($checkemail->idUSER, $checkemail->emailUSER, $checkemail->nameUSER);
				if($emailnotifreset){
					$data = array(
	                    'title' => 'Sukses!',
						'style' => 'is-success',
			            'text' => 'Kami sudah berhasil mengirim tautan reset kata sandi lewat email. <br> Harap periksa inbox email Anda.'
	                );
	                $this->session->set_flashdata('message',$data);
	                redirect('user');
				} else {
					$data = array(
						'title' => 'Warning!',
						'style' => 'is-warning',
	                    'text' => 'Maaf, kami tidak dapat mengirim email kepada Anda, silakan coba beberapa saat kembali. <br> Terima Kasih!'
	                );
	                $this->session->set_flashdata('message',$data);
	                redirect('user');
				}
			} else {
				$data = array(
					'title' => 'Warning!',
					'style' => 'is-warning',
                    'text' => 'Maaf, email Anda tidak terdaftar pada sistem kami, silakan masukkan kembali alamat email Anda dengan benar. <br> Terima kasih!'
                );

                $this->session->set_flashdata('message',$data);
                redirect('user');
			}
		}
	}

	private function sendemailnotificationreset($id=NULL, $email=NULL, $name=NULL) {
		$from_email = 'no-reply@nyatkadir.org'; //change this to yours
     	$idCODE = encode($id);
        $subject = 'Konfirmasi Reset Kata sandi - Kawan Nyat Kadir';
        $word1 = 'Baru saja Anda merequest untuk mengubah kata sandi akun keanggotaan Anda di NyatKadir.org pada <b>'.date("l, d F Y H:i:s").'</b>. Silakan klik tautan berikut untuk melanjutkan proses pengubahan kata sandi Anda.';
        $message = '
        <!DOCTYPE html>
		<html lang="en" xmlns="http://www.w3.org/1999/xhtml" xmlns:v="urn:schemas-microsoft-com:vml" xmlns:o="urn:schemas-microsoft-com:office:office">
		<head>
		    <meta charset="utf-8">
		    <meta name="viewport" content="width=device-width">
		    <meta http-equiv="X-UA-Compatible" content="IE=edge">
		    <meta name="x-apple-disable-message-reformatting">
		    <title>'.$subject.'</title>

		    <style>

		        html,
		        body {
		            margin: 0 auto !important;
		            padding: 0 !important;
		            height: 100% !important;
		            width: 100% !important;
		        }

		        * {
		            -ms-text-size-adjust: 100%;
		            -webkit-text-size-adjust: 100%;
		        }

		        div[style*="margin: 16px 0"] {
		            margin: 0 !important;
		        }

		        table,
		        td {
		            mso-table-lspace: 0pt !important;
		            mso-table-rspace: 0pt !important;
		        }

		        table {
		            border-spacing: 0 !important;
		            border-collapse: collapse !important;
		            table-layout: fixed !important;
		            margin: 0 auto !important;
		        }
		        table table table {
		            table-layout: auto;
		        }

		        img {
		            -ms-interpolation-mode:bicubic;
		        }

		        *[x-apple-data-detectors],  /* iOS */
		        .x-gmail-data-detectors,    /* Gmail */
		        .x-gmail-data-detectors *,
		        .aBn {
		            border-bottom: 0 !important;
		            cursor: default !important;
		            color: inherit !important;
		            text-decoration: none !important;
		            font-size: inherit !important;
		            font-family: inherit !important;
		            font-weight: inherit !important;
		            line-height: inherit !important;
		        }

		        .a6S {
		           display: none !important;
		           opacity: 0.01 !important;
		       }

		       img.g-img + div {
		           display: none !important;
		       }

		        .button-link {
		            text-decoration: none !important;
		        }

		        @media only screen and (min-device-width: 375px) and (max-device-width: 413px) { /* iPhone 6 and 6+ */
		            .email-container {
		                min-width: 375px !important;
		            }
		        }

			    @media screen and (max-width: 480px) {
			        /* What it does: Forces Gmail app to display email full width */
			        u ~ div .email-container {
				        min-width: 100vw;
				        width: 100% !important;
			        }
				}

		    </style>

		    <style>

		        .button-td,
		        .button-a {
		            transition: all 100ms ease-in;
		        }
		        .button-td:hover,
		        .button-a:hover {
		            background: #555555 !important;
		            border-color: #555555 !important;
		        }

		        @media screen and (max-width: 600px) {

		            .email-container {
		                width: 100% !important;
		                margin: auto !important;
		            }

		            .fluid {
		                max-width: 100% !important;
		                height: auto !important;
		                margin-left: auto !important;
		                margin-right: auto !important;
		            }

		            .stack-column,
		            .stack-column-center {
		                display: block !important;
		                width: 100% !important;
		                max-width: 100% !important;
		                direction: ltr !important;
		            }

		            .stack-column-center {
		                text-align: center !important;
		            }

		            .center-on-narrow {
		                text-align: center !important;
		                display: block !important;
		                margin-left: auto !important;
		                margin-right: auto !important;
		                float: none !important;
		            }
		            table.center-on-narrow {
		                display: inline-block !important;
		            }

		            .email-container p {
		                font-size: 17px !important;
		            }
		        }

		    </style>

		</head>
		<body width="100%" bgcolor="#eee" style="margin: 0; mso-line-height-rule: exactly;">
		    <center style="width: 100%; background: #32384c; text-align: left;">

		        <div style="display: none; font-size: 1px; line-height: 1px; max-height: 0px; max-width: 0px; opacity: 0; overflow: hidden; mso-hide: all; font-family: sans-serif;">
		            '.$word1.'
		        </div>

		        <table role="presentation" cellspacing="0" cellpadding="0" border="0" align="center" width="600" style="margin: auto;" class="email-container">
		            <tr>
		                <td style="padding: 20px 0; text-align: center">
		                    <h2 style="height: auto; font-family: sans-serif; font-size: 24px; line-height: 140%; color: #f3f3f3;">NyatKadir.<span style="color: #fdc236">org</span></h2>
		                </td>
		            </tr>
		        </table>

		        <!-- Email Body : BEGIN -->
		        <table role="presentation" cellspacing="0" cellpadding="0" border="0" align="center" width="600" style="margin: auto;" class="email-container">

		            <!-- Hero Image, Flush : BEGIN -->
		            <tr>
		                <td bgcolor="#ffffff" align="center">
		                    <img src="http://placehold.it/1200x600" width="600" height="" alt="alt_text" border="0" align="center" style="width: 100%; max-width: 600px; height: auto; background: #dddddd; font-family: sans-serif; font-size: 15px; line-height: 140%; color: #555555; margin: auto;" class="g-img">
		                </td>
		            </tr>
		            <!-- Hero Image, Flush : END -->

		            <!-- 1 Column Text + Button : BEGIN -->
		            <tr>
		                <td bgcolor="#ffffff" style="padding: 40px 40px 20px; text-align: center;">
		                    <h1 style="margin: 0; font-family: sans-serif; font-size: 24px; line-height: 125%; color: #2e2f48; font-weight: bold;">Anda akan mereset kata sandi Anda.</h1>
		                </td>
		            </tr>
		            <tr>
		                <td bgcolor="#ffffff" style="padding: 0 40px 40px; font-family: sans-serif; font-size: 15px; line-height: 140%; color: #555555; text-align: center;">
		                    <p style="margin: 0;">'.$word1.'</p>
		                </td>
		            </tr>
		            <tr>
		                <td bgcolor="#ffffff" style="padding: 0 40px 40px; font-family: sans-serif; font-size: 15px; line-height: 140%; color: #555555;">
		                    <table role="presentation" cellspacing="0" cellpadding="0" border="0" align="center" style="margin: auto">
		                        <tr>
		                            <td style="border-radius: 3px; background: #2e2f48; text-align: center;" class="button-td">
		                                <a href="'.base_url().'user/confirmresetpassword/' . $idCODE . '" style="background: #2e2f48; border: 15px solid #2e2f48; font-family: sans-serif; font-size: 13px; line-height: 110%; text-align: center; text-decoration: none; display: block; border-radius: 3px; font-weight: bold;" class="button-a">
		                                    &nbsp;&nbsp;&nbsp;&nbsp;<span style="color:#ffffff;">Reset Kata Sandi</span>&nbsp;&nbsp;&nbsp;&nbsp;
		                                </a>
		                            </td>
		                        </tr>
		                    </table>
		                    <!-- Button : END -->
		                </td>
		            </tr> <!-- 1 Column Text + Button : END -->

		            <tr>
		                <td aria-hidden="true" height="40" style="font-size: 0; line-height: 0;">
		                    &nbsp;
		                </td>
		            </tr>

		            <tr>
		                <td bgcolor="#ffffff">
		                    <table role="presentation" cellspacing="0" cellpadding="0" border="0" width="100%">
		                        <tr>
		                            <td style="padding: 40px; font-family: sans-serif; font-size: 15px; line-height: 140%; color: #eee; background: #f56868">
		                                Jika Anda tidak merasa pernah melakukan request penggantian kata sandi, maka cukup abaikan saja email ini.
		                            </td>
		                        </tr>
		                    </table>
		                </td>
		            </tr>

		    </table>
		    <!-- Email Body : END -->

		    <!-- Email Footer : BEGIN -->
		    <table role="presentation" cellspacing="0" cellpadding="0" border="0" align="center" width="100%" style="max-width: 680px; font-family: sans-serif; color: #888888; font-size: 12px; line-height: 140%;">
		        <tr>
		            <td style="padding: 40px 10px; width: 100%; font-family: sans-serif; font-size: 12px; line-height: 140%; text-align: center; color: #888888;" class="x-gmail-data-detectors">
		                <br><br>
		                Nyat Kadir.org<br>Komplek Tiban 2 Blok H #33, Batam 29432<br>(0778) 456-7890
		                <br><br>
		                <unsubscribe style="color: #888888; text-decoration: underline;">unsubscribe</unsubscribe>
		            </td>
		        </tr>
		    </table>
		    <!-- Email Footer : END -->

		    </center>
		</body>
		</html>';

        //configure email settings
        $config = $this->mail_config();
        $this->email->initialize($config);

        //send mail
        $this->email->from($from_email, 'Kawan Nyat Kadir');
        $this->email->to($email);
        $this->email->subject($subject);
        $this->email->message($message);
        return $this->email->send();
	}

	public function confirmresetpassword($id = NULL){
		$data['addONS'] = 'reset_password_user';
		$data['title'] = 'Reset Password -  Nyat Kadir - Laman Resmi';
		$idUSER = decode($id);
		if(empty($idUSER)){
			redirect(base_url());
		} else {
			$data['idUSER'] = $idUSER;
			$data['subview'] = $this->load->view($this->data['frontendDIR'].'confirm_reset', $data, TRUE);
        	$this->load->view($this->data['rootDIR'].'_layout_base_frontend',$data);
		}
	}

	public function process_reset_password(){

		$rules = $this->Users_m->rules_changepassword_users;
		$this->form_validation->set_rules($rules);

		if($this->form_validation->run() == TRUE){

			$data['passwordUSER'] = $this->Users_m->hash($this->input->post('passwordUSER'));
			$idUSER = decode($this->input->post('idUSER'));
			$get_email = $this->Users_m->checkusers('',$idUSER)->row();
			$saving = $this->Users_m->save($data, $idUSER);
			if($saving){
				$this->sendemailnotification_success_reset($get_email->idUSER, $get_email->emailUSER);
				$data = array(
                    'title' => 'Sukses!',
					'style' => 'is-success',
		            'text' => 'Selamat! Kata sandi telah berhasil direset. Silakan login kembali.'
                );
				$this->session->set_flashdata('message', $data);
				redirect('user');
			}else{
				$data = array(
					'title' => 'Warning!',
					'style' => 'is-warning',
					'text' => 'Maaf, kami tidak dapat me-reset kata sandi Anda. Silakan coba beberapa saat kembali.'
				);
				$this->session->set_flashdata('message', $data);
				redirect('user');
			}

		} else {
			$data = array(
				'title' => 'Warning!',
				'style' => 'is-warning',
				'text' => 'Maaf, mohon ulangi inputan form perubahan kata sandi Anda! <br> Petunjuk: Kata sandi memerlukan setidaknya 8 karakter.'
				);
			$this->session->set_flashdata('message', $data);
			redirect('user');
		}
	}

	private function sendemailnotification_success_reset($id=NULL, $email=NULL) {
		$from_email = 'no-reply@nyatkadir.org'; //change this to yours
     	$idCODE = encode($id);
        $subject = 'Reset Kata sandi berhasil - Kawan Nyat Kadir';
        $word1 = '<p style="margin: 0;">Selamat! Kata sandi baru akun Anda telah berhasil direset pada <b>'.date("l, d F Y H:i:s").'</b>. Harap simpan baik-baik informasi kata sandi Anda di tempat yang aman.</p>
        <br><br>
        <p>Salam Sejahtera!</p>';
        $message = '
        <!DOCTYPE html>
		<html lang="en" xmlns="http://www.w3.org/1999/xhtml" xmlns:v="urn:schemas-microsoft-com:vml" xmlns:o="urn:schemas-microsoft-com:office:office">
		<head>
		    <meta charset="utf-8">
		    <meta name="viewport" content="width=device-width">
		    <meta http-equiv="X-UA-Compatible" content="IE=edge">
		    <meta name="x-apple-disable-message-reformatting">
		    <title>'.$subject.'</title>

		    <style>
		        html,
		        body {
		            margin: 0 auto !important;
		            padding: 0 !important;
		            height: 100% !important;
		            width: 100% !important;
		        }

		        * {
		            -ms-text-size-adjust: 100%;
		            -webkit-text-size-adjust: 100%;
		        }

		        div[style*="margin: 16px 0"] {
		            margin: 0 !important;
		        }

		        table,
		        td {
		            mso-table-lspace: 0pt !important;
		            mso-table-rspace: 0pt !important;
		        }

		        table {
		            border-spacing: 0 !important;
		            border-collapse: collapse !important;
		            table-layout: fixed !important;
		            margin: 0 auto !important;
		        }
		        table table table {
		            table-layout: auto;
		        }

		        img {
		            -ms-interpolation-mode:bicubic;
		        }

		        *[x-apple-data-detectors],  /* iOS */
		        .x-gmail-data-detectors,    /* Gmail */
		        .x-gmail-data-detectors *,
		        .aBn {
		            border-bottom: 0 !important;
		            cursor: default !important;
		            color: inherit !important;
		            text-decoration: none !important;
		            font-size: inherit !important;
		            font-family: inherit !important;
		            font-weight: inherit !important;
		            line-height: inherit !important;
		        }

		        .a6S {
		           display: none !important;
		           opacity: 0.01 !important;
		       }

		       img.g-img + div {
		           display: none !important;
		       }

		        .button-link {
		            text-decoration: none !important;
		        }

		        @media only screen and (min-device-width: 375px) and (max-device-width: 413px) { /* iPhone 6 and 6+ */
		            .email-container {
		                min-width: 375px !important;
		            }
		        }

			    @media screen and (max-width: 480px) {
			        /* What it does: Forces Gmail app to display email full width */
			        u ~ div .email-container {
				        min-width: 100vw;
				        width: 100% !important;
			        }
				}

		    </style>

		    <style>
		        .button-td,
		        .button-a {
		            transition: all 100ms ease-in;
		        }
		        .button-td:hover,
		        .button-a:hover {
		            background: #555555 !important;
		            border-color: #555555 !important;
		        }

		        @media screen and (max-width: 600px) {

		            .email-container {
		                width: 100% !important;
		                margin: auto !important;
		            }

		            .fluid {
		                max-width: 100% !important;
		                height: auto !important;
		                margin-left: auto !important;
		                margin-right: auto !important;
		            }

		            .stack-column,
		            .stack-column-center {
		                display: block !important;
		                width: 100% !important;
		                max-width: 100% !important;
		                direction: ltr !important;
		            }

		            .stack-column-center {
		                text-align: center !important;
		            }

		            .center-on-narrow {
		                text-align: center !important;
		                display: block !important;
		                margin-left: auto !important;
		                margin-right: auto !important;
		                float: none !important;
		            }
		            table.center-on-narrow {
		                display: inline-block !important;
		            }

		            /* What it does: Adjust typography on small screens to improve readability */
		            .email-container p {
		                font-size: 17px !important;
		            }
		        }

		    </style>

		</head>
		<body width="100%" bgcolor="#eee" style="margin: 0; mso-line-height-rule: exactly;">
		    <center style="width: 100%; background: #32384c; text-align: left;">

		        <div style="display: none; font-size: 1px; line-height: 1px; max-height: 0px; max-width: 0px; opacity: 0; overflow: hidden; mso-hide: all; font-family: sans-serif;">
		            '.$word1.'
		        </div>

		        <table role="presentation" cellspacing="0" cellpadding="0" border="0" align="center" width="600" style="margin: auto;" class="email-container">
		            <tr>
		                <td style="padding: 20px 0; text-align: center">
		                    <h2 style="height: auto; font-family: sans-serif; font-size: 24px; line-height: 140%; color: #f3f3f3;">NyatKadir.<span style="color: #fdc236">org</span></h2>
		                </td>
		            </tr>
		        </table>

		        <table role="presentation" cellspacing="0" cellpadding="0" border="0" align="center" width="600" style="margin: auto;" class="email-container">
		            <tr>
		                <td bgcolor="#ffffff" align="center">
		                    <img src="http://placehold.it/1200x600" width="600" height="" alt="alt_text" border="0" align="center" style="width: 100%; max-width: 600px; height: auto; background: #dddddd; font-family: sans-serif; font-size: 15px; line-height: 140%; color: #555555; margin: auto;" class="g-img">
		                </td>
		            </tr>
		            <tr>
		                <td bgcolor="#ffffff" style="padding: 40px 40px 20px; text-align: center;">
		                    <h1 style="margin: 0; font-family: sans-serif; font-size: 24px; line-height: 125%; color: #2e2f48; font-weight: bold;">Kata Sandi Berhasil Direset</h1>
		                </td>
		            </tr>
		            <tr>
		                <td bgcolor="#ffffff" style="padding: 0 40px 40px; font-family: sans-serif; font-size: 15px; line-height: 140%; color: #555555; text-align: center;">
		                    '.$word1.'
		                </td>
		            </tr>
		            <tr>
		                <td bgcolor="#ffffff" style="padding: 0 40px 40px; font-family: sans-serif; font-size: 15px; line-height: 140%; color: #555555;">
		                    <table role="presentation" cellspacing="0" cellpadding="0" border="0" align="center" style="margin: auto">
		                        <tr>
		                            <td style="border-radius: 3px; background: #2e2f48; text-align: center;" class="button-td">
		                                <a href="'.base_url().'" style="background: #2e2f48; border: 15px solid #2e2f48; font-family: sans-serif; font-size: 13px; line-height: 110%; text-align: center; text-decoration: none; display: block; border-radius: 3px; font-weight: bold;" class="button-a">
		                                    &nbsp;&nbsp;&nbsp;&nbsp;<span style="color:#ffffff;">Kembali ke Halaman Utama</span>&nbsp;&nbsp;&nbsp;&nbsp;
		                                </a>
		                            </td>
		                        </tr>
		                    </table>
		                    <!-- Button : END -->
		                </td>
		            </tr> <!-- 1 Column Text + Button : END -->

		    </table>
		    <!-- Email Body : END -->

		    <!-- Email Footer : BEGIN -->
		    <table role="presentation" cellspacing="0" cellpadding="0" border="0" align="center" width="100%" style="max-width: 680px; font-family: sans-serif; color: #888888; font-size: 12px; line-height: 140%;">
		        <tr>
		            <td style="padding: 40px 10px; width: 100%; font-family: sans-serif; font-size: 12px; line-height: 140%; text-align: center; color: #888888;" class="x-gmail-data-detectors">
		                <br><br>
		                Nyat Kadir.org<br>Komplek Tiban 2 Blok H #33, Batam 29432<br>(0778) 456-7890
		                <br><br>
		                <unsubscribe style="color: #888888; text-decoration: underline;">unsubscribe</unsubscribe>
		            </td>
		        </tr>
		    </table>

		    </center>
		</body>
		</html>';

        //configure email settings
        $config = $this->mail_config();
        $this->email->initialize($config);

        //send mail
        $this->email->from($from_email, 'Kawan Nyat Kadir');
        $this->email->to($email);
        $this->email->subject($subject);
        $this->email->message($message);
        return $this->email->send();
	}
}
