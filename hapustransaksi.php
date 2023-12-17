<?php
include"koneksidatabase.php";
?>
<?php 
include"header.php";
 ?>

<?php
if($_GET['hal']=="hapus"){
        $hapus=mysqli_query($koneksi,"DELETE FROM transaksi WHERE id_transaksi='$_GET[id]'" );
        if($hapus){
            echo"<script>
        alert('Hapus data sukses');
        document.location='transaksi.php';
        </script>";
        }else{
            echo"<script>
        alert('Hapus data gagal');
        document.location='hapustransaksi.php';
        </script>";
        }
    }
?>