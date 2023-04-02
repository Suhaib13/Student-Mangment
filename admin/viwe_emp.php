<?php 
include '../include/header.php';
include '../include/config.php';

                $sql = "SELECT * from employee";
                $result = mysqli_query($conn,$sql);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="//cdn.datatables.net/1.13.2/css/jquery.dataTables.min.css">
    <title>Document</title>
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
<style>
    body {
        overflow-x:hidden;
        overflow-y: scroll;
}
</style>

<body>

<table class="table table-borderd" id="myTable" dir="rtl">

                <thead class="col">
                
                    <th>كود العضو</th>
                    <th>اسم العضو</th>
                    <th>اسم المستخدم</th>
                    <th>الوظيفة</th>
                    <th>تعديل</th>
                    <th>حذف</th>


                </thead>
                <?php
                
                while($row = mysqli_fetch_assoc ($result)) {
                ?>
                <tbody>
                <tr>
                    <td><?php echo $row['id'];?></td>
                    <td><?php echo $row['name'];?></td>
                    <td><?php echo $row['username'];?></td>
                    <td><?php echo $row['job'];?></td>
                 
                    <td>
                            <button type="submit" class="btn btn-success">
                                <a href="edit-std.php?id=<?=$row['id']?>">
                                تعديل
                                </a>
                            </button>
                    </td>
                    <td>
                            <button type="submit" class="btn btn-danger">
                            <a href="delete-std.php?id=<?=$row['id']?>">
                                حذف
                           </a>
                            </button>
                      
                    </td>


                </tr>
                </tbody>
                <?php }?>
            </table>
           

<?php

}
?>
<!-- Bootstrap  -->

<script src="js/bootstrap.js"></script>
<script src="https://code.jquery.com/jquery-3.6.3.min.js" integrity="sha256-pvPw+upLPUjgMXY0G+8O0xUf+/Im1MZjXxxgOcBQBXU=" crossorigin="anonymous"></script>
<script src="//cdn.datatables.net/1.13.2/js/jquery.dataTables.min.js"></script>
<script src="https://kit.fontawesome.com/c41dedb697.js" crossorigin="anonymous"></script>
<script type="text/javascript">
    $(document).ready( function () {
    $('#myTable').DataTable();
} );
</script>
</body>
</html>