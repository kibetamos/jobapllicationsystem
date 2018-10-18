<?php  
session_start();  
  
if(!$_SESSION['email'])  
{  
  
    header("Location: login.php");  
}  
  
?> 
<!DOCTYPE html>
<html>
<head>
  <style>
  form {
    border: 3px solid #f1f1f1;
    align-content: center;
    text-align: center;
}

body {
  background-color:#bbb;
}
h1   {color: blue;}
p    {color: black;
      font-family: ;}
.column {
    float: left;
    width: 33.33%;
    padding: auto;}
.form{
  box-sizing: 100%;
}
.row{
  float: 
}
</style>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>homepage</title>
  <link rel="stylesheet" type="text/css" href="main.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
  <div class="social" align="right">
              <a href="https://www.facebook.com/Amos Mark"><i class="fa fa-facebook-square" style="color:navy; font-size:22px"></i></a>
              <a href="https://plus.google.com/u/0/+amoskilel"><i class="fa fa-google-plus-square" style="color: red; font-size:22px"></i></a>
              <a href="https://twitter.com/"><i class="fa fa-twitter-square" style="color:cyan; font-size:22px"></i></a>
            </div>
          </div>
        </div>
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
  <div class="topnav">
  <a class="active" href="home.php">Home</a>
  <a href="jobseeker.php">Jobseeker page</a>
  <a href="employerpage.php">Employer page</a>
  <a href="contactus.php">contact us</a>
  <div class="topnav-right">
    <a href="employerpage1.php">Search</a>
    
    <a href="https://www.google.co.ke/maps/place/Madaraka+Central+Court/@-1.307357,36.8133295,17z/data=!3m1!4b1!4m5!3m4!1s0x182f10f9f2ea8a3b:0xe4a075a77652b78b!8m2!3d-1.3073624!4d36.8155182?hl=en" target="_blank">Offices Location</a>
  </div>
</div>
  <p>This is a system which allows jobseekers to input their qualifications and  get the jobs posted by employees</p>
  <img src="picture.png">
  <p>This is a page dedicated to the jobseekers where they can interact in  comments by other jobseekers who have found jobs courtesy of this website and jobseekers waiting to find jobs in this website.</p>
   <body id="indexbody" data-spy="scroll" data-target=".navbar" data-offset="60">
<div class="bmsTop" align="center">
        <li style="font-size: 15px; font-weight: bold">Top Recruiters:</li>
        <a href="#" target="_blank">
                <img src="3.gif" border="0">
            </a>
        <a href="#" target="_blank">
                <img src="2.gif" border="0">
            </a>
        <a href="#" target="_blank">
                <img src="5.gif" border="0"></a>
        
        <a href="#" target="_blank">
                <img src="4.gif" border="0"></a>
        <a href="#" target="_blank">
                <img src="1.gif" border="0"></a>
      
    
</div>
        <p>There are rules which govern the functionality of this page specifically. and they are well stipulated in the licensing of the website</p>
        <p>This is the comments section from the jobseekers.</p>
        <h1><hr></h1>
   
         <div class="column">
        <article>
          <h3> &nbsp; Global</h3>
          <p class="nospace"> This site joins people from the diffrerent parts of the world by creating a platform accessible from any internet conneceted device. <a href="#">read more &raquo;</a></p>
        </article>
      </div>
      <div class="row">
      <div class="column">
        <article>
          <h3> &nbsp; Available whenever needed</h3>
          <p class="nospace">In cases of any editing of the site notifications will be available in the news section. <a href="#">read more &raquo;</a></p>
        </article>
      </div>
      <div class="column">
        <article>
          <h3 > &nbsp; Fast and Convinient</h3>
          
<p class="nospace">This site has been well hosted to ensure that it does not lagg when being used. It been made using the latest and best database available in the market <a href="#">read more &raquo;</a></p>
        </article>
    </div>
<p>KEY PARTNERS AND A BRIEF ABOUT THEM </p>
<div class="column">
<div class="one_half first">
     
      
        <ul class="nospace services right">
          <li>
            <article><i class="icon circle fa fa-magic"></i>
              <h6 class="heading font-x1"><a href="#">Danilop Company</a></h6>
              with Danilop Company to ensure that people find jobs wherever they are as long as they are near a Danilop Branch.</p>
            </article>
<article><i class="icon circle fa fa-magnet"></i>
              <h6 class="heading font-x1"><a href="#">Hardware CraftStore</a></h6>
              <p>Hardware CraftStore being a leading and growing company in the country, they decided to partner with us to ensure that they find workers all over the country with ease.</p>
            </article>
          </li>
          <li>
            <article><i class="icon circle fa fa-bank"></i>
              <h6 class="heading font-x1"><a href="#">National Library</a></h6>
              <p>The most used and most reliable library in the country through their CEO Hon.Labure saw the need to partner with us to find qualified workers all over the country wth much ease.</p>
            </article>
          </li>
        </ul>
      </div>
      <div class="row">
      <div class="colun">
        <ul class="nospace services">
          <li>
            <article><i class="icon circle fa fa-mortar-board"></i>
              <h6><a href="#">Graduants Society </a></h6>
              <p>Most graduants in the country in most times find it hard to easily find jobs within or outside the country. Due to this the Graduants society partnered with us to help in ensuring that their customers find jobs.</p>
            </article>
          </li>
          <li>
            <article><i class="icon circle fa fa-book"></i>
              <h6 class="heading font-x1"><a href="#">Writters Club </a></h6>
              <p>The writters club in the country partnerd with us at first under the national library but later bought enough shares to become certified partners. This ensures that they can sell their products and also sponsor the website.</p>
            </article>
          </li>
          <li>
            <article><i class="icon circle fa fa-pie-chart"></i>
              <h6 class="heading font-x1"><a href="#">Data Analytics Society</a></h6>
              <p>In order to ensure that our users get the best out of their job search hustle we partnered with Data Analytics Scoiety to gain a better prediction on the areas with available jobs. They give a summarised evaluation and presentation of where to posssibly find jobs in the country.</p>
            </article>
          </li>
        </ul>
      </div>
  </div>\
</div>
</body>
</html>

