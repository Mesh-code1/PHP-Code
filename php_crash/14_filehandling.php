<?php
//reading and writing files on the server using some php built-in functions
$file ='extras/users.txt';
if (file_exists($file)){
//echo readfile($file); //This adds on number of characters to the end
$handle = fopen($file, 'r');//$handle is the file pointer
$contents =fread($handle, filesize($file));//getting the contents from $handle into $contents
fclose($handle); //closing the file pointer
echo $contents; //printing out the copied file content. Notice there is nothing added to the end.
}
else{
    $handle=fopen($file, 'w');//opening a file pointer
    $contents = 'Booster'.PHP_EOL. 'Hassan'.PHP_EOL. 'James';//placing the file contents separated by line breaks in a variable
    fwrite($handle, $contents); //writing on extras/users.txt
    fclose($handle);//closing the file pointer
}
//notice that if you delete the users.txt file and change the content names, another file is created
?>

