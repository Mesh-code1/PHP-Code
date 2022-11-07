<?php
session_start();

if (isset($_SESSION['username'])){
echo '<h1>Welcome '.$_SESSION['username'] .'</h1>';
}else{
    echo '<h1>Welcome guest</h1>';
   // echo '<a href=" /localhost/php-crash/12_sessions.php">Home</a>';
};

//this is the page link http://localhost/php_crash/extras/dashboard.php/
?>