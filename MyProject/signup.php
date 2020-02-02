<?php require 'includes/common.php';
if (isset($_SESSION['email'])) {
    header('location: products.php');
}  
?>


<html>
    <head>
        <title>Welcome to the SignUp Page</title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" >
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <link href="CSS/index.css" rel="stylesheet" type="text/css" />
    </head>

    <body>
    <?php include 'includes/header.php'; ?>
    <div class="content" style="padding-top: 100px;">
        <div class="row">
            <div class="col-xs-4 col-xs-offset-4">
                <h1>Sign Up</h1>
                <form method="POST" action="signup_script.php">
                    <div class="form-group">
                        <input type="text" class="form-control" name="name" placeholder="name">
                    </div>
                    <div class="form-group">
                        <input type="email" class="form-control" name="email" placeholder="email">
                    </div>
                    <div class="form-group">
                        <input type="password" class="form-control" name="password" placeholder="password">
                    </div>
                    <div class="form-group">
                        <input type="number" class="form-control" name="contact" placeholder="contact">
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" name="city" placeholder="city">
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" name="address" placeholder="address">
                    </div>
                    <button type="submit" value="submit" class="btn btn-primary">Submit</button>
                    
                </form>
            </div>
            
        </div>
        <?php   include 'includes\footer.php';     ?>
    </div>
    

    </body>
</html>