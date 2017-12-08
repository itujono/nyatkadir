<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Flyer_m extends MY_Model{
	
	protected $_table_name = 'nyat_flyer';
	protected $_order_by = 'idFLYER';
	protected $_primary_key = 'idFLYER';

	public $rules_flyer = array(
		'titleFLYER' => array(
			'field' => 'titleFLYER', 
			'label' => 'Judul Flyer', 
			'rules' => 'trim|required'
		),
		'startFLYER' => array(
			'field' => 'startFLYER', 
			'label' => 'Mulai Flyer', 
			'rules' => 'trim|required'
		),
		'endFLYER' => array(
			'field' => 'endFLYER', 
			'label' => 'Habis Flyer', 
			'rules' => 'trim|required'
		)
	);

	function __construct (){
		parent::__construct();
	}
	
	public function get_new(){
		$flyer = new stdClass();
		$flyer->idFLYER = '';
		$flyer->titleFLYER = '';
		$flyer->startFLYER = '';
		$flyer->endFLYER = '';
		return $flyer;
	}

	public function selectall_flyer($id = NULL) {
		$this->db->select('*');
		$this->db->from('flyer');
		if ($id != NULL) {
			$this->db->where('idFLYER',$id);
		}
		return $this->db->get();
	}

	public function select_flyer_in_frontend(){
    	$this->db->select('*');
		$this->db->from('flyer');
        $this->db->where('now() BETWEEN startFLYER AND endFLYER');
        $this->db->limit(1);
        return $this->db->get();
	}
}