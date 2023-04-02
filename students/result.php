<?php
include 'include/header.php';

?>

    <?php
session_start();
// error_reporting(0);
$stdId = $_SESSION['student'];
if(!isset($stdId)) {

 
    header("REFRESH:3;URL=../login-Student.php");

}else {


?>

<?php
         session_start();
$username = $_SESSION['student'];
include '../include/config.php';
$sql = "SELECT * from students WHERE stdId='$stdId'";
$qu = "SELECT * from show";
$result = mysqli_query($conn, $sql);
while($row = mysqli_fetch_assoc($result)) {
 
    $lam=$row['id'];



   ?> 


<body>
  
<div class="prof">  
<h3>النتائج الدراسية</h3>

<?php
   $code=$_POST['code'];

$sql2="SELECT * FROM results WHERE code = '$lam'";
   $result2 = mysqli_query($conn, $sql2);
$row2 = mysqli_fetch_assoc($result2);


?>
<?php
$sql2="SELECT * FROM results";
$result2 = mysqli_query($conn, $sql2);
$row2 = mysqli_fetch_assoc($result2);

?>
<?php
if(isset($row2['code']) == null) {
echo  '
<style>
.alert.alert-success {
    display : none;

}
table {
    display : none;

}
</style>
';
echo '<div class="alert alert-danger" id="lanos">لايوجد نتائج لعرضها</div>';

}
if($row2['show'] == 'حجب') {
    echo  '
    <style>
    .alert.alert-success {
        display : none;
    
    }
    #lanos {
        display : none;
    }
    table {
        display : none;
    
    }
    </style>
    ';
    echo '<div class="alert alert-danger">لم يتم عرض النتائج حتي الآن</div>';

}else {

   ?>



    <div class="alert alert-success"><h5><?php  echo $row2['step'] ;?></h5></div>
 
    <table class="table table-borderd table-hover" dir="rtl">
 
        <thead>
            <tr>
                <th>اسم الماده</th>
                <th>التقدير</th>
                <th>الدرجة</th>

            </tr>
        </thead>
        <?php
   $code=$_POST['code'];

$sql2="SELECT * FROM results WHERE code = '$lam'";
   $result2 = mysqli_query($conn, $sql2);
while($row2 = mysqli_fetch_assoc($result2)) {


   ?>
        <tbody>
            <tr>
                <td>
                    <?php echo $row2['sub']?></td>
                <td><?php echo $row2['apprec']?></td>
                <td><?php echo $row2['res']?></td>

            </tr>
        </tbody>
        <?php }?>
    </table>

<?php
}
?>


    <!-- <a><span>اسم الطالب:</span></a> -->
</div>


<?php }?>
     



<!-- Bootstrap  -->
<script src="js/bootstrap.js"></script>
<script src="https://kit.fontawesome.com/c41dedb697.js" crossorigin="anonymous"></script>
<?php

}
?>

</body>
</html>
