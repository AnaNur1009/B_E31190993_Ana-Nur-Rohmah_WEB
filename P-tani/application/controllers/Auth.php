<?php 
class Auth extends CI_Controller {
	
		public function login()
		{
			$this->form_validation->set_rules('username','Username','required');
			$this->form_validation->set_rules('password','Password','required');
			if ($this->form_validation->run() == FALSE)
			{
				$this ->load->view('login/header');
				$this ->load->view('form_login');
				$this ->load->view('login/footer');
			}else{
				$auth = $this->model_auth->cek_login($id);

				if($auth == FALSE)
				{
					$this->session->set_flashdata('pesan','<div class="alert alert-warning alert-dismissible fade show" role="alert">
						  Username atau Password Salah.
						  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
						    <span aria-hidden="true">&times;</span>
						  </button>
						</div>');
					redirect('auth/login');
				}else{
					$this->session->set_userdata('username',$auth->username);
					$this->session->set_userdata('role_id',$auth->role_id);

					switch ($auth->role_id) {
						case 1: redirect('admin/dashboard_admin');
						
						break;
						case 2: redirect('dashboard1');
							
						break;
						
						default: break;
					}
				}
			}
		}

		public function logout()
		{
			$this->session->sess_destroy();
			redirect('auth/login');
		}
	
} ?>