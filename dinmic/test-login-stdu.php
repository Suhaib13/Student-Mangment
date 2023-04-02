<?php
include '../include/config.php';

$stdId=$_POST['stdId'];

$password=sha1($_POST['password']);

if(empty($stdId) || empty($password) ) {
    echo "<div class='alert alert-danger'>"."الرجاء ملئ البيانات"."</div>";
    header("REFRESH:3;URL=../login-student.php");
}else {
    $sql = "SELECT * from students WHERE stdId='$stdId' AND password='$password'";
    $result = mysqli_query($conn, $sql);
    $count = mysqli_num_rows($result);

    if($count > 0) {
        session_start();
        $_SESSION['student'] = $stdId;
        echo "<div class='alert alert-success'>"."تم تسجيل الدخول بنجاح سيتم تحويلك الي لوحة التحكم  "."</div>";
        header("REFRESH:3;URL=../students/");

    }else {
        echo "<div class='alert alert-danger'>"."اسم المستخدم او كلمة المرور خطأ  "."</div>";
        header("REFRESH:3;URL=../login-student.php");

    }
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