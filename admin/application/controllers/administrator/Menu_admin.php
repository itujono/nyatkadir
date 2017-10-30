<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Menu_admin extends Admin_Controller {

	public function __construct (){
		parent::__construct();
		$this->load->model('Menu_admin_m');
		$this->load->model('User_m');
	}

	public function index_menu($id = NULL) {
		$data['addONS'] = 'plugins_menu';
		$id = decode(urldecode($id));
		if($id == NULL){
			redirect('login/logout');
		}

		$data['parent'] = $this->Menu_admin_m->selectall_menu('','','',$id)->result();
		$data['child'] = $this->Menu_admin_m->selectall_menu('','','',$id)->result();
		// print_r($this->db->last_query());
		// exit;
		$data['listmenu'] = NULL;
		// if($this->session->userdata('akses') == 'admin') {
		// 	$data['listform_admin'] = 1;
		// }
		if(!empty($this->session->flashdata('message'))) {
            $data['message'] = $this->session->flashdata('message');
        }

		$data['subview'] = $this->load->view($this->data['backendDIR'].'Menu_admin', $data, TRUE);
		$this->load->view('templates/_layout_base',$data);
	}

	public function form_menu($id = NULL) {

		$data['addONS'] = 'plugins_menu';
		$id = decode(urldecode($id));
		
		if($id == NULL){
			redirect('login/logout');
		}

		$data['getmenu'] = $this->Menu_admin_m->selectall_menu($id)->row();
		$data['list_dropdown_menu'] = $this->Menu_admin_m->dropdown_menu(1);
		
		$data['getuseraccess'] = $this->User_m->select_accessmenu_by_user($data['getmenu']->accessMENU)->result();

		$data['listmenu'] = 1;

		if(!empty($this->session->flashdata('message'))) {
            $data['message'] = $this->session->flashdata('message');
        }

		$data['subview'] = $this->load->view($this->data['backendDIR'].'Menu_admin', $data, TRUE);
		$this->load->view('templates/_layout_base',$data);
	}

	public function savemenu() {
		$rules = $this->Menu_admin_m->rules_menu;
		$this->form_validation->set_rules($rules);
		$this->form_validation->set_message('required', 'Form %s tidak boleh dikosongkan');
        $this->form_validation->set_message('trim', 'Form %s adalah Trim');

		if ($this->form_validation->run() == TRUE) {
			$data = $this->Menu_admin_m->array_from_post(array('namaMENU','iconMENU','parentMENU','accessMENU','statusMENU'));
			print_r($data['accessMENU']);
			exit;
			if($data['statusMENU'] == 'on')$data['statusMENU']=1;
			else $data['statusMENU']=0;
			$id = decode(urldecode($this->input->post('idMENU')));
			if(empty($id))$id=NULL;
			
			$data = $this->security->xss_clean($data);

			if($this->Menu_admin_m->save($data, $id)){
				$data = array(
	            	'title' => 'Sukses',
	                'text' => 'Penyimpanan Menu berhasil dilakukan',
	                'type' => 'success'
	          	);
		    	$this->session->set_flashdata('message', $data);
		  		redirect('administrator/user/index_user');
			}
	  		
		} else {
				$data = array(
		            'title' => 'Terjadi Kesalahan',
		            'text' => 'mohon ulangi inputan form menu anda.',
		            'type' => 'warning'
		        );
	        $this->session->set_flashdata('message',$data);
	        $id = decode(urldecode($this->input->post('idMENU')));
	        $ids = encode(urlencode($id));
	        redirect('administrator/menu_admin/form_menu/'.$ids);
		}
	}
}
