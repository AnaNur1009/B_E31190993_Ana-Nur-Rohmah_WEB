<?php 

class Konfir_bayar extends CI_Controller{
	public function index()
	{
		$data['invoice'] = $this->model_konfir->tampil_data()->result();
		$this->load->view('templates_admin/header');
		$this->load->view('templates_admin/sidebar');
		$this->load->view('admin/konfir_bayar',$data);
		$this->load->view('templates_admin/footer');
	}

	
	
	public function lihat($id)
	{
		$data['invoice'] = $this->model_konfir->lihat_bkti($id);
		$this->load->view('templates_admin/header');
		$this->load->view('templates_admin/sidebar');
		$this->load->view('admin/lihat_bukti', $data);
		$this->load->view('templates_admin/footer');
	}

	
	



	
	
}?>
