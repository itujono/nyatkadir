<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Social_m extends MY_Model{
	
	protected $_table_name = 'nyat_social_media';
	protected $_order_by = 'idSOCIAL';
	protected $_primary_key = 'idSOCIAL';

	public $rules_social = array(
		'nameSOCIAL' => array(
			'field' => 'nameSOCIAL', 
			'label' => 'Nama Sosial Media', 
			'rules' => 'trim|required'
		),
		'linkSOCIAL' => array(
			'field' => 'linkSOCIAL', 
			'label' => 'Link Sosial Media', 
			'rules' => 'trim|required'
		)
	);

	function __construct (){
		parent::__construct();
	}
	
	public function get_new(){
		$social = new stdClass();
		$social->idSOCIAL = '';
		$social->nameSOCIAL = '';
		$social->linkSOCIAL = '';
		return $social;
	}

	public function selectall_social($id = NULL) {
		$this->db->select('*');
		$this->db->from('social_media');
		if ($id != NULL) {
			$this->db->where('idSOCIAL',$id);
		}
		return $this->db->get();
	}
}