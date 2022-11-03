<!DOCTYPE html style ="width:100;">
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css">
    <title>admin page</title>
     <!-- custum css file link -->
     <link rel="stylesheet" href="register.css">
</head>
<style>
    body{
        background-image: url('https://images8.alphacoders.com/454/454579.jpg');
        background-repeat: no-repeat;
    }
</style>
<body>
    
<div class="form-container py-auto d-flex justify-content-center algin-items-center h-100"> 
    <form action="proses_register.php"method="post">
        <h3>register now</h3>
        <input type="nama" name="nama" required placeholder= "enter your name">
        <input type="password" name="password" required placeholder= "enter your password">
        <input type="submit" name="submit" value="register now" class="form-btn">
        <p>already have an account?<a href="login.php">login now</a></p>
</form>
</div>
</body>
</html>