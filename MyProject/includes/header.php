<div class="navbar navbar-inverse navbar-fixed-top">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a href="index.php" class="navbar-brand">Lifestyle Store</a>
                </div>
            <div class="collapse navbar-collapse" id="myNavbar">
                <ul class="nav navbar-nav navbar-right">
                    <?php
                    if(isset($_SESSION['email'])) { ?>
                    <li><a href="cart.php">Cart<span 
                    class="glyphicon glyphicon-shopping-cart"></span></a></li>
                    <li><a href="settings.php">Settings<span 
                    class="glyphicon glyphicon-user"></span></a></li>
                    <li><a href="logout.php">Logout<span 
                    class="glyphicon glyphicon-log-in"></span></a></li>
                    
                    <?php
                    } else {
                        ?>
                        <li><a href="signup.php">Sign Up<span class="glyphicon glyphicon-user"></span></a></li>
                        <li><a href="login.php">Login<span class="glyphicon glyphicon-log-in"></span></a></li>
                        <?php
                    }
                    ?>
                    
                </ul>
            </div>
        </div>
    </div>