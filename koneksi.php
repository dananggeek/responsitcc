<?php
	error_reporting(E_ALL ^ E_DEPRECATED);
	$host="localhost";
	$user="root";
	$pass="";
	$dbName="krs";
	
	$kon=mysqli_connect($host,$user,$pass);
	if(!$kon)
	die("Gagal Koneksi...");
	
	$hasil=mysqli_select_db($kon,$dbName);
	if(!$hasil){
$hasil=mysqli_query($kon, "CREATE DATABASE $dbName");
if(!$hasil)
	die("Gagal Buat Dababase");
	else
		$hasil =mysqli_select_db($kon,$dbName);
		if(!$hasil) die ("Gagal Konek Database");
	}
	
	
$sqlmakul ="create table if not exists makul(
	kode_makul char(8) primary key,
	nama_makul varchar(30) not null,
	semester int(2) not null)";
	

mysqli_query ($kon,$sqlmakul) or die ("Gagal Buat Tabel Detail Jual");

?>