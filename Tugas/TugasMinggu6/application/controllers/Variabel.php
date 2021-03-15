<?php
class Variabel extends CI_Controller{
	public function index(){
		$data=['variabel1'=>'Data Variabel ke 1', 'variabel2'=>'Data Variabel ke 2' ];

		$this->load->view('variabelview', $data);
	}
}

?>