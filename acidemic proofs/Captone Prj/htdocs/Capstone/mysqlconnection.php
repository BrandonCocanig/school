<?php
//The login for the php server.
    $servername = "localhost";
    $sqlusername = "websiteadmin";
    $sqlpassword = "admin";
    $dbname = "authentication";
    $errors = []; // this is so we can store error codes
    // Create connection for easy use
    $conn = new mysqli($servername, $sqlusername, $sqlpassword, $dbname);


//user is trying to login (websitelogin.php)
if (isset($_POST['web_Username'])) {
    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
        echo "<script>";
        echo "Command: toastr['Error']('Error', 'Failed to connect to server, please contact support')";
        echo "</script>";
    }
    // echo "Connected successfully";
        //grab the post data and secure it
        $username = mysqli_real_escape_string($conn, $_POST['web_Username']);
        $password = mysqli_real_escape_string($conn, $_POST['password']);

        //validate the data too
        if (empty($username)) array_push($errors, "Username is required");
        if (empty($password)) array_push($errors, "Password is required");

        //now check for any errors, if none keep going
        if (count($errors) == 0) {
            
            $options = [
                'cost' => 10,
            ];
            $sql = "SELECT Username, Password FROM users WHERE username = ?";
        
            if($stmt = mysqli_prepare($conn, $sql)){
                // Bind variables to the prepared statement as parameters
                mysqli_stmt_bind_param($stmt, "s", $param_username);
                
                // Set parameters
                $param_username = $username;
                
                // Attempt to execute the prepared statement
                if(mysqli_stmt_execute($stmt)){
    
                    // Store result
                    mysqli_stmt_store_result($stmt);
                    
                    // Check if username exists, if yes then verify password
                    if(mysqli_stmt_num_rows($stmt) == 1){
    
                        // Bind result variables
                        mysqli_stmt_bind_result($stmt, $username, $hashed_password);
                        if(mysqli_stmt_fetch($stmt)){
                            if(password_verify($password, $hashed_password)){
    
                                // Password is correct, so start a new session
                                session_start();
                                
                                // Store data in session variables
                                $_SESSION["loggedin"] = true;
                                $_SESSION["id"] = $id;
                                $_SESSION["username"] = $username;  
                                $_SESSION['user_id'] = $user->ID;                          
                                
                                // Redirect user to welcome page
                                header("location: ./index.php");
                            } else{
                                // Display an error message if password is not valid
                                array_push($errors, "The password you entered was not valid.");
                            }
                        }
                    } else{
                        // Display an error message if username doesn't exist
                        array_push($errors, "No account found with that username.");
                        header("websitelogin.php");

                    }
                } else{
                    array_push($errors, "Oops! Something went wrong. Please try again later.");
                    header("websitelogin.php");
                }
            }
            
            // Close statement
            mysqli_stmt_close($stmt);
        }
        
        // Close connection
        mysqli_close($conn);
    }


// register a new account(register.php)
if (isset($_POST['confirmation_email'])) {
    // Cross Site Script  & Code Injection Sanitization
    //todo add to the input
    function xss_cleaner($input_str) {
        $return_str = str_replace( array('<',';','|','&','>',"'",'"',')','('), array('&lt;','&#58;','&#124;','&#38;','&gt;','&apos;','&#x22;','&#x29;','&#x28;'), $input_str );
        $return_str = str_ireplace( '%3Cscript', '', $return_str );
        return $return_str;
    }

    $username = $_POST['username'];
    $password = $_POST['password'];
    $email = $_POST['email'];
    $confirmation_email = $_POST['confirmation_email'];
    $confirmation_password = $_POST['confirmation_password'];
    $authcode = rand(1000, 9999);
    // todo check for dupe emails and or usernames
    // the error number is 1062 for a duplicate entry.

    if ($password === $confirmation_password and $email === $confirmation_email){
        echo "Satus of input is Fine";
    }
    else {
        echo "Error Password/email do not match! Please try again";
        echo "<script>";
        echo "Command: toastr['Error']('Error', 'Error Password/email do not match! Please try again')";
        echo "</script>";
        exit(0);
    }
    // if you got here then the info enter is good to go

    $options = [
        'cost' => 10,
    ];
    // Get the password from post
    $hash = password_hash($password, PASSWORD_DEFAULT, $options);

    // todo sanizies rhis connection with this code
    // $db = connect_db();
    // $stmt = $db->prepare('UPDATE table set column = ? where other_column = ? limit 1;');
    // $stmt->bind_param('ss', $variable1, $variable2);

    // Create connection //todo remove, already at top
    $conn = new mysqli($servername, $sqlusername, $sqlpassword, $dbname);
    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
        echo "<script>";
        echo "Command: toastr['Error']('Error', 'Failed to connect to server, please contact support')";
        echo "</script>";
    }
    echo "Connected successfully";


    $sql = "INSERT INTO users (Email, Username, Password, Authcode)
    VALUES ('$email', '$username', '$hash', $authcode)";

    if ($conn->query($sql) === TRUE) {
        echo "New record created successfully";
        echo "<script>";
        echo "Command: toastr['success']('Success', 'Acount Created')";
        echo "</script>";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
        echo "<script>";
        echo "Command: toastr['Error']('Error', 'Failed to input data in server, please contact support')";
        echo "</script>";
    }
    $conn->close();
    //account should now be in the database, move user to the login page
    header('location: ./index.php');
}

// user is trying to get auth code to reset password (pending.php)
if (isset($_POST['email_pass_reset'])) {
    $email = mysqli_real_escape_string($conn, $_POST['email_pass_reset']);
    if (empty($email)) array_push($errors, "Email is required");
    if (count($errors) == 0) {
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
            echo "<script>";
            echo "Command: toastr['Error']('Error', 'Failed to connect to server, please contact support')";
            echo "</script>";
        }
            else{
            echo "Connected successfully";
            }

            $sql = ("SELECT AuthCode FROM users WHERE Email='$email'");
            if($results = $conn->query($sql)){ 
                if($results->num_rows > 0){ 
                    echo "<table>"; 
                        echo "<tr>"; 
                            echo "<th>AuthCode</th>"; 
                        echo "</tr>"; 
                    while($row = $results->fetch_array()){
                        echo "<tr>"; 
                        echo "<h1>";
                            echo "<td>" . $row['AuthCode'] . "</td>"; 
                        echo "</tr>"; 
                    } 
                    echo "</table>"; 
                    $results->free(); 
                }
                else {
                    echo "<h1>";
                    echo " No email found with that info";
                }
            }
    $conn->close();
    //header('location: ./index.php');
}

}


// ENTER A NEW PASSWORD(new_password.php)
if (isset($_POST['new_password'])) {
    $authcode = rand(1000, 9999);

    //security stuff
    $new_password = mysqli_real_escape_string($conn, $_POST['new_password']);
    $new_password_c = mysqli_real_escape_string($conn, $_POST['new_password_c']);

    //todo get email for the reset
    //$token = $_SESSION['token'];
  if (empty($new_password)) array_push($errors, "Password is required");
  if (empty($new_password_c)) array_push($errors, "Password_comf is required");
  if ($new_password !== $new_password_c) array_push($errors, "Password dose not match");

  if (count($errors) == 0) {
    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
        echo "<script>";
        echo "Command: toastr['Error']('Error', 'Failed to connect to server, please contact support')";
        echo "</script>";
    }
    //echo "Connected successfully";


    /*     
    // select email address of user from the password_reset table 
    $sql = "SELECT email FROM password_reset WHERE token='$token' LIMIT 1";
    $results = mysqli_query($conn, $sql);
    $email = mysqli_fetch_assoc($results)['email'];
    */
    $email = $_POST['pass_res_email'];
    $auth_code = $_POST['auth_code'];

        $options = [
            'cost' => 10,
        ];
        //hash the password
    $new_hashed_password = password_hash($new_password, PASSWORD_DEFAULT, $options);

    $sql = "UPDATE users SET Password='$new_hashed_password' WHERE Email='$email' AND AuthCode='$auth_code';";
    //password is now updated
    $results = mysqli_query($conn, $sql);
    $sql = "UPDATE users SET AuthCode='$authcode' WHERE Email='$email';";
    $results = mysqli_query($conn, $sql);
    echo"Password Updated for Email: $email";
    header('location: websitelogin.php'); 
    }
}

// comments.........
if (isset($_POST['user is posting a comment'])) {

	// Set logged in user id: This is just a simulation of user login. We haven't implemented user log in
	// But we will assume that when a user logs in, 
	// they are assigned an id in the session variable to identify them across pages
	$user_id = 1;
	// connect to database
	// get post with id 1 from database
	$post_query_result = mysqli_query($db, "SELECT * FROM posts WHERE id=1");
	$post = mysqli_fetch_assoc($post_query_result);

	// Get all comments from database
	$comments_query_result = mysqli_query($db, "SELECT * FROM comments WHERE post_id=" . $post['id'] . " ORDER BY created_at DESC");
	$comments = mysqli_fetch_all($comments_query_result, MYSQLI_ASSOC);

	// Receives a user id and returns the username
	function getUsernameById($id)
	{
		global $db;
		$result = mysqli_query($db, "SELECT username FROM users WHERE id=" . $id . " LIMIT 1");
		// return the username
		return mysqli_fetch_assoc($result)['username'];
	}
	// Receives a comment id and returns the username
	function getRepliesByCommentId($id)
	{
		global $db;
		$result = mysqli_query($db, "SELECT * FROM replies WHERE comment_id=$id");
		$replies = mysqli_fetch_all($result, MYSQLI_ASSOC);
		return $replies;
	}
	// Receives a post id and returns the total number of comments on that post
	function getCommentsCountByPostId($post_id)
	{
		global $db;
		$result = mysqli_query($db, "SELECT COUNT(*) AS total FROM comments");
		$data = mysqli_fetch_assoc($result);
		return $data['total'];
	}

}
?>