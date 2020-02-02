<?php

$con = mysqli_connect("localhost", "root", "", "store") or die(mysqli_error($con));
$select_query = "select * from items";
$select_query_result = mysqli_query($con, $select_query) or die(mysqli_error($con));
$row = mysqli_fetch_array($select_query_result);

?>

<html>
    <head>
        <title>Table</title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" >
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <link href="CSS/index.css" rel="stylesheet" type="text/css" />
    </head>
    <body>
        <div class="container">
            
            <?php while($row = mysqli_fetch_array($select_query_result)){ ?>
                <div class="row">
                    <div class="col-lg-12"><h4>Users</h4></div>
                </div>
                <div class="row">
                    <div class="col-xs-2">ID</div>
                    <div class="col-xs-10"><?php echo $row['i_id']; ?></div>
                </div>
                <div class="row">
                    <div class="col-xs-2">Name</div>
                    <div class="col-xs-10"><?php echo $row['i_name']; ?></div>
                </div>
                <div class="row">
                    <div class="col-xs-2">Price</div>
                    <div class="col-xs-10"><?php echo $row['i_price']; ?></div>
                </div>
                
             <?php } ?>
             
             <hr />
        </div>
        
    </body>

</html>
  