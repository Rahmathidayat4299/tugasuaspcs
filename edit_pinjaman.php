<?php 
	
	$id=$_GET['id'];
	$SQL ="SELECT * FROM pinjaman WHERE id = $id";
			$data=mysqli_query($MySQli,$SQL);
			$d = mysqli_fetch_array($data);

 ?>
<div>
<form  action="" method="post" >
    <div class="form-group">
        <label for="id">ID</label>
        <input type="text" value="<?= $d['id'] ?>"  class="form-control" id="id" aria-describedby="emailHelp" name = "id" placeholder="masukkan id">
        
    </div>
    <div class="form-group">
        <label for="exampleInputEmail1">nik</label>
        <input type="text" class="form-control" value="<?= $d['nik'] ?>"  id="nik" name ="nik" aria-describedby="emailHelp" placeholder="masukkan nik">
        
    </div>
    <div class="form-group">
        <label for="exampleInputEmail1">nama</label>
        <input type="text" class="form-control" value="<?= $d['nama'] ?>"  id="nama" name ="nama" aria-describedby="emailHelp" placeholder="masukkan nama">
        
    </div>
    

    <div class="form-group">
        <label for="exampleInputEmail1">Simpanan</label>
        <input type="text" class="form-control" value="<?= $d['pinjaman'] ?>"  id="pinjaman" name ="pinjaman" aria-describedby="emailHelp" placeholder="masukkan jumlah pinjaman">
        
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
		
		$SQL = "UPDATE pinjaman SET id =$id ,nik ='$nik' ,nama = '$nama',pinjaman='$pinjaman' WHERE id =$id";
		if (mysqli_query($MySQli,$SQL)) {
			header("location:?page=list_pinjaman");
		} else {
			echo "Gagal edit data buku tamu !!";
		}
		
	}
 ?>
 </center>