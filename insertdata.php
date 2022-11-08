<?php

// connect to database

require('dbconnect.php');

// รับค่า
$fname = $_POST["fname"] ;

$lname = $_POST["lname"] ;

$gender = $_POST["gender"];

$emskill = implode(",",$_POST["skill"]); // array => string
//save data

$sql = "INSERT INTO employees(fname,lname,gender,skill) VALUES('$fname','$lname','$gender','$emskill')";

$result = mysqli_query($connect,$sql); //run  get sql

if($result){
    header("location:index.php"); //เรียกว่าการ Redirect
    exit(0);
}else{
    echo mysqli_error($con);
}

?>