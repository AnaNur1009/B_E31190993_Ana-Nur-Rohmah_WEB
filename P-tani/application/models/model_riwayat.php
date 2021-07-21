 <?php  

class Model_riwayat extends CI_Model{
	public function index()
	 {
	 	date_default_timezone_set('Asia/Jakarta');
	 	$nama		= $this->input->post('nama');
	 	$alamat		= $this->input->post('alamat');
	 	$no_telp	= $this->input->post('no_telp');
	 	$metode		= $this->input->post('metode');
	 	$status		= $this->input->post('status');
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

	 	$riwayat =array(
	 		'nama'			=>$nama,
	 		'alamat' 		=>$alamat,
	 		'no_telp' 		=>$no_telp,
	 		'metode' 		=>$metode,
	 		'status' 		=>$status,
	 		'tgl_pesan' 	=>date('Y-m-d H:i:s'),
	 		'batas_bayar' 	=>date('Y-m-d H:i:s', mktime(date('H'), date('i'), date('s'), date('m'), 
	 						  date('d') + 1, date('Y'))),
	 		'bukti' 		=>$bukti,
	 	);
	 	$this->db->insert('tb_invoice', $riwayat);
	 	$id_invoice = $this->db->insert_id();

	 	foreach ($this->cart->contents() as $item){

	 		$data = array(
	 			'id_invoice' 		=> $id_invoice,
	 			'id_brg'			=> $item['id'],
	 			'nama_brg'			=> $item['name'],
	 			'jumlah'			=> $item['qty'],
	 			'harga'				=> $item['price'],
	 		);
	 		$this->db->insert('tb_pesanan', $data);
	 	}
	 	return TRUE;
	 }
	

 public function tampil_data()
	 {
	 	$result = $this->db->get('tb_invoice');
	 	if($result->num_rows()> 0){
	 		return $result->result();
	 	}else{
	 		return FALSE;
	 	}
	 }

	  public function ambil_id_invoice($id_invoice)
	 {
	 	$result = $this->db->where('id', $id_invoice)->limit(1)->get('tb_invoice');
	 	if($result->num_rows() > 0){
	 		return $result->row();
	 	}else{
	 		return false;
	 	}
	 }

	 public function ambil_id_pesanan($id_invoice)
	 {
	 	$result = $this->db->where('id_invoice', $id_invoice)->get('tb_pesanan');
	 	if($result->num_rows() > 0){
	 		return $result->result();
	 	}else{
	 		return false;
	 	}
	 }

	 public function update_data($where, $data, $table){
		$this->db->where($where);
		$this->db->update($table, $data);
	}

	public function edit_riwayat($where, $table){
	return $this->db->get_where($table, $where);
	}

	 public function update_riwayat($where, $data, $table){
		$this->db->where($where);
		$this->db->update($table, $data);
	}
}
	
	 ?>