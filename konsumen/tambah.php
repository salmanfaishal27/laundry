<div class='panel panel-border panel-primary'>
                                    <div class='panel-heading'> 
                                        <h3 class='panel-title'><i class='fa fa-user-plus'></i> Tambah Konsumen</h3> 
                                    </div>  <div class='panel-body'> <?php
if(isset($_POST['nama'])){
$id		    = $_POST['id'];
$nama		= $_POST['nama'];
$telp		= $_POST['telp'];
$alamat		= $_POST['alamat'];
$username	= $_POST['username'];
$password	= $_POST['password'];
	
	$input = mysql_query("INSERT INTO konsumen VALUES(NULL,'$id','$nama','$alamat', '$telp','$username','$password')") or die(mysql_error());
	if($input){
		
		echo '<div class="alert alert-success alert-dismissable">
                                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button><h4><b>Tambah Konsumen Berhasil!</b></h4>';		//Pesan jika proses tambah sukses
		echo '
		============================<Br>
		<b>Info Konsumen</b><br>
		id : <b>'.$id.'</b><br>
		Nama : <b>'.$nama.'</b><br>
		Alamat : <b>'.$alamat.'</b><br>
		Telp : <b>'.$telp.'</b><br>
		username : <b>'.$username.'</b><br>
		password : <b>'.$password.'</b><br>
		</div>
		
		';	
		
	}else{
		
		echo 'Gagal menambahkan data! ';	
		echo '<a href="tambah.php">Kembali</a>';	
		
	}
}
?>
									<form method="post">

									 <div class="form-group">
                                                <label>Nama</label>
                                                <input type="text" class="form-control" name="nama" placeholder="Masukan Nama Konsumen" required>
                                            </div>
											 <div class="form-group">
                                                <label>Alamat</label>
                                                <input type="text" class="form-control" name="alamat" placeholder="Masukan Alamat Konsumen" required>
                                            </div>
											 <div class="form-group">
                                                <label>Telp</label>
                                                <input type="text" class="form-control" name="telp" placeholder="Masukan No. Telepon Konsumen" required>
                                            </div>
<button type="submit" class="btn btn-primary waves-effect waves-light">Tambah</button>
</form>
                                     </div>
									 
          </div>
		 