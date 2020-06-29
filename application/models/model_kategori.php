<?php

class Model_kategori extends CI_Model{
	public function data_hoodiepria(){
		return $this->db->get_where("tbl_barang",array('kategori' => 'Hoodie Pria'));
	}

	public function data_hoodiewanita(){
		return $this->db->get_where("tbl_barang",array('kategori' => 'Hoodie Wanita'));
	}
}