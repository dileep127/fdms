<?php
include('db_connection.php');


$animal_name =$_POST['animal_name'];
$animal_code =$_POST['animal_code'];
$animal_age =$_POST['animal_age'];
$animal_information =$_POST['animal_information'];



$animal_image=$_FILES['animal_image']['name'];
$tmp_location=$_FILES['animal_image']['tmp_name'];
$target="photo/".$animal_image;
move_uploaded_file($tmp_location,$target);



$sql = "INSERT INTO wildlife VALUES (null,'$animal_name','$animal_code','$animal_age','$animal_information','$animal_image')";
mysqli_query($conn,$sql);



?>
<script>
alert("values are inserted");
document.location="wildlife_view.php";
</script>