<?php
include("db_connection.php");
$animal_id =$_POST['animal_id'];
$animal_name =$_POST['animal_name'];
$animal_code =$_POST['animal_code'];
$animal_age =$_POST['animal_age'];
$animal_information =$_POST['animal_information'];


$animal_image=$_FILES['animal_image']['name'];
$tmp_location=$_FILES['animal_image']['tmp_name'];
$target="photo/".$animal_image;
move_uploaded_file($tmp_location,$target);




$sql=$conn->prepare("UPDATE wildlife SET animal_name=?,animal_code=?,animal_age=?,animal_information=?,animal_image=? WHERE animal_id=?");
$sql->bind_param("sssssi",$animal_name,$animal_code,$animal_age,$animal_information,$animal_image,$animal_id);
if($sql->execute())
{
    echo"<script type='text/Javascript'>
    alert('Update Successfully');
    window.location='wildlife_view.php';
    </script>";  
    #code...
}
else
{
    echo"<script type='text/Javascript'>
    alert('Not Updated');
    window.location='wildlife_view.php';
    </script>";
}
?>