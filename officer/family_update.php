<?php
include("db_connection.php");
$fam_id=$_POST['fam_id'];
$fam_member_code =$_POST['fam_member_code'];
$fam_village =$_POST['fam_village'];







$sql=$conn->prepare("UPDATE family SET fam_member_code=?,fam_village=? WHERE fam_id=?");
$sql->bind_param("ssi",$fam_member_code,$fam_village,$fam_id);
if($sql->execute())
{
    echo"<script type='text/Javascript'>
    alert('Update Successfully');
    window.location='family_view.php';
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