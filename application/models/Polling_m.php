<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Polling_m extends MY_Model{
	
	protected $_table_name = 'nyat_polling';
	protected $_order_by = 'idPOLLING';
	protected $_primary_key = 'idPOLLING';

	public $rules_polling = array(
		'questionPOLLING' => array(
			'field' => 'questionPOLLING', 
			'label' => 'Pertanyaan anda', 
			'rules' => 'trim|required'
		),
		'answerPOLLING' => array(
			'field' => 'answerPOLLING', 
			'label' => 'Option Jawaban', 
			'rules' => 'trim'
		)
	);

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
	
	public function get_new(){
		$polling = new stdClass();
		$polling->idPOLLING = '';
		$polling->questionPOLLING = '';
		$polling->answerPOLLING = '';
		$polling->statusPOLLING = '';
		return $polling;
	}

	public function selectall_polling($id = NULL, $status = NULL) {
		$this->db->select('*');
		$this->db->from('polling');
		if ($id != NULL) {
			$this->db->where('idPOLLING',$id);
		}
		if ($status != NULL) {
			$this->db->where('statusPOLLING',1);
			$this->db->limit(1);
		}
		return $this->db->get();
	}

	public function checkstatus_polling() {
		$this->db->select('questionPOLLING, statusPOLLING');
		$this->db->from('polling');
		$this->db->where('statusPOLLING',1);
		$this->db->limit(1);
		return $this->db->get();
	}
}