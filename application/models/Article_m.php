<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Article_m extends MY_Model{
	
	protected $_table_name = 'nyat_article';
	protected $_order_by = 'idARTICLE';
	protected $_primary_key = 'idARTICLE';

	public $rules_article = array(
		'titleARTICLE' => array(
			'field' => 'titleARTICLE', 
			'label' => 'Judul Artikel', 
			'rules' => 'trim|required'
		),
		'descARTICLE' => array(
			'field' => 'descARTICLE', 
			'label' => 'Deskripsi Artikel', 
			'rules' => 'trim'
		),
		'idCAT' => array(
			'field' => 'idCAT', 
			'label' => 'Kategori Artikel', 
			'rules' => 'trim'
		)
	);

	function __construct (){
		parent::__construct();
	}
	
	public function get_new(){
		$article = new stdClass();
		$article->idARTICLE = '';
		$article->idCAT = '';
		$article->titleARTICLE = '';
		$article->descARTICLE = '';
		$article->bestARTICLE = '';
		return $article;
	}

	public function selectall_article($id = NULL, $best=NULL, $category_article=NULL) {
		$this->db->select('*');
		$this->db->select('category_article.nameCAT, category_article.idCAT');
		$this->db->from('article');
		$this->db->join('category_article', 'category_article.idCAT = article.idCAT');
		if ($id != NULL) {
			$this->db->where('idARTICLE',$id);
		}
		if ($best != NULL) {
			$this->db->where('bestARTICLE',1);
		}
		if ($category_article != NULL) {
			$this->db->where('article.idCAT',$category_article);
		}
		return $this->db->get();
	}

	public function selectall_random_article($id = NULL) {
		$this->db->select('idARTICLE, titleARTICLE, createdateARTICLE');
		$this->db->from('article');
		$this->db->where('idARTICLE !=',$id);
		return $this->db->get();
	}
}