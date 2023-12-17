<?php
session_start();
if(!isset($_SESSION["login"])){
header("Location: login.php");
exit;
}
include"koneksidatabase.php";
?>

<?php 
include 'header.php';
 ?>
  <div class="col-md-10 p-5 pt-2">
    <h3> <i class="fas fa-table mr-2"></i></i>DAFTAR KELURAHAN</h3><hr>

         <a href="tambahtransaksi.php" class="btn btn-primary mb-3"><i class="fas fa-plus-square mr-3"></i>TAMBAH DATA KELURAHAN</a> <br>
          <table class="table table-bordered table-striped">
          <tr class="kecamatan">
          <th scope="col">ID KELURAHAN</th>
            <th scope="col">NAMA KELURAHAN</th>
            <th scope="col">ID KOTA</th>
            <th  scope="col">Aksi</th>
          </tr>
             <?php
             $no=1;
             $query=mysqli_query ($koneksi, "SELECT * FROM kelurahan ORDER BY subdis_id ASC");
               while($data=mysqli_fetch_array($query)):
              
            ?>
           <tr>
            <td><?=$data['subdis_id']?></td>
            <td><?=$data['subdis_name']?></td>
            <td><?=$data['dis_id']?></td>
            <td>
            <a href="edittransaksi.php?id_transaksi=<?= $data['id_transaksi']?>" class="btn btn-warning">Edit</a>
            <a href="hapustransaksi.php?hal=hapus&id=<?=$data['id_transaksi']?>"
            onclick="return confirm('apakah anda yakin ingin menghapus data ini?')" class="btn btn-danger">Hapus</a>
            </td>
        </tr>
        <?php endwhile;// penutup perulangan while ?>
          </table>
   </div>
 </div>

 <!-- logo book
<i class="fas fa-book"></i>
  -->
  <!-- akhir navbar bawah --> 
  <?php 
  include'footer.php';
   ?>
