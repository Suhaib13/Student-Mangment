<?php 
include 'include/header.php';
include '../include/config.php';

                $sql = "SELECT * from students";
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
$username = $_SESSION['teacher'];
if(!isset($username)) {
    echo "<div class='alert alert-danger'>"."دخولك غير مصرح به "."</div>";
    header("REFRESH:3;URL=../login-teacher.php");
}else {


?>
</head>


<body>

<table class="table table-borderd" id="myTable" dir="rtl">

                <thead class="col">
                
                    <th>كود الطالب</th>
                    <th>اسم الطالب</th>
                    <th>الرقم القومي </th>
                    <th> اضافة نتيجة </th>


                </thead>
                <?php
                
                while($row = mysqli_fetch_assoc ($result)) {
                ?>
                <tbody>
                <tr>
                    <td><?php echo $row['id'];?></td>
                    <td><?php echo $row['stdName'];?></td>
                    <td><?php echo $row['stdId'];?></td>
                    <td>
                    <!-- <form action="result.php?id=<//?= $row['id'];?>" method="get">
                        <input type="hidden" value="<//?=$row['id'];?>">
                    </form>-->
                    <button type="submit" class="btn btn-light" >
                        <a href="result.php?id=<?php echo $row['id'];?>">
                        اضافة
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