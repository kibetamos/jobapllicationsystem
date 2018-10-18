<?php	

$db=mysqli_connect("localhost", "root","")  or die ("Could not connect to database");
mysqli_select_db($db,'jobsearch') or die('Error selecting database : ' . mysqli_error());

 
    
$email = $_POST['email'];
$password = $_POST['psw'];
$repass = $_POST['repsw'];
$category = $_POST['category'];

$robottxt = $_POST['ntrobot'];
$mytext =$_POST['mytext'];


$passwordc =  crypt($password);


if ($email == "" || $password == "" || $repass == "" || $category =="")
{
    echo("<script>alert('You cannot have empty fields')</script>");
     echo("<script>window.location = 'recovery.php';</script>");
}

 
elseif($category=="jobseeker"&& $category =="employer")
{
    echo("Select only one category");   
}

elseif($password != $repass)
{
    echo("<script>alert('Your passwords do not match.')</script>");  
    echo("<script>window.location = 'recovery.php';</script>");
}
elseif($robottxt != $mytext)
{
    echo("<script>alert('Your Robot Text Failed.')</script>");  
    echo("<script>window.location = 'recovery.php';</script>");
}
else
{

  $result = mysqli_query($db,"UPDATE `users` SET `Email`= '$email',`Password`='$passwordc',`Category`='$category' WHERE Email = '$email'");
    
  $result = mysqli_query($db,"UPDATE `test` SET `Email`= '$email',`Password`='$password',`Category`='$category' WHERE Email = '$email'");   

    if ($result)
{
    echo("<script>alert('Password Successfully changed')</script>");
        if($category =="jobseeker")
        {
   echo("<script>window.location = 'login.php';</script>");
        }
        elseif ($category =="employer")
        {
            echo("<script>window.location = 'login.php';</script>");
        }
}
else
{
    echo("<script>alert('Error in data entry')</script>");
    echo("<script>window.location = 'recovery.php';</script>");
}
}




?>