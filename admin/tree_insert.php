<?php
include('db_connection.php');
include('6_function.php');

$tree_name=$_POST['tree_name'];
$tree_discription=$_POST['tree_discription'];


$tree_photo=$_FILES['tree_photo']['name'];
$tmp_location=$_FILES['tree_photo']['tmp_name'];
$target="photo/".$tree_photo;
move_uploaded_file($tmp_location,$target);






$sql = "INSERT INTO trees VALUES (null,'$tree_name','$tree_discription','$tree_photo')";
mysqli_query($conn,$sql);



?>
<script>
alert("values are inserted");
document.location="tree_view.php";
</script>