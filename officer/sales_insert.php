<?php
include('db_connection.php');

$contractor_id =$_POST['contractor_id'];
$tree_id =$_POST['tree_id'];
$tree_stock =$_POST['tree_stock'];
$sale_rate =$_POST['sale_rate'];
$sale_date =$_POST['sale_date'];



$sql = "INSERT INTO sales VALUES (null,'$contractor_id','$tree_id','$tree_stock','$sale_rate','$sale_date')";
mysqli_query($conn,$sql);



?>
<script>
alert("values are inserted");
document.location="sales_view.php";
</script>