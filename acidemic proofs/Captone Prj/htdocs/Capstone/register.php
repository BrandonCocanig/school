<?php include('mysqlconnection.php'); ?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Login</title>
<link rel="stylesheet" href="main.css">
</head>


<form action="register.php" method = "post">
        <label for="email">Email</label> <input type="Email" id="email" name="email" required><br><br>
        <label for="email">Confirmation Email</label> <input type="email" id="confirmation_email" name="confirmation_email" required><br><br>

        <label for="username">Username</label> <input type="username" id="username" name="username" required><br><br>

        <label for="password">Password:</label> <input type="password" id="password" name="password" required><br><br>
        <label for="password">Confirmation Password:</label> <input type="password" id="confirmation_password" name="confirmation_password" required><br><br>


        <button type = "submit">sumbit</button>
    </form>

        <form action="websitelogin.php">
        <input type="submit" value="Already have an Account?" />
    </form>

    <form action="password_reset.php">
        <input type="submit" value="Forgot your password you goof?" />
    </form>


<body>
</body>
</html>