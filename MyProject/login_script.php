<?php 
require 'includes/common.php'; 
$email = mysqli_real_escape_string($con, $_POST['email']);
$password = mysqli_real_escape_string($con, $_POST['password']);
md5($password);

$user_query = "select id, email from users where email = '$email' AND password = '$password'";
$result = mysqli_query($con, $user_query);
$num = mysqli_num_rows($result);

if ($num == 0) {
     $error = "<span class='red'>Please enter correct E-mail id and Password</span>";
     header('location: login.php?error=' . $error);
   }
   else {
        $row = mysqli_fetch_array($result);
        $_SESSION['email'] = $row['email'];
        $_SESSION['user_id'] = $row['id'];
        header('location: products.php');
   }


?>