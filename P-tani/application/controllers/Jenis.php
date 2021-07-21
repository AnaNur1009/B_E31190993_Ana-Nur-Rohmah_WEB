<?php 

class Jenis extends CI_Controller{

public function organik()
{
	$data['organik'] = $this->model_jenis->data_organik()->result();
	$this->load->view('templates/header');
	$this->load->view('templates/sidebar');
	$this->load->view('organik', $data);
	$this->load->view('templates/footer');
}

public function non_organik()
{
	$data['non_organik'] = $this->model_jenis->data_non_organik()->result();
	$this->load->view('templates/header');
	$this->load->view('templates/sidebar');
	$this->load->view('non_organik', $data);
	$this->load->view('templates/footer');
}
}
?>