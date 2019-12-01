<?php
$sqlm = mysqli_query($kon, "delete from tbl_alt where ida='$_GET[ida]'");
if($sqlm){
  echo "Data Berhasil Dihapus";
}else{
  echo "Gagal Menghapus";
}
echo "<META HTTP-EQUIV='Refresh' Content='1; URL=/rankingsaw'>";
?>