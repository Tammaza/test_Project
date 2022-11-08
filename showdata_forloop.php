<?php
require('dbconnect.php');

$sql= "SELECT * FROM employees";
$result=mysqli_query($connect,$sql);

$count = mysqli_num_rows($result); //จำนวนแถวที่ไปดึงจากฐานข้อมูล


for($i=0;$i<$count;$i++){
    $row =mysqli_fetch_object($result);
    echo "id : ". $row-> ID ."<br>";   
    echo "firstname : ".$row->fname."<br>";
    echo "lastname : ".$row->lname."<br>";
    echo "gender : ".$row->gender."<br>";
    echo "skill : ".$row->skill."<br>";
    echo("<hr>");
}


?>