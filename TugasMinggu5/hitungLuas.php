<?php
interface hitungLuas
{


}

class Persegi implements hitungLuas{
	private $sisi;

	public function  __construct($sisi)
	{
		$this->sisi = $sisi;
	}

	public function hitungLuasPersegi()
	{
		return $this->sisi * $this->sisi ;
	}
}

class Segitiga implements hitungLuas
{
	private $alas;
	private $tinggi;

	public function  __construct($alas,$tinggi)
	{
		$this->alas = $alas;
		$this->tinggi = $tinggi;
	}

	public function hitungLuasSegitiga()
	{
		return 0.5 * $this->alas * $this->tinggi ;
	}
}

class Lingkaran implements hitungLuas
{
	private $jarijari;

	public function  __construct($jarijari)
	{
		$this->jarijari = $jarijari;
	}

	public function hitungLuasLingkaran()
	{
		return pi() * $this->jarijari * $this->jarijari ;
	}
}

$psg = new Persegi(3);
$sgt = new Segitiga(6,3);
$lkr = new Lingkaran(7);

echo "Luas Persegi : ".$psg->hitungLuasPersegi();
echo "<br/>";
echo "Luas Segitiga : ".$sgt->hitungLuasSegitiga();
echo "<br/>";
echo "Luas Lingkaran : ".$lkr->hitungLuasLingkaran();
?>