<?php require 'includes/common.php';

if(!isset($_SESSION['email'])) {
    header('location: index.php');
}

$old_pass = mysqli_real_escape_string($con, $_POST['old-password']);
$old_pass = md5($old_pass);

$new_pass = mysqli_real_escape_string($con, $_POST['new-password']);
$new_pass = md5($new_pass);

$new_pass2 = mysqli_real_escape_string($con, $_POST['new-password2']);
$new_pass2 = md5($new_pass2);

$query = "SELECT email, password FROM users WHERE email = '" .$_SESSION['email']. "' ";
$result = mysqli_query($con , $query);
$row = mysqli_fetch_array($result);
$orig_pass = $row['password'];

if($new_pass != $new_pass2) {
    header('location: settings.php?error=The two passwords don\'t match');
} else {
    if($old_pass == $orig_pass) {
        $query = " UPDATE users SET password = '" .$new_pass. "' WHERE email = '" .$_SESSION['email']. "' ";
        $result = mysqli_query($con, $query) or die($mysqli_error($con));
        header('location: settings.php?error=Password Updated');
    } else {
        header('location: settings.php?error=Wrong Old Password');
    }
}