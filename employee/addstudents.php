<?php 
include 'include/header.php';
?>
<?php
session_start();
error_reporting(0);
$username = $_SESSION['employee'];
if(!isset($username)) {
    header("REFRESH:3;URL=../login-employee.php");
}else {


?>

<body>
<div class="form-studnts">
<form action="dinmic/add_student.php" method="post" enctype="multipart/form-data">
    <h5>اضافة طالب جديد</h5><br>
    <div class="form-group">
        <label for="">اسم الطالب</label>
        <input type="text" class="form-control" name="stdName" required>
    </div>
    <div class="form-group">
        <label for=""> رقم الهاتف</label>
        <input type="tel" class="form-control"  name="stdTel" required>
    </div>
    <div class="form-group">
        <label for="">العنوان</label>
        <input type="text" class="form-control" name="stdAdr" required>
    </div>
    <div class="form-group">
        <label for="">البريد الالكتروني</label>
        <input type="email" class="form-control" name="stdMail" required>
    </div>
    <div class="form-group">
        <label for="">الرقم القومي</label>
        <input type="number" class="form-control" name="stdId" required>
    </div>
    <div class="form-group">
        <label for="">كلمة السر</label>
        <input type="text" class="form-control" name="password" required>
    </div>
     <div class="form-group">
        <label for="">رفع صورة الطالب</label>
        <input type="file"  accept="image/*" class="form-control" name="img_std" required>
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