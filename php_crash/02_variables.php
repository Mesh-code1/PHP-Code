<?php
$name = "Alfred"; //string
$age = 23; //int
$is_unemployed = true; //boolean
$networth = 200.50; //float
echo $name;
echo $age;
var_dump($is_unemployed);

//defining constants in php

define("HOST", "localhost");
echo HOST. '<br>';
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
    <h1><?php echo $name; ?></h1>
    <h4><?php echo $age; ?></h4>

    //variables in strings use double quotes as below
<h5><?php echo "$name is $age years old";?></h5>
<h6><?php echo 5+5; ?></h6>

//String concatenation in php
<h6><?php echo "Zebras"." Lions"." and Antelopes"; ?></h6>
</body>
</html>