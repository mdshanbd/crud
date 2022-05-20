<?php
include "./connect.php";


$name = $_POST['name'];
$email = $_POST['email'];
$mobile = $_POST['mobile'];
$password = $_POST['password'];



$query = "INSERT INTO crud set  email='$email', name='$name' , mobile='$mobile' , password='$password'";

if (mysqli_query($connect, $query)) {
    echo "Input Data success";
} else {
    echo "input data failed";
}
