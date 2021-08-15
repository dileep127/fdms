<?php
include('db_connection.php');

$visit_name =$_POST['visit_name'];
$visit_date =$_POST['visit_date'];
$visit_discription =$_POST['visit_discription'];
$visit_sign =$_POST['visit_sign'];




$sql = "INSERT INTO visit VALUES (null,'$visit_name','$visit_date','$visit_discription','$visit_sign')";
mysqli_query($conn,$sql);



?>
<script>
alert("values are inserted");
document.location="visit_view.php";
</script>