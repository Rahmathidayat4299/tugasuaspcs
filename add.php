<form  action="" method="POST" >
<h1 style = "text-align: center;">ADD Data Anggota</h1>
        <div class="form-group">
            <label for="id">ID</label>
            <input type="text" class="form-control" id="id" aria-describedby="emailHelp" name = "id" placeholder="masukkan id">
        </div>
    <div class="form-group">
        <label for="exampleInputEmail1">nama</label>
        <input type="text" class="form-control" id="nama" name ="nama" aria-describedby="emailHelp" placeholder="masukkan nama">
        
    </div>
    <div class="form-group">
        <label for="exampleInputEmail1">Alamat</label>
        <input type="text" class="form-control" id="alamat" name ="alamat" aria-describedby="emailHelp" placeholder="masukkan alamat">
        
    </div>
    <div class="form-check">
        <input class="form-check-input" type="radio" name="jenis_kelamin" id="exampleRadios1" value="L" checked>
        <label class="form-check-label" for="exampleRadios1">
            laki-laki
        </label>
    </div>
    <div class="form-check">
        <input class="form-check-input" type="radio" name="jenis_kelamin" id="exampleRadios2" value="P">
        <label class="form-check-label" for="exampleRadios2">
            perempuan
        </label>
    </div>
	<div>
	<select name = "agama" id = "agama" class="form-control form-control-sm">
    <option value="" disabled selected>Agama</option>
	<option value="islam">Islam</option>
	<option value="kristen">Kristen</option>
    <option value="katolik">Katolik</option>
    <option value="hindu">Hindu</option>
    <option value="buddha">Buddha</option>
	<option value="konghucu">Konghucu</option>
    </select>

	</div>
  

    <div class="form-group">
        <label for="exampleInputEmail1">Simpanan</label>
        <input type="text" class="form-control" id="simpanan" name ="simpanan" aria-describedby="emailHelp" placeholder="masukkan jumlah simpanan">
        
    </div>
	<div>
	<button type="submit" value="Simpan" id="simpan" class="btn btn-primary">Submit</button>

	</div>

    
</div>
    </form>
<center>
<?php 
	if ($_SERVER['REQUEST_METHOD'] == 'POST') {
		$id = $_POST['id'];
		$nama = $_POST['nama'];
		$alamat = $_POST['alamat'];
		$jenis_kelamin = $_POST['jenis_kelamin'];
		$agama = $_POST['agama'];
		$simpanan = $_POST['simpanan'];
		$SQL = "INSERT INTO simpanan_anggota(id,nama,alamat,jenis_kelamin,agama,simpanan) VALUES('$id','$nama','$alamat','$jenis_kelamin','$agama','$simpanan')";
		if (mysqli_query($MySQli,$SQL)) {
			header("location:?page=list");
		} else {
			echo "Gagal menambahkan data buku tamu !!";
		}
		
	}
 ?>
 </center>