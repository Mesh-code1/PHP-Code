<?php
//unlike variables sessions are stored on the server
/**
 * sessions facilitate storing information in variables to be used across multiple pages
 * e.g you can use a session to store user-id and full user-name.
 */
session_start();
if(isset($_POST['submit'])){
    print_r($_POST);
   $username = filter_input(INPUT_POST, 'username', FILTER_SANITIZE_SPECIAL_CHARS);
$password = ($_POST['password']); 
echo "Welcome $username <br>";
if ($username=='mesh' && $password=='password'){
$_SESSION['username']=$username;
//Below is how to redirect doesn't work though
//header('Location: http://localhost/php-crash/extras/dashboard.php/');
}else{
    echo 'Check your input and try logging in again';
};
}

//this is the page link http://localhost/php_crash/12_sessions.php/
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Understanding Sessions</h1>
    <form action="<?php echo htmlspecialchars( $_SERVER['PHP_SELF']); ?>" method="post">
    <div>
        <label for="username">Username:</label>
        <input type="text" name="username" id="username" autocomplete="on"></input>
    </div>
    <div>
        <label for="password">Password:</label>
        <input type="password" name="password" id="password" autocomplete="on"></input>
    </div>
    <input type="submit" value="Submit" name="submit"></input>
</form>
</body>
</html>
