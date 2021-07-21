<?php 
class Riwayat extends CI_Controller{
	public function index()
	{
		$data['riwayat'] = $this->model_riwayat->tampil_data();
		$this->load->view('templates/header');
		$this->load->view('templates/sidebar');
		$this->load->view('riwayat', $data);
		$this->load->view('templates/footer');
	}

	public function detail($id_invoice)
	{
		$data['riwayat'] = $this->model_riwayat->ambil_id_invoice($id_invoice);
		$data['pesanan'] = $this->model_riwayat->ambil_id_pesanan($id_invoice);
		$this->load->view('templates/header');
		$this->load->view('templates/sidebar');
		$this->load->view('detail_barang', $data);
		$this->load->view('templates/footer');
	}

public function edit($id)
{
	$where = array('id' =>$id);
	$data['invoice'] = $this->model_riwayat->edit_invoice($where, 'tb_invoice')->result();
		$this->load->view('templates/header');
		$this->load->view('templates/sidebar');
		$this->load->view('edit_riwayat',$data);
		$this->load->view('templates/footer');
}

public function update(){
	$id 		= $this->input->post('id');
	$noresi		= $this->input->post('noresi');
	$nama 		= $this->input->post('nama');
	$alamat 	= $this->input->post('alamat');
	$telp 		= $this->input->post('telp');
	$nama_bank 	= $this->input->post('nama_bank');
	$metode 	= $this->input->post('metode');
	$bukti 		= $_FILES['bukti']['name'];
		if ($bukti= ''){

		}else{
			$config ['upload_path'] = './uploads';
			$config ['allowed_types'] = 'jpg|jpeg|png|gif';

			$this->load->library('upload', $config);
			if(!$this->upload->do_upload('gambar')){
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
		'nama_bank' 	=> $nama_bank,
		'metode' 		=> $metode,
			);

	$where = array(
		'id' => $id
	);

	$this->model_riwayat->update_invoice($where,$data, 'tb_invoice');
	redirect('invoice/index');
}


}

 ?>
