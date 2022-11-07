<?php
//arrayfunctions are built-in functions used to manipulate arrays

$cereals = ['beans', 'lentils', 'peas', 'soya'];
//Getting the length of an array
echo(count($cereals));
echo '<br>';
//search for item in array
var_dump(in_array('beans', $cereals));
echo '<br>';
//add to array
$cereals []= 'all other legumes';
print_r($cereals);
//adding an item using array_push to the end of an array
array_push($cereals, 'plus forgotten legumes');
print_r($cereals);
//array_unshift adds to the beginning of an array
array_unshift($cereals, 'maybe nuts');
print_r($cereals);
//removing an item from an array
//array_pop removes the last item in the array
array_pop($cereals);
print_r($cereals);
//array_shift removes the first item from the array
array_shift($cereals);
print_r($cereals);
//to remove a specific item and its index use unset
unset($cereals[4]);
print_r($cereals);
//split the array into chunks of 2
$chunkedCereals = array_chunk($cereals, 2);
print_r($chunkedCereals);
//concatenate arrays
$ar1 = [1, 2, 3];
$ar2 = [10, 20, 30];
$ar3 = array_merge($ar1, $ar2);
print_r($ar3);
//merging using the spread operator below
$ar4 = [...$ar2, ...$ar1];
print_r($ar4);
//combining two arrays with array_combine
$choices = ['A', 'B', 'C'];
$answers = ['water', 'paraffin', 'ink'];
$combined = array_combine($choices, $answers);
print_r($combined);
//turning the keys into an array
$keys = array_keys($combined);
print_r($keys);
//flipping an array using array_flip (keys and values interchange)
$flipped = array_flip($combined);
print_r($flipped);
//creating an array with a range of numbers
$numbers = range(1, 20);
print_r($numbers);
//mapping part of the array
$newNumbers = array_map(function($number){
return "Number ${number}";
}, $numbers);
print_r($newNumbers);
// array_filter works in a similar way but making a condition
$lessThan10 = array_filter($numbers, fn($number)=>$number<=10);
print_r($lessThan10);
//reduce is good for adding all the numbers together if you want to get the sum
$sum = array_reduce($numbers, fn($carry, $number)=> $carry + $number);
var_dump($sum);
?>
