<?php 
	
	$id=$_GET['id'];
	$SQL ="SELECT * FROM simpanan_anggota WHERE id = $id";
			$data=mysqli_query($MySQli,$SQL);
			$d = mysqli_fetch_array($data);

 ?>
<div>
        <form class = "form" action="" method="post">
            <div >
                <table >
                    
                    <div class="form-group">
                    </div>
                    <div class="form-group">
                        <label for="id">ID</label>
                        <input type="text" class="form-control" id="id" value="<?= $d['id'] ?>" aria-describedby="emailHelp" name = "id" placeholder="masukkan id">
        
                    </div>
                    <div class="form-group">
                        <label for="id">nama</label>
                        <input type="text" class="form-control" nama="nama" value="<?= $d['nama'] ?>" aria-describedby="emailHelp" name = "nama" placeholder="masukkan nama">
        
                    </div>
                    <div class="form-group">
                        <label for="id">alamat</label>
                        <input type="text" class="form-control" alamat="alamat" value="<?= $d['alamat'] ?>" aria-describedby="emailHelp" name = "alamat" placeholder="masukkan alamat">
        
                    </div>
                    

                    <div class="form-check">
                        <?php if($d['jenis_kelamin']=='L') { ?>
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

                    <div class="form-check">
                    <?php } else { ?>
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
                        <?php } ?>
                    </div>
        
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
                        <label for="id">simpanan Asal</label>
                        <input type="text" class="form-control" simpanan="simpanan" value="<?= $d['simpanan'] ?>" aria-describedby="emailHelp" name = "simpanan" placeholder="masukkan simpanan">
        
                    </div>
					<div>
					<button type="submit" value="Simpan" id="simpan" class="btn btn-primary">Submit</button>
					</div>
                </table>
               
    
                
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
		$SQL = "UPDATE simpanan_anggota SET id =$id ,nama = '$nama',alamat='$alamat',jenis_kelamin='$jenis_kelamin',agama='$agama',simpanan ='$simpanan' WHERE id =$id";
		if (mysqli_query($MySQli,$SQL)) {
			header("location:?page=list");
		} else {
			echo "Gagal edit data buku tamu !!";
		}
		
	}
 ?>
 </center>