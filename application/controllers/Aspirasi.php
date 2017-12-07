<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Aspirasi extends Frontend_Controller {

	public function __construct (){
		parent::__construct();
		$this->load->model('Aspirasi_m');
	}

	public function index() {
		$data['addONS'] = 'non_footer_page';
		$data['title'] = 'Aspirasi Anda - Nyat Kadir - Laman Resmi';

		if(!empty($this->session->flashdata('message_aspirasi'))) {
            $data['message_aspirasi'] = $this->session->flashdata('message_aspirasi');
        }

		$data['subview'] = $this->load->view($this->data['frontendDIR'].'aspirasi', $data, TRUE);
        $this->load->view($this->data['rootDIR'].'_layout_base_frontend',$data);
	}

	public function send_aspirasi(){
		$rules = $this->Aspirasi_m->rules_aspirasi;
		$this->form_validation->set_rules($rules);
		$this->form_validation->set_message('required', 'Form %s tidak boleh dikosongkan');
        $this->form_validation->set_message('trim', 'Form %s adalah Trim');
        $this->form_validation->set_message('valid_email', 'Maaf $s anda tidak valid');
        $this->form_validation->set_message('numeric', 'Form ini hanya diperbolehkan angka saja');
        $this->form_validation->set_message('min_length', 'Minimal 10 karakter');

		if ($this->form_validation->run() == TRUE) {
			$data = $this->Aspirasi_m->array_from_post(array('nameASPIRASI','emailASPIRASI','ageASPIRASI','subjectASPIRASI','descASPIRASI'));
			if(empty($this->session->userdata('idUSER'))){
				$data['userASPIRASI'] = 0; // guest kirim aspirasi
			} else {
				$data['userASPIRASI'] = $this->session->userdata('idUSER');
			}
			if(!empty($this->session->userdata('idUSER'))){
				if($data['nameASPIRASI'] != $this->session->userdata('Name')){
					$data['nameASPIRASI'] = $this->session->userdata('Name');
				}
				if($data['emailASPIRASI'] != $this->session->userdata('Email')){
					$data['emailASPIRASI'] = $this->session->userdata('Email');
				}
			}
   			$data = $this->security->xss_clean($data);
			$saveid = $this->Aspirasi_m->save($data);

			if ($saveid) {

				$email = $this->input->post('emailASPIRASI');

	                if($this->sendemail_aspirasi($email)) {

						$data = array(
							'title' => 'Sukses',
							'style' => 'is-success',
		                    'text' => 'Aspirasi Anda telah kami rekam. Dan terima kasih sudah berpartisipasi. Kami berharap dapat bertemu Anda di lain kesempatan.'
		                );
		                $this->session->set_flashdata('message_aspirasi',$data);
		                redirect('home');

					} else {
						$data = array(
		                    'title' => 'Error',
							'style' => 'is-warning',
		                    'text' => 'Maaf, sesuatu telah terjadi, coba beberapa saat kembali.'
		                );
		                $this->session->set_flashdata('message_aspirasi',$data);
		                redirect('home');
					}

			} else {
				$data = array(
					'title' => 'Error!',
					'style' => 'is-warning',
		            'text' => 'Maaf, Sistem tidak dapat menyimpan aspirasi anda, silakan ulangi beberapa saat lagi.'
		        );
		        $this->session->set_flashdata('message_aspirasi',$data);
		        redirect('home');
			}
		} else {
			$data = array(
				'title' => 'Error!',
				'style' => 'is-warning',
	            'text' => 'Maaf ada kesalahan, mohon ulangi inputan form aspirasi anda!.'
	        );
	        $this->session->set_flashdata('message_aspirasi',$data);
	        redirect('home');
		}
	}

	private function sendemail_aspirasi($email=NULL)
	{

		$from_email = 'no-reply@nyatkadir.com';
        $subject = 'Terima Kasih Telah Berpartisipasi - Kawan Nyat Kadir';
        $word1 = 'Terima kasih atas partisipasi Anda dalam menyampaikan aspirasi, saran, dan masukan tentang apa saja untuk Indonesia, di laman resmi <a href="http://www.nyatkadir.com/">NyatKadir.com</a> pada <b>'.date("l, d F Y H:i:s").'</b>. Besar harapan agar segala bentuk aspirasi dari masyarakat Indonesia dapat berdampak positif untuk kemaslahatan umat di kemudian hari.';
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
		            Terima kasih atas partisipasi Anda dalam menyampaikan aspirasi, saran, dan masukan tentang apa saja untuk Indonesia, di laman resmi NyatKadir.com.
		        </div> <!-- Visually Hidden Preheader Text : END -->

		        <table role="presentation" cellspacing="0" cellpadding="0" border="0" align="center" width="600" style="margin: auto;" class="email-container">
		            <tr>
		                <td style="padding: 20px 0; text-align: center">
		                    <h2 style="height: auto; font-family: sans-serif; font-size: 24px; line-height: 140%; color: #f3f3f3;">NyatKadir.<span style="color: #fdc236">com</span></h2>
		                </td>
		            </tr>
		        </table> <!-- Email Header : END -->

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
		                    <h1 style="margin: 0; font-family: sans-serif; font-size: 24px; line-height: 125%; color: #2e2f48; font-weight: bold;">Terima Kasih Telah Berpartisipasi.</h1>
		                </td>
		            </tr>
		            <tr>
		                <td bgcolor="#ffffff" style="padding: 0 40px 40px; font-family: sans-serif; font-size: 15px; line-height: 140%; color: #555555; text-align: center;">
		                    <p style="margin: 0;">'.$word1.'</p> <br><br>

		                    <p style="font-weight: bold">Salam Sejahtera!</p>
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
		                Nyat Kadir.com<br>Komplek Tiban 2 Blok H #33, Batam 29432<br>(0778) 456-7890
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
}
