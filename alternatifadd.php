<br>
<h3 style="padding-left: 10%; color: rgb(58, 143, 115);">tambah alternatif</h3><br>
	<form action="" method="post" class="asik">		
		<table>
			<tr>
				<td width="130">Nama</td>
				<td width="146"><input type="text" name="nama" id="nama"></td>					
			</tr>	
			<tr>
				<td>nilai rapor</td>
				<td><input type="text" name="nilai_rapor" id="nilai_rapor"></td>					
            </tr>
            <tr>
				<td>piagam</td>
				<td><input type="text" name="piagam" id="piagam"></td>					
            </tr>
            <tr>
				<td>point pelanggaran</td>
				<td><input type="text" name="point_pelanggaran" id="point_pelanggaran"></td>					
            </tr>
            <tr>
				<td>akhlak(rata-rata BK&PAI)</td>
				<td><input type="text" name="akhlak" id="akhlak"></td>					
            </tr>
            	
			<tr>
				
				<td align="center" colspan="2"><input type="submit" name="simpan" id="simpan" value="TAMBAH" /></td>					
			</tr>				
		</table>
    </form>
<?php
    if( isset($_POST["simpan"])){
  $sqladd = mysqli_query($kon, "insert into tbl_alt (nama, nilai_rapor, piagam, point_pelanggaran, akhlak) values ('$_POST[nama]', '$_POST[nilai_rapor]', '$_POST[piagam]', '$_POST[point_pelanggaran]', '$_POST[akhlak]')"); 
  if($sqladd){
    echo "Data Berhasil Disimpan";
  }else{
    echo "gagal";
  }
  echo "<META HTTP-EQUIV='Refresh' Content='1; URL=/rankingsaw'>";
}

?>  
   