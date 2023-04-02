<?php
include '../include/config.php';

$username=$_POST['username'];

$password=sha1($_POST['password']);

if(empty($username) || empty($password) ) {
    echo "<div class='alert alert-danger'>"."الرجاء ملئ البيانات"."</div>";
    header("REFRESH:3;URL=../login-teacher.php");
}else {
    $sql = "SELECT * from teacher WHERE username='$username' AND password='$password'";
    $result = mysqli_query($conn, $sql);
    $count = mysqli_num_rows($result);

    if($count > 0) {
        session_start();
        $_SESSION['teacher'] = $username;
        echo "<div class='alert alert-success'>"."تم تسجيل الدخول بنجاح سيتم تحويلك الي لوحة التحكم  "."</div>";
        header("REFRESH:3;URL=../teacher/");

    }else {
        echo "<div class='alert alert-danger'>"."اسم المستخدم او كلمة المرور خطأ  "."</div>";
        header("REFRESH:3;URL=../login-teacher.php");

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