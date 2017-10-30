<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User_m extends MY_Model{
	
	protected $_table_name = 'nyat_users_admin';
	protected $_order_by = 'idADMIN';
	protected $_primary_key = 'idADMIN';

	public $rules_login = array(
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

	public $rules_save_user = array(
		'emailADMIN' => array(
			'field' => 'emailADMIN',
			'label' => 'Email',
			'rules' => 'trim|required|valid_email|is_unique[nyat_users_admin.emailADMIN]'
			),
		'passwordADMIN' => array(
			'field' => 'passwordADMIN',
			'label' => 'Kata sandi',
			'rules' => 'trim|required|min_length[8]'
			),
	);

	public $rules_changepassword = array(
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

	public function get_new(){
		$new = new stdClass();
		$new->idADMIN = '';
		$new->emailADMIN = '';
		$new->nameADMIN = '';
		$new->passwordADMIN = '';
		$new->statusADMIN = '';
		$new->is_adminADMIN = '';
		return $new;
	}

	public function hash ($string){
		return hash('sha512', $string . config_item('encryption_key'));
	}

	public function login($email, $pass){

		$datalog = array(
			'emailADMIN' => $email,
			'passwordADMIN' => $this->hash($pass)
		);

		$Administrator = $this->db->get_where('nyat_users_admin',$datalog)->row();
		if(count($Administrator)){
			if($Administrator->statusADMIN == 1){
				$data = array(
				'Email' => $Administrator->emailADMIN,
				'idADMIN' => $Administrator->idADMIN,
				'Name' => $Administrator->nameADMIN,
				'is_admin' => $Administrator->is_adminADMIN,
				'loggedin' => TRUE,
			);
				$this->session->set_userdata($data);
				return "ADMIN";
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
		$this->db->from('users_admin');
		if($id != NULL){
			$this->db->where('idADMIN', $id);
		}
		return $this->db->get();
	}

	public function checkuser($email){
		$this->db->select('idADMIN');
		$this->db->from('users_admin');
		$this->db->where('emailADMIN', $email);
		$this->db->limit(1);
		return $this->db->get();
	}

	public function checkoldpassword($id){
		$this->db->select('idADMIN, passwordADMIN');
		$this->db->from('users_admin');
		$this->db->where('idADMIN', $id);
		$this->db->limit(1);
		return $this->db->get();
	}

	public function select_accessmenu_by_user($id=NULL){
		$this->db->select('idADMIN, nameADMIN, users_admin.accessMENU');
		$this->db->select('menus_admin.accessMENU');
		$this->db->from('users_admin');
		$this->db->join('menus_admin', 'menus_admin.accessMENU = users_admin.accessMENU', 'left');
		$this->db->group_by('users_admin.accessMENU');
		if($id != NULL){
			$this->db->where('users_admin.accessMENU', $id);
		}
		return $this->db->get();
	}
}