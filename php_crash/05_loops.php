<?php
//for loop ici initialize; condition, increment

/*
for($x=0 ; $x<=10; $x++){
echo 'Number '.$x.'<br>';
}
*/

// while loop
/*
$x = 1;

while($x<15){
    echo 'Number'. $x.'<br>';
    $x++;
};
*/

// looping through an array using for each and for loop
$posts = ['first post', 'second post', 'third post'];

/*for ($x=0; $x<count($posts); $x++){
echo $posts[$x].'<br>';
};*/

//foreach($posts as $post){
//echo $post.'<br>';
//};

foreach($posts as $index => $post){
echo $index. '-'. $post. '<br>';
};

// looping through an associative array with a foreach loop
$sisters = [
    'first sister' => 'Joan',
    'second sister' => 'Grace',
    'third sister' => 'Mercy',
    'forth sister' => 'Betty '
];

foreach($sisters as $key => $value){
    echo "$key - $value <br>";
};
?>