<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> لوحة تحكم الاداراة</title>
    <!-- Reset from Style -->
    <link rel="stylesheet" href="css/rest.css">
    <!-- Css style -->
    <link rel="stylesheet" href="css/style-admin.css">
    <link rel="stylesheet" href="css/info.css">
    <!-- Bootstrap -->
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="//cdn.datatables.net/1.13.2/css/jquery.dataTables.min.css">

    <!-- Fonts -->
    <link rel="stylesheet" href="fonts/cairo.css">
    <link href="https://fonts.googleapis.com/css2?family=Changa&display=swap" rel="stylesheet">


    <?php
session_start();
error_reporting(0);
$stdId = $_SESSION['student'];
if(!isset($stdId)) {
    echo "<div class='alert alert-danger'>"."دخولك غير مصرح به "."</div>";
    header("REFRESH:3;URL=../login-admin.php");
}else {
   



?>


</head>

    

<nav class="navbar navbar-expand-lg bg-light">
 <div class="container-fluid">

    <a href="" class="navbar-brand">لوحة تحكم الطلاب </a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
      <a>

   </a>
      </ul>
                
              </div>

        </div>

          </nav>



<div class="dash-tools">
<?php
         session_start();
         error_reporting(0);
$username = $_SESSION['student'];
include '../include/config.php';
$sql = "SELECT * from students WHERE stdId='$stdId'";
$result = mysqli_query($conn, $sql);
while($row = mysqli_fetch_assoc($result)) {
    $ns = $row['stdName'];

     

   ?>

    <ul>
 
<img src="http://127.0.0.1/student%20Mangment%20Train/students/images/<?php echo  $row['img_std'];?>" alt="">    <br>    

<?php 
echo $ns . "<br>";

?>    
     
<li >
                    <a href="index.php">
                        الرئيسية
                    </a>
                    <span><i class="fa-solid fa-house"></i></span>
                </li>
                
                <!-- <li  data-bs-toggle="collapse" href="#collapseExample" >
                    <a href="" class="">
                        الطلاب
                    </a>
                    <ul class="collapse" id="collapseExample">
                            <li >
                                <a href="addstudents.php">
                                    <span>اضافة طلاب جدد</span>
                                 </a>
                        </li>
                        <li >
                                <a href="../admin/viwe_std.php">
                                    <span>عرض الطلاب </span>
                                 </a>
                        </li>
                </li>
              
            </ul> -->
            <li>
                    <a href="info_std.php">
                        بيانات الطالب
                    </a>
                    <!-- <span><i class="fa-sharp fa-solid fa-right-from-bracket"></i></span> -->
                </li>
                <li>
                    <a href="result.php">
                        النتائج الدراسية
                    </a>
                    <span><i class="fa-solid fa-square-poll-vertical"></i></span>             
                </li>
            <li>
                    <a href="dinmic/logout.php">
                        خروج
                    </a>
                    <span><i class="fa-sharp fa-solid fa-right-from-bracket"></i></span>
                </li>
</ul>

           
</div>
</div>
</div>
<?php
}
?>
<?php
}
?>