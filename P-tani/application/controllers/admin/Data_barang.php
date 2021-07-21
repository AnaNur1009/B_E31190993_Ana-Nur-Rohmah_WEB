<?php 
class Data_barang extends CI_Controller{
	public function index(){

		$data['barang']= $this->model_barang->tampil_data()->result();
		$this->load->view('templates_admin/header');
		$this->load->view('templates_admin/sidebar');
		$this->load->view('admin/data_barang',$data);
		$this->load->view('templates_admin/footer');
	}

	public function tambah_aksi(){
		$nama_penjual 	= $this->session->userdata('username');
		$alamat 		= $this->input->post('alamat');
		$telp 			= $this->input->post('telp');
		$nama_brg 		= $this->input->post('nama_brg');
		$keterangan 	= $this->input->post('keterangan');
		$kategori 		= $this->input->post('kategori');
		$jenis 			= $this->input->post('jenis');
		$harga 			= $this->input->post('harga');
		$min_pembelian 	= $this->input->post('min_pembelian');
		$no_rek 		= $this->input->post('no_rek');
		$waktu_panen 	= $this->input->post('waktu_panen');
		$gambar 		= $_FILES['gambar']['name'];
		if ($gambar= ''){

		}else{
			$config ['upload_path'] = './uploads';
			$config ['allowed_types'] = 'jpg|jpeg|png|gif';

			$this->load->library('upload', $config);
			if(!$this->upload->do_upload('gambar')){
				echo "Gambar Gagal diUpload";
			}else{
				$gambar=$this->upload->data('file_name');
			}
		}

		$data = array(
			'nama_penjual  '=> $nama_penjual,
			'alamat' 		=> $alamat,
			'telp' 			=> $telp,
			'nama_brg'		=> $nama_brg,
			'keterangan' 	=> $keterangan,
			'kategori' 		=> $kategori,
			'jenis' 		=> $jenis,
			'harga' 		=> $harga,
			'min_pembelian' => $min_pembelian,
			'no_rek' 		=> $no_rek,
			'waktu_panen' 	=> $waktu_panen,
			'gambar' 		=> $gambar
		);

		$this->model_barang->tambah_barang($data, 'tb_barang');
		redirect('admin/data_barang/index');
	}
	
public function edit($id)
{
	$where = array('id_brg' =>$id);
	$data['barang'] = $this->model_barang->edit_barang($where, 'tb_barang')->result();
	$this->load->view('templates_admin/header');
		$this->load->view('templates_admin/sidebar');
		$this->load->view('admin/edit_barang',$data);
		$this->load->view('templates_admin/footer');
}
public function update(){
		$id 			= $this->input->post('id_brg');
		$nama_penjual 	= $this->session->userdata('username');
		$alamat 		= $this->input->post('alamat');
		$telp 			= $this->input->post('telp');
		$nama_brg 		= $this->input->post('nama_brg');
		$keterangan 	= $this->input->post('keterangan');
		$kategori 		= $this->input->post('kategori');
		$jenis 			= $this->input->post('jenis');
		$harga 			= $this->input->post('harga');
		$stok 			= $this->input->post('stok');
		$min_pembelian 	= $this->input->post('min_pembelian');
		$no_rek 		= $this->input->post('no_rek');
		$waktu_panen 	= $this->input->post('waktu_panen');
	
	$data=array(
			'nama_penjual' 	=> $nama_penjual,
			'alamat' 		=> $alamat,
			'telp' 			=> $telp,
			'nama_brg' 		=> $nama_brg,
			'keterangan' 	=> $keterangan,
			'kategori' 		=> $kategori,
			'jenis' 		=> $jenis,
			'harga' 		=> $harga,
			'stok' 			=> $stok,
			'min_pembelian' => $min_pembelian,
			'no_rek' 		=> $no_rek,
			'waktu_panen' 	=> $waktu_panen,
			);

	$where = array(
		'id_brg' => $id
	);

	$this->model_barang->update_data($where,$data, 'tb_barang');
	redirect('admin/data_barang/index');
}

public function hapus($id){

	$where = array('id_brg' => $id);
	$this->model_barang->hapus_data($where, 'tb_barang');
	redirect('admin/data_barang/index');
}
}
?>