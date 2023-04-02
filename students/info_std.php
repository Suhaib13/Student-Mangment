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
$result = mysqli_query($conn, $sql);
while($row = mysqli_fetch_assoc($result)) {
 


   ?> 


<body>
  
<div class="prof">  
    <h3>المعلومات الأساسية للطالب</h3>
    <a><span>كود الطالب:</span></a>&nbsp;
    <a><?php   echo $ns = $row['id']."<br><br>"; ?></a>
    <a><span>اسم الطالب:</span></a>&nbsp;
    <a><?php   echo $ns = $row['stdName']."<br><br>"; ?></a>
    <a><span>رقم هاتف الطالب:</span></a>&nbsp;
    <a><?php   echo $ns = $row['stdTel']."<br><br>"; ?></a>
    <a><span>عنوان الطالب:</span></a>&nbsp;
    <a><?php   echo $ns = $row['stdAdr']."<br><br>"; ?></a>
 
    <a><span>الرقم القومي:</span></a>&nbsp;
    <a><?php   echo $ns = $row['stdId']; ?></a> 



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
