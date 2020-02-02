<?php require 'includes/common.php';
if(!isset($_SESSION['email'])) {
    header('location: index.php');

}
?>

<html>
    <head>
        <title>Settings</title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" >
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <link href="CSS/index.css" rel="stylesheet" type="text/css" />
    </head>

    <body>
    <?php include 'includes/header.php'; ?>
   
    <div class="container" style="padding-top: 100px;">
        <div class="row">
            <div class="col-xs-4 col-xs-offset-4">
                <h1>Settings</h1>
                <form method="POST" action="setting_script.php">
                    <div class="form-group">
                        <input type="password" class="form-control" name="old-password" placeholder="Old Password">
                    </div>
                    <div class="form-group">
                        <input type="password" class="form-control" name="new-password" placeholder="New Password">
                    </div>
                    <div class="form-group">
                        <input type="password" class="form-control" name="new-password2" placeholder="Re-type New Password">
                    </div>
                    
                </form>
            </div>

        </div>
        <?php   include 'includes\footer.php';     ?>
    </div>
    </body>
</html>