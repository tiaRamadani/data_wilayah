<?php
session_start();
if(!isset($_SESSION["login"])){
header("Location: login.php");
exit;
}
include 'koneksidatabase.php' ;
?>

<?php 
include 'header.php';
 ?>
   <div class="col-md-10 p-5 pt-2">
    <h3> <i class="fas fa-table mr-2"></i></i><Kbd>KECAMATAN</Kbd></h3><hr>

         <a href="tambahlaundry.php" class="btn btn-primary mb-3"><i class="fas fa-plus-square mr-3"></i>TAMBAH DATA KECAMATAN</a>
          <table class="table table-striped table-bordered">
          <tr>
            <th>ID KECAMATAN</th>
            <th>NAMA KECAMATAN</th>
            <th>DIS ID
            <th>Aksi</th>
          </tr>
          <?php
             $no=1;
             $query=mysqli_query ($koneksi, "SELECT * FROM kecamatan ORDER BY dis_id ASC");
               while($data=mysqli_fetch_array($query)):
              
            ?>
           <tr>
            <td><?=$data['dis_id']?></td>
            <td><?=$data['dis_name']?></td>
            <td><?=$data['city_id']?></td>
            <td>
            <a href="editlaundry.php?id_laundry=<?= $data['id_laundry']?>" class="btn btn-warning">Edit</a>
            <a href="hapuslaundry.php?hal=hapus&id=<?=$data['id_laundry']?>"
            onclick="return confirm('apakah anda yakin ingin menghapus data ini?')" class="btn btn-danger">Hapus</a>
            </td>
        </tr>
        <?php endwhile;// penutup perulangan while ?>
          </table>
        </div>
   </div>
  </div>
</div>
  <!-- akhir navbar bawah -->
<?php

include'footer.php';
?>