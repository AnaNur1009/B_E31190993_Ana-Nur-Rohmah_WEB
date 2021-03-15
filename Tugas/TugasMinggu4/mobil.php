<?php
class mobilLengkap{
	private $aksi;
   
}

class MobilBMW extends mobilLengkap{

	public function nontonTV(){
	return "menampilkan Tv dihidupkan, Tv Mencari Chanel, Tv 
	Menampilkan gambar";
	}

}

class MobilBMWBeraksi extends MobilBMW{
	public function nontonTV(){
	return "1.Tv dihidupkan <br/> 2.Tv Mencari Chanel <br/> 3.Tv 
	Menampilkan gambar";
	}

	public function HidupkanMobil(){
	return "1.Mobil dihidupkan <br/> 2.Mobil Berjalan<br/> ";
	}

	public function MatikanMobil(){
	return "1.Mobil Berhenti <br/> 2.Mobil dimatikan<br/> ";
	}
	public function UbahGigi(){
	return "1.Tambah Gigi <br/> Atau 2. Kurangi Gigi<br/> ";
	}


}
$bmw = new MobilBMWBeraksi();

echo "Menghidupkan Mobil :<br/>".$bmw->HidupkanMobil();
echo "<hr/>";

echo "Menonton TV :<br/>".$bmw->NontonTv();
echo "<hr/>";

echo "Ubah Gigi :<br/>".$bmw->UbahGigi();
echo "<hr/>";

echo "Matikan Mobil :<br/>".$bmw->NontonTv();
echo "<hr/>";
?>