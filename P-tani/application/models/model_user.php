<?php
class Model_user extends CI_Model{
	
	public function data_profil()
{
	return $this->db->get_where('tb_user');
}
}
?>