<!DOCTYPE html>
<html>
<style>
form {
    border: 9px solid #f1f1f1;
    align-content: center;
    text-align: center;
    
}

input[type=text], input[type=password] {
    width: 50%;
    padding: 12px 20px;
    margin: 16px 0;
    display: inline-block;
    border: 1px solid #cccc;
    box-sizing: auto;
}

button {
    background-color: black;
    color: white;
    padding: 14px 20px;
    margin: 16px 0;
    border: none;
    cursor: pointer;
    width: 80%;
}

button:hover {
    opacity: 0.8;
}

.cancelbtn {
    width: auto;
    padding: 10px 18px;
    background-color: #f44336;
}

.imgcontainer {
    text-align: center;
    margin: 24px 0 12px 0;
}

img.avatar {
    width: 30%;
    border-radius: 50%;
}

.container {
    padding: 32px;
}

span.psw {
    float: right;
    padding-top: 16px;
}

/* Change styles for span and cancel button on extra small screens */
@media screen and (max-width: 300px) {
    span.psw {
       display: block;
       float: none;
    }
    .cancelbtn {
       width: 50%;
    }
}
body{
  background-color: skyblue;
  border-color: black;
  box-sizing: content-box

}
.container{
  align-items: center;
  box-sizing: 40%;
  box-shadow: 30px;
  border-color: black;
}

</style>


<head>
<title>JOBSEARCH | Login </title>

</head>
<body>
  </div>
</div>
<div class="wrapper row1">
  <div class="spacer">
    <header id="header" class="clear"> 
      <div id="logo" class="fl_left">
        <h1><a href="home.php">JOBSEARCH</a></h1>
      </div>
    </header>
  </div>
</div>

</div>
<h2><center>Login Form</center></h2>
<div class="wrapper row3">
  <div class="spacer">
    <main class="container clear"> 
      <div class="content"> 

<form action="login1.php" method="post">

  <div class="imgcontainer">
    <p><h3>LOGIN HERE</h3></p>
    <img src="login.png" alt="Avatar" class="avatar">
  </div>

  <div class="container">
    <label><b>Email</b></label>
    <input type="text" placeholder="Enter email address" name="email" required>
</br>
</br></br>
    <label><b>Password</b></label>
    <input type="password" placeholder="Enter Password" name="psw" required>
    

    <button type="submit" name="submit" >Login</button>
    <span class="psw">Forgot <a href="recovery.php">password?</a></span><br/>

    <input type="checkbox" checked="checked"> Remember me
  </div>

  <div class="container" style="background-color:rgba(215,215,215,1)">
    
    <span class="psw">Have no account? <a href="signuppg.php">Sign Up Here</a></span><br/>
    
  </div>
</form>
</div>
</div>
</div>
<div class="wrapper row5">
  <div class="spacer">
    <footer id="footer" class="clear"> 
   
    
      <div class="one_quarter">
        <h6 class="title">Hosted by</h6>
        <ul class="nospace linklist">
          <li><a href="http://www.gmail.com">Amos kibet</a></li>
          
              </ul>
      </div>
     
     

</body>

</html>
