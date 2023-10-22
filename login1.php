<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel = "icon" type = "image/png" href = "https://as2.ftcdn.net/v2/jpg/04/49/08/29/1000_F_449082911_6ZdzRkrvCiMWc0NtKPssWj0F4INYF2Da.jpg">

    <title>Login Form</title>
    <link rel="stylesheet" href="./style.css">
    <link rel="stylesheet" href="./styles.css">
</head>
<body>
    <section>
    <div  style="background-image: url(https://img.freepik.com/free-photo/exploding-burger-with-vegetables-melted-cheese-black-background-generative-ai_157027-1734.jpg); background-attachment: fixed; height: 600px; width: 100%; background-position: center; background-repeat: no-repeat; background-size: cover;">
			<div class="overlay"></div>
        <div class="signin" style="background-color: #011f03b4;">
            <div class="content" >
                <img src="https://as2.ftcdn.net/v2/jpg/04/49/08/29/1000_F_449082911_6ZdzRkrvCiMWc0NtKPssWj0F4INYF2Da.jpg" width="100" height="100">
                <h2 style="color:blue;">Login In</h2>
                <div  class="form" >
                    <form action="login.php" method="POST">
                        <div class="inputBox">
                            <input type="text" name="username" required>
                            <i>Username</i><br><br><br>
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
