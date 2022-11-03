<?php
 $tanggal = $_POST['tanggal'];
 $waktu = $_POST['waktu'];
 $lokasi = $_POST['lokasi'];
 $suhutubuh = $_POST['suhutubuh'];

 $database = new PDO("mysql:host=localhost;dbname=peduli_diri",'root','');
 $query = $database->query("insert into catatam_perjalanan values('$tanggal','$waktu','$lokasi','$suhutubuh','')");

 if($query){
    header("Location:index.php");
 }