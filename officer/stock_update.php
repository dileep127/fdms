<?php
include("db_connection.php");
$stock_id=$_POST['stock_id'];
$tree_id=$_POST['tree_id'];
$tree_stock=$_POST['tree_stock'];
$total_trees=$_POST['total_trees'];
$cutting_date=$_POST['cutting_date'];

$sql=$conn->prepare("UPDATE stock SET tree_id=?,tree_stock=? WHERE stock_id=?");
$sql->bind_param("ssi",$tree_id,$tree_stock,$stock_id);
if($sql->execute())
{
    echo"<script type='text/Javascript'>
    alert('Update Successfully');
    window.location='stock_view.php';
    </script>";  
    #code...
}
else
{
    echo"<script type='text/Javascript'>
    alert('Not Updated');
    window.location='stock_view.php';
    </script>";
}
?>