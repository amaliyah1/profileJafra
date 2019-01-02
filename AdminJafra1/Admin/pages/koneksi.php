<?php
$koneksi=mysqli_connect("localhost","root","","adminjafra1");
if (!$koneksi) {
 	die ("database tidak ditemukan".mysqli_connect_error());
 } 
?>