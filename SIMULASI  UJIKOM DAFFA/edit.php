<?php 
// $lokasi = $_GET['lokasi'];
// $database = new PDO("mysql:host=localhost;dbname=peduli_diri", 'root', '');
// $query = $database->query("SELECT * FROM catatam_perjalanan WHERE lokasi=$lokasi");
// $data = $query->fetch();
$id =$_GET['id'];
$db = new PDO("mysql:host=localhost;dbname=peduli_diri", 'root', '');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" 
    integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Update</title>
</head>
<body>
<body style="background-color:pink;">
    <div class="container-sm">
    <form action="proses_edit.php?id=<?= $id ?>" method="post">
        <input type="hidden" name="id" value="<?= $id ?>">
        <div>
            <label>Tanggal</label>
            <input type="date" name="tanggal" value="<?= $data['tanggal'] ?>"class="form-control" id="floatingInput">
        </div>
        <div>
            <label>Waktu</label>
            <input type="time" name="waktu" value="<?= $data['waktu'] ?>"class="form-control" id="floatingInput">
        </div>
        <div>
            <label>Lokasi</label>
            <input type="text" name="lokasi" class="form-control" id="floatingInput">
        </div>
        <div>
            <label>Suhu Tubuh</label>
            <input type="text" name="suhutubuh" value=""class="form-control" id="floatingInput">
        </div>
        <div>
            
            
            
        <button type="submit" class="btn btn-info">Simpan</button>
    </form>
    </div>
</body>
</html>     