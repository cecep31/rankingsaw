<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>ranking siswa terbaik</title>
    <link rel="stylesheet" href="gayaku.css">
</head>
<body>



<nav>
    <ul>
        <li><a href="#">Home</a></li>
        <li><a href="?p=alternatifadd">tambah alternatif</a>
        </li>
        <li><a href="#">Transaksi</a>
            <ul>
                <li><a href="#">Peminjaman</a></li>
                <li><a href="#">Pengembalian</a></li>
            </ul>
        </li>
        <li><a href="#" onClick="return confirm ('Yakin?')">Logout</a></li>
    </ul>
</nav>
<?php
include "koneksi.php";
if(isset($_GET['p'])){
    $page = $_GET['p'];

    switch ($page) {
        case 'alternatifadd':
            include "alternatifaadd.php";
            break;
        case 'alternatifedit':
            include "alternatifedit.php";
            break;
        case 'alernatifdel':
            include "alternatifdel.php";
            break;		
        default:
            echo "<center><h3>Maaf. Halaman tidak di temukan !</h3></center>";
            break;
    }
}else{
    include "home.php";
}
    
?>

</body>
</html>