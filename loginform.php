<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="loginpage/login.css">
</head>

<body>
    <div class="back">
        <center>
            <div class="wrapper">
                <div class="form_box_login"></div>
                <h2>LOGIN</h2>
                <div class="input-text">
                    <form action="login.php" method="post">
                        <span class="icon"></span>
                        <label>User Name</label>
                        <input type="text" id="email" name="uname" required />


                        <div class="input-text">
                            <span class="icon"></span>
                            <label>Password</label>
                            <input type="password" id="password" name="password" required />
                        </div>

                        <div class="remeber_forget">
                            <input type="checkbox">
                            <label>Remember me</label>
                            <a href="#">Forget password</a><br>
                        </div>
                        <button type="submit" class="login-btn btn-primary btn" name="login">Login</button><br>

                </div>
                </form>
                <div class="Login_register">
                    <a href="loginpage/signup.html" class="hover-link1 non-style-link">Sign Up</a>
                    <a href="loginpage/ignup.html" class="sub-class">Don't have an account?</a>
                </div>
            </div>

        </center>
    </div>
</body>

</html>