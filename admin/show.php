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
include '../include/config.php';

$send_btn = $_POST['send_btn'];


if(isset($send_btn)) {
   $show=$_POST['show'];

    $sql = "UPDATE `results` SET `show`='$show' WHERE 1";
    $result = mysqli_query($conn,$sql);
    echo "<div class='alert alert-success'>"."تمت  بنجاح "."</div>";
  
}




?>
<body>
<div class="form-studnts">
<form action="" method="post">
    <h5>اضافة مواد دراسية</h5><br>
    <div class="form-group">
        <label for=""> الصف</label>
        <select name="show" id="" class="form-control">
            <option value="حجب">حجب</option>
            <option value="عرض">عرض</option>
         

        </select>
    </div>

   
    <button type="submit" class="btn-custom" name="send_btn">ارسال</button>

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