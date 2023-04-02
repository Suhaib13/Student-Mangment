<?php
session_start();
session_unset();
session_destroy();

echo "<div class='alert alert-warning'>"."تم تسجيل الخروج بنجاح"."</div>";
header("REFRESH:3;URL=../../../../../Student Mangment");

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>logout</title>
    <link rel="stylesheet" href="../css/bootstrap.css">

</head>
<body>
    
</body>
</html>

