<?php
if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Aspirasi extends Admin_Controller {

	public function __construct (){
		parent::__construct();
		$this->load->model('Aspirasi_m');
	}

	public function index_aspirasi(){
		$data['addONS'] = 'plugins_aspirasi';
		
		$data['listaspirasi'] = $this->Aspirasi_m->selectall_aspirasi()->result();

		if(!empty($this->session->flashdata('message'))) {
            $data['message'] = $this->session->flashdata('message');
        }

		$data['subview'] = $this->load->view($this->data['backendDIR'].'aspirasi', $data, TRUE);
		$this->load->view('templates/_layout_base',$data);
	}

	public function get_aspirasi($id){
		$where = array('idASPIRASI'=>$id);
		$data = $this->db->get_where('aspirasi',$where)->row();
		
		$data->createdateASPIRASI = indonesian_date($data->createdateASPIRASI,'j F Y H:i:s','');
		echo json_encode($data);
	}
}