<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Users_m extends MY_Model{
	
	protected $_table_name = 'nyat_users';
	protected $_order_by = 'idUSER';
	protected $_primary_key = 'idUSER';

	public $rules_login_users = array(
		'email' => array(
			'field' => 'email',
			'label' => 'Email',
			'rules' => 'trim|required|valid_email'
			),
		'password' => array(
			'field' => 'password',
			'label' => 'Kata sandi',
			'rules' => 'trim|required|min_length[8]'
			),
	);

	public $rules_save_users = array(
		'nameUSER' => array(
			'field' => 'nameUSER',
			'label' => 'Nama',
			'rules' => 'trim|required'
			),
		'emailUSER' => array(
			'field' => 'emailUSER',
			'label' => 'Email',
			'rules' => 'trim|required|valid_email|is_unique[nyat_users.emailUSER]'
			),
		'passwordUSER' => array(
			'field' => 'passwordUSER',
			'label' => 'Kata sandi',
			'rules' => 'trim|required|min_length[8]'
			),
		'addressUSER' => array(
			'field' => 'addressUSER',
			'label' => 'Domisili',
			'rules' => 'trim|required'
			),
		'cityUSER' => array(
			'field' => 'cityUSER',
			'label' => 'Kota',
			'rules' => 'trim|required'
			),
		'zipUSER' => array(
			'field' => 'zipUSER',
			'label' => 'Kota',
			'rules' => 'trim|required'
			),
		'ageUSER' => array(
			'field' => 'ageUSER',
			'label' => 'Umur',
			'rules' => 'trim|required'
			)
	);

	public $rules_changepassword_users = array(
		'oldpassword' => array(
			'field' => 'oldpassword',
			'label' => 'Kata sandi lama',
			'rules' => 'trim|required|min_length[8]'
			),
		'passwordUSER' => array(
			'field' => 'password',
			'label' => 'Kata sandi',
			'rules' => 'trim|required|min_length[8]'
			),
		'repasswordUSER' => array(
			'field' => 'repassword',
			'label' => 'Ulangi kata sandi',
			'rules' => 'trim|required|min_length[8]'
			)
		);

	function __construct (){
		parent::__construct();
	}

	public function hash ($string){
		return hash('sha512', $string . config_item('encryption_key'));
	}

	public function login($email, $pass){

		$datalog = array(
			'emailUSER' => $email,
			'passwordUSER' => $this->hash($pass)
		);

		$Users = $this->db->get_where('nyat_users',$datalog)->row();
		if(count($Users)){
			if($Users->statusUSER == 1){
				$data = array(
					'Email' => $Users->emailUSER,
					'idUSER' => $Users->idUSER,
					'Name' => $Users->nameUSER,
					'loggedin' => TRUE
				);
				$this->session->set_userdata($data);
				return "USER";
			} else {
				return "NOT ACTIVE";
			}
			
		}
	}

	public function logout(){
		$this->session->sess_destroy();
	}

	public function selectall_user($id=NULL){
		$this->db->select('*');
		$this->db->from('users');
		if($id != NULL){
			$this->db->where('idUSER', $id);
		}
		return $this->db->get();
	}

	public function checkusers($email){
		$this->db->select('idUSER, emailUSER');
		$this->db->from('users');
		$this->db->where('emailUSER', $email);
		$this->db->limit(1);
		return $this->db->get();
	}

	public function checkoldpassword($id){
		$this->db->select('idUSER, passwordUSER');
		$this->db->from('users');
		$this->db->where('idUSER', $id);
		$this->db->limit(1);
		return $this->db->get();
	}
}