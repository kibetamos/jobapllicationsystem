<!DOCTYPE html>
<html>
<head>
<style>
  label {
  width:200px;
  display: inline-flex;
  display:block ; 
  float:left
}

/* Full-width input fields */
input[type=text], input[type=password] {
    width: 50%;
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
li{
  vertical-align: text-top;
}

/* Extra styles for the cancel button */
.cancelbtn {
    padding: 14px 20px;
    background-color: #f44336;
}

/* Float cancel and signup buttons and add an equal width */
.cancelbtn,.signupbtn {
    float: left;
    width: 40%;
    vertical-align: center;
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
@media screen and (max-width: 300px) {
    .cancelbtn, .signupbtn {
       width: 50%;
    }
}
body{
  background-color: skyblue;
}
#borderimg { 
    border-image: url(border.png) 30 round;
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
<title>JOBSEARCH</title>
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
  <div>
    <header> 
        <h1><a href="home.php">JOBSEARCH</a></h1>
    </header>
  </div>
</div>
<h2><center>Sign up Form</center></h2>
<div class="wrapper row3">
  <div class="spacer">
    <main class="container clear"> 
      
      <div class="content"> 
<form action="signup.php" style="border:1px solid #ccc" method = "post">
  <div class="container">
    <p><h3>SIGN UP HERE</p></h3><br />
    <label><b>Email</b></label>
    <input type="text" placeholder="Enter Email" name="email" id ="emailmsg" required>
</br>
</br>
    <label><b>Password</b></label>
    <input type="password" placeholder="Enter Password" name="psw" id= "passwdmsg" required>
</br>
</br>
    <label><b>Repeat Password</b></label>
    <input type="password" placeholder="Repeat Password" name="repsw" id="repasswdmsg" required>
</br>
</br>

    <p>Sign up as either jobseeker or employer</p>
    </br>
</br>
    <input type="radio" name="category" value="jobseeker"> Jobseeker
    <input type="radio" name="category" value="employer"> Employer
 <p>Enter the Text genereated bellow to confirm you ae not a robot</p></br>
</br>
     <input type="text" name="ntrobot" style="font-family:italic;" value="<?php echo  generateRandomString(); ?>"></input> <p>Here is what i read</p><input type="text" name="mytext">
   </br>
</br>
    <p>By creating an account you agree to our <a href="#">Terms & Privacy</a>.</p>
</br>
</br>
    <div class="clearfix">
      <button type="cancelbtn" class="cancelbtn">Cancel</button>
      <button type="submit" class="signupbtn">Sign Up</button>
    </div>
  </div>
</div>
</div>
</div>
</form>

</body>
</html>
