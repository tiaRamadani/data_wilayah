<?php
include"koneksidatabase.php";
?>
<?php 
include"header.php";
 ?>

<?php
if($_GET['hal']=="hapus"){
        $hapus=mysqli_query($koneksi,"DELETE FROM laundry WHERE id_laundry='$_GET[id]'" );
        if($hapus){
            echo"<script>
        alert('Hapus data sukses');
        document.location='laundry.php';
        </script>";
        }else{
            echo"<script>
        alert('Hapus data gagal');
        document.location='hapuslaundry.php';
        </script>";
        }
    }
?>