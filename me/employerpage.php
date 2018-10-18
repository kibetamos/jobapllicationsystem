
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
  *{
    box-sizing: border-box;
  }
.column {
    float: left;
    padding: 10px;
}

/* Left and right column */
.column.side {
    width: 25%;
}

/* Middle column */
.column.middle {
    width: 50%;
}

/* Clear floats after the columns */
.row:after {
    content: "";
    display: table;
 
    clear: both;

}
table{
  border-collapse: collapse;
}



/* Responsive layout - makes the three columns stack on top of each other instead of next to each other */
@media screen and (max-width: 600px) {
    .column.side, .column.middle {
        width: 100%;
    }
}
body{
    background-color: skyblue;
  margin: 10px;
  background-image: url("em.jpg");
  }
  label{
    box-sizing: 50px;
    sp
  }
  .button {
  display: inline-block;
  border-radius: 15px;
  background-color: black;
  border: none;
  color: #FFFFFF;
  text-align: center;
  font-size: 28px;
  padding: 20px;
  width: 600px;
  transition: all 0.5s;
  cursor: pointer;
  margin: 5px;
}

.button span {
  cursor: pointer;
  display: inline-block;
  position: relative;
  transition: 0.5s;
}

.button span:after {
  content: '\00bb';
  position: absolute;
  opacity: 0;
  top: 0;
  right: -20px;
  transition: 0.5s;
}

.button:hover span {
  padding-right: 25px;
}

.button:hover span:after {
  opacity: 1;
  right: 0;
}

  </style>
<title>Jobsearch |  Empolyer page</title>
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
<div>
  <div>
    <header id="header" class="clear"> 
      <div align="left">
        <h1><a href="home.php">JOBSEARCH</a></h1>
      </div>
      
<div class="row">
  <div class="column side">  
          <h2>For jobs update quick vetting</h2>
          <p>
          <address>
          Call<br>
          0727824180<br>
          Or contact<br>
          <a href="https://www.linkedin.com/in/amos-kibet-b83681167/">Kibet Amos<br>
          <br>
          Tel: (020)-775 372 <br>
          Email: <a href="https://mail.google.com/mail/ca/u/0/#sent">kibetamos511@gmail.com</a>
          </address>
        </div>
      <div class="row">
      <div class="column middle"> 
        <h1>This is the employers page</h1>
        <p>This is  the page where employers jobs are posted by the administrator of the website. The jobs advertsements found here have been carefully vetted and analysed to ensure that they fit here.</p>
        <p>For a potential employer to have their jobs vacancies posted here, they will have to confirm that the jobs are legit and agents of the webidte send physically to the location to ensure that the record given here is true</p>
        <p>Job seekers are assured of finding the job vacancies on this page or another directed page to websites we have partnered with. The employer gives their contacts which is included in the job advertisement section below<p>
            </div>
             <div class="row">
          <div class="column side">
            <h2>To feature here</h2>
            <p>This section belongs to any member of the employers group <br>of the website who might be in a haste to get employees.To feature in this section , a fee of $50 is charged.</p>
</div>
</div>
</div> 

        <p>Below is the job advertisement section which has the jobs posted in groups of their location.</p>
        <h4>Job adverts</h4>
    
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
                    echo "<th>QUALIFICATION</th>";
                echo "<th>JOB ADVERT</th>";
                echo "<th>VALID TILL</th>";
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
          
          </ul>
          <h2>Send your advert</h2>
          <form action="advert.php" method="post" id = "advert">
            <div class>
            </br>
              <label for="name">Name <span></span></label>
              <input type="text" name="name" id="name" value="" size="28"required>
            </div>
            </br>
            <div class">
              <label for="position">Vacant Position <span></span></label>
              <input type="text" name="position" id="position" value="" size="28"required>
            </div>
               </br>
            <div >
              <label for="num">Number</label>
              <input type="text" name="num" id="num" value="" size="28"required>
            </div>
            </br>
            <label for="grade">Form 4 grade <span></span></label>
              <input type="text" name="grade" id="grade" value="" size="28"required>
            </div>
            </br>
            <label for="university">University qualification<span></span></label>
              <input type="text" name="university" id="university" value"" size="28"required>
            </div>
            </br>
             <div>
              <label for="validity">Valid till date <span></span></label>
              <input type="date" name="validity" id="validity" value="" size="28">
            </div>
            </br>
            <div class="block clear">
              <label for="comment">Your Job advert</label>
            </div><br>
              <textarea name="jobadvert" id="jobadvert" cols="70" rows="10"></textarea>
            </div>
    
        
            <div>
              <input  name="submit" type="submit" value="Send JobAdvert">
             </br> 
         </br>
              <input name="reset" type="reset" value="Reset JobAdvert">
            </div>
          </form>
           <script type="text/JavaScript">
     
});
</script>
        </div>
      </div>
      <div class="clear"></div>
    </main>
  </div>
</div> 
   <form action="applicants.php">
   <button class="button" style="vertical-align:middle;"><span>Check applications</span></button>
   </form>

</body>
</html>