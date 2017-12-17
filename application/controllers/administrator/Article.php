<?php
if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Article extends Admin_Controller {

	public function __construct (){
		parent::__construct();
		$this->load->model('Article_m');
		$this->load->model('Category_article_m');
	}

	public function index_article($id = NULL){
		$data['addONS'] = 'plugins_datatables';
		$id = decode(urldecode($id));
		
		$data['listarticle'] = $this->Article_m->selectall_article()->result();
		foreach ($data['listarticle'] as $key => $value) {
			$map = directory_map('assets/upload/article/pic-article-'.$data['listarticle'][$key]->idARTICLE, FALSE, TRUE);
			if(!empty($map)){
				$data['listarticle'][$key]->imageARTICLE = base_url() . 'assets/upload/article/pic-article-'.$data['listarticle'][$key]->idARTICLE.'/'.$map[0];
			} else {
				$data['listarticle'][$key]->imageARTICLE = base_url() . 'assets/upload/no-image-available.png';
			}
		}
		if($id == NULL){
	        $data['tab'] = array(
	            'data-tab' => 'uk-active',
	            'form-tab' => '',
	        );
			$data['getarticle'] = $this->Article_m->get_new();
		} else {
			
			//conf tab (optional)
	        $data['tab'] = array(
	            'data-tab' => '',
	            'form-tab' => 'uk-active',
	        );
			$data['getarticle'] = $this->Article_m->selectall_article($id)->row();
			$map = directory_map('assets/upload/article/pic-article-'.$data['getarticle']->idARTICLE, FALSE, TRUE);
			$maps = array();
			$imgs = array();
			if(!empty($map)){
				foreach ($map  as $key => $value) {
					$maps[] = base_url().'assets/upload/article/pic-article-'.$data['getarticle']->idARTICLE.'/'.$value;
					$imgs[] = $value;
				}
			}
			$data['getarticle']->map = $maps;
			$data['getarticle']->imgs = $imgs;
		}

		if(!empty($this->session->flashdata('message'))) {
            $data['message'] = $this->session->flashdata('message');
        }
        $data['dropdown_category_article'] = $this->Category_article_m->select_category_article_drop();

		$data['subview'] = $this->load->view($this->data['backendDIR'].'article', $data, TRUE);
		$this->load->view('templates/_layout_base',$data);
	}

	public function savearticle() {
		$rules = $this->Article_m->rules_article;
		$this->form_validation->set_rules($rules);
		$this->form_validation->set_message('required', 'Form %s tidak boleh dikosongkan');
        $this->form_validation->set_message('trim', 'Form %s adalah Trim');

		if ($this->form_validation->run() == TRUE) {
			$data = $this->Article_m->array_from_post(array('titleARTICLE','bestARTICLE','idCAT'));
			if($data['bestARTICLE'] == 'on')$data['bestARTICLE']=1;
			else $data['bestARTICLE']=0;
			$id = decode(urldecode($this->input->post('idARTICLE')));

			if(empty($id))$id=NULL;
			$data = $this->security->xss_clean($data);
			$data['descARTICLE'] = $this->input->post('descARTICLE');
			$idsave = $this->Article_m->save($data, $id);

			$subject = $idsave;
			$filenamesubject = 'pic-article-'.seo_url($subject);

			if(!empty($_FILES['imgARTICLE']['name'][0])) {
				$number_of_files = sizeof($_FILES['imgARTICLE']['tmp_name']);
				$files = $_FILES['imgARTICLE'];
				$path = 'assets/upload/article/'.$filenamesubject;
				if (!file_exists($path)){
	            	mkdir($path, 0777, true);
	        	}

				$config['upload_path']		= $path;
	            $config['allowed_types']	= 'jpg|png|jpeg';
	            $config['file_name']        = $this->security->sanitize_filename($filenamesubject);

	            for ($i = 0; $i < $number_of_files; $i++) {
			        $_FILES['imgARTICLE']['name'] = $files['name'][$i];
			        $_FILES['imgARTICLE']['type'] = $files['type'][$i];
			        $_FILES['imgARTICLE']['tmp_name'] = $files['tmp_name'][$i];
			        $_FILES['imgARTICLE']['error'] = $files['error'][$i];
			        $_FILES['imgARTICLE']['size'] = $files['size'][$i];
			        //now we initialize the upload library
			        $this->upload->initialize($config);
			        // we retrieve the number of files that were uploaded
			        if ($this->upload->do_upload('imgARTICLE')){
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
		redirect('administrator/article/index_article');
		  		
		} else {
			$data = array(
	            'title' => 'Terjadi Kesalahan',
	            'text' => 'mohon ulangi inputan form anda dibawah.',
	            'type' => 'warning'
	        );
	        $this->session->set_flashdata('message',$data);
	        $this->index_article();
		}
	}

	public function actiondelete_article($id=NULL){
		$id = decode(urldecode($id));
		if($id != 0){
			$this->Article_m->delete($id);
			$data = array(
                    'title' => 'Sukses',
                    'text' => 'Penghapusan Data berhasil dilakukan',
                    'type' => 'success'
                );
                $this->session->set_flashdata('message',$data);
                redirect('administrator/article/index_article');
		}else{
			$data = array(
	            'title' => 'Terjadi Kesalahan',
	            'text' => 'Maaf, data tidak berhasil dihapus silakan coba beberapa saat kembali',
	            'type' => 'error'
		        );
		        $this->session->set_flashdata('message',$data);
		        redirect('administrator/article/index_article');
		}
	}

	public function deleteimg_article($id1=NULL, $id2=NULL){
		if($id1 != NULL){
			$id = decode(urldecode($id1));
			unlink('assets/upload/article/pic-article-'.$id.'/'.$id2);
		}
		$data = array(
            'title' => 'Sukses',
            'text' => 'Penghapusan Gambar berhasil dilakukan',
            'type' => 'success'
        );
        $this->session->set_flashdata('message',$data);
		redirect('administrator/article/index_article/'.$id1);
	}

	public function change_best_article($id=NULL , $id2=NULL){
		$id = decode(urldecode($id));
		$ss = 0;
		if($id2 != NULL)$ss = 1;
		if($id != 0){
			$data['bestARTICLE'] = $ss;
			$this->Article_m->save($data, $id);
			$data = array(
                    'title' => 'Sukses',
                    'text' => 'Perubahan Data berhasil dilakukan',
                    'type' => 'success'
                );
                $this->session->set_flashdata('message',$data);
                redirect('administrator/article/index_article');
		}else{
			$data = array(
	            'title' => 'Terjadi Kesalahan',
	            'text' => 'Maaf, sistem tidak mengganti data anda.',
	            'type' => 'error'
		        );
		        $this->session->set_flashdata('message',$data);
		        redirect('administrator/article/index_article');
		}
	}
}