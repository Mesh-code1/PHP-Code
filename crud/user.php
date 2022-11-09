
<?php

if($_SERVER['REQUEST_METHOD']=='POST'){
    include 'connect.php';

    $name = $_POST['name'];
    $email = $_POST['email'];
    $mobile = $_POST['mobile'];
    $password = $_POST['password'];
    
    
    $sql = "INSERT INTO crudoperations (name, email, mobile, password) VALUES ('$name', '$email', '$mobile', '$password')";
    $result = mysqli_query($con, $sql);
    if ($result){
        //echo 'data inserted successfully';
        header('location: display.php');
    }else{
        die(mysqli_error($con));
    }

};

/*if (isset($_POST['submit'])){
      
};*/
?>


<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css">

    <title>Insert User</title>
</head>

<body>
    <div class="container my-2">

        <form method="post">
            <div class="form-group">
                <label>Name</label>
                <input type="text" class="form-control" autocomplete="off" placeholder="Enter your name" name="name">
            </div>

            <div class="form-group">
                <label>Email</label>
                <input type="email" class="form-control" placeholder="Enter your email" name="email">
            </div>

            <div class="form-group">
                <label>Mobile Number</label>
                <input type="text" class="form-control" autocomplete="off" placeholder="Enter your mobile number" name="mobile">
            </div>

            <div class="form-group">
                <label>Password</label>
                <input type="password" class="form-control" autocomplete="off" placeholder="Enter your password" name="password">
            </div>

            <button type="submit" class="btn btn-primary" name="submit">Submit</button>
        </form>
    </div>

</body>

</html>