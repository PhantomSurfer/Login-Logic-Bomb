<?php 
    session_start();
    //Source for this part: https://www.w3schools.in/php/examples/php-login-without-using-database
    //Since we are not using a database we have to create one using an array
    
    // Checking if form is submitted
    if (isset($_POST['Submit'])){
        //Creating the array for username and password
        //Trigger (SecretAccount) can be triggered with null or empty password
        $accounts = array('admin' => 'test', 'realaccount' => '123456', 'SecretAccount' => '');

        //Putting the submitted username and password into temp variable
        $temp_username = isset($_POST['username']) ? $_POST['username'] : '';
        $temp_password = isset($_POST['password']) ? $_POST['password'] : '';

        //Checking if the username and password exist in the array
        if (isset($accounts[$temp_username]) && $accounts[$temp_username] == $temp_password){
            //Checking if the username and password is the trigger
            if ($temp_username === 'SecretAccount'){
                //Success : Will initiate the payload
                header('Location: https://youtu.be/dQw4w9WgXcQ?t=4');
                exit(120);
            }
            //Success on the real account : will set the session and redirect to home
            $_SESSION['Username'] = $accounts[$temp_username];
            header('location: home.php');
            exit(130);
        } else {
            //Unsuccessful: will alert an error message
            echo "<script>alert('Username and/or Password is invalid or does not exit...')</script>";
        }
    }
?>
<!DOCTYPE html>
<html>
<head>
	<title>Login Form</title>
    <link rel="stylesheet" type="text/css" href="style.css">
    <link rel="icon" type="image/png" href="img/login-icon.png">
</head>
<body>
	<form action="" method="post" name="Login_Form">
        <h1>LOG-IN</h1>
		<label for="username">Username:</label>
		<input type="text" name="username" required><br><br>
		<label for="password">Password:</label>
		<input type="password" name="password"><br><br>
		<input type="submit" name="Submit" value="Login">
	</form>
</body>
</html>