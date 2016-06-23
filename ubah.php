<?php
	include_once "koneksi.php";
	if(isset($_GET['kode'])){
	$kode=$_GET['kode'];
	$lagi="select * from makul where kode_makul='$kode'";
	$query=mysqli_query($kon,$lagi);
	$diambil=mysqli_fetch_array($query);
echo "<form method='post'>
	<table>
		<tr>
			<td>Kode Matakuliah</td>
			<td><input type='text' name='kode' value='".$diambil['kode_makul']."'></td>
		</tr>
		<tr>
			<td>Nama Matakuliah</td>
			<td><input type='text' name='nama' value='".$diambil['nama_makul']."'></td>
		</tr>
		<tr>
			<td>Semester</td>
			<td><input type='text' name='semester' value='".$diambil['semester']."'></td>
		</tr>
		<tr>
			<td></td>
			<td><input type='submit' name='simpan' value='Ubah'>
			<input type='reset' value='Batal'></td>
		</tr>
	</table>
</form> ";
}
	if(isset($_POST['simpan'])){
	$kode=$_POST['kode'];
	$nama=$_POST['nama'];
	$semester=$_POST['semester'];
	
	$sql="update makul set kode_makul='$kode',nama_makul='$nama',semester='$semester' where kode_makul='$kode'";
	$hasil=mysqli_query($kon,$sql);
	if(!$hasil){
		echo "Gagal Simpan";
	}
	else{
		echo "Simpan Berhasil";
	}
	}
	
	
?>