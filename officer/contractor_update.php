<?php
include("db_connection.php");
$contractor_id=$_POST['contractor_id'];
$contractor_name=$_POST['contractor_name'];
$contractor_code=$_POST['contractor_code'];
$contractor_adress=$_POST['contractor_adress'];
$contractor_city=$_POST['contractor_city'];
$contractor_email=$_POST['contractor_email'];
$contractor_contact=$_POST['contractor_contact'];

$sql=$conn->prepare("UPDATE contractor SET contractor_name=?,contractor_code=?,contractor_adress=?,contractor_city=?,contractor_email=?,contractor_contact=? WHERE contractor_id=?");
$sql->bind_param("ssssssi",$contractor_name,$contractor_code,$contractor_adress,$contractor_city,$contractor_email,$contractor_contact,$contractor_id);
if($sql->execute())
{
    echo"<script type='text/Javascript'>
    alert('Update Successfully');
    window.location='contractor_view.php';
    </script>";  
    #code...
}
else
{
    echo"<script type='text/Javascript'>
    alert('Not Updated');
    window.location='contractor_view.php';
    </script>";
}
?>