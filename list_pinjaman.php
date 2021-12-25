<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
	<link rel="stylesheet" href="style.css">
	<script src = "https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdn.datatables.net/1.11.3/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.11.3/js/dataTables.bootstrap4.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/css/bootstrap.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.11.3/css/dataTables.bootstrap4.min.css">
</head>
<body>
<div style="width: 800px;">
	<table class="table table-striped" style="width: 800px; border : solid red 1px;">
	<thead>
		<tr>
			<th align="left">ID</th>
			<th align="left">NIK</th>
			<th align="left">Nama</th>
			<th align="left">Pinjaman</th>
			<th >AKSI</th>		
		</tr>
	</thead>
	<tbody>
		<?php 
			$no = 1;
			$SQL ="SELECT * FROM pinjaman";
			$data=mysqli_query($MySQli,$SQL);

			while ($d = mysqli_fetch_array($data)) {
				?>
				<tr>
			<td><?= $no++ ?></td>
			<td><a href="?page=detail&id=<?= $d['id'] ?>"><?= $d['nik'] ?></a></td>
			<td><?= $d['nama'] ?></td>
			<td><?= $d['pinjaman'] ?></td>
			<td align="center"> <a class="btn btn-warning" href="?page=edit_pinjaman&id=<?= $d['id'] ?>">Edit</a> OR <a class="btn btn-danger" href="?page=hapus_pinjaman&id=<?= $d['id'] ?>">Hapus</a></td>
			</tr>
			<?php
			}
		 ?>
		
	</tbody>
</table>
</div>
</body>
</html>
