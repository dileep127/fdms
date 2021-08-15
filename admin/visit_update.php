<?php
include("db_connection.php");
$visit_id=$_POST['visit_id'];
$visit_name =$_POST['visit_name'];
$visit_date =$_POST['visit_date'];
$visit_discription =$_POST['visit_discription'];
$visit_sign =$_POST['visit_sign'];




$sql=$conn->prepare("UPDATE visit SET visit_name=?,visit_date=?,visit_discription=?,visit_sign=? WHERE visit_id=?");
$sql->bind_param("ssssi",$visit_name,$visit_date,$visit_discription,$visit_sign,$visit_id);
if($sql->execute())
{
    echo"<script type='text/Javascript'>
    alert('Update Successfully');
    window.location='visit_view.php';
    </script>";  
    #code...
}
else
{
    echo"<script type='text/Javascript'>
    alert('Not Updated');
    window.location='visit_view.php';
    </script>";
}
?>