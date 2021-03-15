<?php
/**
 * 
 */
// Declare class
class Car
{
	//Properties
	public $tank;

	//Method = hello
	public function fill($float)
	{
		$this->tank += $float;
		return $this;
	}

	public function ride($float){
		$miles = $float;
		$gallons = $miles/50;
		$this->tank -= ($gallons);
		return $this;
	}
}

	//Membuat instance
	$bmw = new Car();
	
$tank = $bmw->fill(10)->ride(40)->tank;

echo "The Number of gallons left in the tank : " .$tank. " gal.";
?>