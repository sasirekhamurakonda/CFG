<!DOCTYPE html>
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
                    <li><a href="signup.php"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
                    <li><a href="login.php" data-target="#myModal" data-toggle="modal" ><span class="glyphicon glyphicon-log-in"></span> Login</a></li>    
					</li>
					<li><a href="aboutus.php"><span class="glyphicon glyphicon-tasks"></span> About Us</a></li>
                    <li><a href="contact.php"><span class="glyphicon glyphicon-phone"></span>Contact Us</a></li>
            </ul>
			</div>
        </div>
    </div>
                                <form action="login_submit.php" method="POST">
                                    <div class="form-group">
                                        <input type="email" class="form-control"  placeholder="Email" name="e-mail" required = "true">
                                    </div>
                                    <div class="form-group">
                                        <input type="password" class="form-control" placeholder="Password" name="password" required = "true">
                                    </div>
                                    <button type="submit" name="submit" class="btn btn-primary">Login</button><br><br>
									<?php if(isset($_GET['error'])){echo $_GET['error'];}?>
                                </form><br/>
                            </div>
                            <div><p>Don't have an account? <a href="signup.php">Register</a></p></div>
                       			
    </body>
</html>