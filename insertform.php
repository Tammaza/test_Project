<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>insert</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
</head>
<body>
    
   <div class="container my-3">
   <h2 class="text-center">แบบฟอร์มบันทึกข้อมูล</h2>

<form action="insertdata.php" method="POST">

    <div class="form-group">
        <label for="">firstname</label>
        <input type="text" name="fname" id="" class="form-control my-1">
    </div>

    <div class="form-group">

        <label for="">lastname</label>
        <input type="text" name="lname" id="" class="form-control my-1">
    </div>

    <div class="form-group">
        <label for="gender">Gender</label>
        <input type="radio" name="gender" value="male">male
        <input type="radio" name="gender" value="female">female
        <input type="radio" name="gender" value="other">other 
    </div>

    <div class="form-group">
        <label for=""> skill </label>
        <input type="checkbox" name="skill[]" value="javas"> java
        <input type="checkbox" name="skill[]" value="php"> php
        <input type="checkbox" name="skill[]" value="Phython"> Phython
        <input type="checkbox" name="skill[]" value="HTML"> HTML
    </div>

    <input type="submit" value="save data" class="btn btn-success">
    <input type="reset" value="reset" class="btn btn-danger">
    <a href="index.php" class="btn btn-primary">กลับหน้าแรก</a>
</form>

   </div>

    
</body>
</html>