<?php
include('mysqlconnection.php'); 
?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Loading...</title>
<link rel="stylesheet" href="main.css">
</head>
<?php
// send user an email with their auth code
//then redirect them to the new password input form
echo "we will send your auth code to your the email entered, if it is regitered for an account";
echo "Well ths would be securly sent to your email using php-send-mail with email + expireing timestamps, but google kept blocking it.<br>";
echo "<br><a href='new_password.php'>Next</a>";

    
            
?>
</body>
</html>