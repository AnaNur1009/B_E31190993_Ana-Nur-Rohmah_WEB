<?php 

class Model_kategori extends CI_Model{

public function data_sayuran()
{
	return $this->db->get_where('tb_barang', array('kategori' => 'sayuran'));
}

public function data_buah()
{
	return $this->db->get_where('tb_barang', array('kategori' => 'buah'));
}

public function data_karbohidrat()
{
	return $this->db->get_where('tb_barang', array('kategori' => 'karbohidrat'));
}

public function data_biji_bijian()
{
	return $this->db->get_where('tb_barang', array('kategori' => 'biji-bijian'));
}
 }
?>