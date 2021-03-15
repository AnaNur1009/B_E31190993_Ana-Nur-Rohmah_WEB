<?php
class Tablet{
	private $merk;
	private  $camera;
	private  $memory;  

	public function Harga(){
		switch (true) {
			case ($this->merk == "OPPO" && $this->memory == 8):
				 $jumlah = 'Rp.5.000.000 (Camera 16Mp)';
				break;
			case ($this->merk == "VIVO" && $this->memory == 8):
				 $jumlah = 'Rp.4.500.000 ';
				break;
			case ($this->merk == "OPPO" && $this->memory == 4):
				 $jumlah = 'Rp.4.000.000';
				break;
			case ($this->merk == "VIVO" && $this->memory == 4):
				 $jumlah = 'Rp.3.800.000 ';
				break;
			default:
				 $jumlah = 'Rp.3.500.000';
				break;
		}
		return $jumlah;
	}   
}


class handphone extends Tablet{
	public $handphone_baru;

	public function beli_handphone(){
		return $this->Harga();
	}
}

$hp = new handphone();

	echo $hp->merk;
	echo $hp->memory;
	echo $hp->camera;

	$hp->merk = 'OPPO';
	$hp->memory = 8;
	$hp->camera = "16Mp";

echo "Harga : ".$hp->Harga();
?>