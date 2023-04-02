<?php 
include '../../include/config.php';

$send_btn = $_POST['send_btn'];


if(isset($send_btn)) {
    $send_btn = $_POST['send_btn'];
    $name = $_POST['name'];
    $username = $_POST['username'];
    $password = sha1($_POST['password']);
    $job = $_POST['job'];

   


    $sql = "INSERT into employee (name,username,password,job)
    VALUES('$name','$username','$password','$job')";
    $result = mysqli_query($conn,$sql);
    echo "<div class='alert alert-success'>"."تمت اضافة البيانات بنجاح "."</div>";
    header("REFRESH:3;URL=../viwe_emp.php");
}




?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
     <!-- Bootstrap -->
     <link rel="stylesheet" href="../css/bootstrap.css">
</head>
<body>
    
</body>
</html>