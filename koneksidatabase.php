<?php 
$host='localhost';
$username="root";
$password="";
$db="wilayah";

$koneksi=new mysqli($host,$username,$password,$db);
// cek koneksi
if($koneksi->connect_errno){
echo"Gagal".$koneksi->connect_errno;
 }
 ;
