<?php

require("dbconnect.php");
$id = $_POST["idemployee"];

$sql="DELETE FROM employees WHERE id =$id";

$result=mysqli_query($connect,$sql);

if($result){
    header("location:index.php"); //เรียกว่าการ Redirect
    exit(0);
}else{
    echo "FAILED TO DELETE";
}


?>