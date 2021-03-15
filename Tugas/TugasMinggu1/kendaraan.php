<?php
class kendaraan{
	public $jeniskendaraan;
	public $jumlahroda;
	public $jenismerk;
	public $bahanbakar ;
	public $harga;
	public $tahunpembuatan;

	public function dapatSubsidi() {
		 if($this->tahunpembuatan < 2005 && $this->bahanbakar == "Premium")
		 	$status = 'Ya';
		 else $status = 'Tidak';
		 return $status;
	}

	public function hargaSecond(){
		
		switch (true) {
			case ($this->tahunpembuatan > 2010):
				$jumlah = ($this->harga)-((20/100)*($this->harga)).' ( Harga Turun 20% )';
				break;
			case ($this->tahunpembuatan >= 2005 && $this->tahunpembuatan <= 2010 ):
				$jumlah = ($this->harga)-((30/100)*($this->harga)).' ( Harga Turun 30% )';
				break;
			default:
				$jumlah = ($this->harga)-((40/100)*($this->harga)).' ( Harga Turun 40% )';
				break;
		}
		return $jumlah;
	}

	}


	$kdr = new kendaraan();
	
	echo $kdr->tahunpembuatan;
	echo $kdr->bahanbakar;
	echo $kdr->harga;

	$kdr->tahunpembuatan = 2011;
	$kdr->bahanbakar = 'Premium';
	$kdr->harga = 20000000;

	echo 'Tahun Pembuatan : '.$kdr->tahunpembuatan;
	echo "<br/>";
	echo 'Bahan Bakar : '.$kdr->bahanbakar;
	echo "<br/>";
	echo 'Harga : '.$kdr->harga;
	echo "<br/>";

	echo 'Mendapatkan Subsidi : '.$kdr->dapatSubsidi();
	echo "<br/>";
	echo 'Harga Second : '.$kdr->hargaSecond();
?>