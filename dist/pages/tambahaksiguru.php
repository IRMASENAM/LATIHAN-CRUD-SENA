<?php 
// koneksi database
include 'koneksiguru.php';
 
// menangkap data yang di kirim dari form
$nuptk = $_POST['nuptk'];
$nama = $_POST['nama'];
$golongan = $_POST['golongan'];
$jenis_kelamin = $_POST['jenis_kelamin'];
 
// menginput data ke database
mysqli_query($koneksiguru,"insert into tbl_guru(nuptk,nama,golongan,jenis_kelamin) values('$nuptk','$nama','$golongan','$jenis_kelamin')");
 
// mengalihkan halaman kembali ke index.php
header("location:guru.php");
 
?>