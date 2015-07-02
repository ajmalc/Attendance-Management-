<?php
include('login.php'); // Includes Login Script

if(isset($_SESSION['login_user'])){
header("location: class.php");
}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Attendance Management System</title>
<link rel="stylesheet" type="text/css" href="css/style.css"/>
<link rel="shortcut icon" href="favicon.ico">
<link href='http://fonts.googleapis.com/css?family=Belgrano' rel='stylesheet' type='text/css'>
<!-- jQuery file -->
<script src="js/jquery.min.js"></script>
<script src="js/jquery.tabify.js" type="text/javascript" charset="utf-8"></script>
</head>

<body>
<div id="header1">
<div id="header-text">
<img src="images/easy-checkin-icon.png" id="header-img"/>
Attendance Management System</div>
 

</div>
<div id="loginpanelwrap">
  	
	<div class="loginheader">
    <div class="logintitle"><a href="#">Login to WebApp</a></div>
    </div>
	<form action="" method="post">
     
    <div class="loginform">
        
        <div class="loginform_row">
        <label>Username:</label>
        <input type="text" class="loginform_input" name="username" placeholder="username" />
        </div>
        <div class="loginform_row">
        <label>Password:</label>
       <input name="password" placeholder="**********" type="password" class="loginform_input" />
        </div>
        <div class="loginform_row">
        <input name="submit" type="submit" class="loginform_submit" value="Login" />
        </div>
        <span><?php echo $error; ?></span>
</form> 
        <div class="clear"></div>
    </div>
 

</div> 
<p>&nbsp;</p>
<p>&nbsp;</p>
<p><strong style="color:#F00">**username: ajmal password:ajmal </strong></p>
<p align="center">All Right Reserved By<a href="http://facebook.com/ajmcc"> Ajmal Chemban</a></p>
<p align="right">&nbsp;</p>
</body>
</html>
