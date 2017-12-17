<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Category_article_m extends MY_Model{
	
	protected $_table_name = 'nyat_category_article';
	protected $_order_by = 'idCAT';
	protected $_primary_key = 'idCAT';

	public $rules_category_article = array(
		'nameCAT' => array(
			'field' => 'nameCAT', 
			'label' => 'Nama Kategori Artikel', 
			'rules' => 'trim|required|is_unique[nyat_category_article.nameCAT]'
		)
	);

	function __construct (){
		parent::__construct();
	}
	
	public function get_new(){
		$cat = new stdClass();
		$cat->idCAT = '';
		$cat->nameCAT = '';
		return $cat;
	}

	public function selectall_cat_article($id = NULL) {
		$this->db->select('*');
		$this->db->from('category_article');
		if ($id != NULL) {
			$this->db->where('idCAT',$id);
		}
		return $this->db->get();
	}

	public function select_category_article_drop(){
        $this->db->select('*');
        $this->db->from('category_article');
        $ddown = array();
        foreach ($this->db->get()->result() as $value) {
            $ddown[$value->idCAT] = $value->nameCAT;
        }
        return $ddown;
    }
}