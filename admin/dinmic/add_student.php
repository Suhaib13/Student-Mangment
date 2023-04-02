<?php 
include '../../include/config.php';

$send_btn = $_POST['send_btn'];


if(isset($send_btn)) {
    $send_btn = $_POST['send_btn'];
    $stdName = $_POST['stdName'];
    $stdTel = $_POST['stdTel'];
    $stdAdr = $_POST['stdAdr'];
    $stdMail = $_POST['stdMail'];
    $stdId = $_POST['stdId'];
    $password = sha1($_POST['password']);
    
    $img_std =$_FILES["img_std"]["name"];
    $img_std=date("mdYHis"). '.' . pathinfo($img_std, PATHINFO_EXTENSION); 
    $file_tmp =$_FILES["img_std"]["tmp_name"];
    $upload_file="../../students/images/";
    move_uploaded_file($file_tmp ,$upload_file.$img_std);


    $sql = "INSERT into students (stdName,stdTel,stdAdr,stdMail,stdId,password,img_std)
    VALUES('$stdName','$stdTel','$stdAdr','$stdMail','$stdId','$password','$img_std')";
    $result = mysqli_query($conn,$sql);
    echo "<div class='alert alert-success'>"."تمت اضافة البيانات بنجاح "."</div>";
    header("REFRESH:3;URL=../viwe_std.php");
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