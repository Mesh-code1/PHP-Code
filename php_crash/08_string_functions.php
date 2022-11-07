<?php
$string = 'Hello World';
//Getting the length of the strings
echo strlen($string);
echo '<br>';
//finding the position of the first occurence of a letter in a string (begins at 0 index)
echo strpos($string, 'o');
echo '<br>';
//finding the last occurrence position
echo strrpos($string, 'o');
echo '<br>';
//reversing a string
echo strrev($string);
echo '<br>';
//converting all characters to lowercase
echo strtolower($string);
echo '<br>';
//converting all characters to uppercase
echo strtoupper($string);
echo '<br>';
//implementing title case (making only the first letters uppercase)
echo ucwords($string);
echo '<br>';
//replacing a word in string with another
echo str_replace("Hello", "Yes", $string);
echo '<br>';
//returning a portion of the string specifying positions
echo substr($string, 0, 5);
echo '<br>';
//the code below gives us whatever is after position 5
echo substr($string, 5);
echo '<br>';
//checking what the string starts with
if (str_starts_with($string, 'Hello')){
    echo 'starts with Hello';
    echo '<br>';
};
//checking what the string ends with
if (str_ends_with($string, 'World')){
    echo 'ends with World';
    echo '<br>';
};
//wrapping around html special characters for security purposes
$string2 = '<script>alert(1)</script>';
//echo $string2
echo htmlspecialchars($string2);//safe incase input or string contains executable JavaScript code
echo '<br>';
//formatted strings with print_f for outside data using string specifier
printf('%s likes to %s', 'Mesh', 'code');
echo '<br>';
//formatted decimal notation specifier example
printf('1+1=%d', 1+1);
echo '<br>';
//formatted float notation specifier example
printf('1+1=%f', 1+1);
echo '<br>';
?>