<?php
defined('BASEPATH') OR exit('No direct script access allowed');
	class Angkatan extends CI_Controller {
		function __construct(){
			parent::__construct();
				$this->load->model('Angkatan_model');
		}

		public function index(){
				$data['Angkatan'] = $this->Angkatan_model->get_data();
				$this->load->view('view_angkatan',$data);
			}
		

		public function profil(){
			echo "ini adalah method profil pada controller Angkatan";
	}
}
?>