<?php 

class Registrasi extends CI_Controller{

	public function index()
	{

$this->form_validation->set_rules('username', 'Username', 'required');
$this->form_validation->set_rules('password_1', 'Password', 'required|matches[password_2]');
$this->form_validation->set_rules('password_2', 'Password', 'required|matches[password_1]');
$this->form_validation->set_rules('email', 'Email', 'required');

		if ($this->form_validation->run() == FALSE){
		$this->load->view('daftar/header');
		$this->load->view('registrasi');
		$this->load->view('daftar/footer');
	}else{
		$data = array(
			'id'		=> '',
			'username'	=>$this->input->post('username'),
			'password'	=>$this->input->post('password_1'),
			'email'		=>$this->input->post('email'),
			'role_id'	=>2,
		);

	
		$this->db->insert('tb_user', $data);
		redirect('auth/login');
		
	}
 }
	}
?>