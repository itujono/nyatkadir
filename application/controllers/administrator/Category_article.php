<?php
if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Category_article extends Admin_Controller {

	public function __construct (){
		parent::__construct();
		$this->load->model('Category_article_m');
	}

	public function index_category_article($id = NULL){
		$data['addONS'] = 'plugins_datatables';
		$id = decode(urldecode($id));
		
		$data['list_category'] = $this->Category_article_m->selectall_cat_article()->result();

		if($id == NULL){
	        $data['tab'] = array(
	            'data-tab' => 'uk-active',
	            'form-tab' => '',
	        );
			$data['getcategory'] = $this->Category_article_m->get_new();
		} else {
			
			//conf tab (optional)
	        $data['tab'] = array(
	            'data-tab' => '',
	            'form-tab' => 'uk-active',
	        );
			$data['getcategory'] = $this->Category_article_m->selectall_cat_article($id)->row();
		}

		if(!empty($this->session->flashdata('message'))) {
            $data['message'] = $this->session->flashdata('message');
        }

		$data['subview'] = $this->load->view($this->data['backendDIR'].'category_article', $data, TRUE);
		$this->load->view('templates/_layout_base',$data);
	}

	public function savecategory() {
		$rules = $this->Category_article_m->rules_category_article;
		$this->form_validation->set_rules($rules);
		$this->form_validation->set_message('required', 'Form %s tidak boleh dikosongkan');
        $this->form_validation->set_message('trim', 'Form %s adalah Trim');
        $this->form_validation->set_message('is_unique', 'Maaf kategori sudah dipakai, silakan masukkan  yang lain.');

		if ($this->form_validation->run() == TRUE) {
			$data = $this->Category_article_m->array_from_post(array('nameCAT'));
			$id = decode(urldecode($this->input->post('idCAT')));

			if(empty($id))$id=NULL;
			$data = $this->security->xss_clean($data);
			$this->Category_article_m->save($data, $id);
			
		    $data = array(
		    	'title' => 'Sukses',
		        'text' => 'Penyimpanan Data berhasil dilakukan',
		        'type' => 'success'
				);
				$this->session->set_flashdata('message', $data);
			redirect('administrator/category_article/index_category_article');
		  		
		} else {
			$data = array(
	            'title' => 'Terjadi Kesalahan',
	            'text' => 'mohon ulangi inputan form anda dibawah.',
	            'type' => 'warning'
	        );
	        $this->session->set_flashdata('message',$data);
	        $this->index_category_article();
		}
	}

	public function actiondelete_category($id=NULL){
		$id = decode(urldecode($id));
		if($id != 0){
			$this->Category_article_m->delete($id);
			$data = array(
                    'title' => 'Sukses',
                    'text' => 'Penghapusan Data berhasil dilakukan',
                    'type' => 'success'
                );
                $this->session->set_flashdata('message',$data);
                redirect('administrator/category_article/index_category_article');
		}else{
			$data = array(
	            'title' => 'Terjadi Kesalahan',
	            'text' => 'Maaf, data tidak berhasil dihapus silakan coba beberapa saat kembali',
	            'type' => 'error'
		        );
		        $this->session->set_flashdata('message',$data);
		        redirect('administrator/category_article/index_category_article');
		}
	}
}