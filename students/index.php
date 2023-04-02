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
<body>


<div class="alert alert-warning">
    مرحبا بك في لوحة التحكم الرئيسية
</div>

<!-- Bootstrap  -->
<script src="js/bootstrap.js"></script>
<script src="https://kit.fontawesome.com/c41dedb697.js" crossorigin="anonymous"></script>

</body>
</html>
<?php 
}

?>
