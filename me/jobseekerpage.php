<?php   
 $connect = mysqli_connect("localhost", "root", "", "jobsearch") or die("Please, check your server connection."); 
$topsearch=$_POST['topsearch'];
$query = "select * from employers where "; 
$query_fields = Array(); $sql = "SHOW COLUMNS FROM ";                               
$columnlist = mysqli_query($connect, $sql) or die(mysql_error());     
while($arr = mysqli_fetch_array($columnlist, MYSQLI_ASSOC))
{         
    extract($arr); $query_fields[] = $Field . " like('%". $topsearch . "%')"; 
} 
$query .= implode(" OR ", $query_fields); 
$results = mysqli_query($connect, $query) or die(mysql_error());
echo "<table border=\"0\" >";
$x=1; 
echo "<tr>"; 
while ($row = mysqli_fetch_array($results, MYSQLI_ASSOC)) 
{ 
    if ($x <= 3) 
    {
        $x = $x + 1; extract($row); 
        echo "<td style=\"padding-right:15px;\">";
        echo "<a href=Employer.php?itemcode=$Conames>";
       
        echo '$job;<br/>';
        echo "</a>"; 
        echo '$'.$qualifications .'<br/>'; 
        echo '$other;</br>';
        echo "</td>"; 
    }
    else 
    {
        $x=1;
        echo "</tr><tr>";
    }
}
echo "</table>";
?>


