<?php 
class Variabel extends CI_Controller {

	public function index(){
		//echo "<h2>Hello World CI!4</h2>"

		$this->load->model('model_variabel');
		$model = $this->model_variabel;

		$a = $model->txt;
		$b = $model->txt2;
		$data =array(
	 		'text'			=>$a,
	 		'text1' 		=>$b,
	 	);
$this->load->view('variabel',$data);
			
	}
}
?>