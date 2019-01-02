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
               <!--   <a href="index.php" class="brand-logo" > 
                    <img width="200" height="80" src="jafra.png" alt="logo">
                </a>
            </div> -->
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
                        <li><a href="logiin.php"><i class="fa fa-sign-out fa-fw"></i> Logout</a>
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
                                    <a href="lihatartikel.php">Lihat Produk</a>
                                </li>
                            </ul>
                        </li>
                       
                    </ul>
                </div>
                <!-- /.sidebar-collapse -->
            </div>
            <!-- /.navbar-static-side -->
        </nav>

        <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Mengedit Produk</h1>
                    <?php
                        include('koneksi.php');
                        $sql = "SELECT * from produk where id_produk = $_GET[id]";
                        $hasil = mysqli_query($koneksi, $sql);
                        while($row = mysqli_fetch_array($hasil))
                    {
                        $id_produk =$row[0];
                        $nama_produk=$row[1];  
                        $harga=$row[2];
                        $img_produk="images/".$row[3]; 
                        $Deskripsi=$row[4];
                    }
                    ?> 
            
                <form action="" method="post" enctype="multipart/form-data">
                    <p><input type="hidden" name="id_produk" value="<?php echo $id_produk;?>"></p>
                <div class="form-group">
                  <label for="nama_produk">Nama Produk :</label>
                  <input type="text" value= "<?php echo $nama_produk;?>" class="form-control" placeholder="Nama Produk" name="nama_produk">
                </div>
                <div class="form-group">
                  <label for="harga">Harga  :</label>
                  <input type="text" value= "<?php echo $harga;?>" class="form-control" placeholder="Harga" name="harga">
                </div>
                <div class="form-group">
                  <label for="img_produk">Gambar :</label>
                  <img src=" <?php echo $img_produk; ?>" width='50'><br><br><input type="file" name="img_produk" size="20">
                </div>
                <div class="form-group">
                  <label for="deskripsi">Deskripsi  :</label>
                  <textarea type="text" class="form-control" id="textareas" placeholder="Deskripsi" name="Deskripsi">
                    <?php echo $Deskripsi ?>;</textarea>
                </div>
                <button type="submit" class="btn btn-primary" name="simpan">Kirim</button><br><br>
              </form>
                   

        </div>
     


      
                    <!-- /.panel -->
                    
                        <!-- /.panel-body -->
                   
                    <!-- /.panel -->
                    
            <!-- /.row -->
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

	include('koneksi.php');
        $set = true;
        if (isset($_FILES['img_produk'])) {
            $tipe_file  = $_FILES['img_produk']['type'];
        $lokasi_file = $_FILES['img_produk']['tmp_name'];
        $nama_file  = $_FILES['img_produk']['name'];
        $save_file =move_uploaded_file($lokasi_file,"images/$nama_file");
        }
        
        if(empty($lokasi_file)){
            isset($set);
        }else{
        //tentukan tipe file harus image 
        if ($tipe_file != "image/gif" and
        $tipe_file != "image/jpeg" and
        $tipe_file != "image/jpg" and
        $tipe_file != "image/jpeg" and
        $tipe_file != "image/png")
        {
            $set=false;
            echo "<script>alert('Upload gagal, tipe file harus image')</script>";
        }else{
            $unlink=mysqli_query($koneksi, "SELECT * from produk where id_produk='$_POST[id_produk]'");
            $CekLink=mysqli_fetch_array($unlink); 
            if(!empty($CekLink[img_produk])){
                unlink("../img/$CekLink[img_produk]");
            }
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
    if (isset($_POST['simpan']) && $set) {
        $id_produk = $_POST['id_produk'];
        $nama_produk = $_POST['nama_produk'];
        $harga = $_POST['harga'];
        $deskripsi = $_POST['deskripsi'];
       
        if (empty($lokasi_file)) {
           mysqli_query($koneksi, "UPDATE produk SET nama_produk = '$nama_produk',harga = '$harga',deskripsi ='$deskripsi' WHERE id_produk = '$id_produk'");
        }else{
            mysqli_query($koneksi, "UPDATE produk SET nama_produk = '$nama_produk',harga = '$harga',img_produk = '$nama_file,deskripsi ='$deskripsi' ' WHERE id_produk = '$id_produk'");
        }

       
        if($hasil){
						echo '<script language="javascript">alert("Terima kasih, data Anda berhasil disimpan"); document.location="lihatproduk.php";</script>';
     
	}
	}
?>