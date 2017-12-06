<?php
if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Press extends Admin_Controller {

	public function __construct (){
		parent::__construct();
		$this->load->model('Press_m');
	}

	public function index_press($id = NULL){
		$data['addONS'] = 'plugins_datatables';
		$id = decode(urldecode($id));
		
		$data['listpress'] = $this->Press_m->selectall_press()->result();
		foreach ($data['listpress'] as $key => $value) {
			$map = directory_map('assets/upload/press/pic-press-'.folenc($data['listpress'][$key]->idPRESS), FALSE, TRUE);
			if(!empty($map)){
				$data['listpress'][$key]->imagePRESS = base_url() . 'assets/upload/press/pic-press-'.folenc($data['listpress'][$key]->idPRESS).'/'.$map[0];
			} else {
				$data['listpress'][$key]->imagePRESS = base_url() . 'assets/upload/no-image-available.png';
			}
		}
		if($id == NULL){
	        $data['tab'] = array(
	            'data-tab' => 'uk-active',
	            'form-tab' => '',
	        );
			$data['getpress'] = $this->Press_m->get_new();
		} else {
			
			//conf tab (optional)
	        $data['tab'] = array(
	            'data-tab' => '',
	            'form-tab' => 'uk-active',
	        );
			$data['getpress'] = $this->Press_m->selectall_press($id)->row();
			$map = directory_map('assets/upload/press/pic-press-'.folenc($data['getpress']->idPRESS), FALSE, TRUE);
			$maps = array();
			$imgs = array();
			if(!empty($map)){
				foreach ($map  as $key => $value) {
					$maps[] = base_url().'assets/upload/press/pic-press-'.folenc($data['getpress']->idPRESS).'/'.$value;
					$imgs[] = $value;
				}
			}
			$data['getpress']->map = $maps;
			$data['getpress']->imgs = $imgs;
		}

		if(!empty($this->session->flashdata('message'))) {
            $data['message'] = $this->session->flashdata('message');
        }

		$data['subview'] = $this->load->view($this->data['backendDIR'].'press', $data, TRUE);
		$this->load->view('templates/_layout_base',$data);
	}

	public function savepress() {
		$rules = $this->Press_m->rules_press;
		$this->form_validation->set_rules($rules);
		$this->form_validation->set_message('required', 'Form %s tidak boleh dikosongkan');
        $this->form_validation->set_message('trim', 'Form %s adalah Trim');

		if ($this->form_validation->run() == TRUE) {
			$data = $this->Press_m->array_from_post(array('titlePRESS','bestPRESS','sourcePRESS'));
			if($data['bestPRESS'] == 'on')$data['bestPRESS']=1;
			else $data['bestPRESS']=0;
			$id = decode(urldecode($this->input->post('idPRESS')));

			if(empty($id))$id=NULL;
			$data = $this->security->xss_clean($data);
			$data['descPRESS'] = $this->input->post('descPRESS');
			$idsave = $this->Press_m->save($data, $id);

			$subject = $idsave;
			$filenamesubject = 'pic-press-'.folenc($subject);

			if(!empty($_FILES['imgPRESS']['name'][0])) {
				$number_of_files = sizeof($_FILES['imgPRESS']['tmp_name']);
				$files = $_FILES['imgPRESS'];
				$path = 'assets/upload/press/'.$filenamesubject;
				if (!file_exists($path)){
	            	mkdir($path, 0777, true);
	        	}

				$config['upload_path']		= $path;
	            $config['allowed_types']	= 'jpg|png|jpeg';
	            $config['file_name']        = $this->security->sanitize_filename($filenamesubject);

	            for ($i = 0; $i < $number_of_files; $i++) {
			        $_FILES['imgPRESS']['name'] = $files['name'][$i];
			        $_FILES['imgPRESS']['type'] = $files['type'][$i];
			        $_FILES['imgPRESS']['tmp_name'] = $files['tmp_name'][$i];
			        $_FILES['imgPRESS']['error'] = $files['error'][$i];
			        $_FILES['imgPRESS']['size'] = $files['size'][$i];
			        //now we initialize the upload library
			        $this->upload->initialize($config);
			        // we retrieve the number of files that were uploaded
			        if ($this->upload->do_upload('imgPRESS')){
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
		redirect('administrator/press/index_press');
		  		
		} else {
			$data = array(
	            'title' => 'Terjadi Kesalahan',
	            'text' => 'mohon ulangi inputan form anda dibawah.',
	            'type' => 'warning'
	        );
	        $this->session->set_flashdata('message',$data);
	        $this->index_press();
		}
	}

	public function actiondelete_press($id=NULL){
		$id = decode(urldecode($id));
		if($id != 0){
			$this->Press_m->delete($id);
			$data = array(
                    'title' => 'Sukses',
                    'text' => 'Penghapusan Data berhasil dilakukan',
                    'type' => 'success'
                );
                $this->session->set_flashdata('message',$data);
                redirect('administrator/press/index_press');
		}else{
			$data = array(
	            'title' => 'Terjadi Kesalahan',
	            'text' => 'Maaf, data tidak berhasil dihapus silakan coba beberapa saat kembali',
	            'type' => 'error'
		        );
		        $this->session->set_flashdata('message',$data);
		        redirect('administrator/press/index_press');
		}
	}

	public function deleteimg_press($id1=NULL, $id2=NULL){
		if($id1 != NULL){
			$id = decode(urldecode($id1));
			unlink('assets/upload/press/pic-press-'.folenc($id).'/'.$id2);
		}
		$data = array(
            'title' => 'Sukses',
            'text' => 'Penghapusan Gambar berhasil dilakukan',
            'type' => 'success'
        );
        $this->session->set_flashdata('message',$data);
		redirect('administrator/press/index_press/'.$id1);
	}

	public function change_best_press($id=NULL , $id2=NULL){
		$id = decode(urldecode($id));
		$ss = 0;
		if($id2 != NULL)$ss = 1;
		if($id != 0){
			$data['bestPRESS'] = $ss;
			$this->Press_m->save($data, $id);
			$data = array(
                    'title' => 'Sukses',
                    'text' => 'Perubahan Data berhasil dilakukan',
                    'type' => 'success'
                );
                $this->session->set_flashdata('message',$data);
                redirect('administrator/press/index_press');
		}else{
			$data = array(
	            'title' => 'Terjadi Kesalahan',
	            'text' => 'Maaf, sistem tidak mengganti data anda.',
	            'type' => 'error'
		        );
		        $this->session->set_flashdata('message',$data);
		        redirect('administrator/press/index_press');
		}
	}
}