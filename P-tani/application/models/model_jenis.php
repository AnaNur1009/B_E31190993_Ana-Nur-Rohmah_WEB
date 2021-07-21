<?php 

class Model_jenis extends CI_Model{

public function data_organik()
{
	return $this->db->get_where('tb_barang', array('jenis' => 'organik'));
}

public function data_non_organik()
{
	return $this->db->get_where('tb_barang', array('jenis' => 'non organik'));
}

 }
?>