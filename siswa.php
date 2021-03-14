<?php

class siswa{
	public $nama;
	public $alamat;
	public $ttl;
	public $tahunkelahiran;
	public $jeniskelamin;
	public $rataratajmlnilai;
	public $penghasilanortu;
	

	public function beasiswa() {
		 if($this->rataratajmlnilai >= 90 && $this->penghasilanortu <= 750000)
		 	$status = 'Mendapatkan Beasiswa';
		 else $status = 'Tidak Mendapatkan Beasiswa';
		 return $status;
	}
	public function nilai(){
		switch (true) {
			case ($this->rataratajmlnilai >=85 && $this->rataratajmlnilai <=100):
				$jumlah = 'A (Sangat Baik)';
				break;
			case ($this->rataratajmlnilai <85 && $this->rataratajmlnilai >=75):
				$jumlah = 'B (Baik)';
				break;
				case ($this->rataratajmlnilai < 75 && $this->rataratajmlnilai >=65):
				$jumlah = 'C (Cukup Baik)';
				break;
			default:
				$jumlah = 'D (Perlu Ditingkatkan)';
				break;
		}
		return $jumlah;
	}

	public function umur(){
		$umur = 2021 - ($this->tahunkelahiran);
		return $umur;
	}

	}

	$studi = new siswa();

	echo $studi->nama;
	echo $studi->alamat;
	echo $studi->jeniskelamin;
	echo $studi->ttl;
	echo $studi->tahunkelahiran;
	echo $studi->penghasilanortu;
	echo $studi->rataratajmlnilai;

	$studi->nama = 'Siti Lidia';
	$studi->alamat = 'Kaliwates,Jember';
	$studi->jeniskelamin = 'Perempuan';
	$studi->ttl = 'Jember, 10 Januari';
	$studi->tahunkelahiran = 2003;
	$studi->penghasilanortu = 500000;
	$studi->rataratajmlnilai = 100;

	echo 'Nama Lengkap Siswa : '.$studi->nama;
	echo "<br/>";
	echo 'Alamat : '.$studi->alamat;
	echo "<br/>";
	echo 'Tempat Tanggal Lahir : '.$studi->ttl. ' '.$studi->tahunkelahiran;
	echo "<br/>";
	echo 'Jenis Kelamin : '.$studi->jeniskelamin;
	echo "<br/>";
	echo 'Penghasilan Orang Tua(/bulan) : '.$studi->penghasilanortu;
	echo "<br/>";
	echo 'Rata Rata Nilai : '.$studi->rataratajmlnilai;
	echo "<hr/>";



	echo 'Umur Siswa: '.$studi->umur();
	echo "<br/>";
	echo 'Kategori Nilai: '.$studi->nilai();
	echo "<br/>";
	echo $studi->beasiswa();
	echo "<hr/>";
	
	
	
?>