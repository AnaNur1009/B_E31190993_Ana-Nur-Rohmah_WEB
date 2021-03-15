<?php
interface Car{
	public function setModel($name);

	public function getModel();
}

class miniCar implements Car{
	private $model;

	public function setModel($name){
		$this->model = $name;
	}

	public function getModel(){
		return $this->model;
	}
}

$a = new miniCar();
$b = new miniCar();
$c = new miniCar();

echo $a->setModel("multi-purpose vehicle");
echo $b->setModel("sedan");
echo $c->setModel("hatchback");

echo "1. " .$a->getModel(); 
echo "<br/>";
echo "2. " .$b->getModel();
echo "<br/>";
echo "3. " .$c->getModel(); 

?>