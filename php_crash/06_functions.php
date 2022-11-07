<?php
//To use a global variable within a function use the key word global

function registerUser($name){
    echo "$name registered <br>";
};
registerUser('Mesh');

//placing default values
function addTwoNumbers($a=1, $b=2){
    return $a+$b;
};
//echo(addTwoNumbers(3, 8));

// anonymous functions assigned to variables
$subtractTwoNumbers = function($num1, $num2){
    return $num1 - $num2;
};
//echo $subtractTwoNumbers(7, 3);

//can also be done as an arrow function
//$subtract = fn($num1, $num2)=> $num1-num2;
$multiply = fn($n1, $n2)=> $n1 * $n2;
echo $multiply(7,7);
?>