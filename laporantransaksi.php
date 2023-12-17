<?php
include 'koneksidatabase.php' ;
?>

<?php 
include 'header.php';
 ?>
  <div class="col-md-10 p-5 pt-2">
    <h3> <i class="fas fa-tint mr-2"></i></i>Laporan Transaksi </h3><hr>
          <table class="table table-striped table-bordered">
          <tr>
            <th scope="col">No</th>
            <th scope="col">ID TRANSAKSI</th>
            <th scope="col">TGL</th>
            <th scope="col">BERAT</th>
            <th scope="col">ID KARYAWAN</th>
            <th scope="col">JENIS</th>
            <th scope="col">TARIF</th>
            <th  scope="col">TOTAL</th>
          </tr>
          <?php
             $no=1;
             $query=mysqli_query ($koneksi, "SELECT * FROM laundry ORDER BY id_laundry ASC");
               while($data=mysqli_fetch_array($query)):
              
            ?>
           <tr>
            <td><?=$no++;?></td>
            <td><?=$data['id_laundry']?></td>
            <td><?=$data['jenis']?></td>
            <td><?=$data['tarif']?></td>
            <td>
            <a href="" class="btn btn-warning">Edit</a>
            <a href="hapuslaundry.php?hal=hapus&id=<?=$data['id_laundry']?>"
            onclick="return confirm('apakah anda yakin ingin menghapus data ini?')" class="btn btn-danger">Hapus</a>
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