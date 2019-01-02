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
	<script src="../tinymce2/tinymce.min.js"></script>
			<script type="text/javascript">
		tinymce.init({
			
			selector : "#komentar",
			setup: function (editor) {
        editor.on('change', function () {
            editor.save();
        });
    }
    
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
                	<img src="../images/logo2.png" alt="logo">
                </a>
            </div>
            <!-- /.navbar-header -->

            <ul class="nav navbar-top-links navbar-right">
                
                <!-- /.dropdown -->
                
                <!-- /.dropdown -->
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                        <i class="fa fa-bell fa-fw"></i> <i class="fa fa-caret-down"></i>
                    </a>
                    <ul class="dropdown-menu dropdown-alerts">
                        <li>
                            <a href="#">
                                <div>
                                    <i class="fa fa-comment fa-fw"></i> New Comment
                                    <span class="pull-right text-muted small">4 minutes ago</span>
                                </div>
                            </a>
                        </li>
                        
                    </ul>
                    <!-- /.dropdown-alerts -->
                </li>
                <!-- /.dropdown -->
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                        <i class="fa fa-user fa-fw"></i> <i class="fa fa-caret-down"></i>
                    </a>
                    <ul class="dropdown-menu dropdown-user">
                        
                        <li><a href="#"><i class="fa fa-gear fa-fw"></i> Settings</a>
                        </li>
                        <li class="divider"></li>
                        <li><a href="login.php"><i class="fa fa-sign-out fa-fw"></i> Logout</a>
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
                                    <a href="index.php">Buat artikel</a>
                                </li>
                                <li>
                                    <a href="lihatartikel.php">Lihat artikel</a>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-bar-chart-o fa-fw"></i>Produk</span></a>
                            
                            <!-- /.nav-second-level -->
                        </li>
                        <li>
                            <a href="user.php"><i class="fa fa-user fa-fw"></i>User</a>
                        </li>
                        <li>
                            <a href="laporan.php"><i class="fa fa-edit fa-fw"></i> Lapaoran</a>
                        </li>
                        <li>
                            <a href="transaksi.php"><i class="fa fa-wrench fa-fw"></i> Transaksi</a>
                            
                            <!-- /.nav-second-level -->
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
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Membuat artikel baru</h1>
                    <form action="index.php" method="post" enctype="multipart/form-data">
			<p><b>Judul :</b><br><input type="text" name="judul" placeholder="Judul" required /></p>
			<p><b>Kategori :</b><br><input type="text" name="kategori" placeholder="Kategori" required /></p>
			<p><b>Deskripsi:</b><br><textarea name="deskripsi" rows="5" cols="50" placeholder="Deskripsi" id="komentar" required></textarea></p>

			<p><b>Gambar :</b><br><input type="file" name="img_artikel"></p>
			
			
			<p><input type="submit" name="go" value="Kirim" /> <input type="reset" name="del" value="Hapus" /></p>
				</form>

		

                    
                </div>
                <!-- /.col-lg-12 -->
            	</div>
            <!-- /.row -->
            <!-- /.row -->
            <!-- /.panel-body -->
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
	include'koneksi.php';
        $set = true;
       //tentukan variabel file yg diupload dan tipe file
       if (isset($_FILES['img_artikel'])) {
           $tipe_file  = $_FILES['img_artikel']['type'];
            $lokasi_file = $_FILES['img_artikel']['tmp_name'];
            $nama_file  = $_FILES['img_artikel']['name'];
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
            echo "<script>alert('Upload img_artikel gagal !')</script>";
            $set =  false;
        }
    }

		if(isset($_POST['go']) && $set){
			include 'koneksi.php';
 
			$judul	= htmlentities(mysqli_real_escape_string($koneksi, $_POST['judul']));
			$kategori	= htmlentities(mysqli_real_escape_string($koneksi, $_POST['kategori']));
			$deskripsi	= htmlentities(mysqli_real_escape_string($koneksi, $_POST['deskripsi']));
			if($judul && $kategori && $deskripsi){
					$in = mysqli_query($koneksi, "INSERT INTO artikel (judul,kategori,deskripsi,img_artikel) VALUES('$judul', '$kategori','$deskripsi','$nama_file')");
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