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
		if($id != NULL){
			$where_id = 'WHERE idPOLLING = '.$id.'';
		} else {
			$where_id = '';
		}
		$result = $this->db->query("SELECT nameCHOICE, idPOLLING, SUM(valueCHOICE) AS vote_value, (SELECT SUM(valueCHOICE) FROM nyat_choice_polling $where_id) AS total FROM nyat_choice_polling $where_id GROUP BY nameCHOICE");
		return $result->result();
	}

	public function list_choice_polling_users($session_user=NULL) {
		$this->db->select('choice_polling.idPOLLING, idUSER, nameCHOICE, createdateCHOICE');
		$this->db->select('questionPOLLING');
		$this->db->from('choice_polling');
		$this->db->join('polling', 'polling.idPOLLING = choice_polling.idPOLLING');
		$this->db->where('idUSER',$session_user);

		return $this->db->get();
	}
}