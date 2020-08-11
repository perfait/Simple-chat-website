<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>WebChat</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
    <div id="main">
        <div id = "info">
        <h2> login here </h2>

        <!--login form-->
        <form action="login.php" method="post">
        <label><b>Username</b></label>
        <input type="text" name="uname" placeholder="Username"><br><br>
        <label><b>Password</b></label>
        <input type="text" name="pass" placeholder="password"><br><br>
        <button style="background-color: #6495ed;color: white;" type="submit" size="40px"><b>Login</b>
        </button>

        </form>

        <!--sign up form-->
        <form action="signup.php" method="post">
        <h2>don't have an account? sign up here</h2>
        <label>Username:</label>
        <input type="text" name="uname" placeholder="Username"><br><br>
        <label>Add email:</label>
        <input type="text" name="Email" placeholder = "email"><br><br>
        <label> Password:</label>
        <input type="text" name="Password" placeholder = "Password"><br><br>
        <button style="background-color: #6495ed;color: white;" type="submit" size="40px"><b>Sign up</b>
        </button>
      

        </form>


        </div>
    </div>
</body>
</html>