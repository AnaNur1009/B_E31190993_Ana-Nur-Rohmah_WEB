<?php
class Mahasiswa extends CI_Controller {
function __construct(){
	parent:: __construct();//untuk menjalankan file pertama kali ketika dipanggil
	$this->load->model('Mahasiswa_model'); // untuk memanggil file mahasiswa_model
}
public function index(){
$data['user'] = $this->Mahasiswa_model->getAll()->result(); //untuk memanggil data dari database melalui file mahasiswa_model
$this->template->views('crud/home_mahasiswa',$data);// untuk menampilkan view home_mahasiswa
}

public function grup(){
$data['user'] = $this->Mahasiswa_model->getMaster()->result(); //untuk memanggil data dari database melalui file mahasiswa_model
$this->template->views('crud/master_grup',$data);
}
public function tambah(){
$this->template->views('crud/tambah_mahasiswa');//untuk menampilkan view tambah_mahasiswa
}
public function input(){
	$username = $this->input->post('username');//untuk menambahkan data ke field username
	$password = $this->input->post('pass');//untuk menambahkan data ke field password
	$nama = $this->input->post('nama');//untuk menambahkan data ke field nama
	$grup = $this->input->post('grup');//untuk menambahkan data ke field grup

	$data = array(
		'username' => $username,
		'password' => $password,
		'nama' => $nama,
		'grup' => $grup
	);
	$this->Mahasiswa_model->input_data($data, 'tm_user');//memproses data melalui file mahasiswa_model di method input_data
	redirect('Mahasiswa/index');//kembali ke tampilan home_mahasiswa
}
public function edit($id)
{
	$where = array('id' =>$id);
	$data['user'] = $this->Mahasiswa_model->edit_data($where, 'tm_user')->result();
	$this->template->views('crud/edit_mahasiswa',$data);
	echo json_encode($array);
	}

	public function update(){
	$id = $this->input->post('id');
	$username = $this->input->post('username');
	$password = $this->input->post('password');
	$nama = $this->input->post('nama');
	$grup = $this->input->post('grup');

	$data = array(
		'username' => $username,
		'password' => $password,
		'nama' => $nama,
		'grup' => $grup
	);

	$where = array(
		'id' => $id
	);
$this->Mahasiswa_model->update_data($where,$data, 'tm_user');
	redirect('Mahasiswa');
}

public function tambah_grup(){
$this->template->views('crud/tambah_master_grup');//untuk menampilkan view tambah_mahasiswa
}
public function input_grup(){
	$username = $this->input->post('username');//untuk menambahkan data ke field username
	$password = $this->input->post('pass');//untuk menambahkan data ke field password
	$nama = $this->input->post('nama');//untuk menambahkan data ke field nama
	$grup = $this->input->post('grup');//untuk menambahkan data ke field grup

	$data = array(
		'username' => $username,
		'password' => $password,
		'nama' => $nama,
		'grup' => $grup
	);
	$this->Mahasiswa_model->input_data($data, 'tm_user');//memproses data melalui file mahasiswa_model di method input_data
	redirect('Mahasiswa/grup');
}

	public function edit_grup($id)
{
	$where = array('id' =>$id);
	$data['user'] = $this->Mahasiswa_model->edit_data($where, 'tm_user')->result();
	$this->template->views('crud/edit_master_grup',$data);
	echo json_encode($array);
	}

public function update_grup(){
	$id = $this->input->post('id');
	$username = $this->input->post('username');
	$password = $this->input->post('password');
	$nama = $this->input->post('nama');
	$grup = $this->input->post('grup');

	$data = array(
		'username' => $username,
		'password' => $password,
		'nama' => $nama,
		'grup' => $grup
	);

	$where = array(
		'id' => $id
	);
$this->Mahasiswa_model->update_data($where,$data, 'tm_user');
	redirect('Mahasiswa/grup');
}

public function hapus_grup($id){
	$where = array('id'=>$id);
	$this->Mahasiswa_model->hapus_data($where,'tm_user');
	redirect('Mahasiswa/grup');
}

public function hapus($id){
	$where = array('id'=>$id);
	$this->Mahasiswa_model->hapus_data($where,'tm_user');
	redirect('Mahasiswa/index');
}

public function Api(){
	$data = $this->Mahasiswa_model->getAll();
	echo json_encode($data->result_array());
}
public function ApiInsert(){
	$username = $this->input->post('username');
	$password = $this->input->post('password');
	$nama = $this->input->post('nama');
	$grup = $this->input->post('grup');

	$data = array(
		'username' => $username,
		'password' => $password,
		'nama' => $nama,
		'grup' => $grup
	);
	$this->Mahasiswa_model->input_data($data, 'tm_user');
	echo json_encode($array);
}

public function ApiDelete(){
	if ($this->input->post('username')){
		$where = array('username' => $this->input->post('username'));
		if ($this->Mahasiswa_model->hapus_data($where,'tm_user')){
			$array = array('success' => true);
		}else {
			$array = array('error' => true);
		}
		echo json_encode($array);
	}
}

public function ApiEdit($id)
{
	$where = array('id' =>$id);
	$data['user'] = $this->Mahasiswa_model->edit_data($where, 'tm_user')->result();
	echo json_encode($data);
	}

public function ApiUpdate(){
	$id = $this->input->post('id');
	$username = $this->input->post('username');
	$password = $this->input->post('password');
	$nama = $this->input->post('nama');
	$grup = $this->input->post('grup');

	$data = array(
		'username' => $username,
		'password' => $password,
		'nama' => $nama,
		'grup' => $grup
	);

	$where = array(
		'id' => $id
	);
$this->Mahasiswa_model->update_data($where,$data, 'tm_user');
	echo json_encode($data);
}
}
?>