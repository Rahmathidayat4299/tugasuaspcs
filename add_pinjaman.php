<form  action="" method="post" >
    <div class="form-group">
        <label for="id">ID</label>
        <input type="text" class="form-control" id="id" aria-describedby="emailHelp" name = "id" placeholder="masukkan id">
        
    </div>
    <div class="form-group">
        <label for="exampleInputEmail1">nik</label>
        <input type="text" class="form-control" id="nik" name ="nik" aria-describedby="emailHelp" placeholder="masukkan nik">
        
    </div>
    <div class="form-group">
        <label for="exampleInputEmail1">nama</label>
        <input type="text" class="form-control" id="nama" name ="nama" aria-describedby="emailHelp" placeholder="masukkan nama">
        
    </div>
    

    <div class="form-group">
        <label for="exampleInputEmail1">Simpanan</label>
        <input type="text" class="form-control" id="pinjaman" name ="pinjaman" aria-describedby="emailHelp" placeholder="masukkan jumlah pinjaman">
        
    </div>
    <div>
    <button type="submit" value="Simpan" id="simpan" class="btn btn-primary">Submit</button>
    </div>

    
    </form>
<center>
<?php 
	if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $id = $_POST['id'];
        $nik = $_POST['nik'];
        $nama = $_POST['nama'];
        $pinjaman = $_POST['pinjaman'];
		$SQL = "INSERT INTO pinjaman(id,nik,nama,pinjaman) VALUES('$id','$nik','$nama','$pinjaman')";
		if (mysqli_query($MySQli,$SQL)) {
			header("location:?page=list");
		} else {
			echo "Gagal menambahkan data buku tamu !!";
		}
		
	}
 ?>
 </center>