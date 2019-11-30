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
				<td><input type="text" name="nilai" id="nilai"></td>					
            </tr>
            <tr>
				<td>piagam</td>
				<td><input type="text" name="piagam" id="piagam"></td>					
            </tr>
            <tr>
				<td>point pelanggaran</td>
				<td><input type="text" name="point" id="point"></td>					
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
  $sqlalt = mysqli_query($kon, "insert into tbl_alt (nama, nilai_rapor, piagam, poin_pelanggaran,akhlak) values ('$_POST[nama]','$_POST[nilai]','$_POST[piagam]','$_POST[point]','$_POST[akhlak]')"); 
  if($sqlalt){
    echo "Data Berhasil Disimpan";
  }else{
    echo "gagal";
  }
  echo "<META HTTP-EQUIV='Refresh' Content='1; URL=/rankingsaw'>";
}

?>  
   