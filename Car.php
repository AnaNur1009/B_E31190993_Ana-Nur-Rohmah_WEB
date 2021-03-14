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
		return "beep";
	}
}

	//Membuat instance
	$bmw = new Car();
	$mercedes = new Car();

	//Get Values
	echo $bmw->color; //beige
	echo "<br/>";
	echo $mercedes->color; //beige
	echo "<hr/>";

	//Set Values
	$bmw->color = 'blue';
	$bmw ->comp = "BMW";
	$mercedes ->comp = "Mercedes Benz";

	//Get Values
	echo $bmw ->color; // blue
	echo "<br/>";
	echo $mercedes ->color; // beige
	echo "<br/>";
	echo $bmw ->comp; // BMW
	echo "<br/>";
	echo $mercedes ->comp; // Marcedes Benz
	echo "<hr/>";

	//methods get a beep
	echo $bmw ->hello(); // beep
	echo "<br/>";
	echo $mercedes ->hello(); // beep
?>