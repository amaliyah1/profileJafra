<?php   
include "koneksi.php";
        session_start();

        if (empty($_SESSION['namauser']) AND empty($_SESSION['passuser'])) {
            echo "<center>Untuk mengakses halaman ini, anda harus login terlebih dahulu<br>";
            echo "<a href=login.php><b>LOGIN</b></a></center>";
            # code...
        }
        else{


 ?>
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>SB Admin 2 - Bootstrap Admin Theme</title>

    <!-- Bootstrap Core CSS -->
    <link href="../vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- MetisMenu CSS -->
    <link href="../vendor/metisMenu/metisMenu.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="../dist/css/sb-admin-2.css" rel="stylesheet">

    <!-- Morris Charts CSS -->
    <link href="../vendor/morrisjs/morris.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="../vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="node_modules/mdi/css/materialdesignicons.min.css">
     <script type="text/javascript" src="../tinymce/tiny_mce.js"></script>
  <script type="text/javascript">
    tinymce.init({
      selector:"#textareas"
    });
  </script>

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>

    <div id="wrapper">

        <!-- Navigation -->
        <nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a href="index.php" class="brand-logo" > 
                    <img width="250" height="100" src="" alt="logo">
                </a>
            </div>
            <!-- /.navbar-header -->

            <ul class="nav navbar-top-links navbar-right">
                
                <!-- /.dropdown -->
                
                <!-- /.dropdown -->
                
                <!-- /.dropdown -->
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                        <i class="fa fa-user fa-fw"></i> <i class="fa fa-caret-down"></i>
                    </a>
                    <ul class="dropdown-menu dropdown-user">
                        
                        
                        <li class="divider"></li>
                        <li><a href="logout.php"><i class="fa fa-sign-out fa-fw"></i> Logout</a>
                        </li>
                    </ul>
                    <!-- /.dropdown-user -->
                </li>
                <!-- /.dropdown -->
            </ul>
            <!-- /.navbar-top-links -->

            <div class="navbar-default sidebar" role="navigation">
                <div class="sidebar-nav navbar-collapse">
                    <ul class="nav" id="side-menu">
                        <li class="sidebar-search">
                            <div class="input-group custom-search-form">
                                <input type="text" class="form-control" placeholder="Search...">
                                <span class="input-group-btn">
                                <button class="btn btn-default" type="button">
                                    <i class="fa fa-search"></i>
                                </button>
                            </span>
                            </div>
                            <!-- /input-group -->
                        </li>
                        <li>
                            <a href="index.php"><i class="fa fa-home fa-fw"></i> Homepage <span class="fa arrow"></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="index.php">Tambah Produk</a>
                                </li>
                                <li>
                                    <a href="lihatproduk.php">Lihat Produk</a>
                                </li>
                            </ul>
                        </li>
                        
                            <!-- /.nav-second-level -->
                        </li>
                    </ul>
                </div>
                <!-- /.sidebar-collapse -->
            </div>
            <!-- /.navbar-static-side -->
        </nav>
        <div id="page-wrapper">
            
                <form method="post" enctype="multipart/form-data">
                <div class="form-group">
                  <label for="nama_produk">Nama Produk :</label>
                  <input type="text" class="form-control" placeholder="Nama Produk" name="nama_produk">
                </div>
                <div class="form-group">
                  <label for="harga">Harga  :</label>
                  <input type="text" class="form-control" placeholder="Harga" name="harga">
                </div>
                <div class="form-group">
                  <label for="img_produk">Gambar :</label>
                  <input type="file" name="img_produk">
                </div>
                <div class="form-group">
                  <label for="deskripsi">Deskripsi  :</label>
                  <textarea type="text" class="form-control" id="textareas" placeholder="Deskripsi" name="Deskripsi"></textarea>
                </div>
                <button type="submit" class="btn btn-primary" name="go">Kirim</button><br><br>
              </form>
                   

        </div>
     
        
        
        
     
        </div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->

    <!-- jQuery -->
    <script src="../vendor/jquery/jquery.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="../vendor/bootstrap/js/bootstrap.min.js"></script>

    <!-- Metis Menu Plugin JavaScript -->
    <script src="../vendor/metisMenu/metisMenu.min.js"></script>

    <!-- Morris Charts JavaScript -->
    <script src="../vendor/raphael/raphael.min.js"></script>
    <script src="../vendor/morrisjs/morris.min.js"></script>
    <script src="../data/morris-data.js"></script>

    <!-- Custom Theme JavaScript -->
    <script src="../dist/js/sb-admin-2.js"></script>

</body>

</html>
<?php 

} ?>
<?php
    include'koneksi.php';
        $set = true;
       //tentukan variabel file yg diupload dan tipe file
       if (isset($_FILES['img_produk'])) {
           $tipe_file  = $_FILES['img_produk']['type'];
            $lokasi_file = $_FILES['img_produk']['tmp_name'];
            $nama_file  = $_FILES['img_produk']['name'];
            $save_file =move_uploaded_file($lokasi_file,"images/".$nama_file);
        }
        

            if(empty($lokasi_file)){
                $set=false;
            }
            else{
            //tentukan tipe file harus img_artikel 
            if ($tipe_file != "image/gif" and
                $tipe_file != "image/jpeg" and
                $tipe_file != "image/jpg" and
                $tipe_file != "image/jpeg" and
                $tipe_file != "image/png")
            {
            $set=false;
            echo "<script>alert('Upload gagal, tipe file harus image')</script>";
        }
        else
        {
          isset($save_file);
        }
        //replace di server 
        if($save_file)
        {
            chmod("images/$nama_file", 0777);
        }
        else
        {
            echo "<script>alert('Upload img_produk gagal !')</script>";
            $set =  false;
        }
    }

        if(isset($_POST['go']) && $set){
            include 'koneksi.php';
 
            $nama_produk  = $_POST['nama_produk'];
            $harga   =  $_POST['harga'];
            $Deskripsi = $_POST['Deskripsi'];
            if($nama_produk && $harga && $Deskripsi){
                    $in = mysqli_query($koneksi, "INSERT INTO produk (nama_produk,harga,img_produk,Deskripsi) VALUES('$nama_produk','$harga','$nama_file','$Deskripsi')");
                    if(!$in){
                        die('query error'. mysqli_error($koneksi));
                    }
                    if($in){
                        echo '<script language="javascript">alert("Terima kasih, data Anda berhasil disimpan"); document.location="index.php";</script>';
                    }else{
                        echo '<div id="error">Uppsss...! Query ke database gagal dilakukan!</div>';
                    }
                
            }else{
                echo '<div id="error">Uppsss...! Lengkapi form!</div>';
            }
        }
        ?>