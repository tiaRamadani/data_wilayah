<?php
include"koneksidatabase.php";
?>
<?php 
include"header.php";
 ?>
<?php 
  //menampung nilai parameter
  $prov_id=$_GET["prov_id"];
  
  $query=mysqli_query($koneksi,"SELECT * FROM provinsi WHERE prov_id=$prov_id");
   $data=mysqli_fetch_array($query);
?>
<div class="col-md-10 p-5 pt-2">
    <h3> <i class="fas fa-table mr-2"></i></i>EDIT PROVINSI</h3><hr>

         <!-- form KARYAWAN -->
         <form action="proseseditprovinsi.php" method="post">
         <div class="form-group mt-3 pt-2">
				    <label for="">ID PROVINSI  : </label>
				    <input type="text" name="prov_id" value="<?=$data['prov_id'];?>" id="">
				  </div>
            <div class="form-group mt-3 pt-2">
				    <label for="prov_name">NAMA PROVINSI  : </label>
				    <input type="text" name="prov_name" value="<?=$data['prov_name'];?>" id="prov_name">
				  </div>
              <div class="form-group">
				    <label for="locationid">IBU KOTA : </label>
				    <input type="text" name="ibukota" value="<?=$data['ibukota'];?>" id="ibukota">
				  </div>
          <div class="form-group mt-3 pt-2">
				    <label for="status">STATUS : </label>
				    <input type="text" name="status" value="<?=$data['status'];?>" id="status">
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