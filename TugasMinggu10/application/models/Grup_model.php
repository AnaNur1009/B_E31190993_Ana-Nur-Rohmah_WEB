<?php 
class Grup_model extends CI_Model {

public function getMaster(){
	$this->db->select('*');// fungsi untuk mengambil data dari database
	$this->db->from('tm_grup');//untuk mengambil data dari tabel user
	// untuk melakukan join tabel tm_user dengan tm_grup
	$query = $this->db->get(); //berfungsi sebagai eksekusi query sama seperti mysqli_query
	return $query;//untuk  mengembalikan nilai di $query
}


public function input_data($data,$table){
	$this->db->insert($table,$data);// untuk menambahkan data pada database
}



public function tampil_data()
	 {
	 	$result = $this->db->get('tm_grup');
	 	if($result->num_rows()> 0){
	 		return $result->result();
	 	}else{
	 		return FALSE;
	 	}
	 }

public function edit_data($where, $table){
	return $this->db->get_where($table, $where);
	}

public function update_data($where,$data,$table){
	$this->db->where($where);
	$this->db->update($table, $data);
}   
public function hapus_data($where, $table){
		$this->db->where($where);
		$this->db->delete($table);
	}

}
?>