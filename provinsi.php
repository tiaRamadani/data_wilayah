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
    <h3> <i class="fas fa-table mr-2"></i></i>DAFTAR PROVINSI</h3><hr>

         <a href="tambahprovinsi.php" class="btn btn-primary mb-3"><i class="fas fa-plus-square mr-3"></i>TAMBAH DATA PROVINSI</a> <br>
          <table class="table table-bordered table-striped">
          <tr class="karyawan">
            <th>ID PROVINSI</th>
            <th>NAMA PROVINSI</th>
            <th>IBU KOTA</th>
            <th>STATUS</th>
            <th>Aksi</th>
          </tr>
             <?php
             $no=1;
             $query=mysqli_query ($koneksi, "SELECT * FROM provinsi ORDER BY prov_id ASC");
               while($data=mysqli_fetch_array($query)):
              
            ?>
           <tr>
            <td><?=$data['prov_id']?></td>
            <td><?=$data['prov_name']?></td>
            <td><?=$data['ibukota']?></td>
            <td><?=$data['status']?></td>
            <td>
            <a href="editprovinsi.php?prov_id=<?= $data['prov_id']?>" class="btn btn-warning">Edit</a>
            <a href="hapusprovinsi.php?hal=hapus&id=<?=$data['prov_id']?>"
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