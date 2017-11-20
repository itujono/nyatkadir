<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class News_m extends MY_Model{
	
	protected $_table_name = 'nyat_news';
	protected $_order_by = 'idNEWS';
	protected $_primary_key = 'idNEWS';

	public $rules_news = array(
		'titleNEWS' => array(
			'field' => 'titleNEWS', 
			'label' => 'Judul Berita', 
			'rules' => 'trim|required'
		),
		'descNEWS' => array(
			'field' => 'descNEWS', 
			'label' => 'Deskripsi Berita', 
			'rules' => 'trim'
		)
	);

	function __construct (){
		parent::__construct();
	}
	
	public function get_new(){
		$news = new stdClass();
		$news->idNEWS = '';
		$news->titleNEWS = '';
		$news->descNEWS = '';
		return $news;
	}

	public function selectall_news($id = NULL) {
		$this->db->select('*');
		$this->db->from('news');
		if ($id != NULL) {
			$this->db->where('idNEWS',$id);
		}
		return $this->db->get();
	}
}