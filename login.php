<?php
session_start();

if(isset($_SESSION["login"]) ){
  header("Location:dashboard.php");
  exit;
}
 include 'koneksidatabase.php';
 

 if (isset($_POST['login'])) {
   $username = $_POST['username'];
   $password = $_POST['password'];


   $query = mysqli_query($koneksi, "SELECT * FROM login where username='$username' AND password='$password' ");
   $data = mysqli_fetch_assoc($query);

   if ($data['username'] == $username) {
     // $verify = password_verify($password, $data['password']);
     $verify = ($password == $data['password']);
     if ($verify) {
       $_SESSION['username']= $username;

       $_SESSION["login"]= true;

       header('location:dashboard.php');
     }
   }
 }
?>

<!DOCTYPE html>
<html>
<head>
<title></title>
<style type="text/css">
body { font-family: Verdana; font-size: 14px; background-color: #F7F7F7; }
input, button { padding: 7px; }
button { cursor: pointer; }
.container { background-color: #FFFFFF; border: 1px solid #000000; padding: 10px; width: 400px; margin: 0 auto; }
.container .form-control { margin-bottom: 10px; width: 100%; }
.container .form-control:last-child { margin-bottom: 0; }
.container .form-control input { width: 380px; }
.container .form-control button { width: 397px; }
.container .pesan { color: #FFFFFF; text-align: center; padding: 7px; background-color: #FF0000; font-weight: bold; }
</style>
</head>
<body>
<br><br><br><br><br><br><br><br><br><br><br>
<div class="container">
<h1><center> LOGIN</center></h1>
<hr />
<form action="" method="POST">
<div class="form-control">
  <input type="text" name="username" placeholder="Masukan username">
</div>
<div class="form-control">
  <input type="password" name="password" placeholder="Masukan password">
</div>
<div class="form-control">
  <button type="submit" name="login">LOGIN</button>
</div>
</body>
</html>