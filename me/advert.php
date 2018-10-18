<?php	
error_reporting(0);

$db=mysqli_connect("localhost", "root","")  or die ("Could not connect to database");
mysqli_select_db($db,'jobsearch') or die('Error selecting database : ' . mysql_error());
    
$name=$_POST['name'];
$position=$_POST['position'];
$num=$_POST['num'];
$grade=$_POST['grade'];
$university=$_POST['university'];
$jobadvert=$_POST['jobadvert'];
$validity=$_POST['validity'];

if ($name == "" || $num == "" || $position == "" || $grade == "" || $university =="" ||  $jobadvert == "" || $validity =="")
{
    echo("<script>alert('You cannot have empty fields')</script>");
     echo("<script>window.location = 'employerpage.php';</script>");
}
else
{
  $result = mysqli_query($db,"INSERT INTO `adverts`(`name`, `position`, `num`, `grade`,`university`,`validity`, `jobadvert`) VALUES ('$name','$position','$num','$grade','$university','$validity','$jobadvert')");
    
    

    if ($result)
{
    echo("<script>alert('Job posted successfully')</script>");

   echo("<script>window.location = 'employerpage.php';</script>");
        
         echo(" name: ". $_POST['name'] ."<br>");

    echo("position: " . $_POST['position']. "<br>");

    echo("num: " . $_POST['num']. "<br>");

    echo("grade: " . $_POST['grade']. "<br>");

    echo("university: " . $_POST['university']. "<br>");

     echo("validity: " . $_POST['validity']. "<br>");

    echo("jobadvert: " . $_POST['jobadvert']. "<br>");
}
else
{
    echo("<script>alert('Error in data entry')</script>");
    echo("<script>window.location = 'employerpage.php';</script>");
}
}
?>