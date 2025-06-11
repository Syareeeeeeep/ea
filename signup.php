<?php

include("koneksi.php");
session_start();

$signup_message = '';

if(isset($_POST["syarif"])){
    $username = $_POST["username"];
    $password = $_POST["password"];

    $sql = "INSERT INTO user (username, password) VALUES ('$username', '$password')";

    if($db->query($sql)){
        $signup_message = "berhasil";
        echo "berhasil";
    }else {
        $signup_message = "gagal";
        echo "gagal";
    }
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <header>
    
    </header>
    <main>
        <form action="signup.php" method="POST">
            <label for="">Username</label>
            <input type="text" name="username" placeholder="username" required>
            <label for="">Password</label>
            <input type="password" name="password" placeholder="password" required>
            <button type="submit" name="syarif">Kirim</button>
        </form>
    </main>
</body>
</html>