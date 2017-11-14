<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Idea_m extends MY_Model{
	
	protected $_table_name = 'nyat_idea';
	protected $_order_by = 'idIDEA';
	protected $_primary_key = 'idIDEA';

	public $rules_idea = array(
		'titleIDEA' => array(
			'field' => 'titleIDEA', 
			'label' => 'Judul Buah Pikiran', 
			'rules' => 'trim|required'
		),
		'descIDEA' => array(
			'field' => 'descIDEA', 
			'label' => 'Deskripsi Buah Pikiran', 
			'rules' => 'trim'
		)
	);

	function __construct (){
		parent::__construct();
	}
	
	public function get_new(){
		$idea = new stdClass();
		$idea->idIDEA = '';
		$idea->titleIDEA = '';
		$idea->descIDEA = '';
		return $idea;
	}

	public function selectall_idea($id = NULL, $randoom=NULL) {
		$this->db->select('*');
		$this->db->from('idea');
		if ($id != NULL) {
			$this->db->where('idIDEA',$id);
		}
		return $this->db->get();
	}
}