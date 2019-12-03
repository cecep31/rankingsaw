<br>
<?php
$sqlm = mysqli_query($kon, "select * from tbl_alt where ida='$_GET[ida]'");
$rm = mysqli_fetch_array($sqlm);
?>
<h3 style="padding-left: 10%; color: rgb(58, 143, 115);">Edit alternatif</h3><br>
	<form action="" method="post" class="asik">		
		<table>

			<tr>
				<td width="130">Nama</td>
				<td width="146"><input type="text" name="nama" id="nama" value="<?php echo "$rm[nama]"; ?>"></td>					
			</tr>	
			<tr>
				<td>nilai rapor</td>
				<td><input type="text" name="nilai" id="nilai" value="<?php echo "$rm[nilai_rapor]"; ?>"></td>					
            </tr>
            <tr>
				<td>piagam</td>
				<td><input type="text" name="piagam" id="piagam" value="<?php echo "$rm[piagam]"; ?>"></td>					
            </tr>
            <tr>
				<td>point pelanggaran</td>
				<td><input type="text" name="point" id="point" value="<?php echo "$rm[poin_pelanggaran]"; ?>"></td>					
            </tr>
            <tr>
				<td>akhlak(rata-rata BK&PAI)</td>
				<td><input type="text" name="akhlak" id="akhlak" value="<?php echo "$rm[akhlak]"; ?>"></td>					
            </tr>
            	
			<tr>
				
				<td align="center" colspan="2"><input type="submit" name="simpan" id="simpan" value="UBAH" /></td>					
            </tr>	
            
            
		</table>
    </form>
<?php

if( isset($_POST["simpan"])){
  $sqlalt = mysqli_query($kon, "update tbl_alt set nama='$_POST[nama]', nilai_rapor='$_POST[nilai]', piagam='$_POST[piagam]', poin_pelanggaran='$_POST[point]', akhlak='$_POST[akhlak]' where ida='$_GET[ida]'"); 
  if($sqlalt){
    echo "Data Berhasil Disimpan";
  }else{
    echo "gagal";
  }
  echo "<META HTTP-EQUIV='Refresh' Content='1; URL=/rankingsaw'>";
}

?>  
   