<?php
include("db_connection.php");

$hydra_id=$_POST['hydra_id'];
$hydra_well=$_POST['hydra_well'];
$hydra_sector=$_POST['hydra_sector'];
$hydra_village=$_POST['hydra_village'];
$hydra_date=$_POST['hydra_date'];
$hydra_bore=$_POST['hydra_bore'];
$hydra_level=$_POST['hydra_level'];
$hydra_quantity=$_POST['hydra_quantity'];
$hydra_sign=$_POST['hydra_sign'];





$sql=$conn->prepare("UPDATE hydra SET hydra_well=?,hydra_sector=?,hydra_village=?,hydra_date=?,hydra_bore=?,hydra_level=?,hydra_quantity=?,hydra_sign=? WHERE hydra_id=?");
$sql->bind_param("ssssssssi",$hydra_well,$hydra_sector,$hydra_village,$hydra_date,$hydra_bore,$hydra_level,$hydra_quantity,$hydra_sign,$hydra_id);
if($sql->execute())
{
    echo"<script type='text/Javascript'>
    alert('Update Successfully');
    window.location='hydra_view.php';
    </script>";  
    #code...
}
else
{
    echo"<script type='text/Javascript'>
    alert('Not Updated');
    window.location='hydra_view.php';
    </script>";
}
?>