		<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
            <h1 class="h2">Tambah Produk</h1>
            <div class="btn-group mr-2">
              <a href="<?=$konfig['url']?>/admin/pegawai.php" class="btn btn-sm btn-outline-danger">Tabel Produk</a>
              <a href="?page=tambah" class="btn btn-sm btn-danger active">Tambah Produk</a>
            </div>
          </div>
          <?php
    if (@$_GET['page'] == 'tambah' && isset($_POST['submit'])) {
        $post = array(
        				'id_produk' => $_POST['id_produk'],
						'nama_produk' => $_POST['nama_produk'],
						'harga' => $_POST['harga'], 
						'gambar' => $_POST['gambar'],
						'deskripsi' => $_POST['deskripsi'],
						
        			 );
        $user = array(
	                	'id_user' => '',
	                	'username' => $_POST['id_produk'],
	                	'password' => md5($_POST['password']),
	                	'level' => 3
	              );
	  $login = create('user',$user);
      $result = create('id_produk',$post);
        if ($result) {
         echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
                      <strong>Sukses</strong> Data Sudah Di Tambahkan
                      <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                      </button>
                    </div>';
         }else{
         echo '<div class="alert alert-danger alert-dismissible fade show" role="alert">
                      <strong>Gagal</strong> Data Tidak Dapat Di Tambahkan
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