<form method='post'>
	<table>
		<tr>
			<td>Kode Matakuliah</td>
			<td><input type='text' name='kode'></td>
		</tr>
		<tr>
			<td>Nama Matakuliah</td>
			<td><input type='text' name='nama'></td>
		</tr>
		<tr>
			<td>Semester</td>
			<td><input type='text' name='semester'></td>
		</tr>
		<tr>
			<td></td>
			<td><input type='submit' name='simpan' value='Simpan'>
			<input type='reset' value='Batal'></td>
		</tr>
	</table>
</form>

<?php
	include_once "koneksi.php";
	if(isset($_POST['simpan'])){
	$kode=$_POST['kode'];
	$nama=$_POST['nama'];
	$semester=$_POST['semester'];
	
	$sql="insert into makul values ('$kode','$nama','$semester')";
	$hasil=mysqli_query($kon,$sql);
	if(!$hasil){
		echo "Gagal Simpan";
	}
	else{
		echo "Simpan Berhasil";
	}
	}
	
	
?>
