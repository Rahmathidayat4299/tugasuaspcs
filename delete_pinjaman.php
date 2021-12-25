<center>
<?php
	$id = (isset($_GET['id'])) ? $_GET['id'] : '' ;
	if (!empty($id)) {		
		$SQL = "DELETE FROM pinjaman WHERE id=$id";
		if (mysqli_query($MySQli,$SQL)) {
			echo "berhasil hapus data pinjaman";
			echo "<br>";
			echo "<a href='?page=list_pinjaman'>OK</a>";
		} else {
			echo "Gagal hapus data pinjaman !!";
		}
		
	}else{
		header("location:?page=list_pinjaman");
	}
 ?>
 </center>