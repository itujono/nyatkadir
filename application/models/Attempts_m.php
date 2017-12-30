<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Attempts_m extends MY_Model{
	
	protected $_table_name = 'nyat_attempts';
	protected $_order_by = 'idATTEMPTS';
	protected $_primary_key = 'idATTEMPTS';

	function __construct (){
		parent::__construct();
	}

	public function selectallbrute_users(){
		$this->db->select('*');
		$this->db->select('users.emailUSER');
		$this->db->from('attempts');
		$this->db->join('users','users.idUSER = attempts.idUSER');
		return $this->db->get();
	}

	public function checkingbrute_users($idUSER = NULL, $valid_attempts = NULL){

		$query = $this->db->query("SELECT timeATTEMPTS FROM nyat_attempts WHERE idUSER = ".$idUSER." AND timeATTEMPTS > ".$valid_attempts." ");
        return $query->num_rows();
	}

	function deletedata_users($id){
        $this->db->where('idUSER', $id);
        $this->db->delete('attempts');
    }

    function insertdatabrute_users($data){
        $this->db->insert('attempts', $data);
    }

	// public function selectallbrute_admin(){
	// 	$this->db->select('*');
	// 	$this->db->select('users_admin.emailADMIN');
	// 	$this->db->from('loginattempts_admin');
	// 	$this->db->join('users_admin','users_admin.idADMIN = loginattempts_admin.idADMIN');
	// 	return $this->db->get();
	// }

	public function checkingbrute_admin($idADMIN = NULL, $valid_attempts = NULL){

		$query = $this->db->query("SELECT timeATTEMPTS FROM nyat_attempts_admin WHERE idADMIN = ".$idADMIN." AND timeATTEMPTS > ".$valid_attempts." ");
        return $query->num_rows();
	}

	function deletedata_admin($id){
        $this->db->where('idUSER', $id);
        $this->db->delete('attempts_admin');
    }

    function insertdatabrute_admin($data){
        $this->db->insert('attempts_admin', $data);
    }
}