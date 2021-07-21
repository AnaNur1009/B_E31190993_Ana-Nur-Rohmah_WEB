 <?php  

class Model_inv extends CI_Model{
	public function index()
	 {
	 	date_default_timezone_set('Asia/Jakarta');
	 	$nama		= $this->input->post('nama');
	 	$alamat		= $this->input->post('alamat');
	 	$no_telp	= $this->input->post('no_telp');
	 	$nama_bank	= $this->input->post('nama_bank');
	 	$metode		= $this->input->post('metode');

	 	$invoice =array(
	 		'nama'			=>$nama,
	 		'alamat' 		=>$alamat,
	 		'no_telp' 		=>$no_telp,
	 		'nama_bank' 	=>$nama_bank,
	 		'metode' 		=>$metode,
	 		'tgl_pesan' 	=>date('Y-m-d H:i:s'),
	 		'batas_bayar' 	=>date('Y-m-d H:i:s', mktime(date('H'), date('i'), date('s'), date('m'), 
	 						  date('d') + 1, date('Y')))
	 	);
	 	$this->db->insert('tb_invoice', $invoice);
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
	}
	 ?>