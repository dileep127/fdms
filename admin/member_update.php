<?php
include("db_connection.php");
$mem_id =$_POST['mem_id'];
$mem_name =$_POST['mem_name'];
$fam_id =$_POST['fam_id'];
$mem_age =$_POST['mem_age'];
$mem_gender =$_POST['mem_gender'];
$mem_relation =$_POST['mem_relation'];


$sql=$conn->prepare("UPDATE member SET fam_id=?,mem_age=?,mem_gender=?,mem_relation=? WHERE mem_id=?");
$sql->bind_param("isssi",$fam_id,$mem_name,$mem_age,$mem_gender,$mem_relation,$mem_id);
if($sql->execute())
{
    echo"<script type='text/Javascript'>
    alert('Update Successfully');
    window.location='family_view..php';
    </script>";  
    #code...
}
else
{
    echo"<script type='text/Javascript'>
    alert('Not Updated');
    window.location='family_view.php';
    </script>";
}
?>