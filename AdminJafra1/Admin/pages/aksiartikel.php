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
 
            $judul  = $_POST['judul'];
            $kategori   =  $_POST['kategori'];
            $deskripsi  =  $_POST['deskripsi'];
            if($judul && $kategori && $deskripsi){
                    $in = mysqli_query($koneksi, "INSERT INTO artikel1 (judul,kategori,deskripsi,img_artikel) VALUES('$judul', '$kategori','$deskripsi','$nama_file')");
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