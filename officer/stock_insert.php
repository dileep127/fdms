<?php
include('db_connection.php');

$tree_id=$_POST['tree_id'];
$tree_stock=$_POST['tree_stock'];







$sql = "INSERT INTO stock VALUES (null,'$tree_id','$tree_stock')";
mysqli_query($conn,$sql);



?>
<script>
alert("values are inserted");
document.location="stock_view.php";
</script>