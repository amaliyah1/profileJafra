<?php
session_start();
include "koneksi.php";
if (!empty  ($_SESSION['username']) ) 
{
exit("<script>window.alert('Anda Harus Login Terlebih Dahulu');
 window.location='logiin.php';</script>");
}
session_destroy();
exit("<script>window.alert('Thank You');
 window.location='logiin.php';</script>");
?>
