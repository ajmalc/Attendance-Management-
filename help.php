<?php
include('session.php');
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Attendance Management System</title>
<link rel="shortcut icon" href="favicon.ico">
<link rel="stylesheet" type="text/css" href="css/style.css" />
<link href='http://fonts.googleapis.com/css?family=Belgrano' rel='stylesheet' type='text/css'>
<!-- jQuery file -->
<script src="js/jquery.min.js"></script>
<script src="js/jquery.tabify.js" type="text/javascript" charset="utf-8"></script>
<script type="text/javascript">
var $ = jQuery.noConflict();
$(function() {
$('#tabsmenu').tabify();
$(".toggle_container").hide(); 
$(".trigger").click(function(){
	$(this).toggleClass("active").next().slideToggle("slow");
	return false;
});
});
</script>

</head>

<body>
<div id="header1">
<div id="header-text">
<img src="images/easy-checkin-icon.png" id="header-img"/>Attendance Management System</div>
<section class="container">
    <div class="dropdown">
      <a href="#">Settings</a>
      <div>
        <ul>
          <li><a href="#">My Account</a></li>
          <li><a href="logout.php">Logout</a></li>
          </ul>
      </div>
    </div>
  </section>  

</div>
<div id="panelwrap">
  	
	<div class="header">
  
    
    <div class="menu">
    <ul>
    <li><a href="class.php">Class</a></li>
    <li><a href="subject.php">Subjects</a></li>
    <li><a href="student.php">Sudents</a></li>
    <li><a href="teacher.php">Teachers</a></li>
    <li><a href="guardian.php">Guardian</a></li>
    <li><a href="#">Admin settings</a></li>
    <li><a href="#"  class="selected">Help</a></li>
    </ul>
    </div>
    
    </div>
    
    <div class="submenu">
    <ul><li class="active"><a>Help</a></li></ul>
     </div>                     
    <div class="center_content">  
 
    <div id="right_wrap">
    <div id="right_content">             
    <h2>Contact</h2> 
     <div style="padding-top:30px; font-size:16px; padding-left:20px">
     <address>
     <strong>               
    Ajmal Chemban<br/>
     IHRD Calicut<br/>
    Contact No. 9633777427<br />
    E-mail: ajmal.chemban@gmail.com
     </strong>
     </address>
          </div>
        
	
     

   
     
    

   </div>
      
     </div>
     </div><!-- end of right content-->
                     
                    
    <div class="sidebar" id="sidebar">
    <h2>Browse categories</h2>
    
        <ul>
            <li><a href="#" class="selected">Main page</a></li>
            <li><a href="#">Template settings</a></li>
            <li><a href="#">Add page</a></li>
            <li><a href="#">Edit section</a></li>
            <li><a href="#">Templates</a></li>
            <li><a href="#">Clients</a></li>
        </ul>
        
    <h2>Page Section</h2>
    
        <ul>
            <li><a href="#">Edit section</a></li>
            <li><a href="#">Templates</a></li>
            <li><a href="#">Clients</a></li>
            <li><a href="#">Docs and info</a></li>
        </ul> 
        
    <h2>User Settings</h2>
    
        <ul>
            <li><a href="#">Edit user</a></li>
            <li><a href="#">Add users</a></li>
            <li><a href="#">Manage users</a></li>
            <li><a href="#">Help</a></li>
        </ul>   
         
    <h2>Text Section</h2> 
    <div class="sidebar_section_text">
Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
    </div>         
    
    </div>             
    
    
    <div class="clear"></div>
    </div> <!--end of center_content-->
    
    <div class="footer">
Panelo - Free Admin Template by <a href="htpp://csstemplatesmarket.com" target="_blank">CSSTemplatesMarket</a>
</div>

</div>

</body>
</html>

