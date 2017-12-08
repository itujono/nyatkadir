<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Aspirasi_m extends MY_Model{
	
	protected $_table_name = 'nyat_aspirasi';
	protected $_order_by = 'idASPIRASI';
	protected $_primary_key = 'idASPIRASI';

	public $rules_aspirasi = array(
		'nameASPIRASI' => array(
			'field' => 'nameASPIRASI', 
			'label' => 'Nama anda', 
			'rules' => 'trim|required'
		),
		'emailASPIRASI' => array(
			'field' => 'emailASPIRASI', 
			'label' => 'Email anda', 
			'rules' => 'trim|required|valid_email'
		),
		'ageASPIRASI' => array(
			'field' => 'ageASPIRASI', 
			'label' => 'Umur anda', 
			'rules' => 'trim|numeric|required'
		),
		'subjectASPIRASI' => array(
			'field' => 'subjectASPIRASI', 
			'label' => 'Judul aspirasi anda', 
			'rules' => 'trim|required'
		),
		'descASPIRASI' => array(
			'field' => 'descASPIRASI', 
			'label' => 'Isi aspirasi anda', 
			'rules' => 'trim|required|min_length[10]'
		)
	);

	function __construct (){
		parent::__construct();
	}

	public function selectall_aspirasi($id = NULL) {
		$this->db->select('*');
		$this->db->from('aspirasi');
		if ($id != NULL) {
			$this->db->where('idASPIRASI',$id);
		}
		return $this->db->get();
	}

	public function selectall_aspirasi_at_account($id) {
		$this->db->select('subjectASPIRASI, descASPIRASI, createdateASPIRASI');
		$this->db->select('users.idUSER');
		$this->db->from('aspirasi');
		$this->db->join('users', 'users.idUSER = aspirasi.userASPIRASI', 'left');
		$this->db->where('userASPIRASI', $id);
		return $this->db->get();
	}
}