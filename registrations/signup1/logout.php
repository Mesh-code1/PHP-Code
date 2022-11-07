<?php

session_start();
session_destroy();
header('location: http://localhost/registrations/signup1/login.php');

?>