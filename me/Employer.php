
<?php  
session_start();  
  
if(!$_SESSION['email'])  
{  
  
    header("Location: login.php");  
}  
  
?> 
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
</style>

<head>
<title>JOBSEARCH</title>
<meta charset="utf-8">
    </head>

    <div class="fl_right">
      <ul class="faico clear">
         <p><i class="icon circle fa fa-angellist "></i><?php echo $_SESSION['email']; ?></p>
        <li><a href="login.php" title="Login"><i class="fa fa-sign-in"></i></a></li>
        <li><a href="signup.html" title="Register"><i class="fa fa-user-plus"></i></a></li>
        
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
    </header>
  </div>
</div>

<div class="wrapper row2">
  <div class="spacer">
    <nav id="mainav" class="clear"> 
      <ul class="clear">
        <li class="active"><a href="index.php">Home</a></li>
        
            <li><a href="pages/contactus.php">Contact us</a></li>
            <li><a href="pages/employerpage.php">Employer page</a></li>
            <li><a href="pages/jobseekerpage.php">Jobseeker page</a></li>
            
        
        </li>
        </li>
        <li><a href="https://maps.google.com/">OfficesLocation</a></li>
       
      </ul>
    </nav>
  </div>

</div>
<h2><center>DETAILS</center></h2>
<div class="wrapper row3">
  <div class="spacer">
    <main class="container clear"> 
      <div class="content"> 
                  <p><h3>EMPLOYER DETAILS</p></h3><br/>
    <form action="Employer1.php" style="border:1px solid #ccc" method = "post">
  <div class="container">      
    <label><b>Company Name</b></label>
    <input type="text" name="CoNames" id ="CoNames" required>

    <label><b>Job Position needed</b></label>
    <input type="text" name="job" id= "job" required>

    <label><b>Email account</b></label>
    <input type="text" name="qualifications" id="qualification" required>
                        
    
   
    <label><b>Other Details</b></label>
    <input type="text" name="other" id="other" required>
              
    <div class="clearfix">
      <button type="button" class="cancelbtn">Cancel</button>
      <button type="submit" class="signupbtn">Submit</button>
    </div>          

                  
    </div>