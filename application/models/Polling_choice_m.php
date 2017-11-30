<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Polling_choice_m extends MY_Model{
	
	protected $_table_name = 'nyat_choice_polling';
	protected $_order_by = 'idPOLLING';
	protected $_primary_key = 'idPOLLING';

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
}