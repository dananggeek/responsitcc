<?php
	include_once "koneksi.php";
	if(isset($_GET['kode'])){
		$kode=$_GET['kode'];
	$sql="delete from makul where kode_makul='$kode'";
	mysqli_query($kon,$sql);
	header ('location:hasil.php');
	};
?>