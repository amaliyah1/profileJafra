<?php
session_start();
include 'koneksi.pphp';
if (!empty($_GET['i'])) {

	$delete =delete("nama_produk","id_produk",$_GET['i']);
	$delete =delete("harga","id_produk",$_GET['i']);
    $delete =delete("deskripsi","id_produk",$_GET['i']);

      if ($delete) {
      	header("Content-Type: Admin/pages/lihatproduk.php");
    echo json_encode(array('status' => 'sukses'), JSON_PRETTY_PRINT);
  } else {
  	header("Content-Type: Admin/pages/lihatproduk.php");
    echo json_encode(array('status' => 'gagal'), JSON_PRETTY_PRINT);
  }
  }
?>