<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN">
<html>
	<head>
		<title>Simpan Data Artikel</title>
	</head>
	<body>
		<?php
		$judul=$_POST["judul"];
		$=$_POST["kategori"];
		$komentar=$_POST["deskripsi"];
		?>
	<h1>Proses simpan artikel</h1>
	<hr> 
	Judul Anda	: <?php echo $judul; ?>
	<br>
	Kategori : <?php echo $kategori; ?>
	<br>
	komentar    : <textarea name="komentar" cols="40" rows="5"></textarea>
	<?php
	//proses simpan
	$fp=fopen("artikel.dat","a+");
	fputs($koneksi, $fp,$judul."|".$kategori."|".$deskripsi."\n");
	fclose($fp);
	?>
	<p>Simpan telah berhasil dilakukan!</p>

	</body>
	</html>

