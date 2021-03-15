<?php 

class Car{
	protected $model;

	public function setModel($model){
		$this->model = $model;
	}
	
}

class sportsCar extends Car{
	public function hello()
	{
		return "Beep I am a <i>". $this->model."</i><br/>";
	}

}

$sportsCar1 = new sportsCar();

$sportsCar1->setModel('Mercedes Benz');

echo $sportsCar1->hello();
?>