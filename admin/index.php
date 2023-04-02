<?php 
include '../include/header.php';
?>

<?php
session_start();
// error_reporting(0);
$username = $_SESSION['admin'];
if(!isset($username)) {

 
    header("REFRESH:3;URL=../login-admin.php");

}else {


?>
<body>


<div class="alert alert-warning">
    مرحبا بك في لوحة التحكم الرئيسية
</div>
<?php

}
?>
<!-- Bootstrap  -->
<script src="js/bootstrap.js"></script>
<script src="https://kit.fontawesome.com/c41dedb697.js" crossorigin="anonymous"></script>

</body>
</html>