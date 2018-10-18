<?php   
error_reporting(0);

$db=mysqli_connect("localhost", "root","")  or die ("Could not connect to database");
mysqli_select_db($db,'jobsearch') or die('Error selecting database : ' . mysql_error());
    
$fname=$_POST['fname'];
$jobtype=$_POST['jobtype'];
$position=$_POST['position'];
$qualification=$_POST['qualification'];
$more=$_POST['more'];

if ($fname == "" || $position == "" || $jobtype == "" || $qualification == "" || $more =="")
{
    echo("<script>alert('You cannot have empty fields')</script>");
     echo("<script>window.location = 'application.php';</script>");
}
else
{
  $result = mysqli_query($db,"INSERT INTO `applications`(`fname`, `jobtype`, `position`,`more`, `qualification`) VALUES ('$fname','$jobtype','$position','$more','$qualification')");
    
    

    if ($result)
{
    echo("<script>alert('Job applied successfully')</script>");
   echo("<script>window.location = 'application.php';</script>");
        
         echo(" fname: ". $_POST['fnames'] ."<br>");
    echo("jobtype: " . $_POST['jobtype']. "<br>");
    echo("position: " . $_POST['position']. "<br>");
     echo("more: " . $_POST['more']. "<br>");
    echo("qualification: " . $_POST['qualification']. "<br>");
   
    

}
else
{
    echo("<script>alert('Error in data entry')</script>");
    echo("<script>window.location = 'application.php';</script>");
}
}




?>