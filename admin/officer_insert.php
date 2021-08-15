<?php
include('db_connection.php');

$o_fullname =$_POST['o_fullname'];
$o_designation =$_POST['o_designation'];
$o_dob =$_POST['o_dob'];
$o_gender =$_POST['o_gender'];
$o_adress =$_POST['o_adress'];
$o_code =$_POST['o_code'];
$o_contact =$_POST['o_contact'];
$o_email =$_POST['o_email'];



$o_photo=$_FILES['o_photo']['name'];
$tmp_location=$_FILES['o_photo']['tmp_name'];
$target="photo/".$o_photo;
move_uploaded_file($tmp_location,$target);


$sql = "INSERT INTO officer VALUES (null,'$o_fullname','$o_designation','$o_dob','$o_gender','$o_adress','$o_code','$o_contact','$o_email','$o_photo')";
mysqli_query($conn,$sql);

$sql1 = "INSERT INTO login VALUES (null,'$o_email','123123','officer','Enter Your Mobile','$o_contact','active')";
mysqli_query($conn,$sql1);



?>
<script>
alert("values are inserted");
document.location="officer_view.php";
</script>