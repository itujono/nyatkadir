<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mitra_m extends MY_Model{
	
	protected $_table_name = 'nyat_mitra_kerja';
	protected $_order_by = 'idMITRA';
	protected $_primary_key = 'idMITRA';

	public $rules_mitra = array(
		'nameMITRA' => array(
			'field' => 'nameMITRA', 
			'label' => 'Nama Mitra', 
			'rules' => 'trim|required|is_unique[nyat_mitra_kerja.nameMITRA]'
		)
	);

	function __construct (){
		parent::__construct();
	}
	
	public function get_new(){
		$mitra = new stdClass();
		$mitra->idMITRA = '';
		$mitra->nameMITRA = '';
		return $mitra;
	}

	public function selectall_mitra($id = NULL) {
		$this->db->select('*');
		$this->db->from('mitra_kerja');
		if ($id != NULL) {
			$this->db->where('idMITRA',$id);
		}
		return $this->db->get();
	}
}