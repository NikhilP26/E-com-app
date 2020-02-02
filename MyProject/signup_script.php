<?php 
require 'includes/common.php'; 


$name = mysqli_real_escape_string($con, $_POST['name']);
$email = mysqli_real_escape_string($con, $_POST['email']);
$password = mysqli_real_escape_string($con, $_POST['password']);
md5($password);
$contact = mysqli_real_escape_string($con, $_POST['contact']);
$city = mysqli_real_escape_string($con, $_POST['city']);
$address = mysqli_real_escape_string($con, $_POST['address']);

$user_query = "select * from users where email = '$email'";
$result = mysqli_query($con , $user_query);
$num = mysqli_num_rows($result);


if($num > 0)
{
    echo 'Email already exists !!';
}
else 
{
    $query = "insert into users(name, email, password, contact, city, address) 
    values('$name', '$email', '$password', '$contact', '$city', '$address')";
    mysqli_query($con, $query) or die(mysqli_error($con));

    $user_id = mysqli_insert_id($con);
    $_SESSION['email'] = $email;
    $_SESSION['user_id'] = $user_id;
    header('location: index.php');
    
}








?>