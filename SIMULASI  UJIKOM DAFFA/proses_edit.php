<?php

$id =$_GET['id'];
$tanggal = $_POST['tanggal'];
$waktu = $_POST['waktu'];
$lokasi = $_POST['lokasi'];
$suhutubuh = $_POST['suhutubuh'];
// $id = $_POST['id'];

$db = new PDO("mysql:host=localhost;dbname=peduli_diri", 'root', '');
$query = $db->query("UPDATE `catatam_perjalanan` SET tanggal='$tanggal', waktu='$waktu', lokasi='$lokasi', suhutubuh='$suhutubuh' where id='$id'");

if($query){
    header("location:index.php");
}