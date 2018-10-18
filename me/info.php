<?php	

$db=mysqli_connect("localhost", "root","")  or die ("Could not connect to database");
mysqli_select_db($db,'jobsearch') or die('Error selecting database : ' . mysql_error());
    
$name=$_POST['name'];

$info=$_POST['info'];

if ($name == "" || $info == "")
{
    echo("<script>alert('You cannot have empty fields')</script>");
     echo("<script>window.location = 'jobseekerpage.php';</script>");
}
else
{
  $result = mysqli_query($db,"INSERT INTO `feedback`(`name`,  `info`) VALUES ('$name','$info')");
    
    

    if ($result)
{
    echo("<script>alert('Data successfully inserted')</script>");
   echo("<script>window.location = 'jobseekerpage.php';</script>");
        
         echo(" name: ". $_POST['name'] ."<br>");
   
    echo("jobadvert: " . $_POST['info']. "<br>");
    

}
else
{
    echo("<script>alert('Error in data entry')</script>");
    echo("<script>window.location = 'jobseekerpage.php';</script>");
}
}




?>