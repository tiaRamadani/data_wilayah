
<?php
include"koneksidatabase.php";
include"header.php";


$id_transaksi= $_POST["id_transaksi"];
$tgl= $_POST["tgl"];
$id_karyawan = $_POST["id_karyawan"];
$berat       =$_POST["berat"];
$jenis       =$_POST["jenis"];
$tarif        =$_POST["tarif"];
$total       = $_POST["berat"] * $_POST["tarif"];


mysqli_query($koneksi,"UPDATE transaksi SET tgl='$tgl',
                id_karyawan='$id_karyawan',berat='$berat',jenis='$jenis',tarif='$tarif',
                total='$total'
                WHERE id_transaksi=$id_transaksi");

                header("Location:transaksi.php");

?>





<?php
include"footer.php";
?>