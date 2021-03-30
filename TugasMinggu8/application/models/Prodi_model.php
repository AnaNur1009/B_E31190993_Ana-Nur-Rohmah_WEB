<?php 
class Prodi_model extends CI_Model {
public function get_data(){
$data_prodi = [	
					['prodi'=>"MIF",'Keterangan'=>"Manajemen Informatika"],
					['prodi'=>"MIF",'Keterangan'=>"Teknik Komputer"],
					['prodi'=>"MIF",'Keterangan'=>"Teknik Informatika"]
				];
return $data_prodi;
}}?>