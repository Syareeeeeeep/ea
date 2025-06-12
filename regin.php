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


if(isset($_POST["login"])) {
    $username = $_POST["username"];
    $password = $_POST["password"];
    $sql = "SELECT * FROM user WHERE username='$username' AND password='$password'";
    $result = $db->query($sql);
    if($result->num_rows > 0) {
        $data = $result->fetch_assoc();
        $_SESSION["id"] = $data["id"];
        $_SESSION["username"] = $data["username"];
        $_SESSION["password"] = $data["password"];
        $_SESSION["is_login"] = "users" ;
        header("location: index.html");
    }else{
        echo "gagal";
    }
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <div class="container" id="container">
        <div class="form-container sign-up">
            <form action="regin.php" method="POST">
                <h1>Buat Akun</h1>
                <label for="">Username</label>
                <input type="text" name="username" placeholder="username" required>
                <label for="">Password</label>
                <input type="password" name="password" placeholder="password" required>
                <button type="submit" name="syarif">Buat</button>
            </form>
        </div>
        <div class="form-container sign-in">
            <form action="regin.php" method="POST">
                <h1>Login</h1>
                <label for="">Username</label>
                <input type="text" name="username" placeholder="username" required>
                <label for="">Password</label>
                <input type="password" name="password" placeholder="password" required>
                <button type="submit" name="login">Masuk</button>
            </form>
        </div>

        <div class="toggle-container">
            <div class="toggle">
                <div class="toggle-panel toggle-left">
                    <h1>Hello Pren!</h1>
                    <p>Buat akun untuk mendaftarkan diri anda kedalam website</p>
                    <button class="hidden" id="login">Sign In</button>
                </div>
                <div class="toggle-panel toggle-right">
                    <h1>Welcome Back!</h1>
                    <p>Masuk untuk melihat fitur-fitur yang ada</p>
                    <button class="hidden" id="register">Sign Up</button>
                </div>
            </div>
        </div>
    </div>
    <!-- <div class="toggle">
                <div class="toggle-container kiri">
                    <div class="divkiri">
                        <h1>Welcome Back!</h1>
                        <p>Masuk untuk melihat fitur-fitur yang ada</p>
                        <button class="hidden" id="login">Sign In</button>
                    </div>
                </div>
                <div class="toggle-container kanan">
                    <div class="divkanan">
                        <h1>Hello Pren!</h1>
                        <p>Masuk untuk melihat fitur-fitur yang ada</p>
                        <button class="hidden" id="signin">Login</button>
                    </div>
                </div>
            </div> -->
    </div>
    <script src="script.js"></script>
</body>

</html>