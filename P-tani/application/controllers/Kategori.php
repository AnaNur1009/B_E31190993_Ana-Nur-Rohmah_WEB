<?php 

class kategori extends CI_Controller{

public function sayuran()
{
	$data['sayuran'] = $this->model_kategori->data_sayuran()->result();
	$this->load->view('templates/header');
	$this->load->view('templates/sidebar');
	$this->load->view('sayuran', $data);
	$this->load->view('templates/footer');
}

public function buah()
{
	$data['buah'] = $this->model_kategori->data_buah()->result();
	$this->load->view('templates/header');
	$this->load->view('templates/sidebar');
	$this->load->view('buah', $data);
	$this->load->view('templates/footer');
}

public function karbohidrat()
{
	$data['karbohidrat'] = $this->model_kategori->data_karbohidrat()->result();
	$this->load->view('templates/header');
	$this->load->view('templates/sidebar');
	$this->load->view('karbohidrat', $data);
	$this->load->view('templates/footer');
}

public function biji_bijian()
{
	$data['biji_bijian'] = $this->model_kategori->data_biji_bijian()->result();
	$this->load->view('templates/header');
	$this->load->view('templates/sidebar');
	$this->load->view('biji_bijian', $data);
	$this->load->view('templates/footer');
}



 }
 ?>
