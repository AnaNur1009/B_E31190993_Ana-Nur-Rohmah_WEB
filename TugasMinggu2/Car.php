<?php
/**
 * 
 */
// Declare class
class Car
{
	//Properties
	public $comp;
	public $color = 'beige';
	public $hasSunRoof = true;

	//Method = hello
	public function hello()
	{
		return "Beep I am a <i>". $this->comp."</i>, and I am <i>".$this->color;
	}
}

	//Membuat instance
	$bmw = new Car();
	$mercedes = new Car();



	//Set Values
	$bmw->color = 'blue';
	$bmw ->comp = "BMW";
	$mercedes ->comp = "Mercedes Benz";

	

	//methods get a beep
	echo $bmw ->hello(); // beep
	
?>