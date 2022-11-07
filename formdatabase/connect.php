
<?php

if ($_SERVER['REQUEST_METHOD']=='POST'){
    $name = $_POST['name'];
    $email = $_POST['email'];
    $gender = $_POST['gender'];
    $mobile = $_POST['mobile'];
    $password = $_POST['password'];


$conn = new mysqli('localhost', 'brad', '123456', 'form');
if($conn){
    //echo 'connection successful';
    $sql = "INSERT INTO data (name, email, gender, mobile, password) VALUES ('$name', '$email', '$gender', '$mobile', '$password')";
    $result = mysqli_query($conn, $sql);
    if ($result){
        /*echo 'Data inserted successfully';
        echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
    <strong>Success! </strong> Data has been added successfully.
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
      <span aria-hidden="true">&times;</span>
    </button>
  </div>';*/
    }else{
        die(mysqli_error($conn)); 
    };


}else{
    die(mysqli_error($conn));
}
};
?>