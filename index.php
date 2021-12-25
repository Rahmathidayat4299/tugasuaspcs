<!DOCTYPE html>
<html>
<head>
    <title>.: KOPERASI UNILAK:.</title>
    <link rel="stylesheet" type="text/css" href="style.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@5.15.4/css/fontawesome.min.css">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</head>
<body>
<?php 
    require_once 'koneksi.php';
?>
<center><h1>CRUD SEDERHANA KOPERASI UNILAK</h1></center>
<center>
    <a class="btn btn-primary" href="?page=list"> DATA ANGGOTA</a>
    <a class="btn btn-success" href="?page=add">TAMBAH ANGGOTA</a>
    <a class="btn btn-danger" href="?page=list_laporan">PRINT LAPORAN ANGGOTA</a>
    <a class="btn btn-success" href="?page=add_pinjaman">TAMBAH  PINJAMAN ANGGOTA</a>
    <a class="btn btn-success" href="?page=list_pinjaman">DATA  PINJAMAN ANGGOTA</a>
    <a class="btn btn-danger" href="?page=list_laporan_pinjaman">PRINT LAPORAN PINJAMAN</a>
</center>
<hr>
<?php 
    $page = (isset($_GET['page'])) ? $_GET['page'] : 'add' ;

    switch ($page) {
        case 'add':
            require_once 'add.php';
            break;
        case 'list':
            require_once 'list.php';
            break;
        case 'list_laporan':
            require_once 'list_laporan.php';
            break;
        case 'list_laporan_pinjaman':
            require_once 'list_laporan_pinjaman.php';
            break;
        case 'add_pinjaman':
            require_once 'add_pinjaman.php';
            break;
        case 'list_pinjaman':
            require_once 'list_pinjaman.php';
            break;
        case 'edit':
            require_once 'edit.php';
            break;
        case 'edit_pinjaman':
            require_once 'edit_pinjaman.php';
            break;
        case 'hapus':
            require_once 'delete.php';
            break;
        case 'hapus_pinjaman':
            require_once 'delete_pinjaman.php';
            break;
        case 'detail':
            require_once 'detail.php';
            break;
        default:
            require_once 'add.php';
            break;
    }
 ?>
</body>
</html>