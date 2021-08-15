<?php
include("db_connection.php");
$cutting_id=$_POST['cutting_id'];
$tree_id=$_POST['tree_id'];
$total_trees=$_POST['total_trees'];
$cutting_date=$_POST['cutting_date'];

$sql=$conn->prepare("UPDATE cutting SET tree_id=?,total_trees=?,cutting_date=? WHERE cutting_id=?");
$sql->bind_param("sssi",$tree_id,$total_trees,$cutting_date,$cutting_id);
if($sql->execute())
{
    echo"<script type='text/Javascript'>
    alert('Update Successfully');
    window.location='cutting_view.php';
    </script>";  
    #code...
}
else
{
    echo"<script type='text/Javascript'>
    alert('Not Updated');
    window.location='cutting_view.php';
    </script>";
}
?>