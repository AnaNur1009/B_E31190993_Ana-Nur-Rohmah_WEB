<?php
 class kalkulator{
 	 private $a = 10;
 	 private $b = 20;
 	 private $c = 30;


 	 public function tambah(){
 	 	return $jumlah = $this->a+$this->b+$this->c;
 	 }
 	  public function kurang(){
 	 	return $jumlah = $this->c-$this->b;
 	 }
 	 public function bagi(){
 	 	return $jumlah = $this->c/$this->a;
 	 }
 	 public function kali(){
 	 	return $jumlah = $this->a*$this->b;
 	 }
 }
 $nilai = new kalkulator();

 echo "Hasil Penjumlahan : " .$nilai->tambah();
 echo "<br/>";
 echo "Hasil Pengurangan : " .$nilai->kurang();
 echo "<br/>";
 echo "Hasil Pembagian : " .$nilai->bagi();
 echo "<br/>";
 echo "Hasil Perkalian : " .$nilai->kali();
?>