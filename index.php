<?php
require('dbconnect.php');

$sql= "SELECT * FROM employees";
$result=mysqli_query($connect,$sql);

$count =mysqli_num_rows($result); //ถ้าจำไม่ได้อันนี้ใส่เพราะต้องการให้เวลาที่ไม่มีพนักงานอยู่เลยจะทำให้ไม่ต้องแสดงtable 
$order = 1;
?>




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ข้อมูลพนักงาน</title>
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
</head>
<body>
    <div class="container">
    <h1 class = "text-center">ข้อมูลพนักงานในฐานข้อมูล</h1>
        

    <?php  if($count >0){ ?>

        <form action="deletetextfield.php"class="form-group" method="POST">
        <label class="my-1" for="">Employee ID</label>
        <input type="text" name="idemployee" placeholder="input ID_NUMBER to delete" class="form-control">
        <input type="submit" value="Delete" class="btn btn-danger my-2">
    </form>
    <table class="table table-dark">
        <thead>
            <tr>
               <th>NO.</th>
               <th>name</th>
               <th>lastname</th>
               <th>gender</th>
               <th>skill</th>
               <th>edit</th>
            </tr>
        </thead>
        <tbody>
            <?php while($row=mysqli_fetch_row($result)) {?>
            <tr>
                <td><?php echo $order++ ;?></td>         <?//เป็นการแสดงลำดับที่ (ตอนแรกใช้rowแล้วมันแสดงเลขไอดีแล้วไม่สวย)?>
                <td><?php echo $row[1] ;?></td>
                <td><?php echo $row[2] ;?></td>
                <td><?php echo $row[3] ;?></td>
                <td><?php echo $row[4] ;?></td>
                <td>
                    <a href="editform.php" class="btn btn-primary">edit</a>

                </td>
            </tr>
            <?php } ?>
        </tbody>
    </table>  

     <?php } else { ?>
        <div class="alert alert-danger" role="alert">    //อันนี้ใช้ bootstrap

          NODATA
        </div>

     <?php }?>

    <a href="insertform.php" class="btn btn-success">บันทึกข้อมูลพนักงาน</a>

    </div>
    
</body>
</html>