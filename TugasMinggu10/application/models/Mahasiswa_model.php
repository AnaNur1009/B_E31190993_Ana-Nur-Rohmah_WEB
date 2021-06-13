<?php 
class Mahasiswa_model extends CI_Model {
public function getAll(){
	$this->db->select('*');// fungsi untuk mengambil data dari database
	$this->db->from('tm_user');//untuk mengambil data dari tabel user
	$this->db->join('tm_grup','tm_user.grup = tm_grup.id_grup'); // untuk melakukan join tabel tm_user dengan tm_grup
	$query = $this->db->get(); //berfungsi sebagai eksekusi query sama seperti mysqli_query
	return $query;//untuk  mengembalikan nilai di $query
}

public function getMaster(){
	$this->db->select('*');// fungsi untuk mengambil data dari database
	$this->db->from('tm_user');//untuk mengambil data dari tabel user
	$this->db->where('grup=1');
	$query = $this->db->get(); //berfungsi sebagai eksekusi query sama seperti mysqli_query
	return $query;//untuk  mengembalikan nilai di $query
}

public function input_data($data,$table){
	$this->db->insert($table,$data);// untuk menambahkan data pada database
}

public function login($user,$pass,$table){
	$this->db->select('*');
	$this->db->from('tm_user');
	$this->db->where('username',$user);
	$this->db->where('password',$pass);
	$query = $this->db->get();
	return $query;
}

public function tampil_data()
	 {
	 	$result = $this->db->get('tm_user');
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
function hapus_data($where,$table)
{
	$this->db->where($where);
	$this->db->delete($table);
}

}
?>