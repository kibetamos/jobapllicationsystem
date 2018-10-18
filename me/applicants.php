<style>
    body{
        background-color: skyblue;
    }
    table{
        border-collapse: collapse;
    }
</style>
<?php
$link = mysqli_connect("localhost", "root", "", "jobsearch");
 
// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
 

$sql = "SELECT * FROM applications ORDER BY fname DESC LIMIT 100 ";
if($result = mysqli_query($link, $sql)){
    if(mysqli_num_rows($result) > 0){
        echo "<table border=";">";
            echo "<tr>";
                echo "<th>NAME</th>";
                echo "<th>JOBTYPE</th>";
                echo "<th>POSITION</th>";
                echo "<th>QUALIFICATION</th>";
                echo "<th>MORE ABOUT YOU</th>";
            echo "</tr>";
        while($row = mysqli_fetch_array($result)){
            echo "<tr>";
                echo "<td>" . $row['fname'] . "</td>";
                echo "<td>" . $row['jobtype'] . "</td>";
                echo "<td>" . $row['position'] . "</td>";
                echo "<td>" . $row['qualification'] . "</td>";
                echo "<td>" . $row['more'] . "</td>";
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
</body>
</html>