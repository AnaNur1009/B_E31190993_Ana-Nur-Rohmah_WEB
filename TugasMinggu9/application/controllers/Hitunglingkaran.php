<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Hitunglingkaran extends CI_Controller {
 
function __construct(){
parent::__construct();
$this->load->library('lingkaran');
}
 
function index(){
$this->lingkaran->keliling('21');
echo "<hr/>";
$this->lingkaran->luas('14');
}
}
?>