<?php
include"koneksidatabase.php";

//Tampung/ambil data
$prov_id= $_POST["prov_id"];
$nama_provinsi= $_POST["prov_name"];
$ibukota= $_POST["ibukota"];
$status=$_POST["status"];
//proses simpan ke database
mysqli_query($koneksi,"INSERT  INTO provinsi VALUES ('$prov_id','$nama_provinsi','$ibukota','$status')");

header("Location:provinsi.php");

 ?>
