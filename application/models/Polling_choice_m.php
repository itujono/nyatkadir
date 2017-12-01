<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Polling_choice_m extends MY_Model{
	
	protected $_table_name = 'nyat_choice_polling';
	protected $_order_by = 'idCHOICE';
	protected $_primary_key = 'idCHOICE';

	public $rules_save_choice_polling = array(
		'answer' => array(
			'field' => 'answer', 
			'label' => 'Option Jawaban', 
			'rules' => 'required'
		)
	);

	function __construct (){
		parent::__construct();
	}

	public function selectall_choice_polling($id = NULL, $status = NULL) {
		$this->db->select('*');
		$this->db->from('choice_polling');
		
		return $this->db->get();
	}

	public function check_answer_polling() {
		$this->db->select('questionPOLLING, statusPOLLING');
		$this->db->from('choice_polling');
		$this->db->where('statusPOLLING',1);
		$this->db->limit(1);
		return $this->db->get();
	}

	public function check_choice_polling($idpolling=NULL, $session_user=NULL) {
		$this->db->select('idPOLLING, idUSER, nameCHOICE');
		$this->db->from('choice_polling');
		$this->db->where('idPOLLING',$idpolling);
		$this->db->where('idUSER',$session_user);
		$this->db->limit(1);
		return $this->db->get();
	}

	public function getNumberVoting($id=NULL) {
		$this->db->select('*, valueCHOICE as vote_value, SUM(valueCHOICE) as total');
		$this->db->select('questionPOLLING');
		$this->db->from('choice_polling');
		$this->db->join('polling', 'polling.idPOLLING = choice_polling.idPOLLING');
		//$this->db->where('choice_polling.idPOLLING', $id);
		$this->db->group_by('nameCHOICE');

		return $this->db->get();
	}
}