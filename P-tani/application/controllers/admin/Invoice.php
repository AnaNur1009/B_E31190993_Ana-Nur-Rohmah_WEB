<?php 
class Invoice extends CI_Controller{
	public function index()
	{
		$data['invoice'] = $this->model_invoice->tampil_data();
		$this->load->view('templates_admin/header');
		$this->load->view('templates_admin/sidebar');
		$this->load->view('admin/invoice', $data);
		$this->load->view('templates_admin/footer');
	}

	public function detail($id_invoice)
	{
		$data['invoice'] = $this->model_invoice->ambil_id_invoice($id_invoice);
		$data['pesanan'] = $this->model_invoice->ambil_id_pesanan($id_invoice);
		$this->load->view('templates_admin/header');
		$this->load->view('templates_admin/sidebar');
		$this->load->view('admin/detail_invoice', $data);
		$this->load->view('templates_admin/footer');
	}

public function edit($id)
{
	$where = array('id' =>$id);
	$data['invoice'] = $this->model_invoice->edit_invoice($where, 'tb_invoice')->result();
	$this->load->view('templates_admin/header');
		$this->load->view('templates_admin/sidebar');
		$this->load->view('admin/edit_invoice',$data);
		$this->load->view('templates_admin/footer');
}

public function update(){
	$id 		= $this->input->post('id');
	$noresi		= $this->input->post('noresi');
	$nama 		= $this->input->post('nama');
	$alamat 	= $this->input->post('alamat');
	$telp 		= $this->input->post('telp');
	$metode 	= $this->input->post('metode');
	
	$data=array(

		'noresi' 		=> $noresi,
		'nama' 			=> $nama,
		'alamat' 		=> $alamat,
		'telp' 			=> $telp,
		'metode' 		=> $metode,
			);

	$where = array(
		'id' => $id
	);

	$this->model_invoice->update_invoice($where,$data, 'tb_invoice');
	redirect('admin/invoice/index');
}


}

 ?>
