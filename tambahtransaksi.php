<?php
include"koneksidatabase.php";
?>

<?php 
include'header.php';
 ?>
  <div class="col-md-10 p-5 pt-2">
    <h3> <i class="fas fa-poll-h mr-2"></i>TRANSAKSI </h3><hr>

         <!-- form Transaksi -->
         <form action="inputtransaksi.php" method="post">
         <div class="form-group">
          <tr>
              <td>TANGGAL</td>
              <td>:</td>
              <td><input class="form-control" type="date" name="tgl"></td>
          </tr>
          <tr>
          <div class="form-group">
          <tr>
              <td>ID KARYAWAN</td>
              <select name="id_karyawan" class="custom-select">
              <?php 
              $query = mysqli_query($koneksi, "SELECT * FROM karyawan");
              $i = 1;
              while ($data = mysqli_fetch_array($query)):
              ?>
                <option value="<?= $data['id_karyawan']?>"><?= $data['id_karyawan']?></option>
              <?php endwhile; ?>
              </select>
             </div>
          </tr>
          <tr>
              <td>BERAT</td>
              <td>:</td>
              <td><input class="form-control" type="text" name="berat"></td>
          </tr>
          <tr>
          <td>JENIS</td>
          <select name="jenis" class="custom-select">
              <?php 
              $query = mysqli_query($koneksi, "SELECT * FROM laundry");
              $i = 1;
              while ($data = mysqli_fetch_array($query)):
              ?>
                <option value="<?= $data['jenis']?>"><?= $data['jenis']?></option>
              <?php endwhile; ?>
              </select>
          </tr>
          <tr>
          <td>tarif</td>
          <select name="tarif" class="custom-select">
              <?php 
              $query = mysqli_query($koneksi, "SELECT * FROM laundry");
              $i = 1;
              while ($data = mysqli_fetch_array($query)):
              ?>
                <option value="<?= $data['tarif']?>"><?= $data['tarif']?></option>
              <?php endwhile; ?>
              </select>
          </tr>
          <button type="submit" class="btn btn-primary">simpan</button>
        </div>
         <!-- akhir form -->
   </div>
  </div>
</div>
  <!-- akhir navbar bawah -->
    
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <?php 
include'footer.php';
 ?>
