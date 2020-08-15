<?php
require("common.php");
?>
<html>
<head>
        <title>CFG PROJECT</title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" >
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <meta name="viewport" content="width=device-width, initial-scale=1">
    </head>
<body>
<div class="navbar navbar-default ">
    <div class="container">
		<a class="navbar-brand" href="index.php">CFG Event</a>
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>                        
            </button>
        <div class="collapse navbar-collapse" id="myNavbar">
            <ul class="nav navbar-nav navbar-right">
                <?php
                if (isset($_SESSION['email'])) {
                    ?>
                    <li><a href = "logout_script.php"><span class = "glyphicon glyphicon-log-in"></span> Logout</a></li>
                   
                    <?php
                } else {
                    ?>
                    <li><a href="signup.php"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
                    <li><a href="login.php" data-target="#myModal" data-toggle="modal" ><span class="glyphicon glyphicon-log-in"></span> Login</a></li>    
				
					<div class="modal" id="myModal" role="dialog">					
              <div class="modal-dialog role="document">
			  <div class="modal-content">
			 </div>
                    </div>
                </div></li>
					<li><a href="aboutus.php"><span class="glyphicon glyphicon-tasks"></span> About Us</a></li>
                    <li><a href="contact.php"><span class="glyphicon glyphicon-phone"></span>Contact Us</a></li>
                        <?php
                    }
                    ?>
            </ul>
			</div>
        </div>
    </div>
</body>
</html>