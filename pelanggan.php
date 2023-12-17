<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="asset/css/bootstrap.min.css">
    <link rel="stylesheet" href="asset/font/all.min.css">
    <link rel="stylesheet" href="admin.css">
    <title>Hello, world!</title>
  </head>
  <body>
  <!-- Navbar -->
  <nav class="navbar navbar-expand-lg navbar-info bg-info fixed-top">
  <a class="navbar-brand text-light" href="#">Laundry | Ramadani</a>
    <form class="form-inline my-2 my-lg-0 ml-auto">
      <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
    </form>
    <div class="icon ml-4">
    <h5>
    <i class="fas fa-envelope mr-3" data-toggle="tooltip" title="Surat Masuk"></i>
    <i class=" fas fa-bell mr-3" data-toggle="tooltip" title="notification"></i>
    <i class=" fas fa-sign-out-alt mr-3" data-toggle="tooltip" title="Sign out"></i>
    </h5>
    </div>
  </div>
</nav>
  <!-- Akhir navbar -->
  <!-- Navbar bawah -->
  <div class="row no-gutters mt-5"> 
      <div class="col-md-2 bg-dark mt-2 pr-3 pt-4">
        <ul class="nav flex-column ml-3 mb-5">
          <li class="nav-item">
            <a class="nav-link active text-white" href="admin.php"><i class="fas fa-tachometer-alt mr-2"></i>Dashbord</a><hr class="bg-secondary">
          </li>
            <li class="nav-item">
            <a class="nav-link active text-white" href="karyawan.php"><i class="fas fa-male mr-2"></i>Karyawan</a><hr class="bg-secondary">
            </li>
             <li class="nav-item">
                <a class="nav-link active text-white" href="pelanggan.php"><i class="fas fa-male mr-2"></i>Pelanggan</a><hr class="bg-secondary">
            </li>
            <li class="nav-item">
                <a class="nav-link active text-white" href="paket.php"><i class="fas fa-archive mr-2"></i>Paket</a><hr class="bg-secondary">
            </li>
            <li class="nav-item">
             <a class="nav-link active text-white" href="transaksi.php"><i class="fas fa-poll-h mr-2"></i>Transaksi</a><hr class="bg-secondary">
           </li>
        </ul>
      </div>
  <div class="col-md-10 p-5 pt-2">
    <h3> <i class="fas fa-table mr-2"></i></i>Data Pelanggan</h3><hr>

         <a href="" class="btn btn-primary mb-3"><i class="fas fa-plus-square mr-3"></i>TAMBAH DATA PELANGGAN</a>
          <table class="table table-striped table-bordered">
          <thead>
          <tr>
            <th scope="col">No</th>
            <th scope="col">ID PELANGGAN</th>
            <th scope="col">NAMA PELANGGAN</th>
            <th scope="col">NO TELP</th>
            <th scope="col">ALAMAT</th>
            <th colspan="3" scope="col">Aksi</th>
          </tr>
          </thead>
          <tbody>
          <tr>
            <th scope="row">1</th>
            <td>56</td>
            <td>Haba</td>
            <td>0853434</td>
            <td>Salopa</td>
            <td><a href="" class="btn btn-primary">Detail</a></td>
            <td><i class="fas fa-edit" data-toggle="tooltip" title="Edit"></i></td>
            <td><i class="fas fa-trash-alt" data-toggle="tooltip" title="Delete"></i></td>
          </tr>
          
          <tr>
            <th scope="row">2</th>
            <td>57</td>
            <td>Habi</td>
            <td>0853434</td>
            <td>Taraju</td>
            <td><a href="" class="btn btn-primary">Detail</a></td>
            <td><i class="fas fa-edit" data-toggle="tooltip" title="Edit"></i></td>
            <td><i class="fas fa-trash-alt" data-toggle="tooltip" title="Delete"></i></td>
          </tr>
         
          <tr>
            <th scope="row">3</th>
            <td>58</td>
            <td>Habu</td>
            <td>0853434</td>
            <td>Tangerang</td>
            <td><a href="" class="btn btn-primary">Detail</a></td>
            <td><i class="fas fa-edit" data-toggle="tooltip" title="Edit"></i></td>
            <td><i class="fas fa-trash-alt" data-toggle="tooltip" title="Delete"></i></td>
          </tr>
         

         
          </tbody>
          </table>
   </div>
  </div>
</div>
  <!-- akhir navbar bawah -->
    
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="asset/js/jquery-3.3.1.slim.min.js"></script>
    <script src="asset/js/popper.min.js"></script>
    <script src="asset/js/bootstrap.min.js"></script>
    <script src="asset/font/all.min.js"></script>
    <script src="admin.js"></script>
  </body>
</html>