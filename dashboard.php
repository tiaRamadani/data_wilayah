<?php
session_start();
  if(!isset($_SESSION["login"])){
    header("Location: login.php");
  exit;
  }
  include"koneksidatabase.php";
  ?>
<?php 
  include"header.php";
 ?>
  <div class="col-md-10 p-5 pt-2 vh-100">
    <h3><i class="fas fa-tachometer-alt mr-2"></i>DASHBOARD</h3><hr>
<!-- Provinsi -->
    <div class="row text-white">
      <div class="card bg-info ml-5" style="width: 18rem;">
         <div class="card-body">
           <div class="card-body-icon">
           <i class="fas fa-table mr-2"></i>
      </div>
             <h5 class="card-title">Provinsi</h5>
             <?php $data=mysqli_num_rows(mysqli_query($koneksi,"SELECT* FROM provinsi")) ?>
          <div class="display-4"><?= $data ?></div>
        <a href="provinsi.php"><p class="card-text text-white">Lihat Detail <i class="fas fa-angle-double-right ml-2"></i></p></a> 
    </div>
  </div>
   <!-- Kecamatan-->
   <div class="card bg-info ml-5" style="width: 18rem;">
         <div class="card-body">
           <div class="card-body-icon">
           <i class="fas fa-table mr-2"></i>
         </div>
       <h5 class="card-title">Kota Dan Kabupaten </h5>
       <?php $data=mysqli_num_rows(mysqli_query($koneksi,"SELECT* FROM kota")) ?>
       <div class="display-4"><?= $data ?></div>
        <a href="kota.php"><p class="card-text text-white">Lihat Detail <i class="fas fa-angle-double-right ml-2"></i></p></a>  
    </div>
  </div>
   <!-- Akhir data -->

<!-- Kota -->
<span class="border-top"><br>
    <div class="card bg-info ml-5" style="width: 18rem;">
         <div class="card-body">
           <div class="card-body-icon">
           <i class="fas fa-table mr-2"></i>
           </div>
       <h5 class="card-title">Kecamatan</h5>
       <?php $data=mysqli_num_rows(mysqli_query($koneksi,"SELECT* FROM kecamatan")) ?>
       <div class="display-4"><?= $data ?></div>
        <a href="kecamatan.php"><p class="card-text text-white">Lihat Detail <i class="fas fa-angle-double-right ml-2"></i></p></a>  
    </div>
  </div>
  </span>
  <!-- Kelurahan-->
  <span class="border-top"><br>
  <div class="card bg-info ml-5" style="width: 18rem;">
         <div class="card-body">
           <div class="card-body-icon">
           <i class="fas fa-table mr-2"></i>
         </div>
       <h5 class="card-title">Kelurahan </h5>
       <?php $data=mysqli_num_rows(mysqli_query($koneksi,"SELECT * FROM kelurahan")) ?>
       <div class="display-4"><?= $data ?></div>
        <a href="kelurahan.php"><p class="card-text text-white">Lihat Detail <i class="fas fa-angle-double-right ml-2"></i></p></a>  
    </div>
  </div>
</span>
  
   <!-- Akhir data -->
  
</div>



<?php 
   include"footer.php";
?>