    <?php
    include'header.php';
    ?>
	 

 <div class="col-md-10 p-5 pt-2">
    <h3> <i class="fas fa-tint mr-2"></i>LAUNDRY</h3><hr>

         <!-- form LAUNDRY -->
         <form action="inputlaundry.php" method="post">
            <div class="jenis">
            <label>jenis :<br></label>
             <select class="custom-select custom-select-lg mb-3" name="jenis">
                    <option value="pakaian" class="jenis" >Pakaian</option>
                    <option value="sepatu"  class="jenis" >Sepatu</option>
                    <option value="karpet" class="jenis">karpet</option>
                    <option value="bad cover" class="jenis">bad cover</option>
                    <option value="selimut" class="jenis">Selimut</option>
                    <option value="lain-lain" class="jenis">Lain-lain</option>
              </select>
            </div>
          <div class="form-group">
				    <label for="tarif">TARIF :<br></label>
				    <input type="text" name="tarif" id="tarif">
				  </div>
        <button type="submit" class="btn btn-primary">Submit</button>
         <!-- akhir form -->
   </div>
  </div>
</table>




<?php
include'footer.php';
?>