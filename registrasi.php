<?php
include"koneksidatabase.php";

$username=$_POST["username"];
$password =$_POST["password"];
$password2=$_POST["password2"];

//cel konfirmasi fassword
if($password !== $password2){
    echo"
    <script>
    alert('konfirmasi password tidak sesuai! ');
    </script>";
    return false;
}
//enkripsi password

if(isset($_POST["register"])){
    if(registrasi($_POST) > 0){
        echo"<script>
            alert('User baru berhasil di tambahkan!');
        </script>";
    }else{
        echo mysqli_error($koneksi);
    }
}



?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Registrasi</title>
    <style>
        label{
            
            display : block;
        }
        li{
            align : center;
        }
    </style>
</head>
<body>
    <h1 align="center">Halaman Registrasi</h1>
    <form action="" method="post" align="center";>

    <ul>
        <li>
            <label for="username">Username : </label>
            <input type="text" name="username" id="username">
        </li>
        <li>
            <label for="password">Password : </label>
            <input type="password" name="password" id="password">
        </li>
        <li>
            <label for="password2"> konfinmasi Password : </label>
            <input type="password" name="password2" id="password2">
        </li>
        <li>
            <button type="submit" name="register">Daftar!</button>
        </li>
    </ul>
    
    </form>
</body>
</html>