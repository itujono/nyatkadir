<?php
if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Gallery extends Admin_Controller {

	public function __construct (){
		parent::__construct();
		$this->load->model('Gallery_m');
	}

	public function index_gallery($id = NULL){
		$data['addONS'] = 'plugins_datatables';
		$id = decode(urldecode($id));
		
		$data['listgallery'] = $this->Gallery_m->selectall_gallery()->result();
		foreach ($data['listgallery'] as $key => $value) {
			$map = directory_map('assets/upload/gallery/pic-gallery-'.folenc($data['listgallery'][$key]->idGALLERY), FALSE, TRUE);
			if(!empty($map)){
				$data['listgallery'][$key]->imageGALLERY = base_url() . 'assets/upload/gallery/pic-gallery-'.folenc($data['listgallery'][$key]->idGALLERY).'/'.$map[0];
			} else {
				$data['listgallery'][$key]->imageGALLERY = base_url() . 'assets/upload/no-image-available.png';
			}
		}
		if($id == NULL){
	        $data['tab'] = array(
	            'data-tab' => 'uk-active',
	            'form-tab' => '',
	        );
			$data['getgallery'] = $this->Gallery_m->get_new();
		} else {
			
			//conf tab (optional)
	        $data['tab'] = array(
	            'data-tab' => '',
	            'form-tab' => 'uk-active',
	        );
			$data['getgallery'] = $this->Gallery_m->selectall_gallery($id)->row();
			$map = directory_map('assets/upload/gallery/pic-gallery-'.folenc($data['getgallery']->idGALLERY), FALSE, TRUE);
			$maps = array();
			$imgs = array();
			if(!empty($map)){
				foreach ($map  as $key => $value) {
					$maps[] = base_url().'assets/upload/gallery/pic-gallery-'.folenc($data['getgallery']->idGALLERY).'/'.$value;
					$imgs[] = $value;
				}
			}
			$data['getgallery']->map = $maps;
			$data['getgallery']->imgs = $imgs;
		}

		if(!empty($this->session->flashdata('message'))) {
            $data['message'] = $this->session->flashdata('message');
        }

		$data['subview'] = $this->load->view($this->data['backendDIR'].'gallery', $data, TRUE);
		$this->load->view('templates/_layout_base',$data);
	}

	public function savegallery() {
		$rules = $this->Gallery_m->rules_gallery;
		$this->form_validation->set_rules($rules);
		$this->form_validation->set_message('required', 'Form %s tidak boleh dikosongkan');
        $this->form_validation->set_message('trim', 'Form %s adalah Trim');

		if ($this->form_validation->run() == TRUE) {
			$data = $this->Gallery_m->array_from_post(array('titleGALLERY','categoryGALLERY','linkvideoGALLERY','ishomevideoGALLERY'));
			if($data['ishomevideoGALLERY'] == 'on')$data['ishomevideoGALLERY']=1;
			else $data['ishomevideoGALLERY']=0;
			$id = decode(urldecode($this->input->post('idGALLERY')));

			if(empty($id))$id=NULL;
			$data = $this->security->xss_clean($data);
			$idsave = $this->Gallery_m->save($data, $id);

			$subject = $idsave;
			$filenamesubject = 'pic-gallery-'.folenc($subject);

			if(!empty($_FILES['imgGALLERY']['name'][0])){
				$number_of_files = sizeof($_FILES['imgGALLERY']['tmp_name']);
				$files = $_FILES['imgGALLERY'];
				$path = 'assets/upload/gallery/'.$filenamesubject;
				if (!file_exists($path)){
	            	mkdir($path, 0777, true);
	        	}

				$config['upload_path']		= $path;
	            $config['allowed_types']	= 'jpg|png|jpeg';
	            $config['file_name']        = $this->security->sanitize_filename($filenamesubject);

	            for ($i = 0; $i < $number_of_files; $i++) {
			        $_FILES['imgGALLERY']['name'] = $files['name'][$i];
			        $_FILES['imgGALLERY']['type'] = $files['type'][$i];
			        $_FILES['imgGALLERY']['tmp_name'] = $files['tmp_name'][$i];
			        $_FILES['imgGALLERY']['error'] = $files['error'][$i];
			        $_FILES['imgGALLERY']['size'] = $files['size'][$i];
			        //now we initialize the upload library
			        $this->upload->initialize($config);
			        // we retrieve the number of files that were uploaded
			        if ($this->upload->do_upload('imgGALLERY')){
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
		redirect('administrator/gallery/index_gallery');
		  		
		} else {
			$data = array(
	            'title' => 'Terjadi Kesalahan',
	            'text' => 'mohon ulangi inputan form anda dibawah.',
	            'type' => 'warning'
	        );
	        $this->session->set_flashdata('message',$data);
	        $this->index_gallery();
		}
	}

	public function actiondelete_gallery($id=NULL){
		$id = decode(urldecode($id));
		if($id != 0){
			$this->Gallery_m->delete($id);
			$data = array(
                    'title' => 'Sukses',
                    'text' => 'Penghapusan Data berhasil dilakukan',
                    'type' => 'success'
                );
                $this->session->set_flashdata('message',$data);
                redirect('administrator/gallery/index_gallery');
		}else{
			$data = array(
	            'title' => 'Terjadi Kesalahan',
	            'text' => 'Maaf, data tidak berhasil dihapus silakan coba beberapa saat kembali',
	            'type' => 'error'
		        );
		        $this->session->set_flashdata('message',$data);
		        redirect('administrator/gallery/index_gallery');
		}
	}

	public function deleteimggallery($id1=NULL, $id2=NULL){
		if($id1 != NULL){
			$id = decode(urldecode($id1));
			unlink('assets/upload/gallery/pic-gallery-'.folenc($id).'/'.$id2);
		}
		$data = array(
            'title' => 'Sukses',
            'text' => 'Penghapusan Gambar berhasil dilakukan',
            'type' => 'success'
        );
        $this->session->set_flashdata('message',$data);
		redirect('administrator/gallery/index_gallery/'.$id1);
	}
}