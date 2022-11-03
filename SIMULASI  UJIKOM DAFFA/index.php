<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" 
    integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Halaman Admin</title>
    <link rel="stylesheet" href="index.css">
    <!doctype html>
<html lang="en">
</head>
<header>
<link rel="stylesheet" type="text/css" href="style.css">
            <div class="container">
            <a class="container-a" href="dashboard.php ">Home</a>
            <a class="container-a" href="tambah.php ">Tambah Data</a>
            <a class="container-a" href="logout.php ">Logut</a>
            </div>
    </header>

<body>


    <?php

        
        $db = new PDO("mysql:host=localhost;dbname=peduli_diri", 'root', '');
        $query = $db->query("SELECT * FROM catatam_perjalanan");
        // if(isset($_GET['caper'])){
        //     $urut = $_GET['caper'];
        //     $query =mysqli_query($db,"SELECT * FROM catatam_perjalanan order by '$urut' ASC" );}
        ?>
        <body style="background-color:pink;">
        <div class="container-sm">
        <table border="1" cellpadding="10" cellspacing="0" class="table table-bordered border-info">
            <tr>
                <th>Tanggal</th>
                <th>Waktu</th>
                <th>Lokasi</th>
                <th>Suhu Tubuh</th>
                <th>Id</th>
                <th>Aksi</th>
                
                
            </tr>

        <?php while($data = $query->fetch()): ?>
            <tr>
                <td><?= $data['tanggal'] ?></td>
                <td><?= $data['waktu'] ?></td>
                <td><?= $data['lokasi'] ?></td>
                <td><?= $data['suhutubuh'] ?>°C</td>
                <td><?= $data['id']?></td>
                <td class="aksi">
                    <a href="edit.php?id=<?= $data['id'] ?>"class="btn btn-info">Update</a>
                    <a href="proses_hapus.php?id=<?= $data['id'] ?>"class="btn btn-warning">Hapus</a>
                </td>
            </tr>
        <?php endwhile ?>

        </table>
        </div>

        <!-- FOOTER -->
        <div class="container">
            <span><marquee class="position-absolute top-50 start-50 translate-middle" width="50%" scrollamount="20"><b><a style="font-size :30px; border: 5px;"> WELCOME TO</a><a style="font-size :30px; border: 5px;" href="form.php">~Peduli_Diri~</a><a style="font-size :30px; border: 5px;"> </a></marquee></span>
        </div>
            <!-- FOOTER SELESAI -->
</body>
</html>