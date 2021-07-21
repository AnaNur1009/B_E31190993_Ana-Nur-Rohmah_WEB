<?php
class Model_konfir extends CI_Model{
	public function tampil_data(){
		return $this->db->get('tb_invoice');
	}

	

	public function lihat_bkti($id)
	{
		$result = $this->db->where('id', $id)->get('tb_invoice');
		if($result->num_rows() > 0){
			return $result->result();
		}else{
			return false;
		}
	}

	public function nama_user($id)
	{
		$result = $this->db->where('id', $id)->get('tb_user');
		if($result->num_rows() > 0){
			return $result->result();
		}else{
			return false;
		}
	}

	public function edit_konfir($where, $table){
	return $this->db->get_where($table, $where);
	}

	 public function update_konfir($where, $data, $table){
		$this->db->where($where);
		$this->db->update($table, $data);
	}

	
}
?>