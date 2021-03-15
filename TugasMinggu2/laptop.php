<?php
// buat class laptop
class laptop {
   // buat property untuk class laptop
   private $pemilik;
   private $merk;
  
   // buat method untuk class laptop
   public function hidupkan_laptop($merk,$pemilik) {
     return "Hidupkan Laptop $merk milik $pemilik";
   }
  
   public function matikan_laptop($merk,$pemilik) {
     return "Matikan Laptop $merk milik $pemilik";
   }
   
   public function restart_laptop($merk,$pemilik) {
     return "Matikan Laptop $merk milik $pemilik. Hidupkan Laptop $merk punya $pemilik";
   }

}
  
// buat objek dari class laptop (instansiasi)
$laptop= new laptop();
  
echo "a. " .$laptop->hidupkan_laptop("ASUS", "A");
echo "<br/>";
echo "b. " .$laptop->matikan_laptop("Acer", "B");
echo "<br/>";
echo "c. " .$laptop->restart_laptop("Lenovo", "C");  

?>