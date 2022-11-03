<?php
$id = $_GET['id'];

$db = new PDO("mysql:host=localhost;dbname=peduli_diri", 'root', '');
$query = $db->query("DELETE FROM `catatam_perjalanan` WHERE id='$id'");

if($query){
    header("location:index.php");
}