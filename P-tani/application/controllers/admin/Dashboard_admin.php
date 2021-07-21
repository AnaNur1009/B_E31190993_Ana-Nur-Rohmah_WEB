<?php  
class Dashboard_admin extends CI_Controller{
	public function index()
	{
		$this->load->view('templates_admin/header');
		$this->load->view('templates_admin/sidebar');
		$this->load->view('admin/dashboard');
		$this->load->view('templates_admin/footer');
		
	}

	public function edit($id)
{
	$data['invoice'] = $this->model_konfir->tampil_data();
	$where = array('id' =>$id);
	$data['invoice'] = $this->model_konfir->edit_konfir($where, 'tb_invoice')->result();
		$this->load->view('templates_admin/header');
		$this->load->view('templates_admin/sidebar');
		$this->load->view('admin/edit_konfir',$data);
		$this->load->view('templates_admin/footer');
}

public function update(){
	
	$id 		= $this->input->post('id');
	$noresi 	= $this->input->post('noresi');
	$nama 		= $this->input->post('nama');
	$alamat 	= $this->input->post('alamat');
	$telp 		= $this->input->post('telp');
	$metode	 	= $this->input->post('metode');
	$status		= $this->input->post('status');

		
	
	$data=array(


		'noresi' 		=> $noresi,
		'nama' 			=> $nama,
		'alamat' 		=> $alamat,
		'telp' 			=> $telp,
		'metode' 		=> $metode,
		'status' 		=> $status,
			);

	$where = array(
		'id' => $id
	);

	$this->model_konfir->update_konfir($where,$data, 'tb_invoice');
	redirect('admin/konfir_bayar/index');


}

}
?>