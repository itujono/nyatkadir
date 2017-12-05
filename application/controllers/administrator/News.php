<?php
if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class News extends Admin_Controller {

	public function __construct (){
		parent::__construct();
		$this->load->model('News_m');
		$this->load->model('Intro_news_m');
	}

	public function index_news($id = NULL){
		$data['addONS'] = 'plugins_datatables';
		$id = decode(urldecode($id));
		
		$data['listnews'] = $this->News_m->selectall_news()->result();
		foreach ($data['listnews'] as $key => $value) {
			$map = directory_map('assets/upload/news/pic-news-'.folenc($data['listnews'][$key]->idNEWS), FALSE, TRUE);
			if(!empty($map)){
				$data['listnews'][$key]->imageNEWS = base_url() . 'assets/upload/news/pic-news-'.folenc($data['listnews'][$key]->idNEWS).'/'.$map[0];
			} else {
				$data['listnews'][$key]->imageNEWS = '';
			}
		}
		if($id == NULL){
	        $data['tab'] = array(
	            'data-tab' => 'uk-active',
	            'form-tab' => '',
	        );
			$data['getnews'] = $this->News_m->get_new();
		} else {
			
			//conf tab (optional)
	        $data['tab'] = array(
	            'data-tab' => '',
	            'form-tab' => 'uk-active',
	        );
			$data['getnews'] = $this->News_m->selectall_news($id)->row();
			$map = directory_map('assets/upload/news/pic-news-'.folenc($data['getnews']->idNEWS), FALSE, TRUE);
			$maps = array();
			$imgs = array();
			if(!empty($map)){
				foreach ($map  as $key => $value) {
					$maps[] = base_url().'assets/upload/news/pic-news-'.folenc($data['getnews']->idNEWS).'/'.$value;
					$imgs[] = $value;
				}
			}
			$data['getnews']->map = $maps;
			$data['getnews']->imgs = $imgs;
		}

		if(!empty($this->session->flashdata('message'))) {
            $data['message'] = $this->session->flashdata('message');
        }

		$data['subview'] = $this->load->view($this->data['backendDIR'].'news', $data, TRUE);
		$this->load->view('templates/_layout_base',$data);
	}

	public function savenews() {
		$rules = $this->News_m->rules_news;
		$this->form_validation->set_rules($rules);
		$this->form_validation->set_message('required', 'Form %s tidak boleh dikosongkan');
        $this->form_validation->set_message('trim', 'Form %s adalah Trim');

		if ($this->form_validation->run() == TRUE) {
			$data = $this->News_m->array_from_post(array('titleNEWS','bestNEWS'));
			if($data['bestNEWS'] == 'on')$data['bestNEWS']=1;
			else $data['bestNEWS']=0;
			$id = decode(urldecode($this->input->post('idNEWS')));

			if(empty($id))$id=NULL;
			$data = $this->security->xss_clean($data);
			$data['descNEWS'] = $this->input->post('descNEWS');
			$idsave = $this->News_m->save($data, $id);

			$subject = $idsave;
			$filenamesubject = 'pic-news-'.folenc($subject);

			if(!empty($_FILES['imgNEWS']['name'][0])){
				$number_of_files = sizeof($_FILES['imgNEWS']['tmp_name']);
				$files = $_FILES['imgNEWS'];
				$path = 'assets/upload/news/'.$filenamesubject;
				if (!file_exists($path)){
	            	mkdir($path, 0777, true);
	        	}

				$config['upload_path']		= $path;
	            $config['allowed_types']	= 'jpg|png|jpeg';
	            $config['file_name']        = $this->security->sanitize_filename($filenamesubject);

	            for ($i = 0; $i < $number_of_files; $i++) {
			        $_FILES['imgNEWS']['name'] = $files['name'][$i];
			        $_FILES['imgNEWS']['type'] = $files['type'][$i];
			        $_FILES['imgNEWS']['tmp_name'] = $files['tmp_name'][$i];
			        $_FILES['imgNEWS']['error'] = $files['error'][$i];
			        $_FILES['imgNEWS']['size'] = $files['size'][$i];
			        //now we initialize the upload library
			        $this->upload->initialize($config);
			        // we retrieve the number of files that were uploaded
			        if ($this->upload->do_upload('imgNEWS')){
			          $data['uploads'][$i] = $this->upload->data();
			        }else{
			          $data['upload_errors'][$i] = $this->upload->display_errors();
			        }
			    }
	    	}

		  	$data = array(
            	'title' => 'Sukses',
                'text' => 'Penyimpanan Data berhasil dilakukan',
                'type' => 'success'
          	);
	    	$this->session->set_flashdata('message', $data);
	  		redirect('administrator/news/index_news');

		} else {
			$data = array(
	            'title' => 'Terjadi Kesalahan',
	            'text' => 'mohon ulangi inputan form anda dibawah.',
	            'type' => 'warning'
	        );
	        $this->session->set_flashdata('message',$data);
	        $this->index_news();
		}
	}

	public function actiondelete_news($id=NULL){
		$id = decode(urldecode($id));
		if($id != 0){
			$this->News_m->delete($id);
			$data = array(
                    'title' => 'Sukses',
                    'text' => 'Penghapusan Data berhasil dilakukan',
                    'type' => 'success'
                );
                $this->session->set_flashdata('message',$data);
                redirect('administrator/news/index_news');
		}else{
			$data = array(
	            'title' => 'Terjadi Kesalahan',
	            'text' => 'Maaf, data tidak berhasil dihapus silakan coba beberapa saat kembali',
	            'type' => 'error'
		        );
		        $this->session->set_flashdata('message',$data);
		        redirect('administrator/news/index_news');
		}
	}

	public function deleteimg_news($id1=NULL, $id2=NULL){
		if($id1 != NULL){
			$id = decode(urldecode($id1));
			unlink('assets/upload/news/pic-news-'.folenc($id).'/'.$id2);
		}
		$data = array(
            'title' => 'Sukses',
            'text' => 'Penghapusan Gambar berhasil dilakukan',
            'type' => 'success'
        );
        $this->session->set_flashdata('message',$data);
		redirect('administrator/news/index_news/'.$id1);
	}

	public function change_best_news($id=NULL , $id2=NULL){
		$id = decode(urldecode($id));
		$ss = 0;
		if($id2 != NULL)$ss = 1;
		if($id != 0){
			$data['bestNEWS'] = $ss;
			$this->News_m->save($data, $id);
			$data = array(
                    'title' => 'Sukses',
                    'text' => 'Perubahan Data berhasil dilakukan',
                    'type' => 'success'
                );
                $this->session->set_flashdata('message',$data);
                redirect('administrator/news/index_news');
		}else{
			$data = array(
	            'title' => 'Terjadi Kesalahan',
	            'text' => 'Maaf, sistem tidak mengganti data anda.',
	            'type' => 'error'
		        );
		        $this->session->set_flashdata('message',$data);
		        redirect('administrator/news/index_news');
		}
	}

	public function index_intro_news($id = NULL){
		$data['addONS'] = 'plugins_datatables';
		$id = decode(urldecode($id));
		
		$data['listintro'] = $this->Intro_news_m->selectall_intro_news()->result();
		foreach ($data['listintro'] as $key => $value) {
			$map = directory_map('assets/upload/news/intro-news/pic-intro-news-'.folenc($data['listintro'][$key]->idINTRONEWS), FALSE, TRUE);
			if(!empty($map)){
				$data['listintro'][$key]->imageINTRONEWS = base_url() . 'assets/upload/news/intro-news/pic-intro-news-'.folenc($data['listintro'][$key]->idINTRONEWS).'/'.$map[0];
			} else {
				$data['listintro'][$key]->imageINTRONEWS = '';
			}
		}
		if($id == NULL){
	        $data['tab'] = array(
	            'data-tab' => 'uk-active',
	            'form-tab' => '',
	        );
			$data['getintro'] = $this->Intro_news_m->get_new();
		} else {
			
			//conf tab (optional)
	        $data['tab'] = array(
	            'data-tab' => '',
	            'form-tab' => 'uk-active',
	        );
			$data['getintro'] = $this->Intro_news_m->selectall_intro_news($id)->row();
			$map = directory_map('assets/upload/news/intro-news/pic-intro-news-'.folenc($data['getintro']->idINTRONEWS), FALSE, TRUE);
			if(!empty($map)){
				$data['getintro']->imageINTRONEWS = base_url() . 'assets/upload/news/intro-news/pic-intro-news-'.folenc($data['getintro']->idINTRONEWS).'/'.$map[0];
			} else {
				$data['getintro']->imageINTRONEWS = '';
			}
		}

		if(!empty($this->session->flashdata('message'))) {
            $data['message'] = $this->session->flashdata('message');
        }

		$data['subview'] = $this->load->view($this->data['backendDIR'].'intro_news', $data, TRUE);
		$this->load->view('templates/_layout_base',$data);
	}

	public function saveintronews() {
		$rules = $this->Intro_news_m->rules_intro_news;
		$this->form_validation->set_rules($rules);
		$this->form_validation->set_message('required', 'Form %s tidak boleh dikosongkan');
        $this->form_validation->set_message('trim', 'Form %s adalah Trim');

		if ($this->form_validation->run() == TRUE) {
			$data = $this->Intro_news_m->array_from_post(array('titleINTRONEWS'));
			$id = decode(urldecode($this->input->post('idINTRONEWS')));

			if(empty($id))$id=NULL;
			$data = $this->security->xss_clean($data);

			$idsave = $this->Intro_news_m->save($data, $id);

			$subject = $idsave;
			$filenamesubject = 'pic-intro-news-'.folenc($subject);

			if(!empty($_FILES['imgINTRONEWS']['name'][0])) {
				$path = 'assets/upload/news/intro-news/'.$filenamesubject;
				if (!file_exists($path)){
	            	mkdir($path, 0777, true);
	        	}

				$config['upload_path']		= $path;
	            $config['allowed_types']	= 'jpg|png|jpeg';
	            $config['file_name']        = $this->security->sanitize_filename($filenamesubject);

		        $this->upload->initialize($config);

		        if ($this->upload->do_upload('imgINTRONEWS')){
		        	$data['uploads'] = $this->upload->data();
		        }

		  	}

		  	$data = array(
            	'title' => 'Sukses',
                'text' => 'Penyimpanan Data berhasil dilakukan',
                'type' => 'success'
          	);
	    	$this->session->set_flashdata('message', $data);
	  		redirect('administrator/news/index_intro_news');

		} else {
			$data = array(
	            'title' => 'Terjadi Kesalahan',
	            'text' => 'mohon ulangi inputan form anda dibawah.',
	            'type' => 'warning'
	        );
	        $this->session->set_flashdata('message',$data);
	        $this->index_intro_news();
		}
	}

	public function actiondelete_intro_news($id=NULL){
		$id = decode(urldecode($id));
		if($id != 0){
			$this->Intro_news_m->delete($id);
			$data = array(
                    'title' => 'Sukses',
                    'text' => 'Penghapusan Data berhasil dilakukan',
                    'type' => 'success'
                );
                $this->session->set_flashdata('message',$data);
                redirect('administrator/news/index_intro_news');
		}else{
			$data = array(
	            'title' => 'Terjadi Kesalahan',
	            'text' => 'Maaf, data tidak berhasil dihapus silakan coba beberapa saat kembali',
	            'type' => 'error'
		        );
		        $this->session->set_flashdata('message',$data);
		        redirect('administrator/news/index_intro_news');
		}
	}

	public function deleteimg_intro_news($id1=NULL){
		if($id1 != NULL){
			$id = decode(urldecode($id1));
			$map = directory_map('assets/upload/news/intro-news/'.folenc($id), FALSE, TRUE);
			$path = 'assets/upload/news/intro-news/'.folenc($id);
			foreach ($map as $value) {
				unlink('assets/upload/news/intro-news/'.folenc($id).'/'.$value);
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
		redirect('administrator/news/index_intro_news/'.$id1);
	}
}