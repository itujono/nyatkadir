<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Gallery_m extends MY_Model{
	
	protected $_table_name = 'nyat_gallery';
	protected $_order_by = 'idGALLERY';
	protected $_primary_key = 'idGALLERY';

	public $rules_gallery = array(
		'titleGALLERY' => array(
			'field' => 'titleGALLERY', 
			'label' => 'Judul Gallery', 
			'rules' => 'trim|required'
		),
		'categoryGALLERY' => array(
			'field' => 'categoryGALLERY', 
			'label' => 'Kategori Gallery', 
			'rules' => 'trim'
		)
	);

	function __construct (){
		parent::__construct();
	}
	
	public function get_new(){
		$gallery = new stdClass();
		$gallery->idGALLERY = '';
		$gallery->titleGALLERY = '';
		$gallery->categoryGALLERY = '';
		$gallery->linkvideoGALLERY = '';
		$gallery->ishomevideoGALLERY = '';
		return $gallery;
	}

	public function selectall_gallery($id = NULL, $randoom=NULL) {
		$this->db->select('*');
		$this->db->from('gallery');
		if ($id != NULL) {
			$this->db->where('idGALLERY',$id);
		}
		if($randoom != NULL){
			$this->db->order_by('RAND()');
			$this->db->where('categoryGALLERY', 1);
		}
		return $this->db->get();
	}
}