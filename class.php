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
$('#submenu').tabify();
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
          <li><a href="logout.php">Log Out</a></li>
          </ul>
      </div>
    </div>
  </section>


</div>
<div id="panelwrap">
  	
	<div class="header">
  
    
    <div class="menu">
    <ul>
    <li><a href="#" class="selected">Class</a></li>
    <li><a href="subject.php">Subjects</a></li>
    <li><a href="student.php">Sudents</a></li>
    <li><a href="teacher.php">Teachers</a></li>
    <li><a href="guardian.php">Guardian</a></li>
    <li><a href="#">Admin settings</a></li>
    <li><a href="help.php">Help</a></li>
    </ul>
    </div>
    
    </div>
    
    <div class="submenu" id="submenu">
    <ul>
    <li class="active"><a href="#Addclass">Add Class</a></li>
    <li><a href="#Editclass">Edit Classes</a></li>
    <li><a href="#Upclass">Upgrade Class</a></li>
    <li><a href="#Viewclass">View Class</a></li>
    </ul>
    </div>                     
    <div class="center_content">  
 
    <div id="right_wrap">
    <div id="right_content">             
  <div id="Viewclass" class="tabcontent">
          <h2>View Class</h2>
        <div class="form">
                                     
            <div class="form_row">
            <label>Class</label>
            <select class="form_select" name="">
            <option>Select one</option>
           <option>MCA </option>
            <option>MSc Electronics </option>
            <option>M Com. </option>
            <option>BCA</option>
            <option>BSc. Computer Science</option>
            <option>Msc. Computer Science</option>
            </select>
            </div>
            <div class="clear"></div>
        </div>
    </div>
           <!-- <label>Semster:</label>
            <select class="form_select" name="">
            <option>Select one</option>
            </select>
            <option>MCA </option>
            <option>MSc Electronics </option>
            <option>M Com. </option>
            <option>BCA</option>
            <option>BSc. Computer Science</option>
            <option>Msc. Computer Science</option>
            </select>
              </div></div></div>-->
 <div id="Addclass" class="tabcontent">
        <h2>Add Class</h2>
        <div class="form">
            
            <div class="form_row">
            <label>Name of Class:</label>
            <input type="text" class="form_input" name="" />
            </div>
             <div class="form_row">
            <label>Department:</label>
            <input type="text" class="form_input" name="" />
            </div>
             
            <div class="form_row">
            <label>No. of Semster:</label>
            <input type="text" class="form_input" name="" />
            </div>
            
            <div class="form_row">
            <label>Semster:</label>
            <select class="form_select" name="">
            <option>Select one</option>
            </select>
            </div>
            
             <div class="form_row">
            <label>Class in Charge:</label>
            <input type="text" class="form_input" name="" />
            </div>
            <div class="form_row">
            <input type="submit" class="form_submit" value="Save" />
            </div> 
            <div class="clear"></div>
        </div>
    </div>
    <div id="Upclass" class="tabcontent">
        <h2>Upgrade Class</h2>
        <div class="form">
            
            <div class="form_row">
            <label>Name of Class:</label>
            <input type="text" class="form_input" name="" />
            </div>
             
            <div class="form_row">
            <label>Target Class:</label>
            <input type="text" class="form_input" name="" />
            </div>
            
            <div class="form_row">
            <input type="submit" class="form_submit" value="Upgrade" />
            </div> 
            <div class="clear"></div>
        </div>
    </div>
    <div id="Editclass" class="tabcontent">
    <h2>Class Details</h2>
                       
<table id="rounded-corner">
    <thead>
    	<tr>
        	<th></th>
            <th>Class</th>
            <th>Department</th>
            <th>Year</th>
            <th>Semster</th>
            <th>Teacher in Charge</th>
            <th>No. of Students</th>
            <th>Edit</th>
            <th>Delete</th>
        </tr>
    </thead>
        <tfoot>
    	<tr>
        	<td colspan="12">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut.</td>
        </tr>
    </tfoot>
    <tbody>
    	<tr class="odd">
        	<td><input type="checkbox" name="" /></td>
            <td>MCA</td>
            <td>Computer Science</td>
            <td>1</td>
            <td>2</td>
            <td>Ashina</td>
            <td>28</td>
            <td><a href="#"><img src="images/edit.png" alt="" title="" border="0" /></a></td>
            <td><a href="#"><img src="images/trash.gif" alt="" title="" border="0" /></a></td>
        </tr>
    	<tr class="even">
        	<td><input type="checkbox" name="" /></td>
            <td>BCA</td>
            <td>Computer Science</td>
            <td>2</td>
            <td>4</td>
            <td>Mahesh</td>
            <td>29</td>
            <td><a href="#"><img src="images/edit.png" alt="" title="" border="0" /></a></td>
            <td><a href="#"><img src="images/trash.gif" alt="" title="" border="0" /></a></td>
        </tr>
    	<tr class="odd">
        	<td><input type="checkbox" name="" /></td>
            <td>MSC Electronics</td>
            <td>Electronics</td>
            <td>2</td>
            <td>3</td>
            <td>Biju</td>
            <td>12</td>
            <td><a href="#"><img src="images/edit.png" alt="" title="" border="0" /></a></td>
            <td><a href="#"><img src="images/trash.gif" alt="" title="" border="0" /></a></td
        ></tr>
    	<tr class="even">
        	<td><input type="checkbox" name="" /></td>
            <td>B Com</td>
            <td>Commerce</td>
            <td>1</td>
            <td>2</td>
            <td>Rahul</td>
            <td>45</td>
            <td><a href="#"><img src="images/edit.png" alt="" title="" border="0" /></a></td>
            <td><a href="#"><img src="images/trash.gif" alt="" title="" border="0" /></a></td
        ></tr>
    	<tr class="odd">
        	<td><input type="checkbox" name="" /></td>
            <td>Bsc Electronics</td>
            <td>Electronics</td>
            <td>3</td>
            <td>5</td>
            <td>Divya</td>
            <td>22</td>
            <td><a href="#"><img src="images/edit.png" alt="" title="" border="0" /></a></td>
            <td><a href="#"><img src="images/trash.gif" alt="" title="" border="0" /></a></td
        ></tr>
    	<tr class="even">
        	<td><input type="checkbox" name="" /></td>
            <td>BSc Computer Science</td>
            <td>Computer Science</td>
            <td>3</td>
            <td>6</td>
            <td>Ajmal</td>
            <td>33</td>
            <td><a href="#"><img src="images/edit.png" alt="" title="" border="0" /></a></td>
            <td><a href="#"><img src="images/trash.gif" alt="" title="" border="0" /></a></td
        ></tr>
  
        
    </tbody>
</table>

	<div class="form_sub_buttons">
	<a href="#" class="button green">Edit selected</a>
    <a href="#" class="button red">Delete selected</a>
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
Copyright @ <a href="htpp://csstemplatesmarket.com" target="_blank">Ajmal Chemban</a>
</div>

</div>

</body>
</html>
