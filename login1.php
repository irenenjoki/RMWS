<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Login Form</title>
    <link rel="stylesheet" href="./style.css">
    <link rel="stylesheet" href="./styles.css">
</head>
<body>
    <section>
        <div class="signin">
            <div class="content">
                <img src="https://as2.ftcdn.net/v2/jpg/04/49/08/29/1000_F_449082911_6ZdzRkrvCiMWc0NtKPssWj0F4INYF2Da.jpg" width="100" height="100">
                <h2>Login In</h2>
                <div class="form">
                    <form action="login.php" method="POST">
                        <div class="inputBox">
                            <input type="text" name="username" required>
                            <i>Username</i><br><br>
                        </div>
                        <div class="inputBox">
                            <input type="password" name="password" required>
                            <i>Password</i><br><br>
                        </div>
                        <div class="links">
                            <a href="signup1.php">Forgot Password</a>
                            <a href="signup1.php">Signup</a><br><br>
                        </div>
                        <div class="inputBox">
                            <input type="submit" value="Login">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
</body>
</html>
