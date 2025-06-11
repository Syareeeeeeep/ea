<?php

// include('koneksi.php');
// session_start();

// // $login_message = "";

// if(isset($_POST['login'])){
//     $username = $_POST['username'];
//     $password = $_POST['password'];

//     $sql = "SELECT * FROM user WHERE username='$username' AND password = '$password'" ;
//     $result = $db->query($sql);

//     if($result->num_rows > 0){
//         $data = $result->fetch_assoc();
//         $_SESSION['id'] = $data['id'];
//         $_SESSION['username'] = $data['username'];
//         $_SESSION['password'] = $data['password'];
//         $_SESSION['is_login'] = 'user';

//         header(" Location:/index.php");
//     } else {
//         echo "gagal";
//     }
// }



?>

<?php
    include("koneksi.php");
    session_start();

    $login_message = "";

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

            header("location: index.php");
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
    <title>Document</title>
</head>
<body>
    <header>
    
    </header>
    <main>
        <form action="login.php" method="POST">
            <label for="">Username</label>
            <input type="text" name="username" placeholder="username">
            <label for="">Password</label>
            <input type="password" name="password" placeholder="password">
            <button type="submit" name="login">Kirim</button>
        </form>
    </main>
</body>
</html>