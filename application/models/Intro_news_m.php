<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Intro_news_m extends MY_Model{
	
	protected $_table_name = 'nyat_intro_news';
	protected $_order_by = 'idINTRONEWS';
	protected $_primary_key = 'idINTRONEWS';

	public $rules_intro_news = array(
		'titleINTRONEWS' => array(
			'field' => 'titleINTRONEWS', 
			'label' => 'Judul di Halaman Berita', 
			'rules' => 'trim|required'
		)
	);

	function __construct (){
		parent::__construct();
	}
	
	public function get_new(){
		$intro_news = new stdClass();
		$intro_news->idINTRONEWS = '';
		$intro_news->titleINTRONEWS = '';
		return $intro_news;
	}

	public function selectall_intro_news($id = NULL) {
		$this->db->select('*');
		$this->db->from('intro_news');
		if ($id != NULL) {
			$this->db->where('idINTRONEWS',$id);
		}
		return $this->db->get();
	}
}