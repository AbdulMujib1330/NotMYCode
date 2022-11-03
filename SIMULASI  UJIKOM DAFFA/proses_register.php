<?php
include("koneksi.php");

$nama = $_REQUEST['nama'];
$password = $_REQUEST['password'];

$query = $db->query("INSERT INTO akun VALUES('$nama','$password')");


header("Location:login.php");

?>