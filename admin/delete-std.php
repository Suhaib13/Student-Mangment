<?php
include '../include/config.php';
error_reporting(0);
$id=$_GET['id'];
$yes=$_POST['yes'];
$no=$_POST['no'];
$sql = "SELECT * from students WHERE id = '$id'";
$result = mysqli_query($conn, $sql);
$row = mysqli_fetch_assoc($result);

if(isset($yes)) {
$sql = "DELETE from students WHERE id='$id'";
$result = mysqli_query($conn, $sql);
echo "<div class='alert alert-danger'>"."تم الحذف بنجاح "."</div>";
header("REFRESH:3;URL=viwe_std.php");
}
if(isset($no)) {
    echo "<div class='alert alert-success'>"."تم الغاء الحذف بنجاح "."</div>";
    header("REFRESH:3;URL=viwe_std.php");
}



?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/style-admin.css">
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/delete.css">
</head>
<body>
<div class="form-login">
    <h5>هل انت متأكد من حذف بيانات الطالب <?php echo $row['stdName']?></h5>
    <form action="" method="post">
    <button type="submit" class="btn btn-warning" name="yes">نعم</button>
    </form>
    <form action="" method="post">
    <button type="submit" class="btn btn-danger" name="no">إلغاء</button>
    </form>

          </div></body>
</html>