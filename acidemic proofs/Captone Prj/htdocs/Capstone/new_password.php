<?php
include('mysqlconnection.php'); 
?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Reset Login</title>
<link rel="stylesheet" href="main.css">

</head>
<body>
<form action="new_password.php" method = "post">
<h2 class="form-title">New password</h2>
        <label for="email">Email</label> <input type="Email" id="pass_res_email" name="pass_res_email" placeholder="example@email.com" required><br><br>
        <label for="auth_code">Auth Code:</label> <input type="text" id="auth_code" name="auth_code" placeholder="0000" required><br>
        <label for="new_password">New Password:</label> <input type="password" id="new_password" name="new_password" placeholder="New Password" required><br>
        <label for="new_password_c">New Password Confirmation:</label> <input type="password" id="new_password_c" name="new_password_c" placeholder="Repet Password" required><br>
        <button type = "submit">Login</button>
	</form>
</body>
</html>
