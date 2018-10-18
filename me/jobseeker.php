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
* {
    box-sizing: border-box;
}

/* Create two unequal columns that floats next to each other */
.column {
    float: left;
    padding: 10px;
    height: auto; /* Should be removed. Only for demonstration */
}

.left {
  width: 25%;
}

.right {
  width: 75%;
}
body{
background-color:#bbb;
background-repeat: no-repeat;
background-image: url("jobeeker.jpg");
  }
  form {
    border: 3px solid #f1f1f1;
    align-content: center;
    text-align: center;
}

}
* {
    box-sizing: border-box;
}

form.search input[type=text] {
    padding: 10px;
    font-size: 17px;
    border: 1px solid grey;
    float: left;
    width: 80%;
    background: #f1f1f1;

}

form.search button {
    float: left;
    width: 20%;
    padding: 10px;
    background: #2196F3;
    color: white;
    font-size: 17px;
    border: 1px solid grey;
    border-left: none;
    cursor: pointer;
}

form.search button:hover {
    background: #0b7dda;
}

form.search::after {
    content: "";
    clear: both;
    display: table;
    align-self: left;
}
form{
  align-self: left;
}
</style>
	<title>Jobsearch | Job seeker page</title>
<meta name="viewport" content="width=device-width,initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<meta charset="utf-8">

</head>
<body>
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
  <i class="fa-fa-cloud"></i>
	<p>THIS IS THE JOB SEEKER PAGE</p>
  <div>
    <header id="header" class="clear"> 
      <div id="logo" class="fl_left">
        <h1><a href="home.php">JOBSEARCH</a></h1>
      </div>
       
  <form class="clear" method="post" action="/me/employerpage1.php">
          <fieldset>
            <legend>Search:</legend>
            <input type="text" value="topsearch">
            <button class="search" type="submit" title="topsearch" name="topsearch"><em>Search</em></button>
          </fieldset>
        </form>

      <div  class="row">
      <div class="column left">
      <p>This is a page dedicated to the jobseekers where they can interact in  comments by other jobseekers who have found jobs courtesy of this website and jobseekers waiting to find jobs in this website.</p>
      </div>
      <div class="column right">
        <p>There are rules which govern the functionality of this page specifically. and they are well stipulated in the licensing of the website.</p>
        </div>
      </div>
       
      <i class="fa-fa-cloud"></i>
<P>Some of the jobs posted by the employers are as follows</P>
 <?php

$link = mysqli_connect("localhost", "root", "", "jobsearch");
 
// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
 

$sql = "SELECT * FROM adverts ORDER BY id DESC LIMIT 10 ";
if($result = mysqli_query($link, $sql)){
    if(mysqli_num_rows($result) > 0){
        echo "<table border=";">";
            echo "<tr>";
                echo "<th>NAME</th>";
                echo "<th>POSITION</th>";
                echo "<th>NUMBER</th>";
                echo "<th>GRADE</th>";
                echo "<th>UNIVERSITY</th>";
                
                echo "<th>JOB  ADVERT</th>";
                echo "<th>Valid till</th>";
                echo "<th>Apply</th>";
            echo "</tr>";
        while($row = mysqli_fetch_array($result)){
            echo "<tr>";
                echo "<td>" . $row['name'] . "</td>";
                echo "<td>" . $row['position'] . "</td>";
                echo "<td>" . $row['num'] . "</td>";
                echo "<td>" . $row['grade'] . "</td>";
                echo "<td>" . $row['university'] . "</td>";
                echo "<td>" . $row['jobadvert'] . "</td>";
                echo "<td>" . $row['validity'] . "</td>";
                 echo"<td> <button onclick=\"location.href='application.php'\">Click to apply</button> </td>";
            echo "</tr>";
        }
        echo "</table>";
        // Free result set
        mysqli_free_result($result);
    } else{

        echo "No records matching your query were found.";
    }
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}
 
// Close connection
mysqli_close($link);
?>

</body>
</html>