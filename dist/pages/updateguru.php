<?php 
// koneksi database
include 'koneksiguru.php';
 
// menangkap data yang di kirim dari form
$nuptk = $_POST['nuptk'];
$nama = $_POST['nama'];
$golongan = $_POST['golongan'];
$jenis_kelamin = $_POST['jenis_kelamin'];
 
// update data ke database
mysqli_query($koneksiguru,"update tbl_guru set nama='$nama', golongan='$golongan', jenis_kelamin='$jenis_kelamin' where nuptk='$nuptk'");
 
// mengalihkan halaman kembali ke index.php
header("location:guru.php");
 
?>