



<?php
echo "
<br>
<h2 class='h3k'>normalisasi</h2>";
echo "<table class='table1' border='1'>
  <tr>

    <th>nama kriteria</th>
    <th>nilai_rapor</th>
    <th>piagam</th>
    <th>point pelanggaran</th>
    <th>akhlak</th>
	
	
 
  </tr>";


$sqlnilai=mysqli_query($kon, "SELECT max(nilai_rapor) AS max FROM tbl_alt");
$sqlpiagam=mysqli_query($kon, "SELECT max(piagam) AS max FROM tbl_alt");
$sqlpoint=mysqli_query($kon, "SELECT min(poin_pelanggaran) AS min FROM tbl_alt");
$sqlakhlak=mysqli_query($kon, "SELECT max(akhlak) AS max FROM tbl_alt");
//Looping Untuk menampilkan data (namabarang,jumlah,harga)


while($rkl = mysqli_fetch_array($sqlnilai)){
	$maxnilai = $rkl["max"];	
}
while($rkl = mysqli_fetch_array($sqlpiagam)){
	$maxpiagam = $rkl["max"];	
}
while($rkl = mysqli_fetch_array($sqlpoint)){
	$minpoint = $rkl["min"];	
}
while($rkl = mysqli_fetch_array($sqlakhlak)){
	$maxakhlak = $rkl["max"];	
}


// echo "<h3>max nilai rapor:</h3> $maxnilai";
// echo "<h3>max piagam     :</h3> $maxpiagam";
// echo "<h3>min ponit      :</h3> $minpoint";
// echo "<h3>max akhlak     :</h3>$maxakhlak";


$sqlm = mysqli_query($kon, "select * from tbl_alt order by nama");

while($rm = mysqli_fetch_array($sqlm)){
   $nilai = $rm["nilai_rapor"]/$maxnilai;
   $piagam = $rm["piagam"]/$maxpiagam;
   $point = $minpoint/$rm["poin_pelanggaran"];
   $akhlak = $rm["akhlak"]/$maxakhlak;
    $ida = $rm["ida"];
    $nama = $rm["nama"];
  echo "<tr>
  
    <td>
	  <b>$rm[nama]</b>
	</td>
    <td>
	  <b>$nilai</b>
	</td>
    <td>
	  $piagam</b>
    </td>
    <td>
        $point</b>
    </td>
    <td>
        $akhlak</b>
    </td>
  </tr>";

    $sqlrangking = mysqli_query($kon, "insert into tbl_normal (ida, nama, nilai_rapor, piagam, poin_pelanggaran, akhlak) values ('$ida','$nama','$nilai','$piagam','$point','$akhlak')");


}  
echo "</table>";
echo "<br>";

// if($sql){
//     echo "Terkoneksi dengan MySQL Server <br>";
//     echo "Database $db bisa diakses";
//   }else{
//     echo "Koneksi Gagal Bro..";
//   }

//Looping Untuk menampilkan data (namabarang,jumlah,harga)

// echo "<div class='total'>";
// while($rkl = mysqli_fetch_array($sql)){
// 	echo "<big>total: $rkl[Total]</big>
// 	<br> <h3>pastikan total hasilnya 1</h3>";
	
	
// }	
echo "</div>";

/////////////////perengkingan
echo "<br>
<h2 class='h3k'>ALTERNATIF</h2>
    <table class='table1' border='1'>
  <tr>
	<th>no</th>
    <th>nama</th>
    <th>total nilai</th>

	
 
  </tr>";

$sqlnormal = mysqli_query($kon, "select * from tbl_normal order by nama");
//////
$sqlc = mysqli_query($kon, "select * from tbl_cadd where idc = '1'");
while($rmc1 = mysqli_fetch_array($sqlc)){

    $bobot1 = $rmc1["bobotc"];
}  
//
//////
$sqlc = mysqli_query($kon, "select * from tbl_cadd where idc = '2'");
while($rmc1 = mysqli_fetch_array($sqlc)){

    $bobot2 = $rmc1["bobotc"];
}  
//
//////
$sqlc = mysqli_query($kon, "select * from tbl_cadd where idc = '3'");
while($rmc1 = mysqli_fetch_array($sqlc)){

    $bobot3 = $rmc1["bobotc"];
}  
//
//////
$sqlc = mysqli_query($kon, "select * from tbl_cadd where idc = '4'");
while($rmc1 = mysqli_fetch_array($sqlc)){

    $bobot4 = $rmc1["bobotc"];
}  
//


$sqlnormal = mysqli_query($kon, "select * from tbl_normal order by nama");
while($sqlalt = mysqli_fetch_array($sqlnormal)){
    $v = ($bobot1*$sqlalt["nilai_rapor"])+($bobot2*$sqlalt["piagam"])+($bobot3*$sqlalt["poin_pelanggaran"])+($bobot4*$sqlalt["akhlak"]);
    echo "$v <br>";
  }
 
echo "</table>";




?>


<br>
<p></p>