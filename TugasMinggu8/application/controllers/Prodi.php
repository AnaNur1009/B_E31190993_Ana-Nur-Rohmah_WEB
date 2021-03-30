<?php
defined('BASEPATH') OR exit('No direct script access allowed');
	class Prodi extends CI_Controller {
		function __construct(){
			parent::__construct();
				$this->load->model('Prodi_model');
		}

		public function index(){
				$data['Prodi'] = $this->Prodi_model->get_data();
				$this->load->view('view_prodi',$data);
			}
		
}
?>