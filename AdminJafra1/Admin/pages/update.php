		<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
            <h1 class="h2">Update Produk</h1>
            <div class="btn-group mr-2">
              <a href="<?=$konfig['url']?>/admin/index.php" class="btn btn-sm btn-outline-primary">Tabel Produk</a>
            </div>
          </div>
          <?
    if (@$_GET['page'] == 'update' && isset($_POST['submit'])) {
        $post = array(
						'id_produk' => $_POST['id_produk'],
						'nama_produk' => $_POST['nama_produk'], 
						'harga' => $_POST['harga'], 
						'gambar' => $_POST['gambar'], 
						'deskripsi' => $_POST['deskripsi'], 
						
        			 );
        $cekpw = read('user','username',$_POST['id_produk']);
	                			if (empty($_POST['password'])) {
	                				$password = $cekpw[0]['password'];
	                			}else{
	                				$password = md5($_POST['password']);
	                			}
	                			$user = array(
	                				'username' => $_POST['id_produk'],
	                				'password' => $password
	                			);
	  $login = update('user',$user,'username',$_POST['id_produk']);
      $result = update('harga',$post,'id_produk',$_POST['id_produk']);
        if ($result) {
         echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
                      <strong>Sukses</strong> Data Sudah Di Update
                      <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                      </button>
                    </div>';
         }else{
         echo '<div class="alert alert-danger alert-dismissible fade show" role="alert">
                      <strong>Gagal</strong> Data Tidak Dapat Di Update
                      <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                      </button>
                    </div>';
         }
    }?>

    	<span class="asteriskField">*</span> Harus Diisi<br>
          <form method="post">
			    <div class="form-group ">
			      <label class="control-label requiredField" for="id_produk">
			       id_produk
			       <span class="asteriskField">
			        *
			       </span>
			      </label>
			      <input class="form-control" id="id_produk" name="id_produk" type="text" required>
			     </div>
			     <div class="form-group ">
			      <label class="control-label requiredField" for="nama">
			       nama_produk
			       <span class="asteriskField">
			        *
			       </span>
			      </label>
			      <input class="form-control" id="nama_produk" name="nama_produk" type="nama_produk" required>
			     </div>
			     <div class="form-group ">
			      <label class="control-label requiredField" for="nama">
			       harga
			       <span class="asteriskField">
			        *
			       </span>
			      </label>
			      <input class="form-control" id="harga" name="harga" type="text" required>
			     </div>
			     <div class="form-group ">
			      <label class="control-label requiredField" for="gambar">
			       gambar
			       <span class="asteriskField">
			        *
			       </span>
			      </label>
			      <input class="form-control" id="gambar" name="gambar" type="img" ="text" required>
			     </div>
			     <div class="form-group ">
			      <label class="control-label requiredField" for="date">
			       deskripsi
			       <span class="asteriskField">
			        *
			       </span>
			      </label>
			      <input class="form-control" id="deskripsi" name="deskripsi" type="text" required>
			     </div>
			     <div class="form-group">
			      <div>
			       <button class="btn btn-primary " name="submit" type="submit">
			        Submit
			       </button>
			      </div>
			     </div>
			    </form>