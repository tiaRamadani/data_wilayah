<?php
include"koneksidatabase.php";

//Tampung/ambil data
$id_laundry= $_POST["id_laundry"];
$jenis= $_POST["jenis"];
$tarif= $_POST["tarif"];
//proses simpan ke database
mysqli_query($koneksi,"INSERT  INTO laundry VALUES ('$id_laundry','$jenis','$tarif') ");

header("Location:laundry.php");

 ?>