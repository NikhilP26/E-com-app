<?php 
$con = mysqli_connect("localhost", "root", "", "ecommerce") or die(mysqli_error($con));
session_start();
$email = $_POST['email'];
$password = $_POST['password'];

$user_registration_query = "insert into users(email, password) values('$email', '$password')";
$user_registration_submit = mysqli_query($con, $user_registration_query) or die(mysqli_error($con));
echo "User registration successful";
$_SESSION['email'] = $email;
$_SESSION['id'] = mysqli_insert_id($con);


?>