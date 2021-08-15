<?php
include('db_connection.php');

$bio_name =$_POST['bio_name'];
$bio_wood =$_POST['bio_wood'];
$bio_drylf =$_POST['bio_drylf'];
$bio_rawlf =$_POST['bio_rawlf'];
$bio_grass =$_POST['bio_grass'];
$bio_sign =$_POST['bio_sign'];



$sql = "INSERT INTO biomass VALUES (null,'$bio_name','$bio_wood','$bio_drylf','$bio_rawlf','$bio_grass','$bio_sign')";
mysqli_query($conn,$sql);



?>
<script>
alert("values are inserted");
document.location="biomass_view.php";
</script>