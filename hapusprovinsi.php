<?php
include"koneksidatabase.php";
?>
<?php 
include"header.php";
 ?>

<?php

if($_GET['hal']=="hapus"){
        $hapus=mysqli_query($koneksi,"DELETE FROM provinsi WHERE prov_id='$_GET[id]'" );
        if($hapus){
            echo"<script>
        alert('Hapus data sukses');
        document.location='provinsi.php';
        </script>";
        }
    }



?>