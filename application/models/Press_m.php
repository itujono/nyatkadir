<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Press_m extends MY_Model{
	
	protected $_table_name = 'nyat_press';
	protected $_order_by = 'idPRESS';
	protected $_primary_key = 'idPRESS';

	public $rules_press = array(
		'titlePRESS' => array(
			'field' => 'titlePRESS', 
			'label' => 'Judul Media', 
			'rules' => 'trim|required'
		),
		'descPRESS' => array(
			'field' => 'descPRESS', 
			'label' => 'Deskripsi Media', 
			'rules' => 'trim'
		),
		'sourcePRESS' => array(
			'field' => 'sourcePRESS', 
			'label' => 'Sumber Media', 
			'rules' => 'trim|required'
		)
	);

	function __construct (){
		parent::__construct();
	}
	
	public function get_new(){
		$press = new stdClass();
		$press->idPRESS = '';
		$press->titlePRESS = '';
		$press->descPRESS = '';
		$press->bestPRESS = '';
		$press->sourcePRESS = '';
		return $press;
	}

	public function selectall_press($id = NULL, $best=NULL, $new=NULL) {
		$this->db->select('*');
		$this->db->from('press');
		if ($id != NULL) {
			$this->db->where('idPRESS',$id);
		}
		if ($best != NULL) {
			$this->db->where('bestPRESS',1);
		}
		if ($new != NULL) {
			$this->db->order_by('createdatePRESS','desc');
		}
		return $this->db->get();
	}

	public function selectall_random_press($id = NULL) {
		$this->db->select('idPRESS, titlePRESS, sourcePRESS');
		$this->db->from('press');
		$this->db->where('idPRESS !=',$id);
		return $this->db->get();
	}

	public function check_id_press($id) {
		$this->db->select('idPRESS');
		$this->db->from('press');
		$this->db->where('idPRESS', $id);
		$this->db->limit(1);
		return $this->db->get();
	}
}