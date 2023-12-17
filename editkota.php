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
    <h3> <i class="fas fa-table mr-2"></i></i>EDIT KOTA</h3><hr>

         <!-- form EDIT KOTA -->
         <form action="proseseditkaryawan.php" method="post">
         <div class="form-group mt-3 pt-2">
				    <label for="city_id">ID KOTA  : </label>
				    <input type="text" name="city_id" value="<?=$data['city_id'];?>" id="">
				  </div>
            <div class="form-group mt-3 pt-2">
				    <label for="city_name">NAMA KOTA  : </label>
				    <input type="text" name="city_name" value="<?=$data['city_name'];?>" id="city_name">
				  </div>
              <div class="form-group">
				    <label for="prov_id">PROV ID : </label>
				    <input type="text" name="prov_id" value="<?=$data['prov_id'];?>" id="prov_id">
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