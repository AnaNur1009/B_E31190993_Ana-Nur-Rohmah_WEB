<?php
class itemproduk{
	public $warna;
	public $ukuran;
	public $merk;
	

	public function Ukuran(){
		switch (true) {
			case ($this->ukuran == "M"):
				 $jumlah = 'Harga Rp.50.000 (M)';
				break;
			case ($this->ukuran == "L" ):
				 $jumlah = 'Harga Rp.70.000 (L)';
				break;
			default:
				 $jumlah = 'Harga Rp.85.000 (XL)';
				break;
		}
		return $jumlah;
            }     
        
	public function Warna($warna){
			return "$warna"; 
            }   
			  
	public function Nama($merk){
			return "$merk"; 
	}
}

class Topi extends itemproduk{
public $model;

public function Model(){

	switch (true) {
			case ($this->model == "Polos"):
				 $jumlah = 'Polos, Harga Rp.20.000';
				break;
			case ($this->model == "Kelinci" ):
				 $jumlah = 'Kelinci, Harga Rp.30.000';
				break;
			default:
				 $jumlah = 'Bergambar, Harga Rp.25.000 ';
				break;
		}
		return $jumlah;
}
}


class Celana extends itemproduk{
public $tipe;
public $model;

public function Tipe($tipe){
			return "$tipe"; 
	}

	public function Model($model){
			return "$model"; 
	}
}

class Baju extends itemproduk{
public $tipe;
public $model;
public function Tipe($tipe){
			return "$tipe"; 
	}

	public function Model($model){
			return "$model"; 
	}
}

$cel = new Celana();
$top = new Topi();
$baj = new Baju();

$cel->ukuran ="M";
echo "PRODUK CELANA : <br/>";
echo "Merk : ". $cel->Nama("gfgf");
echo "<br/>";
echo "Tipe : ". $cel->Tipe("Casual");
echo "<br/>";
echo "Model : ". $cel->Model("Jeans");
echo "<br/>";
echo "Warna : ". $cel->Warna("Navy");
echo "<br/>";
echo "Harga dan Ukuran : ". $cel->Ukuran();
echo "<hr/>";

$top->model ="Polos";
echo "PRODUK TOPI : <br/>";
echo "Merk : ". $top->Nama("gfgf");
echo "<br/>";
echo "Model dan Harga : ". $top->Model();
echo "<br/>";
echo "Warna : ". $top->Warna("Hitam");
echo "<br/>";
echo "<hr/>";

echo "PRODUK BAJU : <br/>";
echo "Merk : ". $baj->Nama("gfgf");
echo "<br/>";
echo "Tipe : ". $baj->Tipe("Casual");
echo "<br/>";
echo "Model : ". $baj->Model("Balon");
echo "<br/>";
echo "Warna : ". $baj->Warna("Red");
echo "<br/>";
echo "Harga dan Ukuran : ". $baj->Ukuran();
echo "<hr/>";
?>