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
    <!-- Bootstrap -->
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="//cdn.datatables.net/1.13.2/css/jquery.dataTables.min.css">

    <!-- Fonts -->
    <link rel="stylesheet" href="fonts/cairo.css">
    <style>

    </style>
    <?php
session_start();
error_reporting(0);
$username = $_SESSION['admin'];
if(!isset($username)) {
    echo "<div class='alert alert-danger'>"."دخولك غير مصرح به "."</div>";
    header("REFRESH:3;URL=../login-admin.php");
}else {
   



?>
</head>

    

<nav class="navbar navbar-expand-lg bg-light">
 <div class="container-fluid">

    <a href="" class="navbar-brand">العلمية لإداراة شئون الطلاب</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
      <a>
   <?php
         session_start();
         error_reporting(0);
$username = $_SESSION['teacher'];
include '../include/config.php';
$sql = "SELECT * from teacher WHERE username='$username'";
$result = mysqli_query($conn, $sql);
while($row = mysqli_fetch_assoc($result)) {
     $username = $row['name'];
     echo $username;
}

   ?>
   </a>
      </ul>
                
              </div>

        </div>

          </nav>



<div class="dash-tools">
    
    <ul>
                <li >
                    <a href="index.php">
                        الرئيسية
                    </a>
                    <span><i class="fa-solid fa-house"></i></span>
     
            
            <li>
                    <a href="add_subject.php">
                        إضافة مواد دراسية
                    </a>
                    <span><i class="fa-solid fa-book"></i></span>
                </li>
                <li>
                    <a href="add_result.php">
                        إضافة نتائج دراسية
                    </a>
                    <span><i class="fa-solid fa-square-poll-vertical"></i></span>
                </li>
                <li>
                    <a href="edit_result.php">
                        تعديل النتائج الدراسية
                    </a>
                    <span><i class="fa-solid fa-pen-to-square"></i></span>
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