<?php

require('dbconnect.php');

$sql= "SELECT * FROM employees";
$result=mysqli_query($connect,$sql);

//------------คนที่1-------------------------
$row=mysqli_fetch_row($result);
echo "id : ".$row[0]."<br>";
echo "firstname : ".$row[1]."<br>";
echo "lastname : ".$row[2]."<br>";
echo "gender : ".$row[3]."<br>";
echo "skill : ".$row[4]."<br>";
echo "<hr>";
//-------------คนที่2------------------------
$row=mysqli_fetch_row($result);
echo "id : ".$row[0]."<br>";
echo "firstname : ".$row[1]."<br>";
echo "lastname : ".$row[2]."<br>";
echo "gender : ".$row[3]."<br>";
echo "skill : ".$row[4]."<br>";
echo "<hr>";


?>