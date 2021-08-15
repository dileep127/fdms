<?php
include("db_connection.php");
$stove_id=$_POST['stove_id'];
$stove_name =$_POST['stove_name'];
$stove_type =$_POST['stove_type'];
$stove_date =$_POST['stove_date'];
$stove_sign =$_POST['stove_sign'];







$sql=$conn->prepare("UPDATE stove SET stove_name=?,stove_type=?,stove_date=?,stove_sign=? WHERE stove_id=?");
$sql->bind_param("ssssi",$stove_name,$stove_type,$stove_date,$stove_sign,$stove_id);
if($sql->execute())
{
    echo"<script type='text/Javascript'>
    alert('Update Successfully');
    window.location='stove_view.php';
    </script>";  
    #code...
}
else
{
    echo"<script type='text/Javascript'>
    alert('Not Updated');
    window.location='stove_view.php';
    </script>";
}
?>