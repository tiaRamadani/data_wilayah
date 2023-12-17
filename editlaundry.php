<?php
include"koneksidatabase.php";
?>
<?php 
include"header.php";
 ?>
<?php 
  //menampung nilai parameter
  $id_laundry=$_GET["id_laundry"];
  
  $query=mysqli_query($koneksi,"SELECT * FROM laundry WHERE id_laundry=$id_laundry");
   $data=mysqli_fetch_array($query);
?>
<div class="col-md-10 p-5 pt-2">
    <h3> <i class="fas fa-table mr-2"></i></i>EDIT LAUNDRY</h3><hr>

         <!-- form KARYAWAN -->
         <form action="proseseditlaundry.php" method="post">
         <div class="form-group mt-3 pt-2">
				    <label for="id_laundry">ID LAUNDRY : </label>
				    <input type="text" name="id_laundry" value="<?=$data['id_laundry'];?>" id="id_laundry">
				  </div>
            <div class="form-group mt-3 pt-2">
				    <label for="jenis">JENIS  : </label>
				    <input type="text" name="jenis" value="<?=$data['jenis'];?>" id="jenis">
				  </div>
                  <div class="form-group">
				    <label for="tarif">tarif : </label>
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