<?php
 session_start();

    $nama = $_POST['nama'];
    $password = $_POST['password'];
    


 $koneksi = new PDO('mysql:host=localhost;dbname=peduli_diri','root','');

  $query = $koneksi->query("select * from akun where nama='$nama' AND password='$password'");
  $data = $query->fetch();
  if($query->rowCount() > 0){
       if($data['role']=="admin"){
        $_SESSION['nama'] = $nama;
        header("Location:index.php");
       }
 }else{
   header("Location:form.php");
 }