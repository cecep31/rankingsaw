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
        <li><a href="/rankingsaw">Home</a></li>
        <li><a href="?p=alternatifadd">tambah alternatif</a>
        </li>
        <li><a href="?p=ranking">perengkingan</a>
        </li>
        <li><a href="?p=refresh" style="color: rgb(166, 206, 211);">REFRESH RANKING</a></li>
    </ul>
</nav>
<?php
include "koneksi.php";
if(isset($_GET['p'])){
    $page = $_GET['p'];

    switch ($page) {
        case 'alternatifadd':
            include "alternatifadd.php";
            break;
        case 'alternatifedit':
            include "alternatifedit.php";
            break;
        case 'alternatifdel':
            include "alternatifdel.php";
            break;	
        case 'ranking':
            include "ranking.php";
            break;	
        case 'refresh':
            include "refresh.php";
            break;	    	
        default:
            echo "<br><center><h3>Maaf. Halaman tidak di temukan !</h3></center>";
            break;
    }
}else{
    include "home.php";
}
    
?>

</body>
</html>