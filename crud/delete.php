<?php

if($_SERVER['REQUEST_METHOD']=='POST'){
    include 'connect.php';

    $id = $_POST['id'];
    
    $sql = "DELETE from crudoperations WHERE id = $id";
    $result = mysqli_query($con, $sql);
    if ($result){
        //echo 'data inserted successfully';
        header('location: display.php');
    }else{
        die(mysqli_error($con));
    }

};

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Delete User(s)</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css">
</head>
<body>
<div class="container my-2">

<form method="post">
    <div class="form-group">
        <label>S.N</label>
        <input type="text" class="form-control" autocomplete="off" placeholder="Enter the user's S.N to delete details from database" name="id">
    </div>
    <button type="submit" class="btn btn-primary" name="submit">Submit</button>
</form>
</div>   
</body>
</html>