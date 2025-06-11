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
            <form action="signup.php" method="POST">
                <h1>Buat Akun</h1>
                <label for="">Username</label>
                <input type="text" name="username" placeholder="username" required>
                <label for="">Password</label>
                <input type="password" name="password" placeholder="password" required>
                <button type="submit" name="syarif">Buat</button>
            </form>
        </div>
        <div class="form-container sign-in">
            <form action="login.php" method="POST">
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
                    <h1>Welcome Back!</h1>
                    <p>ganti untuk melihat fitur-fitur yang ada</p>
                    <button class="hidden" id="login">Sign In</button>
                </div>
            </div>
        </div>
        <div class="toggle-container">
            <div class="toggle">
                <div class="toggle-panel toggle-right">
                    <h1>Hello Pren!</h1>
                    <p>Masuk untuk melihat fitur-fitur yang ada</p>
                    <button class="hidden" id="register">Sign Up</button>
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