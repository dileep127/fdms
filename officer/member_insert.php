<?php
include('db_connection.php');

$fam_id =$_POST['fam_id'];
$mem_name=$_POST['mem_name'];
$mem_age =$_POST['mem_age'];
$mem_gender =$_POST['mem_gender'];
$mem_relation =$_POST['mem_relation'];




$sql = "INSERT INTO member VALUES (null,'$fam_id','$mem_name','$mem_age','$mem_gender','$mem_relation')";
mysqli_query($conn,$sql);



?>
<script>
alert("values are inserted");
document.location="family_view.php";
</script>