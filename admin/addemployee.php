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

<body>
<div class="form-studnts">
<form action="dinmic/add_employee.php" method="post" enctype="multipart/form-data">
    <h5>اضافة موظف جديد</h5><br>
    <div class="form-group">
        <label for="">اسم الموظف</label>
        <input type="text" class="form-control" name="name" required>
    </div>
    <div class="form-group">
        <label for="">اسم المستخدم</label>
        <input type="text" class="form-control"  name="username" required>
    </div>
    <div class="form-group">
        <label for="">كلمة المرور</label>
        <input type="password" class="form-control" name="password" required>
    </div>
    <div class="form-group">
        <label for="">الوظيفة</label>
        <input type="text" class="form-control" name="job" required>
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