<?php	

$db=mysqli_connect("localhost", "root","")  or die ("Could not connect to database");
mysqli_select_db($db,'jobsearch') or die('Error selecting database : ' . mysqli_error());
    
$email = $_POST['email'];
$password = $_POST['psw'];
$repass = $_POST['repsw'];
$category = $_POST['category'];


$robottxt = $_POST['ntrobot'];
$mytext =$_POST['mytext'];


$passwordc = crypt($password);

if ($email == "" || $password == "" || $repass == "" || $category =="")
{
    echo("('You cannot have empty fields')");
     echo("<'signuppg.php';");
}

elseif($category=="jobseeker"&& $category =="employer")
{
    echo("Select only one category");   
}

elseif($password != $repass)
{
    echo("Your passwords do not match.");  
    echo("signuppg.php");
}
elseif($robottxt != $mytext)
{
    echo("<script>alert('Your Robot Text Failed.')</script>");  
    echo("<script>window.location = 'recovery.php';</script>");
}
else
{

  $result = mysqli_query($db,"INSERT INTO users(Email,Password,Category) VALUES('$email','$passwordc','$category')");
    
    $result = mysqli_query($db,"INSERT INTO test(Email,Password,Category) VALUES('$email','$password','$category')");
    
    

    if ($result)
{
    echo("<script>alert('Account successfully created')</script>");
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
    echo("<script>window.location = 'signuppg.php';</script>");
}
}
?>