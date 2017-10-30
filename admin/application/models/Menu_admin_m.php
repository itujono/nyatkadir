<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Menu_admin_m extends MY_Model{
	
	protected $_table_name = 'nyat_menus_admin';
	protected $_order_by = 'idMENU';
	protected $_primary_key = 'idMENU';

	public $rules_menu = array(
		'namaMENU' => array(
			'field' => 'namaMENU',
			'label' => 'Nama Menu',
			'rules' => 'trim|required'
			),
		'iconMENU' => array(
			'field' => 'iconMENU',
			'label' => 'Ikon Menu',
			'rules' => 'trim|required'
			),
		'parentMENU' => array(
			'field' => 'parentMENU',
			'label' => 'Induk Menu',
			'rules' => 'trim'
			),
		'accessMENU' => array(
			'field' => 'accessMENU',
			'label' => 'Akses Menu',
			'rules' => 'trim'
			)
	);

	function __construct (){
		parent::__construct();
	}

	public function get_new(){
		$menu = new stdClass();
		$menu->idMENU = '';
		$menu->namaMENU = '';
		$menu->iconMENU = '';
		$menu->functionMENU = '';
		$menu->parentMENU = '';
		$menu->accessMENU = '';
		$menu->statusMENU = '';
		return $menu;
	}

	public function hash ($string){
		return hash('sha512', $string . config_item('encryption_key'));
	}

	public function selectall_menu($id=NULL,$parent=NULL,$child=NULL,$access=NULL){
		$this->db->select('*');
		$this->db->from('menus_admin');
		if($id != NULL){
			$this->db->where('idMENU', $id);
		}
		if($parent != NULL){
			$this->db->where('parentMENU', 0);
		}
		if($child != NULL){
			$this->db->where('parentMENU !=', 0);
		}
		if($access != NULL){
			$this->db->where('accessMENU', $access);
		}
		return $this->db->get();
	}

	public function dropdown_menu($dropdown=NULL){
		$this->db->from('menus_admin');
		if($dropdown != NULL){
			$ddown = array();
			foreach ($this->db->get()->result() as $value) {
				$ddown[$value->idMENU] = $value->namaMENU;
			}
			return $ddown;
		}else{
			return $this->db->get();
		}
	}
}