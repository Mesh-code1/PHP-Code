

<?php
if ($_SERVER['REQUEST_METHOD']=='POST'){
include 'connect.php';
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Forms</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<div class="p-3 mb-2 bg-warning text-dark h-100 align-items-center">
<body class="container mt-2 w-75">
    <h1 class="text-center">HTML FORM</h1>
<div class="container"></div>

<form action="connect.php" method="post">
    <div>
        <label>Name</label>
        <input type="text" class="form-control" name="name" placeholder="Enter your name">
    </div>
    <div>
        <label>Email</label>
        <input class="form-control" type="email" name="email" placeholder="Enter your email address">
    </div>
    <div>
        <label>Gender</label>
        <input class="text-primary" type="radio" name="gender" value='m'>Male
        <input type="radio" name="gender" value='f'>Female
        <input type="radio" name="gender" value='o'>Others
    </div>
    <div>
        <label>Mobile</label>
        <input class="form-control" type="text" name="mobile" placeholder="Enter your phone number">
    </div>
    <div>
        <label>Password</label>
        <input class="form-control" type="password" name="password" placeholder="Enter your password">
    </div>
    <div class="h-100 d-flex align-items-center justify-content-center mt-2">
    <button type="submit" class="btn btn-secondary">Submit data</button>
</div>

</form>
</body>
</div>
</html>