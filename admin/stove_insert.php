<?php
include('db_connection.php');

$stove_name =$_POST['stove_name'];
$stove_type =$_POST['stove_type'];
$stove_date =$_POST['stove_date'];
$stove_sign =$_POST['stove_sign'];


$sql = "INSERT INTO stove VALUES (null,'$stove_name','$stove_type','$stove_date','$stove_sign')";
mysqli_query($conn,$sql);



?>
<script>
alert("values are inserted");
document.location="stove_view.php";
</script>