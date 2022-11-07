<?php
/**
 * $_POST and $_GET superglobals are used to pass data through urls and forms
 * $_GET is both for urls and forms
 * $_POST is only for forms and it does not show sensitive info in the browser's search box
 * implement form-validation using JavaScript on the client side. Server side validation
 * seems risky.
*/
if(isset($_POST['submit'])){
    print_r($_POST);
   $name = filter_input(INPUT_POST, 'name', FILTER_SANITIZE_SPECIAL_CHARS);
$age = htmlspecialchars($_POST['age']); 
echo "Welcome $name, $age is fun <br>";
}
echo '<br>';

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
    <h1>Form Testing Post</h1>
    <form action="<?php echo htmlspecialchars( $_SERVER['PHP_SELF']); ?>" method="post">
    <div>
        <label for="name">Name:</label>
        <input type="text" name="name" id="name" autocomplete="on"></input>
    </div>
    <div>
        <label for="age">Age:</label>
        <input type="text" name="age" id="age" autocomplete="on"></input>
    </div>
    <input type="submit" value="Submit" name="submit"></input>
</form>
</body>
</html>
