<?php 
// koneksi database
include 'koneksiguru.php';
 
// menangkap data nuptk yang di kirim dari url
$nuptk = $_GET['nuptk'];
 
 
// menghapus data dari database
mysqli_query($koneksiguru,"delete from tbl_guru where nuptk='$nuptk'");
 
// mengalihkan halaman kembali ke index.php
header("location:guru.php");
 
?>