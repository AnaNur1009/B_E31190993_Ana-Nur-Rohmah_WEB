<?php 

class Car{
	private $model;

	public function setModel($model){
		$this->model = $model;
	}
	public function hello()
	{
		return "Beep I am a <i>". $this->model."</i><br/>";
	}
}

class sportsCar extends Car{

}

$sportsCar1 = new sportsCar();

$sportsCar1->setModel('Mercedes Benz');

echo $sportsCar1->hello();
?>