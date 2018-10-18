<?php  
session_start();  
  
if(!$_SESSION['email'])  
{  
  
    header("Location: ../login.php");//redirect to login page to secure the welcome page without login access.  
}  
  
?> 
<!DOCTYPE html>
<html>
<head>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<title>contact us</title>

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
	<style>
table{
  box-sizing: content-box;
    border-collapse: collapse;
    width: 80%;
}

table, th, td {
    border: 1px solid black;
}
	body{
		background-color: skyblue;
    background-image: url("emplo.jpg");
	}
div {
    padding: 5px;
    width: 90%;
}

  fieldset{
   border: solid 2px white;  
   float:left;

}


.clearfix {
    overflow: auto;
}

.img2 {
    float: right;}
  * {
    box-sizing: border-box;
}
	.column {
    float: left;
    padding: 10px;
    height: 300px; /* Should be removed. Only for demonstration */
}

.left {
  width: 30%;
}

.right {
  width: 70%;
}

/* Clear floats after the columns */
.row:after {
    content: "";
    display: table;
    clear: both;
}
.row:after {
    content: "";
    display: table;
    clear: both;
	</style>
</head>
<body>

	<h3 align="center">Welcome to our contact -us page</h3>
	<div id="main" align="center">
	<div id="d1">
<div class="clearfix">
<img class="img2" src="pic1.jpg" alt="jobserach" width="170" height="170">This is the page which users get inforation on how to get back to us with views and comments on what you think will help out in the site.
Contact us on our email by clicking here or on our facebook page by clicking here or on our twitter account by clicking here or on our googleplus account by clicking here Or better still leave your comment or comments on the comment section below.
...</div>
</div>
<div class="row">
	<div class="column left"
	style="background-color:#aaa">
<p>We have a set of rules which govern the way this website operates so as to act as a guide to the people leaving their comments here or giving their views on our website. rules and regulations governing the usability of this website. However, for the full terms and conditions of the website visit this port</p>
</div>
<div class="column right"
style="background-color:#bbb">
<p>You can use this section to give views of things you think shold be included in the update version of the website. Your views will be greately appreciated because this is a website developed to suit the use in its effort to fullfill its functonality. Our progress on the update of the website can be found on this page on the website.
Over the time, the most occuring comments have been grouped and analysed into categores as per the following table.</p>
		
</div>
</div>
</div>
	<h1 align="vertical">Description from other countries</h1>
        <div class="scrollable">
          <table >
            <thead>
              <tr>
                <th>Location</th>
                <th>Graphic</th>
                <th>Transition</th>
                <th>Delivery</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td><a href="#">Outside East Africa</a></td>
                <td>Perfect</td>
                <td>Perfect</td>
                <td>Perfect</td>
              </tr>
              <tr>
                <td><a href="#">Kenya</td>
                <td>Good</td>
                <td>Perfect</td>
                <td>Good</a></td>
              </tr>
              <tr>
                <td><a href="#">Uganda</td>
                <td>Perfect</td>
                <td>Perfect</td>
                <td>Good</td>
              </tr>
              <tr>
                <td><a href="">Tanzania</td>
                <td>Heavy</a></td>
                <td>Perfect</td>
                <td>Perfect</td>
              </tr>
            </tbody>
          </table>
        </div>
       
            <div class="one_quarter">
        <h4 class="title">Send us your contact for guidance</h4>
        <form method="post" action="guidance.php">
          <fieldset style="width: 80%;">
            <legend>Newsletter:</legend>
            <input class="btmspace-15" type="text" value="" name="name" placeholder="name"></input></br></br></br>
            <input class="btmspace-15" type="text" value="" name="email" placeholder="email">
            </br></br></br>
           <input class="btmspace-15" type="text" value="" name="field" placeholder="how can we help you...">
                 </br></br></br>
            <button type="submit" value="submit">Submit</button>
          </fieldset>
        </form>
      </div>
    </footer>
  </div>
</div>
     
  
      <div class="clear"></div>
    </main>
  </div>
</div>
</body>
</html>