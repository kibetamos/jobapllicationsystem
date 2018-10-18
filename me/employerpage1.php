<?php  
session_start();  
  
if(!$_SESSION['email'])  
{  
  
    header("Location: login.php");//redirect to login page to secure the welcome page without login access.  
}  
  
?> 
<!DOCTYPE html>
<html>
<style>
table, th, td {
    border: 1px solid black;
}
*{
    box-sizing: border-box;
  }
  table{

  }
  fieldset
{
border: 1px solid #781351;
width: 40em
}

legend
{
color: #fff;
background: #bbb;
border: 1px solid #78351;
padding: 2px 6px;
}
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
    background-color: black;
    color: white;
    padding: 14px 20px;
    margin: 8px 0;
    border: none;
    cursor: pointer;
    width: 100%;
}
.cancelbtn {
    padding: 14px 20px;
    background-color: black;
}
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
table{
  border-collapse: collapse;
}
form{
  vertical-align: left;
  box-sizing: 30px;
  }
  body{
    background-image: url("emplyer.jpg");
  
}
</style>

<head>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<title>JOBSEARCH</title>
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

<div class="wrapper row1">
  <div class="spacer">
    <header id="header" class="clear"> 
      
      <div id="logo" class="fl_left">
        <h1><a href="home.php">JOBSEARCH</a></h1>
      </div>
     <div class="fl_right" align="right">
         <form class="clear" method="post" action="/me/employerpage1.php">
          <fieldset >
            <legend>Search:</legend>
            <input type="text" value="" placeholder="Search Here" name="topsearch">
            <button class="fa fa-search" type="submit" title="Search" name="topsearch"><em>Search</em></button>
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

 <table><p href="clickto apply">click  on any to apply</p>
              <tr>
                  <td>Name</td>
                  <td>position</td>
                  <td>number</td>
                  <td>grade </td>
                  <td>university</td>
                  <td>Job Advert</td>
                   <td>Valid till</td>
                   <td>Apply</td>

              </tr>

    <tbody>
      
      <h2><center>Jobs posted by possible employers </center> </h2>
        <?php
        $db=mysqli_connect("localhost", "root","")  or die ("Could not connect to database");
        mysqli_select_db($db,'jobsearch') or die('Error selecting database : ' . mysqli_error());
        
        if(isset($_POST['topsearch']))
        {
            $search = $_POST['topsearch'];
            $search = preg_replace("#[0-9a-z]i#","",$search);      }
        else{
          $_SESSION ['message'] = "Not available";
        }
            $sql3 ="SELECT * FROM adverts WHERE name LIKE '%$search%' OR position LIKE '%$search%' OR num LIKE '%$search%' OR jobadvert LIKE '%$search%'";
            $res = mysqli_query($db,$sql3);

            
        while($row3 = mysqli_fetch_assoc($res))
        {

            echo '<tr>';
            echo '<td>'.$row3['name'].'</td>';
            echo '<td>'.$row3['position'].'</td>';
            echo '<td>'.$row3['num'].'</td>';
            echo '<td>'.$row3['grade'].'</td>';
            echo'<td>'.$row3['university'].'</td>';

            echo '<td>'.$row3['jobadvert'].'</td>';
             echo "<td>" . $row3['validity'] . "</td>";
              echo"<td> <button onclick=\"
              location.href='application.php'\">Click to apply</button> </td>";
              
            echo '</tr>';

        }
        ?>
    </tbody>

 </table>
</div>
</main>
</div>
</div>
</head>
</html>
