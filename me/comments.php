<?php	

$db=mysqli_connect("localhost", "root","")  or die ("Could not connect to database");
mysqli_select_db($db,'jobsearch') or die('Error selecting database : ' . mysql_error());
    
$name=$_POST['name'];
$email=$_POST['email'];
$comments=$_POST['comments'];


if ($name == "" || $email == "" || $comments == "")
{
    echo("<script>alert('You cannot have empty fields')</script>");
     echo("<script>window.location = 'contactus .php';</script>");
}
else
{
  $result = mysqli_query($db,"INSERT INTO `guidance`(`name`, `email`, `comments`) VALUES ('$name','$email','$comments')");
    
    

    if ($result)
{
    echo("<script>alert('Data successfully inserted')</script>");
   echo("<script>window.location = '../home.html';</script>");
        
    echo(" name: ". $_POST['name'] ."<br>");
    echo("email: " . $_POST['email']. "<br>");
    echo("comments: " . $_POST['field']. "<br>");
    
    

}
else
{  
    echo("<script>alert('Error in data entry')</script>");
    echo("<script>window.location = '../home.html';</script>");
}
}




?>