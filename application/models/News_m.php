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
		$news->bestNEWS = '';
		return $news;
	}

	public function selectall_news($id = NULL, $best=NULL, $new=NULL) {
		$this->db->select('*');
		$this->db->from('news');
		if ($id != NULL) {
			$this->db->where('idNEWS',$id);
		}
		if ($best != NULL) {
			$this->db->where('bestNEWS',1);
		}
		if ($new != NULL) {
			$this->db->order_by('createdateNEWS','desc');
		}
		return $this->db->get();
	}

	public function selectall_random_news($id = NULL, $updated_at_home=NULL) {
		$this->db->select('idNEWS, titleNEWS, descNEWS, createdateNEWS');
		$this->db->from('news');
		if($id != NULL){
			$this->db->where('idNEWS !=',$id);
		}
		if($updated_at_home != NULL){
			$this->db->order_by('idNEWS', 'desc');
			$this->db->limit('3');
		}
		return $this->db->get();
	}

	public function check_id_news($id) {
		$this->db->select('idNEWS');
		$this->db->from('news');
		$this->db->where('idNEWS', $id);
		$this->db->limit(1);
		return $this->db->get();
	}
}