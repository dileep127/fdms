<?php
include("db_connection.php");
$o_id=$_POST['o_id'];
$o_fullname=$_POST['o_fullname'];
$o_designation=$_POST['o_designation'];
$o_dob=$_POST['o_dob'];
$o_gender=$_POST['o_gender'];
$o_adress=$_POST['o_adress'];
$o_code=$_POST['o_code'];
$o_contact=$_POST['o_contact'];
$o_email=$_POST['o_email'];

$o_photo=$_FILES['o_photo']['name'];
$tmp_location=$_FILES['o_photo']['tmp_name'];
$target="photo/".$o_photo;
move_uploaded_file($tmp_location,$target);







$sql=$conn->prepare("UPDATE officer SET o_fullname=?,o_designation=?,o_dob=?,o_gender=?,o_adress=?,o_code=?,o_contact=?,o_email=?,o_photo=? WHERE o_id=?");
$sql->bind_param("sssssssssi",$o_fullname,$o_designation,$o_dob,$o_gender,$o_adress,$o_code,$o_contact,$o_email,$o_photo,$o_id);
if($sql->execute())
{
    echo"<script type='text/Javascript'>
    alert('Update Successfully');
    window.location='officer_view.php';
    </script>";  
    #code...
}
else
{
    echo"<script type='text/Javascript'>
    alert('Not Updated');
    window.location='officer_view.php';
    </script>";
}
?>