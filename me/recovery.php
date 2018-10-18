<!DOCTYPE html>
<html>
<head>
<style>
input[type=text], input[type=password] {
    width: 100%;
    padding: 12px 20px;
    margin: 8px 0;
    display: inline-block;
    border: 1px solid #ccc;
    box-sizing: border-box;
}
body{
  background-color: skyblue;
  box-sizing: 50%;
  
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
  <?php 

  function generateRandomString($length = 10) {
    $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
    $charactersLength = strlen($characters);
    $randomString = '';
    for ($i = 0; $i < $length; $i++) {
        $randomString .= $characters[rand(0, $charactersLength - 1)];
    }
    return $randomString;
}


  ?>
<title>JOBSEARCH | Recovery</title>
<meta charset="utf-8">
    <script> function validateemail() 
        { 
            var x=document.signup.email.value; 
            var atposition=x.indexOf("@"); 
            var dotposition=x.lastIndexOf("."); 
            if (atposition<1 || dotposition<atposition+2 || dotposition+2>=x.length){ 
                alert("Please enter a valid e-mail address \n atpostion:"+atposition+"\n dotposition:"+dotposition); 
            return false; 
            } 
        } 
    </script>
</head>
<body>

<div class="wrapper row1">
  <div class="spacer">
    <header id="header" class="clear"> 
     
      <div id="logo" class="fl_left">
        <h1><a href="home.php">JOBSEARCH</a></h1>
      </div>
    </header>
  </div>
</div>
<h2><center>Forgot password</center></h2>
      <div class="content"> 
<form action="saverecovery.php" style="border:1px solid #ccc" method = "post">
  <div class="container">
    <p><h3>THIS IS THE CHANGE PASSWORD FORM</p></h3><br />
    <label><b>Email</b></label>
    <input type="text" placeholder="Enter Email" name="email" id ="emailmsg" required>

    <label><b>Password</b></label>
    <input type="password" placeholder="Enter Password" name="psw" id= "passwdmsg" required>

    <label><b>Repeat Password</b></label>
    <input type="password" placeholder="Repeat Password" name="repsw" id="repasswdmsg" required>
    <center>Sign up as either jobseeker or employer</center>
    <input type="radio" name="category" value="jobseeker"> Jobseeker
    <input type="radio" name="category" value="employer"> Employer
   <p>Enter the Text genereated below to confirm you ae not a robot</p>
    <input type="text" name="ntrobot" value="<?php echo  generateRandomString(); ?>"></input> <p>Here is what i read</p><input type="text" name="mytext">
   
    <p>By creating an account you agree to our <a href="#">Terms & Privacy</a>.</p>

    
      <input type="submit" name="Submit" action="saverecovery.php"> 
      
    </div>
  </div>
</div>
</div>
</div>
</form>


</body>
</html>
