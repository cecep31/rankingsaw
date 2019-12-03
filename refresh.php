<?php
$sqlalt = mysqli_query($kon, "delete from tbl_normal"); 
  if($sqlalt){
    echo "refresh...........";
  }else{
    echo "gagal";
  }
  echo "<META HTTP-EQUIV='Refresh' Content='1; URL=/rankingsaw'>";

  ?>