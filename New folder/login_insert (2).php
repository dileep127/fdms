<?php
include('db_connection.php');
$username=$_POST['username'];
$password=$_POST['password'];


$sql = "INSERT INTO login VALUES ('$username','$password')";
mysqli_query($conn,$sql);



?>
<script>
alert("values are inserted");
document.location="complaint.php";
</script>