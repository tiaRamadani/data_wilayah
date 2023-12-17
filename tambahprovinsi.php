    <?php
include"koneksidatabase.php";
?>
<?php 
include"header.php";
 ?>

<div class="col-md-10 p-5 pt-2">
    <h3> <i class="fas fa-table mr-2"></i></i>TAMBAH PROVINSI</h3><hr>

         <!-- form KARYAWAN -->
         <form action="inputdata.php" method="post">
				  <div class="form-group">
                  <div class="form-group mt-3 pt-2">
				    <label for="prov_name">Nama Provinsi  : <br>   </label>
				    <input type="text" name="prov_name" id="prov_name">
				  </div>
                  <div class="form-group">
				    <label for="ibukota">IBU KOTA  :<br> </label>
				    <input type="text" name="locationid" id="locationid">
				  </div>
          <div class="form-group">
				    <label for="status">STATUS :<br> </label>
				    <input type="text" name="status" id="status">
				  </div>

				  <button type="submit" class="btn btn-primary" name="submit">Simpan</button>
                  <button type="reset" class="btn btn-danger" name="breset">Kosongkan</button>
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