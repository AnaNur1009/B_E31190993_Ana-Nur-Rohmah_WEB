<?php
defined('BASEPATH') OR exit('NO direct script access allowed');
class Login extends CI_Controller {
	function __construct(){
		parent::__construct();
		$this->load->model('Mahasiswa_model');
	}

	public function index(){
		$this->load->view('crud/login');
	}

	public function cek_log(){
		$username = $this->input->post('txt_user');
		$password = $this->input->post('txt_pass');
		$cek = $this->Mahasiswa_model->login($username,$password,'tm_user')->result();
		if($cek != FALSE){
			foreach ($cek as $row){
				$user = $row->username;
				$grup = $row->grup;
			}
			$this->session->set_userdata('session_user', $user);
			$this->session->set_userdata('session_grup', $grup);
			redirect('Mahasiswa/index');
		}else{
			$this->load->view('crud/login');
		}
	}

	public function logout()
		{
			$this->session->sess_destroy();
			redirect('Login/index');
		}
}

?>