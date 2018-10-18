<?php  
session_start();  
  
if(!$_SESSION['email'])  
{  
  
    header("Location: login.php");//redirect to login page to secure the welcome page without login access.  
}  
  ?>

<!DOCTYPE html>
<html>
<head>
	<style>
		body{
			background-image: url("apply.png");
			background-repeat: no-repeat;
           vertical-align: center;
		}
    label {
    padding: 12px 12px 12px 0;
    display: inline-block;
}
* {
    box-sizing: border-box;
}

input[type=text], select, textarea {
    width: 100%;
    padding: 12px;
    border: 1px solid #ccc;
    border-radius: 4px;
    resize: vertical;
}

label {
    padding: 12px 12px 12px 0;
    display: inline-block;
}

input[type=submit] {
    background-color: black;
    color: white;
    padding: 12px 20px;
    border: none;
    border-radius: 4px;
    cursor: pointer;
    float: right;
}
.col-25 {
    float: left;
    width: 25%;
    margin-top: 6px;
}
.col-75 {
    float: left;
    width: 75%;
    margin-top: 6px

input[type=submit]:hover {
    background-color: skyblue;
}


/* Responsive layout - when the screen is less than 600px wide, make the two columns stack on top of each other instead of next to each other */
@media screen and (max-width: 600px) {
    .col-25, .col-75, input[type=submit] {
        width: 100%;
        margin-top: 0;
    }
}
	</style>
	<header id="header" class="clear"> 
      <div align="left">
        <h1><a href="home.php">JOBSEARCH</a></h1>
      </div>
      <div class="fl_right" align="right">
         <form class="clear" method="post" action="/me/submit.php">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<title>JOBSEARCH | APPLICATION PAGE</title>
<meta charset="utf-8">

    <div align="right">
      <ul class="faico clear">
        <p><i class="icon circle fa fa-angellist "></i><?php echo $_SESSION['email']; ?></p>
        <a href="login.php" title="Login"><i class="fa fa-sign-in"></i></a>
        <a href="signuppg.php" title="Register"><i class="fa fa-user-plus"></i></a>
        <a href="logout.php" title="Logout"><i class="fa fa-sign-out"></i></a>
      </ul>
    </div>
  </div>
</div>
</head>
<body>
<h3>apply here</h3>
<form action="submit.php" method="POST">
   <div class="row">
  <div class="col-75">
<label for="name">
	Name:</label><input type="text" name="fname"placeholder="your name"required></br>
  </div>
</br>

<div class="row">
      <div class="col-75">
        <label for "Job type">
	Job type: </label><input type="text" name="jobtype"placeholder="Type of Job.."required</br>
  </div>
    </div>
</br>

<div class="row">
      <div class="col-75">
	<label for"position">Position: </label><input type="text" name="position"placeholder="position"required></br>
</br>

<div class="row">
      <div class="col-75">
        <label for"qualification">Qualifications:</label><input type="text" name="qualification"placeholder="your qualifications"required>
      
      </br></br></br>



<div class="row">
      <div class="col-25">
<label for="more"> More about yourself :</label>
 </div>
 <div class="col-75">
<textarea id="more" name="more" placeholder="Write something about yourself.." style="height:200px"required></textarea>
      </div>
    </div>
</br>
<div class="row">
	<input type="submit" name="apply" value="APPLY">
  </div>
</form>
</div>
</body>
</html>