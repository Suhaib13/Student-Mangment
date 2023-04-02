<?php
include '../include/header.php';
include '../include/config.php';
 $id=$_GET['id'];
$send_btn=$_POST['send_btn'];
 $stdName=$_POST['stdName'];
 $password=sha1($_POST['password']);
 $stdName=$_POST['stdName'];
 $stdTel=$_POST['stdTel'];
 $stdAdr=$_POST['stdAdr'];
 $stdMail=$_POST['stdMail'];
 $stdId=$_POST['stdId'];
 if(isset($send_btn)) {
 $sql = "UPDATE `students` SET `stdName`='$stdName',`stdTel`='$stdTel',`stdAdr`='$stdAdr',`stdMail`='$stdMail',`stdId`='$stdId',`password`='$password' WHERE id='$id'";
$result= mysqli_query($conn, $sql);
echo "<div class='alert alert-success'>"."تمت  تحديث البيانات بنجاح "."</div>";
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>تعديل بيانات الطلاب</title>
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/edit_std.css">
</head>
<body>
<div class="form-studnts">
    <?php
     $sql = "SELECT * from students WHERE id='$id'";
     $result = mysqli_query($conn,$sql);
($row = mysqli_fetch_assoc ($result)) ;
    ?>

<form action="" method="post" enctype="multipart/form-data">
    <h5>تعديل بيانات طالب </h5><br>
    <input type="hidden" class="form-control" value="<?php echo $id;?>" name="stdName" required>
    <div class="form-group">
        <label for="">اسم الطالب</label>
        <input type="text" class="form-control" value="<?php echo $row['stdName'];?>" name="stdName" required>
    </div>
    <div class="form-group">
        <label for=""> رقم الهاتف</label>
        <input type="tel" class="form-control" value="<?php echo $row['stdTel'];?>"  name="stdTel" required>
    </div>
    <div class="form-group">
        <label for="">العنوان</label>
        <input type="text" class="form-control" value="<?php echo $row['stdAdr'];?>" name="stdAdr" required>
    </div>
    <div class="form-group">
        <label for="">البريد الالكتروني</label>
        <input type="email" class="form-control" value="<?php echo $row['stdMail'];?>" name="stdMail" required>
    </div>
    <div class="form-group">
        <label for="">الرقم القومي</label>
        <input type="number" class="form-control" value="<?php echo $row['stdId'];?>" name="stdId" required>
    </div>
    <div class="form-group">
        <label for="">كلمة السر</label>
        <input type="password" class="form-control"value="<?php echo $password;?>" name="password" required>
    </div>
     <!-- <div class="form-group">
        <label for="">رفع صورة الطالب</label>
        <input type="file"  accept="image/*" class="form-control" name="img_std" required>
      
    </div> -->
    <button type="submit" class="btn-custom" name="send_btn">تسجيل</button>
</form>

</div>
<script src="js/bootstrap.js"></script>
<script src="https://code.jquery.com/jquery-3.6.3.min.js" integrity="sha256-pvPw+upLPUjgMXY0G+8O0xUf+/Im1MZjXxxgOcBQBXU=" crossorigin="anonymous"></script>
<script src="//cdn.datatables.net/1.13.2/js/jquery.dataTables.min.js"></script>
<script src="https://kit.fontawesome.com/c41dedb697.js" crossorigin="anonymous"></script>
</body>
</html>