
<table border='1'>
	<tr>
		<th>kode_mk</th>
		<th>nama_mk</th>
		<th>semester</th>
		<th colspan='2'>proses</th>
	</tr>
	<?php
		include_once 'koneksi.php';
		$sql='select * from makul';
		$hasil=mysqli_query($kon,$sql);
		
		while($nilai=mysqli_fetch_array($hasil)){
		echo " <tr>
			<td>".$nilai['kode_makul']."</td>
			<td>".$nilai['nama_makul']."</td>
			<td>".$nilai['semester']."</td>
			<td><a href='ubah.php?kode=".$nilai['kode_makul']."'>Ubah</a></td>
			<td><a href='hapus.php?kode=".$nilai['kode_makul']."'>Hapus</td>
		</tr>";
		}
	?>
</table>