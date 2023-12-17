<?php
include"koneksidatabase.php";
?>
<?php 
include"header.php";
 ?>
<?php 
  //menampung nilai parameter
  $id_transaksi=$_GET["id_transaksi"];
  
  $query=mysqli_query($koneksi,"SELECT * FROM transaksi WHERE id_transaksi=$id_transaksi");
   $data=mysqli_fetch_array($query);
?>
<div class="col-md-10 p-5 pt-2">
    <h3> <i class="fas fa-table mr-2"></i></i>EDIT Transaksi</h3><hr>

         <!-- form KARYAWAN -->
         <form action="prosesedittransaksi.php" method="post">
         <div class="form-group mt-3 pt-2">
				    <label for="">ID TRANSAKSI : </label>
				    <input type="text" name="id_transaksi" value="<?=$data['id_transaksi'];?>" id="">
				  </div>
            <div class="form-group mt-3 pt-2">
				    <label for="tgl">TGL  : </label>
				    <input type="text" name="tgl" value="<?=$data['tgl'];?>" id="">
				  </div>
                  <div class="form-group">
				    <label for="no_telp mt-6 pt-2">ID KARYAWAN  : </label>
				    <input type="text" name="id_karyawan" value="<?=$data['id_karyawan'];?>" >
				  </div>
                  <div class="form-group">
				    <label for="no_telp mt-6 pt-2">BERAT  : </label>
				    <input type="text" name="berat" value="<?=$data['berat'];?>" >
				  </div>
                  <div class="form-group">
				    <label for="no_telp mt-6 pt-2">JENIS  : </label>
				    <input type="text" name="jenis" value="<?=$data['jenis'];?>" >
				  </div>
                  <div class="form-group">
				    <label for="no_telp mt-6 pt-2">TARIF : </label>
				    <input type="text" name="tarif" value="<?=$data['tarif'];?>" >
				  </div>
		<button type="submit" class="btn btn-warning" name="edit" value="edit">Edit</button>
        
		</form>
        
         <!-- akhir form -->
   </div>
  </div>
</div>
	
</table>
</div>


<?php
include'footer.php';
?>