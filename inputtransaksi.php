<?php
include"koneksidatabase.php";

//Tampung/ambil data
$id_transaksi= $_POST["id_transaksi"];
$tgl= $_POST["tgl"];
$id_karyawan = $_POST["id_karyawan"];
$berat       =$_POST["berat"];
$jenis       =$_POST["jenis"];
$tarif        =$_POST["tarif"];
$total       =$_POST["berat"]  * $_POST["tarif"];
//proses simpan ke database
mysqli_query($koneksi,"INSERT  INTO transaksi VALUES('$id_transaksi','$tgl','$id_karyawan','$berat','$jenis','$tarif','$total')");

header("Location:transaksi.php");

 ?>ss

