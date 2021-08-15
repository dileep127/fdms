<?php
include('db_connection.php');
$cutting_id=$_POST['cutting_id'];
$tree_id=$_POST['tree_id'];
$total_trees=$_POST['total_trees'];
$cutting_date=$_POST['cutting_date'];







$sql = "INSERT INTO cutting VALUES ('$cutting_id','$tree_id','$total_trees','$cutting_date')";
mysqli_query($conn,$sql);



?>
<script>
alert("values are inserted");
document.location="cutting_view.php";
</script>