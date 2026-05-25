<?php
include "koneksi.php";

if(isset($_POST['submit'])){
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = $_POST['password'];

    $sql ="INSERT INTO tb_users(username,email,password) VALUES ('$username','$email','$password')";

    $query = mysqli_query($koneksi,$sql);
    echo "berhasil";
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>pendaftaran</title>
</head>
<body>
    <center>
        <h2>form pendaftaran</h2>
        <form action="daftar.php" method="POST">
            <input type ="text" name="username" placeholder="masukan nama"><br><br>
            <input type ="email" name="email" placeholder="masukan email"><br><br>
            <input type ="password" name="password" placeholder="masukan password"><br><br>
            <button type="submit" name="submit">Daftar</button>
        </from>
    </center>
</body>
</html>