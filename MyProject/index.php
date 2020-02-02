<?php require 'includes/common.php'; ?>

<html>
    <head>
        <title>Lifestyle Store</title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" >
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <link href="CSS/index.css" rel="stylesheet" type="text/css" />
        
        
    </head>
    <body>
        <?php include 'includes/header.php'; ?>
        <div class="content">
            <div class="banner-image">
                <div class="inner-banner-image">
                    <center>
                    <div class="banner_content">
                        <h1>We sell lifestyle</h1>
                        <p>Flat 40% off on premium brands</p>
                        <a href="products.php" class="btn btn-danger btn-lg active">Shop Now</a>
                    </div>
                </center>
                </div>
            </div>
            <div class="container">
                <div class="items">
                    <a href="">
                        <img src="CSS/watch.jpg" class="thumbnail">
                        <div class="caption">
                            <h2>Watches</h2>
                            <p>Original Watches From The Top Brands</p>
                        </div>
                    </a>
                </div>    
                    <div class="items">
                        <a href="">
                            <img src="CSS/shirt.jpg" class="thumbnail">
                                <div class="caption">
                                    <h2>Shirts</h2>
                                    <p>Pure Cotton Shirts From Top Brands</p>
                                </div>
                        </a>
                    </div>
                    <div class="items">
                        <a href="">
                            <img src="CSS/camera.jpg" class="thumbnail">
                                <div class="caption">
                                    <h2>Cameras</h2>
                                    <p>Choose among best available in the world</p>
                                </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <?php   include 'includes\footer.php';     ?>
    </body>
</html>