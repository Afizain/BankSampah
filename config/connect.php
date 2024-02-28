<?php
//  $koneksi = new mysqli("localhost","root","", "bank_sampah");
define ('HOST', 'localhost');
define ('USER', 'root');
define ('PASS', '');
define ('DB', 'bank_sampah');

$connection = mysqli_connect(HOST,USER,PASS,DB) or die ('Unable Connect') 
 ?>