<?php 
include '../include/header.php';
?>
<?php
session_start();
error_reporting(0);
$username = $_SESSION['admin'];
if(!isset($username)) {
    header("REFRESH:3;URL=../login-admin.php");
}else {


?>
<?php 
include '../../include/config.php';

$send_btn = $_POST['send_btn'];


if(isset($send_btn)) {
   $step=$_POST['step'];
    $subject=$_POST['subject'];

    $sql = "INSERT into subjects (step,subject)
    VALUES('$step','$subject')";
    $result = mysqli_query($conn,$sql);
    echo "<div class='alert alert-success'>"."تمت اضافة المادة بنجاح "."</div>";
  
}




?>
<body>
<div class="form-studnts">
<form action="" method="post" enctype="multipart/form-data">
    <h5>اضافة مواد دراسية</h5><br>
    <div class="form-group">
        <label for=""> الصف</label>
        <select name="step" id="" class="form-control">
            <option value="أولي">أولي</option>
            <option value="ثانية">ثانية</option>
            <option value="ثالثة">ثالثة</option>
            <option value="رابعة">رابعة</option>
            <option value="خامسة">خامسة</option>

        </select>
    </div>
    <div class="form-group">
        <label for=""> اسم المادة</label>
        <input type="text" class="form-control"  name="subject" required>
    </div>
   
    <button type="submit" class="btn-custom" name="send_btn">تسجيل</button>

</form>
</div>
<?php

}
?>
<!-- Bootstrap  -->
<script src="js/bootstrap.js"></script>
<script src="https://kit.fontawesome.com/c41dedb697.js" crossorigin="anonymous"></script>

</body>
</html>