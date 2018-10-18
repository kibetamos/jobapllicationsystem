<?php	

$db=mysqli_connect("localhost", "root","")  or die ("Could not connect to database");
mysqli_select_db($db,'jobsearch') or die('Error selecting database : ' . mysql_error());
    
$names = $_POST['names'];
$job = $_POST['job'];
$qualifications = $_POST['qualifications'];
$experience = $_POST['experience'];
$other = $_POST['other'];

if ($names == "" || $job == "" || $qualifications == "" || $experience == "" || $other == "")
{
    echo("<script>alert('You cannot have empty fields')</script>");
     echo("<script>window.location = 'jobseeker.html';</script>");
}
else
{

  $result = mysqli_query($db,"INSERT INTO jobseeker(Names,Position,Qualifications,Experience,More_info)VALUES('$names','$job','$qualifications','$experience','$other')");
    
    

    if ($result)
{
    echo("<script>alert('Data successfully inserted')</script>");
   echo("<script>window.location = 'pages/jobseekerpage.php';</script>");    

}
else
{
    echo("<script>alert('Error in data entry')</script>");
    echo("<script>window.location = 'jobseeker.php';</script>");
}
}




?>s