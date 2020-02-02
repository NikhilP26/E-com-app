<?php require 'includes/common.php';
if (isset($_SESSION['email'])) {
    header('location: products.php');
}
?>

<html>
    <head>
        <title>Welcome to the Login Page</title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" >
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <link href="CSS/index.css" rel="stylesheet" type="text/css" />
    </head>

    <body>
    <?php include 'includes/header.php'; ?>

    <div class="container" style="padding-top: 100px;">
        
            <div class="col-xs-4 col-xs-offset-4">
                <div class="panel panel-primary">
                    <div class="panel-heading" style="background-color: blue;">
                        <h3><p class="text-warning" style="color: white;">Login to make a purchase</p></h3>
                    </div>
                    <div class="panel-body">
                        <form method="post" action="login_script.php">
                            <div class="form-group">
                                <input type="email" class="form-control" name="email" placeholder="email"
    
                            </div><br>
                            <div class="form-group">
                                <input type="password" class="form-control" name="password" placeholder="password"
    
                            </div><br>
                            <button class="btn btn-primary" type="submit" value="submit">Submit</button>
                        </form>
                    </div>
                    <div class="panel-footer" style="background-color:blue;">
                        <a href="signup.php" style="color: white;">Don't have an account? Register</a>
                    </div>
                </div>
            </div>
        <?php   include 'includes\footer.php';     ?>
    </div>
</body>
</html>