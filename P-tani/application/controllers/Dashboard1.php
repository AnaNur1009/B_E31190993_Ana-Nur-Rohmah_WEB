<?php
class Dashboard1 extends CI_Controller{
	public function index()
	{
		$data['barang'] = $this->model_barang->tampil_data()->result();
		$this->load->view('templates/header');
		$this->load->view('templates/sidebar');
		$this->load->view('dashboard1', $data);
		$this->load->view('templates/footer');
	}

	public function tambah_ke_keranjang($id)
	{

		$barang = $this->model_barang->find($id);

		$data = array(
			'id'	=>$barang->id_brg,
			'qty'	=>1,
			'price'	=>$barang->harga,
			'name'	=>$barang->nama_brg
		);
		$this->cart->insert($data);
		redirect('dashboard1');
	}

	public function detail_keranjang()
	{
		$this->load->view('templates/header');
		$this->load->view('templates/sidebar');
		$this->load->view('keranjang');
		$this->load->view('templates/footer');
	}

	public function hapus_keranjang()
	{
		$this->cart->destroy();
		redirect('dashboard1/index');
	}

	public function pembayaran()
	{
		$this->load->view('templates/header');
		$this->load->view('templates/sidebar');
		$this->load->view('pembayaran');
		$this->load->view('templates/footer');
	}

	public function about()
	{
		$this->load->view('templates/header');
		$this->load->view('templates/sidebar');
		$this->load->view('about');
		$this->load->view('templates/footer');
	}
	public function cod()
	{
		$this->load->view('templates/header');
		$this->load->view('templates/sidebar');
		$this->load->view('cod');
		$this->load->view('templates/footer');
	}
	public function proses_pesanan()
	{
		$is_processed = $this->model_invoice->index();
		if($is_processed){
		$this->cart->destroy();
		$this->load->view('templates/header');
		$this->load->view('templates/sidebar');
		$this->load->view('proses_pesanan');
		$this->load->view('templates/footer');
	}else{
		echo "Maaf, Pesanan Anda Gagal diProses";
		
	}
	}
 public function pesanan()
	{
		$is_processed = $this->model_invoice->index();
		if($is_processed){
		$this->cart->destroy();
		$this->load->view('templates/header');
		$this->load->view('templates/sidebar');
		$this->load->view('pesanan');
		$this->load->view('templates/footer');
	}else{
		echo "Maaf, Pesanan Anda Gagal diProses";
		
	}
	}
	public function detail($id_brg)
	{
		$data['barang'] = $this->model_barang->detail_brg($id_brg);
		$this->load->view('templates/header');
		$this->load->view('templates/sidebar');
		$this->load->view('detail_barang', $data);
		$this->load->view('templates/footer');
	}

	public function konfir_bayar()
	{
		$this->load->view('templates/header');
		$this->load->view('templates/sidebar');
		$this->load->view('konfir_bayar');
		$this->load->view('templates/footer');
	}

	public function riwayat()
	{
		$data['riwayat'] = $this->model_riwayat->tampil_data();
		$this->load->view('templates/header');
		$this->load->view('templates/sidebar');
		$this->load->view('riwayat');
		$this->load->view('templates/footer');
	}

	public function detaill($id_invoice)
	{
		$data['riwayat'] = $this->model_riwayat->ambil_id_invoice($id_invoice);
		$data['pesanan'] = $this->model_riwayat->ambil_id_pesanan($id_invoice);
		$this->load->view('templates/header');
		$this->load->view('templates/sidebar');
		$this->load->view('detail_riwayat', $data);
		$this->load->view('templates/footer');
	}

public function edit($id)
{
	$data['riwayat'] = $this->model_riwayat->tampil_data();
	$where = array('id' =>$id);
	$data['riwayat'] = $this->model_riwayat->edit_riwayat($where, 'tb_invoice')->result();
		$this->load->view('templates/header');
		$this->load->view('templates/sidebar');
		$this->load->view('edit_riwayat',$data);
		$this->load->view('templates/footer');
}

public function update(){
	
	$id 		= $this->input->post('id');
	$noresi 	= $this->input->post('noresi');
	$nama 		= $this->input->post('nama');
	$alamat 	= $this->input->post('alamat');
	$telp 		= $this->input->post('telp');
	$metode	 	= $this->input->post('metode');
	$status		= $this->input->post('status');
	$bukti 		= $_FILES['bukti']['name'];
		if ($bukti= ''){

		}else{
			$config ['upload_path'] = './uploads';
			$config ['allowed_types'] = 'jpg|jpeg|png|gif';

			$this->load->library('upload', $config);
			if(!$this->upload->do_upload('bukti')){
				echo "Gambar Gagal diUpload";
			}else{
				$bukti=$this->upload->data('file_name');
			}
		}
	
	$data=array(

		'noresi' 		=> $noresi,
		'nama' 			=> $nama,
		'alamat' 		=> $alamat,
		'telp' 			=> $telp,
		'metode' 		=> $metode,
		'status' 		=> $status,
		'bukti' 		=> $bukti,
			);

	$where = array(
		'id' => $id
	);

	$this->model_riwayat->update_riwayat($where,$data, 'tb_invoice');
	redirect('riwayat/index');


}
}


?>