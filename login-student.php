<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>تسجيل دخول الاداراة</title>
    <!-- Reset from Style -->
    <link rel="stylesheet" href="css/rest.css">
    <!-- Css style -->
    <link rel="stylesheet" href="css/login-admin.css">
    <!-- Bootstrap -->
    <link rel="stylesheet" href="css/bootstrap.css">
    <!-- Fonts -->
    <link rel="stylesheet" href="fonts/cairo.css">
</head>
<body>



<div class="form-login">
    <h5>تسجيل دخول الطالب</h5>
    <form action="dinmic/test-login-stdu.php" method="post">
        <div class="form-group">
        <label for="stdId">الرقم القومي</label>
        <input type="text" id="stdId"  name="stdId"class="form-control">
        </div>
        
        <div class="form-group">
        <label for="password">كلمة المرور</label>
        <input type="password" id="password" name ="password" class="form-control">
        </div>
        <button type="submit" class="btn-custom">دخول</button>
        
    </form>
          </div>
<!-- Bootstrap  -->
<script src="js/bootstrap.js"></script>
</body>
</html>