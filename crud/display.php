<?php
include 'connect.php';

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Display Page</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css">
</head>

<body>
    <div class="container">
        <button class="btn btn-primary my-2"><a href="http://localhost/crud/user.php" class="text-light">Add user</a>
        <button class="btn btn-primary my-2 ml-2"><a href="http://localhost/crud/delete.php" class="text-light">Delete user</a>


        </button>
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">S.N</th>
                    <th scope="col">Name</th>
                    <th scope="col">Email</th>
                    <th scope="col">Mobile</th>
                    <th scope="col">Password</th>
                </tr>
            </thead>
            <tbody>

                <?php

                $sql = "SELECT * FROM crudoperations";
                $result = mysqli_query($con, $sql);
                if ($result) {

                    while ($row = mysqli_fetch_assoc($result)) {
                        $id = $row['id'];
                        $name = $row['name'];
                        $email = $row['email'];
                        $mobile = $row['mobile'];
                        $password = $row['password'];

                        echo "<tr>
                      <th scope='row'>$id</th>
                      <td>$name</td>
                      <td>$email</td>
                      <td>$mobile</td>
                      <td>$password</td>
                      

                      

                      
                  </tr>";
                    }
                }

                ?>


            </tbody>
        </table>

    </div>

</body>

</html>