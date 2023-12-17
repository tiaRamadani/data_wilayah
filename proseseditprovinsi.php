
<?php
include"koneksidatabase.php";
include"header.php";


$prov_id=$_POST["prov_id"];
$prov_name=$_POST["prov_name"];
$ibukota=$_POST["ibukota"];
$status=$_POST["status"];


mysqli_query($koneksi,"UPDATE provinsi SET 
                prov_name='$prov_name',ibukota='$ibukota',status='$status' WHERE prov_id='$prov_id' ");
                header("Location:provinsi.php");
?>

<?php
include"footer.php";
?>