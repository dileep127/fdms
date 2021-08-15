<?php
include('db_connection.php');

$contractor_name=$_POST['contractor_name'];
$contractor_code=$_POST['contractor_code'];
$contractor_adress=$_POST['contractor_adress'];
$contractor_city=$_POST['contractor_city'];
$contractor_email=$_POST['contractor_email'];
$contractor_contact=$_POST['contractor_contact'];







$sql = "INSERT INTO contractor VALUES (null,'$contractor_name','$contractor_code','$contractor_adress','$contractor_city','$contractor_email','$contractor_contact')";
mysqli_query($conn,$sql);



?>
<script>
alert("values are inserted");
document.location="contractor_view.php";
</script>