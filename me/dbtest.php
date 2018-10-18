<?php
$link = mysqli_connect('db4free.net, jobsearch', 'geofrey7543');
if (!$link) {
die('Could not connect: ' . mysqli_error());
}
echo 'Connected successfully';
mysqli_close($link);
?>