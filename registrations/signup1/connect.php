<?php
$HOSTNAME = 'localhost';
$USERNAME = 'brad';
$PASSWORD = '123456';
$DATABaSE = 'signupforms';

$con = new mysqli ($HOSTNAME, $USERNAME, $PASSWORD, $DATABaSE);

if(!$con){
     die(mysqli_error($con));
}

?>