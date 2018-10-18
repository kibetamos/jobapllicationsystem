<!DOCTYPE html>
<html>
<style>
/* Full-width input fields */
input[type=text], input[type=password] {
    width: 100%;
    padding: 12px 20px;
    margin: 8px 0;
    display: inline-block;
    border: 1px solid #ccc;
    box-sizing: border-box;
}

/* Set a style for all buttons */
button {
    background-color: #4CAF50;
    color: white;
    padding: 14px 20px;
    margin: 8px 0;
    border: none;
    cursor: pointer;
    width: 100%;
}

/* Extra styles for the cancel button */
.cancelbtn {
    padding: 14px 20px;
    background-color: #f44336;
}

/* Float cancel and signup buttons and add an equal width */
.cancelbtn,.signupbtn {
    float: left;
    width: 50%;
}

/* Add padding to container elements */
.container {
    padding: 16px;
}

/* Clear floats */
.clearfix::after {
    content: "";
    clear: both;
    display: table;
}

/* Change styles for cancel button and signup button on extra small screens */
@media screen and (max-width: 300px) {
    .cancelbtn, .signupbtn {
       width: 100%;
    }
}

<?php  
session_start();  
  
if(!$_SESSION['email'])  
{  
  
    header("Location: login.php");//redirect to login page to secure the welcome page without login access.  
}  
  
?> 
</style>

<head>
<title>JOBSEARCH</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
<link href="layout/styles/layout.css" rel="stylesheet" type="text/css" media="all">
    </head>

    <div class="fl_right">
      <ul class="faico clear">
        <p><i class="icon circle fa fa-angellist "></i><?php echo $_SESSION['email']; ?></p>
        <li><a href="login.php" title="Login"><i class="fa fa-sign-in"></i></a></li>
        <li><a href="signup.html" title="Register"><i class="fa fa-user-plus"></i></a></li>
        <li><a href="logout.php" title="Logout"><i class="fa fa-sign-out"></i></a></li>
      </ul>
    </div>

  </div>
</div>

<div class="wrapper row1">
  <div class="spacer">
    <header id="header" class="clear"> 

      <div id="logo" class="fl_left">
        <h1><a href="index.php">JOBSEARCH</a></h1>
      </div>
     <div class="fl_right">
        <form class="clear" method="post" action="/jobsearch/employerpage.php">
          <fieldset>
            <legend>Search:</legend>
            <input type="text" value="" placeholder="Search Here" name="topsearch">
            <button class="fa fa-search" type="submit" title="Search" name="search"><em>Search</em></button>
          </fieldset>
        </form>
      </div>
    
     
    </header>
  </div>
</div>


<h2><center>DETAILS</center></h2>
<div class="wrapper row3">
  <div class="spacer">
    <main class="container clear"> 
      
      <div class="content">
<table>
              <tr>
                  <td>Company Name</td>
                  <td>Job</td>
                  <td>Qualifications</td>
                  <td>Other Information</td>
              </tr>
 </table>
  <?php
        $db=mysqli_connect("localhost", "root","")  or die ("Could not connect to database");
        mysqli_select_db($db,'jobsearch') or die('Error selecting database : ' . mysqli_error());
        
          
     $sql3 = "SELECT i.Company_name, i.Position, i.Qualifications,i.Other FROM `employer` AS q LEFT JOIN `jobsearker` AS i ON (q.Position = i.Position)";
     $res = mysqli_query($db,$sql3);
            
        while($row3 = mysqli_fetch_assoc($res))
        {

            echo '<tr>';
            echo '<td>'.$row3['Company_name'].'</td>';
            echo '<td>'.$row3['Position'].'</td>';
            echo '<td>'.$row3['Qualifications'].'</td>';
            echo '<td>'.$row3['Other'].'</td>';
            echo '</tr>';
        }
        ?>