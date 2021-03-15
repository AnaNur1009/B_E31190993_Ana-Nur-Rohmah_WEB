<?php 
class Hello extends CI_Controller {

	public function index(){
		//echo "<h2>Hello World CI!4</h2>"

		$this->load->model('Hello_model');
		$model = $this->Hello_model;

		$a = $model->txt;
		$data['teks'] =$a;

			$this->load->view('helloview',$data);
	}
}
?>