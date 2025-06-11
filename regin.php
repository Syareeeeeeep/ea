<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
        <header>
        
        </header>
        <main>
            <div class="form-container sign-in">
                <div class="sign-up">
                    <h1>Buat Akun</h1>
                    <form action="signup.php" method="POST">
                        <label for="">Username</label>
                        <input type="text" name="username" placeholder="username">
                        <label for="">Password</label>
                        <input type="password" name="password" placeholder="password">
                        <button type="submit" name="syarif">Buat</button>
                    </form>
                </div>
            </div>
            <div class="form-container sign-up">
                <div class="login">
                    <h1>Login</h1>
                    <form action="login.php" method="POST">
                    <label for="">Username</label>
                    <input type="text" name="username" placeholder="username">
                    <label for="">Password</label>
                    <input type="password" name="password" placeholder="password">
                    <button type="submit" name="login">Masuk</button>
                </form>
                </div>
            </div>
            <div class="form-container kiri">
                <div class="divkiri">
                    <h1>Welcome Back!</h1>
                    <p>Masuk untuk melihat fitur-fitur yang ada</p>
                    <button class="hidden" id="login">Sign In</button>
                </div>
            </div>
            <div class="form-container kanan">
                <div class="divkanan">
                    <h1>Hello Pren!</h1>
                    <p>Masuk untuk melihat fitur-fitur yang ada</p>
                    <button class="hidden" id="signin">Login</button>
                </div>
            </div>
        </main>
    </div>
</body>
</html>