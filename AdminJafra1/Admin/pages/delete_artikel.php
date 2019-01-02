    <?php  
    include("koneksi.php");  
    $delete_id=$_GET['del'];  
    $delete_query="DELETE  from produk WHERE id_produk='$delete_id'"; 
    $result=mysqli_query($koneksi,$delete_query);  
    if($result)  
       
    {   echo '<script language="javascript">alert("Terima kasih, Data Anda berhasil dihapus");document.location="lihatproduk.php?deleted=berita has been deleted";</script>';

    }  
      
    ?>  
