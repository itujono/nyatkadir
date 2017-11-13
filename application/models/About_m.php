<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class About_m extends MY_Model{
	
	protected $_table_name = 'nyat_about';
	protected $_order_by = 'idABOUT';
	protected $_primary_key = 'idABOUT';

	public $rules_slider = array(
		'titlehomeABOUT' => array(
			'field' => 'titlehomeABOUT', 
			'label' => 'Judul di Halaman Utama', 
			'rules' => 'trim|required'
		),
		'deschomeABOUT' => array(
			'field' => 'deschomeABOUT', 
			'label' => 'Deskripsi di Halaman Utama', 
			'rules' => 'trim|required'
		),
		'headertitleABOUT' => array(
			'field' => 'headertitleABOUT', 
			'label' => 'Judul Header di Halaman Tentang', 
			'rules' => 'trim|required'
		),
		'titleABOUT' => array(
			'field' => 'titleABOUT', 
			'label' => 'Judul di Halaman Tentang', 
			'rules' => 'trim|required'
		),
		'descABOUT' => array(
			'field' => 'descABOUT', 
			'label' => 'Deskripsi di Halaman Tentang', 
			'rules' => 'trim|required'
		),
		'titleawardABOUT' => array(
			'field' => 'titleawardABOUT', 
			'label' => 'Judul Award di Halaman Tentang', 
			'rules' => 'trim|required'
		),
		'listawardABOUT' => array(
			'field' => 'listawardABOUT', 
			'label' => 'Judul Award di Halaman Tentang', 
			'rules' => 'trim'
		)
	);

	function __construct (){
		parent::__construct();
	}
	
	public function get_new(){
		$about = new stdClass();
		$about->idABOUT = '';
		$about->titlehomeABOUT = '';
		$about->deschomeABOUT = '';
		$about->headertitleABOUT = '';
		$about->titleABOUT = '';
		$about->descABOUT = '';
		$about->titleawardABOUT = '';
		$about->listawardABOUT = '';
		return $about;
	}

	public function selectall_about($id = NULL) {
		$this->db->select('*');
		$this->db->from('about');
		if ($id != NULL) {
			$this->db->where('idABOUT',$id);
		}
		return $this->db->get();
	}
}