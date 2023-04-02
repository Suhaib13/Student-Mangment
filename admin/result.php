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
   $code=$_POST['code'];
    $name=$_POST['name'];
    $step=$_POST['step'];
    $sub=$_POST['sub'];
    $res=$_POST['res'];
    $apprec=$_POST['apprec'];

    $sql = "INSERT into results (code,name,step,sub,res,apprec)
    VALUES('$code','$name','$step','$sub','$res','$apprec')";
    $result = mysqli_query($conn,$sql);
    echo "<div class='alert alert-success'>"."تمت اضافة النتيجة بنجاح "."</div>";
  
}




?>
<body>
<?php
include '../include/config.php';
$id=$_GET['id'];

      $sql = "SELECT * from students WHERE id='$id'";
      $result = mysqli_query($conn,$sql);
                
while($row = mysqli_fetch_assoc ($result)) {
            
     
?>
<div class="form-studnts">
<form action="" method="post" >
    <h5>اضافة نتيجة </h5><br>
    <div class="form-group">
        <label for=""> كود الطالب</label>
        <input type="text" class="form-control" value="<?php echo $row['id']?>"  name="code" required readonly>
    </div>
    <div class="form-group">
        <label for=""> اسم الطالب</label>
        <input type="text" class="form-control" value="<?php echo $row['stdName']?>"  name="name" required readonly>
    </div>
    <div class="form-group">
        <label for=""> الصف</label>
        <select name="step"  class="form-control" >
            <option value="أولي">أولي</option>
            <option value="ثانية">ثانية</option>
            <option value="ثالثة">ثالثة</option>
            <option value="رابعة">رابعة</option>
            <option value="خامسة">خامسة</option>

        </select>
    </div>
    <div class="form-group">

        <label for=""> اسم المادة</label>
        <select name="sub"  class="form-control" >
        <?php
include '../include/config.php';

      $sql = "SELECT * from subjects";
      $result = mysqli_query($conn,$sql);
                
      while($row = mysqli_fetch_assoc ($result)) {
            
     
?>
            <option value="<?php echo $row['subject'];?>"><?php echo $row['subject'];?></option>
            <?php
   }
   ?>      
        </select>    </div>
        <div class="form-group">
        <label for=""> الدرجة </label>
        
        <input type="text" class="form-control"   name="res" required >
    </div>
    <div class="form-group">
        <label for=""> التقدير</label>
        <select name="apprec"  class="form-control" >
            <option value="ممتاز">ممتاز</option>
            <option value="جيد جدا">جيد جدا</option>
            <option value="جيد">جيد</option>
            <option value="مقبول">مقبول</option>
            <option value="ضعيف">ضعيف</option>
            <option value="ضعيف جدا">ضعيف جدا</option>

        </select>
    </div>
    <button type="submit" class="btn-custom" name="send_btn">تسجيل</button>

</form>
<?php
}

?>
</div>
<?php

}
?>
<!-- Bootstrap  -->
<script src="js/bootstrap.js"></script>
<script src="https://kit.fontawesome.com/c41dedb697.js" crossorigin="anonymous"></script>

</body>
</html>