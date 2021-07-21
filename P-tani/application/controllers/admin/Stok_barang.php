<?php 
class Stok_barang extends CI_Controller{
	public function index(){

		$data['barang']= $this->model_barang->tampil_data()->result();
		$this->load->view('templates_admin/header');
		$this->load->view('templates_admin/sidebar');
		$this->load->view('admin/stok_barang',$data);
		$this->load->view('templates_admin/footer');
	}

	public function tambah_aksi(){
		$nama_brg = $this->input->post('nama_brg');
		$stok = $this->input->post('stok');
		
		

		$data = array(
			'nama_brg' => $nama_brg,
			'stok' => $stok,
			
		);

		$this->model_barang->tambah_barang($data, 'tb_barang');
		redirect('admin/stok_barang/index');
	}
}
	


?>