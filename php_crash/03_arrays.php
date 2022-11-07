<?php
//simple array
$numbers = [3,7,10];

//another way of making an array
$jobs = array("Software Engineer", "Data Analyst ");

print_r($numbers);

echo $jobs[1];

//creating an associative array (like menu key value pair in java)
$sisters = [
    'first' => 'Joan',
    'second' => 'Grace',
    'third' => 'Mercy',
    'forth' => 'Betty '
];
echo $sisters['forth'];
//multidimensional arrays are arrays within arrays
$customers = [
  [ 'first_name' => 'Nick',
   'second_name' => 'Mwendwa',
   'email' => 'nick@gmail.com']
,
[ 'first_name' => 'John',
   'second_name' => 'Ben',
   'email' => 'benny@gmail.com'],

   [ 'first_name' => 'Fred',
   'second_name' => 'Owino',
   'email' => 'fowino@gmail.com']
]
;
echo $customers[1]['email'];
var_dump(json_encode($customers));

//using current time for greeting

$t = date("H");
echo $t;
if ($t <12){
    echo 'Good morning';
}
elseif ($t <17){
echo 'Good afternoon';
}
else{
echo 'Good evening';
}

?>
