<?php
// this handeld the login check for the server
include('mysqlconnection.php'); 
?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Login</title>
<link rel="stylesheet" href="main.css">
</head>

<body>
<form action="websitelogin.php" method = "post">
        <label for="web_Username">Username</label> <input type="web_Username" id="web_Username" name="web_Username" placeholder="UserName" required><br>
        <label for="password">Password:</label> <input type="password" id="password" name="password" placeholder="Password" required><br>
        <button type = "submit">Login</button>
        <input type="checkbox" name="Stay_Logined_In" value="true"> Stay Logined In.<br>
    </form>

        <form action="register.php">
        <input type="submit" value="Not a member yet?" />
    </form>

    <form action="password_reset.php">
        <input type="submit" value="Forgot your password you goof?" />
    </form>
</body>
</html>