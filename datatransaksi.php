<?php
include 'koneksidatabase.php' ;
?>

<?php 
include 'header.php';
 ?>
  <div class="col-md-10 p-5 pt-2">
    <h3> <i class="fas fa-tint mr-2"></i></i>LAUNDRY </h3><hr>

         <a href="tambahlaundry.php" class="btn btn-primary mb-3"><i class="fas fa-plus-square mr-3"></i>TAMBAH DATA LAUNDRY</a>
          <table class="table table-striped table-bordered">
          <tr>
            <th scope="col">No</th>
            <th scope="col">ID TRANSAKSI</th>
            <th scope="col">TGL</th>
            <th scope="col">BERAT</th>
            <th scope="col">ID KARYAWAN</th>
             <th scope="col">JENIS</th>
             <th scope="col">TARIF</th>
            <th scope="col">TOTAL</th>
            <th  scope="col">Aksi</th>
          </tr>

          </table>
        </div>
   </div>
  </div>
</div>
  <!-- akhir navbar bawah -->
<?php

include'footer.php';
?>