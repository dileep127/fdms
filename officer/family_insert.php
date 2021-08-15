<?php
include('db_connection.php');

$fam_member_code =$_POST['fam_member_code'];
$fam_village =$_POST['fam_village'];



$sql = "INSERT INTO family VALUES (null,'$fam_member_code','$fam_village')";
mysqli_query($conn,$sql);



?>
<script>
alert("values are inserted");
document.location="family_view.php";
</script>