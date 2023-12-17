
<?php
include"koneksidatabase.php";
include"header.php";


$id_laundry=$_POST["id_laundry"];
$jenis=$_POST["jenis"];
$tarif=$_POST["tarif"];


mysqli_query($koneksi,"UPDATE laundry SET jenis='$jenis',
                tarif='$tarif' WHERE id_laundry=$id_laundry");

                header("Location:laundry.php");

?>





<?php
include"footer.php";
?>